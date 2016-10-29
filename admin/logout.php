<?php
    //start session to access session vars
    session_start();
    
    //if logged in delete session vars
    if (isset($_SESSION['id']))
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
    setcookie('id', '', time() - 3600);
    setcookie('user_name', '', time() - 3600);

    $home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) .
            '/index.php';
   header('Location: ' . $home_url);
?>