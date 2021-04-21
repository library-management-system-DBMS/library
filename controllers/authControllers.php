<?php

session_start();
require 'config/db.php';


$errors=array();
$Librarian_ID="";
$password="";



//log in 

if(isset($_POST['Login'])){

$Librarian_ID=$_POST['Librarian_ID'];

$password=$_POST['password'];


if(empty($Librarian_ID)){
	$errors['Librarian_ID'] = "ID is required";
	
}

if(empty($password)){
	$errors['password'] = "Password is required";
}

if(count($errors) === 0){
 

  $sql="SELECT * FROM librarian WHERE Librarian_ID=? LIMIT 1";
  $stmt =$conn->prepare($sql);
  $stmt->bind_param('s',$Librarian_ID);
  $stmt->execute();
  $result = $stmt->get_result();
  $user =$result->fetch_assoc();
  
 if($password === $user['Password']){
  
 

     
$_SESSION['Librarian_ID']=$user['Librarian_ID'];
$_SESSION['Librarian_name']=$user['Librarian_name'];
$_SESSION['Address']=$user['Address'];

//set flash message
$_SESSION['message']="You are now logged in";
$_SESSION['alert-class']="alert-success";
header('location:Profile.php');
exit();


 }
 else{

 	$errors['login_fail'] = "Wrong credentials";
 	header("refresh:5;url=Login.php");
 }


}
 
}


//Add Books
if(isset($_POST['Add'])){
 
$ISBN_Number_add=$_POST['ISBN_Number_add'];
$Title_add=$_POST['Title_add'];
$Author_add=$_POST['Author_add'];
$Publication_year_add=$_POST['Publication_year_add'];
$Rating_add=$_POST['Rating_add'];
$Review_add=$_POST['Review_add'];
$Current_status_add=$_POST['Current_status_add'];

if(empty($ISBN_Number_add) OR empty($Title_add) OR empty($Author_add) OR empty($Publication_year_add)  OR empty($Rating_add)  OR empty($Review_add)  OR empty($Current_status_add) ){
	$errors['ISBN_Number'] = "All the fields have to be filled";
	header("refresh:5;url=Add_Book.php");
}	
	
$add="INSERT INTO book(ISBN_Number,Title,Author,Publication_year,Rating,Review,Current_status) VALUES (?,?,?,?,?,?,?)";
$stmt=$conn->prepare($add);
$stmt->bind_param('sssssss',$ISBN_Number,$Title,$Author,$Publication_year,$Rating,$Review,$Current_status);
if($stmt->execute()){
    header('location:Add_Book.php');
	exit(0);
}
else{
	$errors['False']="Addition failed";
}

}

//Delete Books
if(isset($_POST['Delete'])){
 
$ISBN_Number_delete=$_POST['ISBN_Number_delete'];
$Title_delete=$_POST['Title_delete'];


if(empty($ISBN_Number_delete) OR empty($Title_delete)){
	$errors['ISBN_Number'] = "All the fields have to be filled";
	header("refresh:5;url=Delete_Book.php");
}	
	
$delete="DELETE FROM book WHERE ISBN_Number=? and Title=? LIMIT 1";
$stmt=$conn->prepare($delete);
$stmt->bind_param('ss',$ISBN_Number_delete,$Title_delete);
if($stmt->execute()){
    header('location:Delete_Book.php');
	exit(0);
}
else{
	$errors['False']="Deletion failed";
}

}

//Move Books
if(isset($_POST['book'])){
 
$ISBN_Number_move=$_POST['ISBN_Number_move'];
$Title_move=$_POST['Title_move'];
$Shelf_ID_old=$_POST['Shelf_ID_old'];
$Shelf_ID_new=$_POST['Shelf_ID_new'];
	
$update="UPDATE book SET ISBN_Number_move='$ISBN_Number_move' and SET Title_move='$Title_move' and SET Shelf_ID_old=$Shelf_ID_old and SET Shelf_ID_new=$Shelf_ID_new WHERE ISBN_Number_move=? and Title_move=? and Shelf_ID_old=? and Shelf_ID_new=? LIMIT 1";
$stmt=$conn->prepare($sql);
$stmt->bind_param('ssss',$ISBN_Number_move,$Title_move,$Shelf_ID_old,$Shelf_ID_new);
if($stmt->execute()){
    header('location:Move_Book.php');
	exit(0);
}
else{
	$errors['False']="Moving failed";
}

}


//logout user

if(isset($_GET['logout'])){

session_destroy();
unset($_SESSION['Librarian_ID']);
unset($_SESSION['Librarian_name']);
unset($_SESSION['Address']);
unset($_SESSION['verified']);
header('location:Login.php');
exit();
}




?>