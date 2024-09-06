<?php
session_start();
if(isset($_SESSION['nama'])){
unset($_SESSION['nama']);
}
header('location:index.php');