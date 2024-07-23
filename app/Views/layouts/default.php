<!DOCTYPE html>
<html lang="en">
    <!-- Include head partial -->
    <?php include(APPPATH . 'Views/includes/head.php'); ?>
    <body>
        <div class="preloader">
          <div class="preloader-body">
            <div class="cssload-container">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
          </div>
        </div>

        <!-- includes head bar and menu bar -->
        <?php include(APPPATH . 'Views/includes/header_menu.php'); ?>

        <div class="page">
            <div id="home">
                <?= $this->renderSection('content') ?>
            </div>
        </div>

        <!-- include footer  -->
        <?php include(APPPATH . 'Views/includes/footer.php'); ?>   
        
        <script src="<?=base_url()?>assets/js/core.min.js"></script>
        <script src="<?=base_url()?>assets/js/script.js"></script>        
  </body>
</html>