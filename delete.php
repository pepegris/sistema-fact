<?php

require 'php/conexion.php';

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM art WHERE id = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'art Removed Successfully';
  $_SESSION['message_type'] = 'danger';
  header('Location: articulos.php');
}

?>
