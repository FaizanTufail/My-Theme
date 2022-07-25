  <footer class="footer">
        <div class="container-fluid">
            <div class="row footer">
                <div class="col-sm-2 col-md-2 col-lg-2 col-xs-2">
                     <?php $logoimage=get_header_image(); ?>
                        <div>
                          <a href="<?php echo site_url(); ?>">
                            <img class="footer-logo" src="<?php echo $logoimage ?>">
                          </a>
                        </div>
                </div>
                <div class="ul1 col-sm-2 col-md-2 col-lg-2 col-xs-2">
                   <?php dynamic_sidebar('onecol'); ?>
                </div>
                <div class="ul2 col-sm-2 col-md-2 col-lg-2 col-xs-2">
                     <?php dynamic_sidebar('twocol'); ?>
                </div>
                <div class="ul1 col-sm-2 col-md-2 col-lg-2 col-xs-2">
                     <?php dynamic_sidebar('threecol'); ?>
                </div>
                <div class="ul3 col-sm-2 col-md-2 col-lg-2 col-xs-2">
                    <?php dynamic_sidebar('fourcol'); ?>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>