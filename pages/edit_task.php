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

      .createtask-heading{
        text-align: center;
        margin-top: 4%;
      }

      .formelements{
        text-align: center;
        margin-top: 3%;
        background-color: #ffffcc;

      }

      .login-label{
            font-size: 20px;          
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
      <div class="col-md-4"></div>
      <div class="col-md-4 createtask-heading">
        <h3> Confirm Task Details </h3>
      </div>
      <div class="col-md-4"></div>      
    </div>
    
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4 formelements">

        <form action="index.php?page=tasks&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1" class = "form-horizontal">

                      <div class = "form-group">
                      <label class="control-label col-xs-4">ID:</label>
                      <div class="col-xs-8">
                      <input type="text" name="id" class="form-control" value="<?php echo $data->id;?>"readonly>
                      </div>
                      <br><br>
                      </div>
                      

                      <div class = "form-group">
                      <label class="control-label col-xs-4">Owner Email:</label>
                      <div class="col-xs-8">
                      <input type="text" name="owneremail" class="form-control" value="<?php echo $data->owneremail;?>"readonly><br>
                      </div>
                      <br><br>
                      </div>

                      <div class = "form-group">
                      <label class="control-label col-xs-4">Owner ID:</label>
                      <div class="col-xs-8">
                      <input type="text" name="ownerid" class="form-control" value="<?php echo $data->ownerid;?>"readonly><br>
                      </div>
                      <br><br>
                      </div>

                      <div class = "form-group">
                      <label class="control-label col-xs-4">Created Date:</label>
                      <div class="col-xs-8">
                      <input type="text" name="createddate" class="form-control" value="<?php echo $data->createddate;?>"readonly><br>
                      </div>
                      <br><br>
                      </div>

                      <div class = "form-group">
                      <label class="control-label col-xs-4">Due Date:</label>
                      <div class="col-xs-8">
                      <input type="text" name="duedate" class="form-control" value="<?php echo $data->duedate;?>"readonly><br>
                      </div>
                      <br><br>
                      </div>

                      <div class = "form-group">
                      <label class="control-label col-xs-4">Message:</label>
                      <div class="col-xs-8">
                      <input type="text" name="message" class="form-control" value="<?php echo $data->message;?>"readonly><br>
                      </div>
                      <br><br>
                      </div>

                      <div class = "form-group">
                      <label class="control-label col-xs-4">Is Done:</label>
                      <div class="col-xs-8">
                      <input type="text" name="isdone" class="form-control" value="<?php echo $data->isdone;?>"readonly><br>
                      </div>
                      <br><br>
                      </div>

                          <button type="submit" form="form1" class="btn btn-primary" value="delete">Delete</button>
          </form>
      </div>
      <div class="col-md-4"></div>
    

</div>

</div>
<script src="js/scripts.js"></script>

<footer class="container-fluid text-center">
  <p>WSD Final Project - dps48</p>
</footer>

</body>
</html>