<?php require_once 'controllers/authControllers.php'; 




if(!isset($_SESSION['Librarian_ID'])){
  header('location:Login.php');
  exit();
}


?>

<!DOCTYPE html>
<html>
<head>
  <title>Librarian Profile</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
  <link rel="stylesheet" href="Profile.css">
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
      <div id="container" styles="height:100px;">
        <div class="navbar-header">
        <button type="button" id="sidebarCollapse" class="btn  btn-info" style="background-color: #e7e7e7; color: black;">
        <i class="fas fa-align-left" ></i>
        </button><span style="padding-left:5px;">Library management system</span>

    </div>
         <div id="collapsable-nav" class="collapse navbar-collapse">
      <ul id="nav-list" class="nav navbar-nav navbar-right">
         
         
  <button class="btn btn-light dropdown-toggle top-left" type="button" data-toggle="dropdown" data-target="#1"><i class="fas fa-user"></i>
  <span class="caret"></span>
  <ul class="dropdown-menu" id="1">
    <li><a href="#" class="dropdown-item">As Librarian</a></li>
    <div class="dropdown-divider"></div>
    <li><a href="#" class="dropdown-item">As User</a></li>
    <div class="dropdown-divider"></div>
    <li><a href="#" class="dropdown-item">Profile</a></li>
    <div class="dropdown-divider"></div>
    <li><a href="Profile.php" class="dropdown-item logout">Logout</a></li>
  </ul>
  </button>
    
   
           

      </ul>
    </div>
      </div>
      </nav>
         
</header>


<div class="forms">
    <form class="loginbox" >
      <h1>Librarian Profile<a href="Profile.php?logout=1" class="dropdown-item logout">Logout</a></h1>
      <div class="textbox" >
        <span class="col-lg-6">Librarian Name</span>
        <span> <?php echo $_SESSION['Librarian_name'];?> </span>
        
      </div>
      <div class="textbox">
        <span class="col-lg-6">Librarian ID:</span>
         <span> <?php echo $_SESSION['Librarian_ID'];?> </span>
      </div>

      <div class="textbox">
        <span class="col-lg-6">Address:</span>
        <span> <?php echo $_SESSION['Address'];?> </span>
      </div>

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