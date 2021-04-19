<!DOCTYPE html>
<html>
<head>
  <title>Save ur input into .txt file :D</title>
</head>
<body>
  <form method="post">
    Text:<br>
    <input type="text" name="textdata"><br>
    <input type="submit" name="submit">
    
  </form>
</body>
</html>
<?php
              
if(isset($_POST['textdata']))
{
$data=($_POST['textdata']."\n");
$fp = fopen('data.txt', 'a');
fwrite($fp, $data);
fclose($fp);
}
?>