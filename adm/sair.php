
<?php
 
session_start(); 
 
session_destroy();
 
session_unset(); 

echo "<script>alert('Você saiu!'); document.location.href='index.php';</script>";
 
?>