<?php
    //start session to access session vars
    session_start();
    
    //if logged in delete session vars
    if (isset($_SESSION['user_id']))
    {
        $_SESSION = array();
        
        //delete any cookies that may exist
        if (isset($_COOKIE[session_name()]))
        {
            //delete cookies by setting time an hour ago
            setcookie(session_name(), '', time() - 3600);
        }// end isset
        
        //destroy session
        session_destroy();
    }
    
    //kill cookies
    setcookie('user_id', '', time() - 3600);
    setcookie('username', '', time() - 3600);
	setcookie('first_name', '', time() - 3600);
    setcookie('last_name', '', time() - 3600);
	
	
	header('Location: ' . ADMIN_HOME_URL);
?>