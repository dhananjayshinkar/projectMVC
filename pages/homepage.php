<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>         
       
         .container{
            background-color: #ffffcc;
            margin-top: 90px;
            height: 500px;
            font-family: "verdana";
         }

         .login-row{
            margin-top: 70px;
         }

         .login-label{
            font-size: 20px;
            margin-top: 30px;
         }

         .login-button{
            width: 100%;
            height: 50px;
            font-size: x-large;
         }

         .register-row{
            margin-top: 110px;
         }

         .login-register{
            padding-left: 6%;
            font-size: 20px;
         }

         .register-btn{
            width: 50%;
            font-size: 20px;
         }
         
        .homepage-header{
            text-align: center;
            margin-top: 5%;
            font-family: "verdana";
            font-size: 45px;
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

    <h2 class="homepage-header">ToDo Application</h2>

    <div class="container">
        
        <form action="index.php?page=accounts&action=login" method="POST">

            <div class="form-group">
                <label class="login-label login-label-username">Username:</label>
                <input type="text" class="form-control" placeholder="Enter Username" name="uname" required>
            </div>

            <div class="form-group">
                <label class="login-label">Password:</label>
                <input type="password" class="form-control" placeholder="Enter Password" name="psw" required>
            </div>

        

            <div class="row login-row">
                <div class="col-md-4"></div>
                <div class="col-md-4"><button type="submit" class="btn btn-primary login-button">Login</button></div>
                <div class="col-md-4"></div>                
            </div>
    
        </form>

        <div class="row register-row">
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
            <div class="col-md-4 login-register">
                For new user:
                <a href="index.php?page=accounts&action=register" class="btn btn-info register-btn">Register</a>
            </div>
        </div>
        
    </div>
<footer class="container-fluid text-center">
  <p>WSD Final Project - dps48</p>
</footer>

</body>
</html>