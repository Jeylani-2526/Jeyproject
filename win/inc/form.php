<?php
if(!$con){
    echo 'Error: ' . mysqli_connect_error();
}
 
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$errors = [
    'firstnameError'=> '',
    'lastnameError'=> '',
    'emailError'=> '',

];
if(isset($_POST['submit']))
{
    
    

    if(empty($firstname)){
        $errors['firstnameError'] = 'First name is empty';
 }
 if(empty($lastname)){
    $errors['lastnameError'] = 'last name is empty';
 }
 if(empty($email)){
    $errors['emailError'] = 'email is empty';
 }
 else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    $errors['emailError'] = 'please enter valid email';
  } 
if(!array_filter($errors)){
    $firstname = mysqli_real_escape_string($con,  $_POST['firstname']);
    $lastname = mysqli_real_escape_string($con, $_POST['lastname']) ;
    $email = mysqli_real_escape_string($con, $_POST['email']) ;

    $sql = "INSERT INTO users(firstname, lastname, email)   VALUES('$firstname', '$lastname', '$email')";

    if(mysqli_query($con,$sql)){
        header('Location: index.php') ;
    }
    else{
        echo 'Error: ' . mysqli_error($con);
    }
}
}


 



?>