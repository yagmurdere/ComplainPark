<?php

include 'components/connect.php';

if(isset($_GET['table']) ){
   $table = $_GET['table'];
}else{
   // Varsayılan olarak 'post' tablosunu kullan
   $table = 'istpark';
}
$reviews_tables='review_istpark';

if(isset($_GET['get_id'])){
   $get_id = $_GET['get_id'];
}else{
   $get_id = '';
   header('location:main.php');
}

if(isset($_POST['submit'])){

   if($user_id != ''){

      $id = create_unique_id();
      $title = $_POST['title'];
      $title = filter_var($title, FILTER_SANITIZE_STRING);
      $description = $_POST['description'];
      $description = filter_var($description, FILTER_SANITIZE_STRING);
      $rating = $_POST['rating'];
      $rating = filter_var($rating, FILTER_SANITIZE_STRING);

      // Handle file upload
      $image = '';
      if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
         $fileTmpPath = $_FILES['image']['tmp_name'];
         $fileName = $_FILES['image']['name'];
         $fileSize = $_FILES['image']['size'];
         $fileType = $_FILES['image']['type'];
         $fileNameCmps = explode('.', $fileName);
         $fileExtension = strtolower(end($fileNameCmps));
         $allowedExts = ['jpg', 'jpeg', 'png', 'gif'];

         if (in_array($fileExtension, $allowedExts)) {
            $uploadFileDir = 'uploaded_files/';
            $dest_path = $uploadFileDir . $id . '.' . $fileExtension;
            if (move_uploaded_file($fileTmpPath, $dest_path)) {
               $image = $id . '.' . $fileExtension;
            }
         } else {
            $warning_msg[] = 'Invalid file type. Only jpg, jpeg, png, and gif are allowed.';
         }
      }

      $verify_review = $conn->prepare("SELECT * FROM `$reviews_tables` WHERE post_id = ? AND user_id = ?");
      $verify_review->execute([$get_id, $user_id]);

      if($verify_review->rowCount() > 0){
         $warning_msg[] = 'Your review already added!';
      }else{
         $add_review = $conn->prepare("INSERT INTO `$reviews_tables`(id, post_id, user_id, rating, title, description, image) VALUES(?,?,?,?,?,?,?)");
         $add_review->execute([$id, $get_id, $user_id, $rating, $title, $description, $image]);
         $success_msg[] = 'Review added!';
      }

   }else{
      $warning_msg[] = 'Please login first!';
   }

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

<!-- add review section starts  -->

<section class="account-form">

   <form action="" method="post" enctype="multipart/form-data">
      <h3>Post Your Review</h3>
      <p class="placeholder">Review Title <span>*</span></p>
      <input type="text" name="title" required maxlength="50" placeholder="enter review title" class="box">
      <p class="placeholder">Review Description</p>
      <textarea name="description" class="box" placeholder="enter review description" maxlength="1000" cols="30" rows="10"></textarea>
      <p class="placeholder">Review Rating <span>*</span></p>
      <select name="rating" class="box" required>
         <option value="1">1</option>
         <option value="2">2</option>
         <option value="3">3</option>
         <option value="4">4</option>
         <option value="5">5</option>
      </select>
      <p class="placeholder">Upload Photo</p>
      <input type="file" name="image" class="box">
      <input type="submit" value="submit review" name="submit" class="btn">
      <a href="view_post.php?get_id=<?= $get_id; ?>&table=<?= $table?>" class="option-btn">Go Back</a>
   </form>

</section>

<!-- add review section ends -->

<!-- sweetalert cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<?php include 'components/alers.php'; ?>

</body>
</html>
