<?php

include 'components/connect.php';

$table = 'complainpark';




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
            margin-top: 80px;
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
<?php
      // Tek bir otopark kaydını çek
      $select_posts = $conn->prepare("SELECT id, PARK_NAME, COUNTY_NAME FROM `istpark`");
      $select_posts->execute();
      
      if ($select_posts->rowCount() > 0) {
        while ($fetch_post = $select_posts->fetch(PDO::FETCH_ASSOC)) {
      
?>
<!-- Main Content Starts -->



 <a href="view_post.php?get_id=<?=$fetch_post["id"]?>"><?=$fetch_post["PARK_NAME"]?></a><br>


<?php
}}
?>
<select name="parks" id="parks" value="isim">
    <option value="park1"><a href="view_post.php?get_id=1">arda turan</a><br></option>
    <option value="park2">Bayrampaşa Adapark Katlı</option>
    <option value="park3">Pendik Katlı Otopark</option>
    <option value="park4">Şehit Murat Demirci Kapalı</option>
    <option value="park5">Ümraniye Katlı Otopark</option>
</select>


<!-- Main Content Ends -->









<!-- sweetalert cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<?php include ('components/alers.php'); ?>

</body>
</html>