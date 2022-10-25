<?php 
session_start();
if(!isset($_SESSION["admin_ID"]))
{
    header('location: ../admin');
}
?>