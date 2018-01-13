<?php 
session_start();
include('includes/function.php');


unset($_SESSION);
session_unset();
session_destroy();
session_start();
Admin::doLogout();