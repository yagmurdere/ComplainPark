<?php

include 'components/connect.php';


if(isset($_GET['table']) && ($_GET['table'] == 'marmara' || $_GET['table'] == 'guneydogu' || $_GET['table'] == 'karadeniz'
|| $_GET['table'] == 'icanadolu' || $_GET['table'] == 'doguanadolu' || $_GET['table'] == 'ege' || $_GET['table'] == 'akdeniz')){
   $table = $_GET['table'];
}else{
   // Varsayılan olarak 'post' tablosunu kullan
   $table = 'marmara';
}
$reviews_tables='review_'.$table;

if(isset($_GET['get_id'])){
   $get_id = $_GET['get_id'];
}else{
   $get_id = '';
   header('location:all_posts.php');
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

      $verify_review = $conn->prepare("SELECT * FROM `$reviews_tables` WHERE post_id = ? AND user_id = ?");
      $verify_review->execute([$get_id, $user_id]);

      if($verify_review->rowCount() > 0){
         $warning_msg[] = 'Your review already added!';
      }else{
         $add_review = $conn->prepare("INSERT INTO `$reviews_tables`(id, post_id, user_id, rating, title, description) VALUES(?,?,?,?,?,?)");
         $add_review->execute([$id, $get_id, $user_id, $rating, $title, $description]);
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

   <form action="" method="post">
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