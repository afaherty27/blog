<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only"> Toggle Navigation</span> <!--rh button-->
        <span class="icon-bar"></span> <!-- 3 lines to make icon bar -->
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button> <!-- END BUTTON-->
      <li><a class="navbar-brand" href="<?php echo HOME_URL; ?>">BLOG</a></li><!-- Title of page -->
    </div> <!-- END NAVBAR-HEADER-->
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right"> <!-- align on right properly -->
        <li class="active"><a href="<?php echo HOME_URL; ?>">HOME</a></li>
        <li class="dropdown">
          <a href="#"
             class="dropdown-toggle"
             data-toggle="dropdown">
				<?php 
					if (isset($_SESSION['user_id']))
					{
						echo 'PROFILE';
					}
					else
					{
						echo 'LOGIN';
					}
				?><b class="caret"></b></a>
          <ul class="dropdown-menu">
			
			<?php
				if (isset($_SESSION['user_id']))
				{
						
					echo '<li><a href="#">USER</a></li>';
					
					if ($_SESSION['admin_access'] == 1)
					{
			?>			
						<li><a href="<?php echo ADMIN_HOME_URL; ?>">ADMIN</a></li>
						<li class="divider"></li> <!-- divides 2 sections of dropdown -->
			<?php			
					}
				
					echo '<li><a href="logout.php">LOG OUT</a></li>';
				}
				else
				{
			?>
					<li><a href="#">SIGN UP</a></li>
					<li class="divider"></li> <!-- divides 2 sections of dropdown -->
					<li><a href="login.php">LOG IN</a></li>
			<?php
				}
			?>

          </ul>
        </li>
      </ul>
    </div> <!-- END NAVBAR COLLAPSE -->
  </div><!--END CONTAINER-->
</div> <!-- END NAVBAR -->