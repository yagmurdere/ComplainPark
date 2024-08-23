<?php

include 'components/connect.php';

if (isset($_GET['county'])) {
    $county = $_GET['county'];
} else {
    $county = '';
    echo "empty";
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Complain Park</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <style>
      .container {
            width: 80%; /* Genişlik ayarı, sayfanın genişliğine göre */
            max-width: 600px; /* Maksimum genişlik */
            margin:  auto; /* Ortalamak için */
            margin-top: 50px;
            padding: 20px; /* İç boşluk */
            border: 2px solid #000; /* Sınır ayarı */
            border-color: #0056b3;
            border-radius: 10px; /* Kenarları yuvarlama */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Gölgelendirme */
            text-align: center; /* Metni ortalamak için */
        }

        .container a {
            display: block; /* Her bir bağlantıyı blok yaparak alt alta dizilmesini sağlar */
            margin: 10px 0; /* Üst ve alt boşluk */
            text-decoration: none; /* Alt çizgiyi kaldır */
            color: #007bff; /* Bağlantı rengi */
            font-size: 18px; /* Yazı boyutu */
        }

        .container a:hover {
            text-decoration: underline; /* Üzerine gelindiğinde alt çizgi ekler */
            color:#ffec9e; /* Üzerine gelindiğinde renk değiştirir */
        }
   </style>
</head>
<body>
   
<!-- header section starts  -->
<?php include 'components/header.php'; ?>
<!-- header section ends -->
 <div class="container">
<?php
      // Tek bir otopark kaydını çek
      $select_posts = $conn->prepare("SELECT ID, PARK_NAME, COUNTY_NAME FROM `istpark` WHERE COUNTY_NAME=$county ORDER BY PARK_NAME" );
      $select_posts->execute();
      
      if ($select_posts->rowCount() > 0) {
        while ($fetch_post = $select_posts->fetch(PDO::FETCH_ASSOC)) {
      
?>
<!-- Main Content Starts -->

 <a href="view_post.php?get_id=<?=$fetch_post["ID"]?>"><?=$fetch_post["PARK_NAME"]?></a><br>

<?php
}}
?>
</div>



<!-- Main Content Ends -->









<!-- sweetalert cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<?php include ('components/alers.php'); ?>

</body>
</html>