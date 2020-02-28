<?php
 
require_once 'init.php';
require_once 'functions.php';
 
if (!isLoggedIn())
{
    header('Location: Login_form.php');
}