<?php
if (isset($_POST['submit'])) {
  $file = $_FILES['file'];
  print_r($file);
  $filename = $_FILES['file']['name'];
}
?>
