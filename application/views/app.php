<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistem Informasi Desa</title>
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
  <script src="<?php echo base_url() ?>/assets/js/jquery.min.js"></script>
</head>

<body>

  <?php include 'components/navbar.php' ?>

  <div class="container-fluid">
    <?php
      echo $content
    ?>
  </div>

  <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
</body>

</html>