<?php

include 'components/connect.php';

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


<!-- Main Content Starts -->



  <img src="uploaded_files/mapp.jpg" alt="Workplace" style="border: 2px solid white; margin:50px 0px 0px 220px ; border-radius:30px;" usemap="#workmap" width="1100" height="500">

  <map name="workmap">
    <area shape="circle" coords="180,140, 80" alt="marmara" href="all_posts.php?table=marmara">
    <area shape="circle" coords="180,300, 70" alt="ege" href="all_posts.php?table=ege">
    <area shape="circle" coords="560,110, 60" alt="karadeniz" href="all_posts.php?table=karadeniz">
    <area shape="circle" coords="460,280, 80" alt="icanadolu" href="all_posts.php?table=icanadolu">
    <area shape="circle" coords="880,220, 60" alt="doguanadolu" href="all_posts.php?table=doguanadolu">
    <area shape="circle" coords="800,340, 40" alt="guneydogu" href="all_posts.php?table=guneydogu">
    <area shape="circle" coords="600,340, 40" alt="akdeniz" href="all_posts.php?table=akdeniz">

  </map>

<!-- Main Content Ends -->









<!-- sweetalert cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<?php include 'components/alers.php'; ?>

</body>
</html>