<html>
<head><title>留言</title></head>
<body>
<div style="width:200px;height:600px;float: left; background: #ccc;margin-right:10px">
<ul>
<li style="list-style: none;"><h2><a href="index.php">首页</a><h2></li>
<hr>
<?php
  $fp = fopen('msg.txt','r');
  $i=1;
  while (($row=fgetcsv($fp))!=false) {
    echo "<li><a href='msg_detail.php?tid=$i'>$row[0]</a></li>";
    $i++;
  }
  
?>
</ul>
</div>
<div>
<?php
  $fp = fopen('msg.txt','r');
  $i=1;
  while (($row=fgetcsv($fp))!=false) {
    //print_r($row);
    //print_r($_GET);
    if($i==$_GET['tid']){
      echo "<h1>$row[0]</h1>";
      echo "<p>$row[0]</p>";
    }
    $i++;
  }
?>
</div>
</body>
</html>