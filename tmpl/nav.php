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
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
				<?php 
					if (isset($_SESSION['user_id']))
					{
						echo 'Welcome, ' . $_SESSION['username'] . ' ';
					}
					else
					{
						echo 'LOGIN';
					}
				?><b class="caret"></b></a>
          <ul class="dropdown-menu multi-level">
			
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
			?>	
					<li><a href="<?php echo HOME_URL . 'logout.php'; ?>">LOG OUT</a></li>
			<?php
				}
				else
				{
			?>
					<li><a href="#login" data-toggle="modal">LOG IN</a></li>
					<li class="divider"></li> <!-- divides 2 sections of dropdown -->
					<li><a href="#">SIGN UP</a></li>
					
			<?php
				}
			?>

          </ul>
        </li>
      </ul>
    </div> <!-- END NAVBAR COLLAPSE -->
  </div><!--END CONTAINER-->
</div> <!-- END NAVBAR -->