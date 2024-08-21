
<?php

include 'components/connect.php';

$select_counties = $conn->prepare("SELECT DISTINCT COUNTY_NAME FROM `istpark`");
$select_counties->execute();




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
<div class="container">
    <?php
    while ($county = $select_counties->fetch(PDO::FETCH_ASSOC)) {
        // Her semt için bir bağlantı oluştur
    ?>
     <a href="main.php?county='<?=$county["COUNTY_NAME"]?>'"><?= htmlspecialchars($county["COUNTY_NAME"])?></a><br>
    <?php
    };?>
</div>


<!-- Main Content Ends -->









<!-- sweetalert cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<?php include ('components/alers.php'); ?>

</body>
</html>