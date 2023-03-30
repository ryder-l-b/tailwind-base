<?php
global $current_page;
$current_page = "page-index";
$page_title = "Page Title";
$email = "test@email.com";
?>
<!doctype html>

<html class="" lang="">

<head>
  <?php include 'partials/head.php'; ?>
</head>

<body class="font-sans <?php echo $current_page; ?>">

  <?php include 'partials/header.php'; ?>

  <div id="page-wrapper">
    <div id="page-wrapper-content">

      <div class="h-64 flex flex-wrap justify-center items-center">
        <div class="w-52">
          <ul>
            <li>Fontawesome Loading</li>
            <li>Test 1 <i class="fa-2x fa-regular fa-circle"></i></li>
            <li>Test 2 <i class="fa-2x fa-solid fa-check"></i></li>
            <li>Test 3 <i class="fa-2x fa-solid fa-envelope"></i></li>
            <li>Test 4 <i class="fa-2x fa-brands fa-discord"></i></li>
          </ul>
        </div>
      </div>


    </div> <!-- #page-wrapper-content -->
  </div> <!-- #page-wrapper -->


  <?php include "partials/footer.php"; ?>
  <?php include "partials/script.php" ?>

</body>

</html>