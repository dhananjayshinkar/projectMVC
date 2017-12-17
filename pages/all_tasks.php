<!DOCTYPE html>
<html lang="en">
<head>
  <title>Task manager</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>

    .container-fluid{
        margin-top: 18px;
        font-family: "verdana";
      }

      .profile-btn, .logout-btn, .home-btn{
        width: 50%;
        height: 45%;
        font-size: large;
      }

      .logout-btn{
        float: right;
      }

      .home-btn-col{
        text-align: center;
      }

      .pendingtask{
        margin-top: 6%;
        text-align: center;
      }

      .container-fluid.text-center{
        position: fixed;
        width: 100%;
        background-color: black;
        color: white;
        text-align: center;
        left:0;
        bottom: 0;
        height: 4%;
        font-size: 23px;
      }
    
  </style>
</head>


<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4">
        <form action="index.php?page=accounts&action=show" method="POST">
        <button type="submit" class="btn btn-primary profile-btn" ><span class="glyphicon glyphicon-user"></span>Your Profile</button>
        </form>
       
      </div>
      
      <div class="col-md-4 home-btn-col"> 
         <a href="index.php?page=accounts&action=back1" class="btn btn-primary home-btn">Home</a>         
      </div>
        
      <div class="col-md-4">
        <form action="index.php?page=accounts&action=logout" method="POST">
        <button type="submit" class="btn btn-primary logout-btn"><span class="glyphicon glyphicon-log-out"></span>Logout</button>
        </form>
      </div>

    </div>
      

<div class="row">
<?php
$text='';
$text.='<h2 class="pendingtask">Pending Tasks</h2><br><br>';
$text.='<a href="index.php?page=tasks&action=create" class="btn btn-primary createtask-btn"><span class="glyphicon glyphicon-plus"></span>Create New Task</a><br>';
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
</div>
<footer class="container-fluid text-center">
  <p>WSD Final Project - dps48</p>
</footer>
</body>
</html>