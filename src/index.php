<?php
global $current_page;
$current_page = "page-index";
$page_title = "Index";
$email = "test@email.com";
?>
<!doctype html>

<html class="" lang="">

<head>
  <?php include 'includes/head.php'; ?>
</head>

<body class=font-sans <?php echo $current_page; ?>">

  <?php include 'includes/header.php'; ?>

  <div id="page-wrapper">
  </div> <!-- #page-wrapper-content -->

 


  </div> <!-- #page-wrapper -->


  <?php include "includes/footer.php"; ?>
  <?php include "includes/script.php" ?>

</body>

</html>