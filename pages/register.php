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
      <div class="col-md-4"></div>
      <div class="col-md-4 createtask-heading">
        <h3>Register</h3>
      </div>
      <div class="col-md-4"></div>      
    </div>

    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4 formelements">
        <form action="index.php?page=accounts&action=store" method="post" id="form1" class = "form-horizontal">

            <div class = "form-group">
            <label class="control-label col-xs-4">First name:</label>
            <div class="col-xs-8">
            <input type="text" class="form-control" name="fname" value="" required><br>
            </div>
            <br><br>
            </div>


            <div class = "form-group">
            <label class="control-label col-xs-4">Last name:</label>
            <div class="col-xs-8">
            <input type="text" class="form-control" name="lname" value="" required><br>
            </div>
            <br><br>
            </div>

            <div class = "form-group">
            <label class="control-label col-xs-4">Email ID:</label>
            <div class="col-xs-8">
            <input type="email" class="form-control" name="email" value=""><br>
            </div>
            <br><br>
            </div>

            <div class = "form-group">
            <label class="control-label col-xs-4">Phone No:</label>
            <div class="col-xs-8">
            <input type="text" class="form-control" name="phone" value=""><br>
            </div>
            <br><br>
            </div>


            <div class = "form-group">
            <label class="control-label col-xs-4">Birthday:</label>
            <div class="col-xs-8">
            <input type="text" class="form-control" name="birthday" value=""><br>
            </div>
            <br><br>
            </div>

            <div class = "form-group">
            <label class="control-label col-xs-4">Gender:</label>
            <div class="col-xs-8">
            <input type="text" class="form-control" name="gender" value=""><br>
            </div>
            <br><br>
            </div>


            <div class = "form-group">
            <label class="control-label col-xs-4">Password:</label>
            <div class="col-xs-8">
            <input type="password" class="form-control" name="password" value="" required>
            </div>
            <br><br>
            </div>

            <button type="submit" class="btn btn-primary" form="form1" value="Submit">Submit</button>
          </form>
      </div>
      <div class="col-md-4"></div>      
    </div>
</div>
  

<script src="js/scripts.js"></script>

<footer class="container-fluid text-center">
  <p>WSD Final Project - dps48</p>

</body>
</html>