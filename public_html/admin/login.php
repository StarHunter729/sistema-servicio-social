<?php
  require_once $_SERVER['DOCUMENT_ROOT']."/../private/model/Admin.php";
  $admin = new Admin();
  $admin->login_admin();
  if($_SESSION['login'])
  {
      header('location:resumen_alumnos.php');
  }
?>