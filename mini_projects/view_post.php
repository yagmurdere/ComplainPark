<?php
include 'components/connect.php';

// Tablo adını doğrulayın (sadece complainpark tablosu mevcut)
$table = 'complainpark';

// Otopark ID'sini doğrulayın
if (isset($_GET['get_id'])) {
    $get_id = $_GET['get_id'];
} else {
    $get_id = '';
    echo "empty";
}

$reviews_table = 'review_istpark';

if (isset($_POST['delete_review'])) {
   $delete_id = $_POST['delete_id'];
   $delete_id = filter_var($delete_id, FILTER_SANITIZE_STRING);

   $verify_delete = $conn->prepare("SELECT * FROM `$reviews_table` WHERE id = ?");
   $verify_delete->execute([$delete_id]);

   if ($verify_delete->rowCount() > 0) {
       $delete_review = $conn->prepare("DELETE FROM `$reviews_table` WHERE id = ?");
       $delete_review->execute([$delete_id]);
       $success_msg[] = 'Review deleted!';
   } else {
       $warning_msg[] = 'Review already deleted!';
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Otopark Detayları</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->
<?php include 'components/header.php'; ?>
<!-- header section ends -->

<!-- view posts section starts  -->

<section class="view-post">

   <?php
      // Tek bir otopark kaydını çek
      $select_post = $conn->prepare("SELECT * FROM `istpark` WHERE id = ? LIMIT 1");
      $select_post->execute([$get_id]);
      $x = '';
      if ($select_post->rowCount() > 0) {
         $fetch_post = $select_post->fetch(PDO::FETCH_ASSOC);
         $x=$fetch_post['PARK_TYPE_ID'];

         // Calculate average rating and total reviews
         $total_ratings = 0;
         $rating_1 = 0;
         $rating_2 = 0;
         $rating_3 = 0;
         $rating_4 = 0;
         $rating_5 = 0;

         $select_ratings = $conn->prepare("SELECT * FROM `$reviews_table` WHERE post_id = ?");
         $select_ratings->execute([$fetch_post['ID']]);
         $total_reviews = $select_ratings->rowCount();

         while ($fetch_rating = $select_ratings->fetch(PDO::FETCH_ASSOC)) {
            $total_ratings += $fetch_rating['rating'];
            if ($fetch_rating['rating'] == 1) {
               $rating_1 += $fetch_rating['rating'];
            }
            if ($fetch_rating['rating'] == 2) {
               $rating_2 += $fetch_rating['rating'];
            }
            if ($fetch_rating['rating'] == 3) {
               $rating_3 += $fetch_rating['rating'];
            }
            if ($fetch_rating['rating'] == 4) {
               $rating_4 += $fetch_rating['rating'];
            }
            if ($fetch_rating['rating'] == 5) {
               $rating_5 += $fetch_rating['rating'];
            }
         }

         $average = ($total_reviews != 0) ? round($total_ratings / $total_reviews, 1) : 0;
   ?>
   <div class="row">
      <div class="col">
         
         <h3 class="title"><?= htmlspecialchars($fetch_post['PARK_NAME']); ?></h3>
         <p><?= $x ?></p><br>
         <iframe src="<?= $fetch_post['LOCATİON']; ?>" name="main_iframe" width="100%" height="450" style="border:4px darkcyan solid;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="col">
         <div class="flex">
            <div class="total-reviews">
            <?php if ($average == 1) { ?>
               <h3 style="color:var(--dark-turkuaz);"><span><?= $average; ?></span><span>☹</span></h3>
            <?php } else if ($average == 2 || $average == 3) { ?>
               <h3 style="color:var(--dark-orange);"><span><?= $average; ?></span><span>☹</span> </h3>
            <?php } else if ($average == 4 || $average == 5) { ?>
               <h3 style="color:var(--red);"><span><?= $average; ?></span><span>☹</span> </h3>
            <?php }; ?>
               <p><?= $total_reviews; ?> reviews</p>
            </div>
            <div class="total-ratings">
               <p><span>☹</span></i><span><?= $rating_5; ?></span></p>
               <p><span>☹</span></i><span><?= $rating_4; ?></span></p>
               <p><span>☹</span></i><span><?= $rating_3; ?></span></p>
               <p><span>☹</span></i><span><?= $rating_2; ?></span></p>
               <p><span>☹</span></i><span><?= $rating_1; ?></span></p>
            </div>
         </div>
      </div>
      <div class="col">
         <div class="flex">
         <h1>Park Capacity: <?= htmlspecialchars($fetch_post['CAPACITY_OF_PARK']); ?></h1>
         <h1>Working Hours: <?= htmlspecialchars($fetch_post['WORKING_TIME']); ?></h1>
         <h1>Location: <?= htmlspecialchars($fetch_post['COUNTY_NAME']); ?></h1>
         </div>
      </div>
   </div>

   <?php
      } else {
         echo '<p class="empty">Otopark bulunamadı!</p>';
      }
   ?>

</section>

<!-- view posts section ends -->

<!-- reviews section starts  -->

<section class="reviews-container">

   <div class="heading"><h1>Kullanıcı Yorumları</h1> <a href="add_review.php?get_id=<?= $get_id; ?>&table=<?= $table; ?>" class="inline-btn" style="margin-top: 0;">Yorum Ekle</a></div>

   <div class="box-container">

   <?php
      $select_reviews = $conn->prepare("SELECT * FROM `$reviews_table` WHERE post_id = ?");
      $select_reviews->execute([$get_id]);
      if ($select_reviews->rowCount() > 0) {
         while ($fetch_review = $select_reviews->fetch(PDO::FETCH_ASSOC)) {
   ?>
   <div class="box" <?php if ($fetch_review['user_id'] == $user_id) {echo 'style="order: -1;"';} ?>>
      <?php
         $select_user = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
         $select_user->execute([$fetch_review['user_id']]);
         while ($fetch_user = $select_user->fetch(PDO::FETCH_ASSOC)) {
      ?>
      <div class="user">
         <?php if ($fetch_user['image'] != '') { ?>
            <img src="uploaded_files/<?= $fetch_user['image']; ?>" alt="">
         <?php } else { ?>   
            <h3><?= substr($fetch_user['name'], 0, 1); ?></h3>
         <?php }; ?>   
         <div>
            <p><?= $fetch_user['name']; ?></p>
            <span><?= $fetch_review['date']; ?></span>
         </div>
      </div>
      <?php }; ?>
      <div class="ratings">
         <?php if ($fetch_review['rating'] == 1) { ?>
            <p style="background:var(--dark-turkuaz);"><span>☹</span><span><?= $fetch_review['rating']; ?></span></p>
         <?php } else if ($fetch_review['rating'] == 2 || $fetch_review['rating'] == 3) { ?>
            <p style="background:var(--dark-orange);"><span>☹</span> <span><?= $fetch_review['rating']; ?></span></p>
         <?php } else if ($fetch_review['rating'] == 4 || $fetch_review['rating'] == 5) { ?>
            <p style="background:var(--red);"><span>☹</span> <span><?= $fetch_review['rating']; ?></span></p>
         <?php }; ?>
      </div>
      <h3 class="title"><?= $fetch_review['title']; ?></h3>
      <?php if ($fetch_review['description'] != '') { ?>
         <p class="description"><?= $fetch_review['description']; ?></p>
      <?php }; ?>  
      <?php if ($fetch_review['image'] != '') { ?>
         <div class="review-image">
            <img src="uploaded_files/<?= $fetch_review['image']; ?>" alt="Review Image">
         </div>
      <?php }; ?>  
      <?php if ($fetch_review['user_id'] == $user_id) { ?>
         <form action="" method="post" class="flex-btn">
            <input type="hidden" name="delete_id" value="<?= $fetch_review['id']; ?>">
            <a href="update_review.php?get_id=<?= $fetch_review['id']; ?>&table=<?= $table; ?>" class="inline-option-btn">Yorumu Düzenle</a>
            <input type="submit" value="Yorumu Sil" class="inline-delete-btn" name="delete_review" onclick="return confirm('Bu yorumu silmek istediğinize emin misiniz?');">
         </form>
      <?php }; ?>   
   </div>
   <?php
         }
      } else {
         echo '<p class="empty">Henüz yorum eklenmedi!</p>';
      }
   ?>
   </div>

</section>

<!-- reviews section ends -->

<!-- sweetalert cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<?php include 'components/alers.php'; ?>

</body>
</html>