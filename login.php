<?php
	require_once('req/connectvars.php');
	require_once('req/appvars.php');
	
    //clear errors
    $error = '';

    //check if user logged in
    if (!isset($_SESSION['user_id']))
    {
        if (isset($_POST['submit']))
        {
            $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
            
            $user = mysqli_real_escape_string($conn, trim($_POST['user']));
            $pass = mysqli_real_escape_string($conn, trim($_POST['pass']));
            
            //validate form fields are not empty
            if (!empty($user) && !empty($pass))
            {
                  
                //look up user
                $query = "SELECT user_id, username, first_name, last_name, admin_access FROM users " .
                        "WHERE username = '$user' AND password = SHA('$pass')";
                $result = mysqli_query($conn, $query); 
                
                //close db connection
                mysqli_close($conn);
                
                if (mysqli_num_rows($result) === 1)
                {
                    $row = mysqli_fetch_array($result);
                    
                    //assign value to session vars
                    $_SESSION['user_id']  	  = $row['user_id'];
                    $_SESSION['username'] 	  = $row['username'];
					$_SESSION['first_name']   = $row['first_name'];
                    $_SESSION['last_name']    = $row['last_name'];
					$_SESSION['admin_access'] = $row['admin_access'];
                    
                    setcookie('user_id', $row['user_id'], time() + (60*60*24*30));
                    setcookie('username', $row['username'], time() + (60*60*24*30));
					setcookie('first_name', $row['first_name'], time() + (60*60*24*30));
                    setcookie('last_name', $row['last_name'], time() + (60*60*24*30));
					setcookie('admin_access', $row['admin_access'], time() + (60*60*24*30));
                     
					echo '<meta http-equiv="refresh" content="0">';
					
                } //END RESULT IF
                else 
                {
                    $error = 'You must enter a valid username & password';
                }//END USER/PASS INCORECT IFF
            }// END USER LOGIN VALIDATION
            else 
            {
                $error = 'Sorry, you must enter you username & password to login';
            }//USER LOGIN VALIDATION FAIL ELSE END
        }// END POST ISSET
    }//END COOKIE !ISSET IF


    if (empty($_SESSION['user_id']))
    {
        echo '<p class="error">' . $error . '</p>';
?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<div class="form-group">
        
            <label for="user">Username: </label>
            <input type="text" class="form-control" name="user" />
            <br />
            <label for="pass">Password: </label>
            <input type="password" class="form-control" name="pass" />
        </div><!-- end form-group -->
        <input type="submit" class="btn btn-primary" value="Log In" name="submit" />
		<a class="btn btn-primary" data-dismiss="modal">Close</a>
    </form>
<?php
    }//END EMPTY USERID COOKIE IF
?>
