<?php require_once 'controllers/authControllers.php'; ?>

<!DOCTYPE html>
<html>
<head>
  <title>Move Books</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
  <link rel="stylesheet" href="Move Book.css">
</head>
<body>


<div class="wrapper">
  
 <nav id="sidebar" >
  
    <ul class="lisst-unstyled components" style="margin-top:50px;">
      <li >
      <a href="Profile.php">Librarain Profile</a>
    </li>
    
    
    <li >
      <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Manage Books</a>
      <ul class="collapse list-unstyled" id="homeSubmenu">
        <li>
          <a href="Add_Book.php">Add Books</a>
        </li>
        <li>
          <a href="Delete_Book.php">Delete Books</a>
        </li>

      </ul>
    </li>
    
    <li >
      <a href="Move_Book.php">Move Books</a>
    </li>
    
     <li >
      <a href="view criminals.html">Student Profiles</a>
    </li>
     
      

      

      </ul>
    </li>
    </ul>
 </nav>


<div id="content">
  <header>
    <nav class="navbar navbar-expand-lg navbar-light " style="">
      <button type="button" id="sidebarCollapse" class="btn  btn-info" style="background-color: #e7e7e7; color: black;">
        <i class="fas fa-align-left" ></i>
        </button><span style="padding-left:5px;">Library Management System</span>
    
      </nav>
  
</header>
 

<div class="forms">
    <form class="loginbox" action="Move_Book.php" method="post" >
      <h1>Move Books</h1>

      <?php if(count($errors)>0):?>
        <div class="alert alert-danger";>
          <?php foreach($errors as $error):?>
            <li><?php echo $error; ?></li>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>


      <div class="textbox" >
        <span class="col-lg-6">Book Name:</span>
        <input type="text" name="Title_move" value=""  class="col-lg-6">
        
      </div>
      <div class="textbox">
        <span class="col-lg-6">ISBN Number:</span>
        <input type="text"  name="ISBN_Number_move" value="" class="col-lg-6" style="height:70px;">
      </div>


      <div class="textbox">
        <span class="col-lg-6">Old Shelf ID</span>
        <input type="text"  name="Shelf_ID_old" value="" class="col-lg-6" style="height:70px;">
      </div>

      <div class="textbox">
        <span class="col-lg-6">New Shelf ID:</span>
        <input type="text"  name="Shelf_ID_new" value="" class="col-lg-6" style="height:70px;">
      </div>

    

        <button type="submit" name="Move" style="transform:translate(350px,-10px);" class="btn btn-primary">Move</button>
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