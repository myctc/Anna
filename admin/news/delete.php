<?php
require_once '../../config/config.php';
if(!isset($_SESSION['admin'])){header('Location: ../login.php');exit;}
if(isset($_GET['id'])){ $id=(int)$_GET['id']; $conn->query("DELETE FROM news WHERE id=$id"); }
header('Location: index.php');
exit;