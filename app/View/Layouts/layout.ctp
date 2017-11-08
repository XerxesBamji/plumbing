<!DOCTYPE html>
<html lang="en">

  <!-- Head -->
  <?php echo $this->element("flash/head")?>

  <body>
    <!-- Navigation -->
    <?php echo $this->element("flash/nav")?>


    <!-- Header -->
    <?php echo $this->element("flash/header")?>

    <!-- About -->
    <?php echo $this->fetch('content'); ?>

    <!-- Footer -->
    <?php echo $this->element("flash/footer")?>

    <!-- Bootstrap core JavaScript -->
    <!-- <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
    <script type="text/javascript" src="<?php echo $this->webroot; ?>vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo $this->webroot; ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <!-- <script src="vendor/jquery-easing/jquery.easing.min.js"></script> -->
    <script type="text/javascript" src="<?php echo $this->webroot; ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <!-- <script src="layout.js"></script> -->
    <script type="text/javascript" src="<?php echo $this->webroot; ?>js/layout.js"></script>
    <script type="text/javascript" src="<?php echo $this->webroot; ?>js/carousel.js"></script>
    <script type="text/javascript" src="<?php echo $this->webroot; ?>js/movements.js"></script>
    <script type="text/javascript" src="<?php echo $this->webroot; ?>js/dismiss.js"></script>

  </body>

</html>
