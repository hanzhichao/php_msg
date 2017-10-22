<html>
<head><title>留言</title></head>
<body>
<div style="width:200px;height:600px;float: left; background: #ccc;margin-right:10px">
<ul>
<li style="list-style: none;"><h2><a href="index.php">首页</a><h2></li><hr>
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
<h1>请留言</h1>
  <form action="msg.php" method="POST">
    <p><label>标题：&nbsp;</label></p>
    <p><input type="text" name="title"></p>
    <p><label>内容：&nbsp;</label></p>
    <textarea rows="10" cols="50" name="content"></textarea>
    <p><input type="submit" value="提交"></p>
  </form>
</div>
</body>
</html>