<!DOCTYPE html>
<html lang="en">
<head>
  <title>Task manager</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>


<body text-align:center>
        <li class="active"><a href="#">Home</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      
      <li><div>
        <form action="index.php?page=accounts&action=show" method="POST">
        <button type="submit" >Your Profile</button>
        </form></div></li>
        
        <li><div>
        <form action="index.php?page=accounts&action=logout" method="POST">
        <button type="submit" >Logout</button>
        </form></div></li>
      </ul>
<body>

<?php
$text='';
$text.='<h2>Pending Tasks</h2><br>';
$text.='<a href="index.php?page=tasks&action=create"><span class="glyphicon glyphicon-plus">Create New Task</span></a>';
if($data==FALSE){
  $text.='<br>No records found';
  $text.='</center>';
  echo $text;
}
else{
$text.=utility\htmlTable::genarateTableFromMultiArray($data);
echo $text;
}
?>

</div>
<footer class="container-fluid text-center">
  <p>WSD Final Project</p>
</footer>
</body>
</html>