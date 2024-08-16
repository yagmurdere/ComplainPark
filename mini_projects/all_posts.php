<?php

include 'components/connect.php';

// Hangi tablodan veri çekileceğini belirleme
if(isset($_GET['table']) && ($_GET['table'] == 'marmara' || $_GET['table'] == 'guneydogu' || $_GET['table'] == 'karadeniz'
|| $_GET['table'] == 'icanadolu' || $_GET['table'] == 'doguanadolu' || $_GET['table'] == 'ege' || $_GET['table'] == 'akdeniz')){
   $table = $_GET['table'];
}else{
   // Varsayılan olarak 'post' tablosunu kullan
   $table = 'marmara';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>TravettoTurkey!</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->
<?php include 'components/header.php'; ?>
<!-- header section ends -->

<!-- view all posts section starts  -->

<section class="all-posts">

   <div class="heading"><h1 style="text-transform:uppercase"><?php echo $table;?></h1></div>

   <div class="box-container">

   <?php
      $select_posts = $conn->prepare("SELECT * FROM `$table`");
      $select_posts->execute();
      if($select_posts->rowCount() > 0){
         while($fetch_post = $select_posts->fetch(PDO::FETCH_ASSOC)){

         $post_id = $fetch_post['id'];

         $review_table='review_'.$table;
         $count_reviews = $conn->prepare("SELECT * FROM `$review_table` WHERE post_id = ?");
         $count_reviews->execute([$post_id]);
         $total_reviews = $count_reviews->rowCount();
   ?>
   <div class="box">
      <img src="uploaded_files/<?= $fetch_post['image']; ?>" alt="" class="image">
      <h3 class="title"><?= $fetch_post['title']; ?></h3>
      <p class="total-reviews"><i class="fas fa-star"></i> <span><?= $total_reviews; ?></span></p>
      <a href="view_post.php?get_id=<?= $post_id;?>&table=<?=$table?>" class="inline-btn">view post</a>
   </div>
   <?php
      }
   }else{
      echo '<p class="empty">no posts added yet!</p>';
   }
   ?>

   </div>

</section>

<!-- view all posts section ends -->

<!-- sweetalert cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<?php include 'components/alers.php'; ?>

</body>
</html>