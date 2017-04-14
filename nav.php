
<div class="container-fluid bg-navy nav-full-container">
  <div class="container">
    <div class="row">
      <!-- Nav Logo
      <div class="nav-logo">
        <a href="http://gearlearning.org"><img src="<?php echo get_template_directory_uri(); ?>/img/gear-logo-text.svg" class="wow fadeIn"/></a>
      </div> END: Nav Logo -->
    <!--
      BEGIN: Full Screen Navigation
    -->
    <div class="row">
      <div class="nav-menu">
        <nav>
          <ul>
            <?php include ('nav-links.php'); ?>
          </ul>
        </nav>
      </div><!-- END: Full Screen Navigation -->
    </div>

    <!--
      BEGIN: Mobile Navigation
    -->
      <div class="mobile-dropdown">
        <div class="row">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        </div>

        <div class="collapse" id="collapseExample">
          <div class="well">
            <nav>
              <ul>
                <?php include ('nav-links.php'); ?>
              </ul>
            </nav>
          </div>
        </div>
      </div><!-- END: Mobile Navigation -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</div><!-- /.container-fluid .nav-full-container -->
