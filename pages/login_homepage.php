<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>ToDo-Homepage</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
    	
    	.container-fluid{
    		margin-top: 18px;
    		font-family: "verdana";
    	}

    	.profile-btn, .logout-btn, .showalltask-btn{
    		width: 50%;
    		height: 45%;
    		font-size: large;
    	}

    	.logout-btn{    		
    		float: right;
    	}

    	.showalltask-btn-row{
    		margin-top: 20%;
    	}
    
    	.showalltask-btn-col{    		
    		text-align: center;    		
    	}

    	.showalltask-btn{
    		height: 57% !important;
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
        			<button type="submit" class="btn btn-primary profile-btn"><span class="glyphicon glyphicon-user"></span>Your Profile</button>
				</form>	
			</div>

			<div class="col-md-4">
							
			</div>

			<div class="col-md-4">
				<form action="index.php?page=accounts&action=logout" method="POST">
		        	<button type="submit" class="btn btn-primary logout-btn"><span class="glyphicon glyphicon-log-out"></span>LOGOUT</button>
				</form>
			</div>

		</div>

		<div class="row showalltask-btn-row">
			<div class="col-md-4"></div>
			<div class="col-md-4 showalltask-btn-col">
				<a href="index.php?page=tasks&action=all" class="btn btn-primary showalltask-btn">Show All Tasks</a>
			</div>
			<div class="col-md-4"></div>
			
		</div>

  	</div>

<footer class="container-fluid text-center">
  <p>WSD Final Project - dps48</p>

</body>
</html>