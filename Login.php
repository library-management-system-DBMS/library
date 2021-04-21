<?php require_once 'controllers/authControllers.php'; ?>

<!DOCTYPE html>
<html>
<head>
  <title>Librarian login</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
  <link rel="stylesheet" href="Login.css">
</head>
<body>


<div class="wrapper">

<div id="content">
  
  <header>
    <nav class="navbar navbar-expand-lg navbar-light " style="">
      <button type="button" id="sidebarCollapse" class="btn  btn-info" style="background-color: #e7e7e7; color: black;">
        <i class="fas fa-align-left" ></i>
        </button><span style="padding-left:5px;">Library Management System</span>
    
      </nav>
  
</header>
         
           


  
      
         
 

<div class="forms">
    <form class="loginbox" action="Login.php" method="post" >
      <h1>Login</h1>
       
       <?php if(count($errors) >0):?>
      <div class="alert alert-danger">
        <?php foreach($errors as $error): ?>
          <li><?php echo $error; ?></li>
        <?php endforeach; ?>
      </div>
    <?php endif; ?> 
       
        <div class="textbox">
          <span class="col-lg-6">Librarian ID:</span>
        <input type="number"  name="Librarian_ID" value="" class="col-lg-6" placeholder="ID">
      </div>
      <div class="textbox">
        <span class="col-lg-6">Password:</span>
        <input type="password" placeholder="Password" name="password" value="" class="col-lg-6">
      </div>
      
      
      
      <button type="submit" name="Login" class="btn btn-primary">Login</button>
      </form>

    
</div>






</div>


</div>












<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>

$(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });

</script>


</body>
</html>
