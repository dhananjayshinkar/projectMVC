<!DOCTYPE html>
<html lang="en">
<head>
  <title>Task manager</title>
  

  <meta charset="utf-8">
</head>


<body text-align:center>
  <center>
<a href="#">Home</a>

<br>
<br>
        <form action="index.php?page=accounts&action=show" method="POST">
        <button type="submit">Your Profile</button>
        </form>
        <br>
        <form action="index.php?page=accounts&action=logout" method="POST">
        <button type="submit">Logout</button>
        </form>
        <br>

    <h3> Enter Task Details </h3>
    
<form action="index.php?page=tasks&action=store&id=" method="post" id="form1" class = "form-inline">

<div class = "form-group">
<label>Owner Email-</label>
<input type="text" name="owneremail" value="<?php session_start(); echo $_SESSION["email"]; ?>">
</div>
<br><br>

<div class = "form-group">
<label>Owner ID-</label>
<input type="text"  name="ownerid" value="<?php echo $_SESSION["userID"]; ?>">
</div>
<br><br>

<?php date_default_timezone_set("America/New_York"); ?>
<div class = "form-group">
<label>Created Date-</label>
<input type="text"  name="createddate" value="<?php echo date("Y-m-d").' '.date("h:i:sa"); ?>"readonly>
</div>
<br><br>

<div class = "form-group">
<label>Due Date-</label>
<input type="text"  name="duedate" value="">
</div>
<br><br>

<div class = "form-group">
<label>Message-</label>
<input type="text"  name="message" value="">
</div>
<br><br>

<div class = "form-group">
<label>Is Done-</label>
<input type="text" name="isdone" value="">
</div>
<br><br>

<button type="submit" form="form1" value="create">Create</button>
</form>

</div>

<center>
<footer class="container-fluid text-center">
  <p>WSD Final Project</p>
</footer>

<script src="js/scripts.js"></script>
</body>
</html>