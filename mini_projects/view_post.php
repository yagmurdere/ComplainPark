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

   <div class="heading"><h1>Detaylar</h1> <a href="main.php" class="inline-option-btn" style="margin-top: 0;">Otoparklar</a></div>
   <?php
      // Tek bir otopark kaydını çek
      $select_post = $conn->prepare("SELECT * FROM `istpark` WHERE id = ? LIMIT 1");
      $select_post->execute([$get_id]);
      if ($select_post->rowCount() > 0) {
         $fetch_post = $select_post->fetch(PDO::FETCH_ASSOC);
   ?>
   <div class="row">
      <div class="col">
         
         <h3 class="title"><?= htmlspecialchars($fetch_post['name']); ?></h3>
         <p><?= $fetch_post['park_type']; ?></p>
      </div>
   </div>
   <?php
      } else {
         echo '<p class="empty">Otopark bulunamadı!</p>';
      }
   ?>

</section>

<!-- view posts section ends -->

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
