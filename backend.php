<?php
include('connection.php');
error_reporting(E_ALL);
ini_set('display_errors',1);

if(isset($_POST['register'])){
    $names =$_POST["names"];
    $phonenumber =$_POST["phonenumber"];
    $password =$_POST["password"];
    $query ="INSERT INTO`users`(`id`, `names`, `phonenumber`, `password`) VALUES ('','$names','$phonenumber','$password',)";
  $test = mysqli_query($conn, $query);
  if ($test) {
    header("Location: login.php?message=users is registered");
  } else {
    die("Error" . mysqli_error($conn));
  }
}
if(isset($_POST['login'])){
    $UserName=$_POST["UserName"];
    $password=$_POST["password"];
    $query="SELECT * FROM `users` WHERE  `UserName`= '$UserName' AND `password`='$password'";
    $result=mysqli_query($conn,$query);
    if($result == true){
        header('Location: post.php');
    }elseif($result == false){
        header('Location: login.php');
    }
    die("error".mysqli_error($conn));
   }



if (isset($_POST['newpost']))  {
    $Id=$_POST['Id'];
    $Name= $_POST["Name"];
    $query = "INSERT INTO `post`(`Id`, `Name`) VALUES ('','$Name')";
    $test = mysqli_query($conn, $query);
    if ($test) {
      header("Location: post.php?message");
    } else {
      die("Error:" . mysqli_error($conn));
    }
  }
  if (isset($_POST['updatepost'])) {
    $Id = $_POST["Id"];
    $Name = $_POST["Name"];
    $query = "UPDATE `post` SET `Name`='$Name' WHERE `Id`='$Id'";
    $test = mysqli_query($conn, $query);
    if ($test) {
      header("Location: post.php");
    } else {
      die(mysqli_error($conn));
    }
  }
  
  if (isset($_GET['Id'])) {
    $Id = $_GET['Id'];
    $query = "DELETE FROM `post` WHERE Id=$Id";
    $test = mysqli_query($conn, $query);
    if ($test) {
      header("Location: post.php");
    } else {
      die("error" . mysqli_error($conn));
    }
  }
  if (isset($_POST['newcandidatesresult']))  {
    $Id=$_POST['Id'];
    $FirstName= $_POST["FirstName"];
    $LastName= $_POST["LastName"];
    $Gender= $_POST["Gender"];
    $DateOfBirth= $_POST["DateOfBirth"];
    // $postid= $_POST["postid"];
    $ExamDate= $_POST["ExamDate"];
    $PhoneNumber= $_POST["PhoneNumber"];
    $Marks= $_POST["Marks"];
    $query = "INSERT INTO `candidatesresult`(`FirstName`,`LastName`,`Gender`,`DateOfBirth`
    , `ExamDate`,`PhoneNumber`,`Marks`)
     VALUES ('$FirstName','$LastName','$Gender','$DateOfBirth',
     '$ExamDate','$PhoneNumber','$Marks')";
    $test = mysqli_query($conn, $query);
    if ($test) {
      header("Location: candidatesresult.php?message");
    } else {
      die("Error:" . mysqli_error($conn));
    }
  }
  if (isset($_POST['updatecandidatesresult'])) {
    $Id=$_POST['Id'];
    $FirstName= $_POST["FirstName"];
    $LastName= $_POST["LastName"];
    $Gender= $_POST["Gender"];
    $DateOfBirth= $_POST["DateOfBirth"];
  
    $ExamDate= $_POST["ExamDate"];
    $PhoneNumber= $_POST["PhoneNumber"];
    $Marks= $_POST["Marks"];
    $query = "UPDATE `candidatesresult` SET `FirstName`='$FirstName',`LastName`='$LastName',
    `Gender`='$Gender',`DateOfBirth`='$DateOfBirth',
    `ExamDate`='$ExamDate',`PhoneNumber`='$PhoneNumber',`Marks`='$Marks', WHERE `Id`='$Id'";
    $test = mysqli_query($conn, $query);
    if ($test) {
      header("Location: candidatesresult.php");
    } else {
      die(mysqli_error($conn));
    }
  }
  
  if (isset($_GET['Id'])) {
    $Id = $_GET['Id'];
    $query = "DELETE FROM `candidatesresult` WHERE Id=$Id";
    $test = mysqli_query($conn, $query);
    if ($test) {
      header("Location: candidatesresult.php");
    } else {
      die("error" . mysqli_error($conn));
    }
  }
?>