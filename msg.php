<?php
  $msg=$_POST['title'].",".$_POST['content']."\r\n";
  print_r($msg);
  $fp=fopen("msg.txt", "a");
  fwrite($fp, $msg);
  fclose($fp);
  echo "<h1>留言成功！</h1>";
?>
