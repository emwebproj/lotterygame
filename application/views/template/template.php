<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    
    <title></title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/main.css">
    
    <!--[if lt IE 9]>
      <script src="<?php echo base_url(); ?>public/js/html5shiv.js"></script>
    <![endif]-->
  
  </head>

  <body class="#">

    <div class="container">
      <!-- Header Part -->
      <div class="row">
        <div class="col-md-12">
          <?php $this->load->view('template/header.php'); ?>  
        </div>
      </div>
    
      <!-- Main Content -->
      <div class="row">
        <div class="col-md-12">
           <?php //isset($main_content) ? $this->load->view('../' . $main_content) : ""; ?>
           <?php echo "Hi People!"; ?>
        </div>
      </div>

    </div>

    <!-- Footer Part -->
    <?php $this->load->view('template/footer.php'); ?>

    <script src="<?php echo base_url(); ?>public/js/jquery-1.10.2.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/bootstrap.min.js"></script>

  </body>
</html>