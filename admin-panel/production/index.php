<!DOCTYPE html>
<html lang="en">

<?php include_once 'meta-head-admin.php'; ?>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      
      <!-- sidebar -->
      <?php
      include_once 'sidebar.php';
      ?>
      <!-- /sidebar -->
      
      <!-- header -->
      <?php
      include_once 'header.php';
      ?>
      <!-- /header -->


      <!-- page content -->
      <?php
      include_once 'table.php';
      ?>
      <!-- /page content -->


      <!-- footer content -->
      <?php
      include_once 'footer.php';
      ?>

    </div>
  </div>

  <!-- scripts -->
  <?php
  include_once 'scripts.php';
  ?>
  <!-- /scripts -->

</body>

</html>