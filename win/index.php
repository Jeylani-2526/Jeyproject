<?php
include './inc/index.php';
include './inc/form.php';

$sql = 'SELECT * FROM users ORDER BY RAND() LIMIT 1';
$res = mysqli_query($con, $sql);
$users = mysqli_fetch_all($res,MYSQLI_ASSOC);


mysqli_free_result($res);
mysqli_close($con);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>

 <div class="container">

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <img src="./images/bitmap.png" alt="this is my photo">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 fw-normal">WIN WITH JEYLANI</h1>
      <p class="lead fw-normal">the time left of signing in</p>
      <p id="countdown"></p>
      
    </div>
    </div>
    </div>

  <ul class="list-group list-group-flush">
  <li class="list-group-item">Go and watch the live in my instagram account in the date mentioned above</li>
  <li class="list-group-item">im going to start a live for an hour the live will be Q&A</li>
  <li class="list-group-item">in that hour of time you will register you full name and email</li>
  <li class="list-group-item">in the end of the live Randomly some one will be selected from the database</li>
  <li class="list-group-item">the winner we recieve a great gift</li>
</ul> 

<div class="position-relative  text-center">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
<form class="mt-5"  action="index.php" method="POST">
    <h3>Please enter your information</h3>

  <div class="mb-3">
    <label for="firstname" class="form-label">Firstname</label>
    <input type="text"  name="firstname" class="form-control" id="firstname" value="<?php echo $firstname ?>" >
    <div  class="form-text-error"><?php echo $errors['firstnameError'] ?></div>
    </div>

    <div class="mb-3">
    <label for="lastname" class="form-label">Lastname</label>
    <input type="text" name="lastname" class="form-control" id="lastname" value="<?php echo $lastname ?>"  >
    <div  class="form-text-error"><?php echo $errors['lastnameError'] ?></div>
    </div>

    <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="text" name="email" class="form-control" id="email" value="<?php echo $email ?>" >
    <div  class="form-text-error"><?php echo $errors['emailError'] ?></div>
    </div>

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>

<!-- 
<form>
    <input type="text" name="firstname" id="firstname" placeholder="first name"><br>
    <input type="text" name="lastname" id="lastname" placeholder="last name"><br>
    <input type="text" name="email" id="email" placeholder="email"><br>
    <input type="submit" name="submit" value="send"><br>
</form><br>  -->
 <br><br> 
 
 <!-- Button trigger modal -->
 <div class="d-grid gap-2 col-12 mx-auto my-5">
     <button id="winner" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal">
     Select the winner
        </button>
    </div>

    

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">The winner is</h5>
        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class=" modal-body">
      <?php foreach($users as $user): ?>
        <h1 class="display-3 text-center" id="modalLabel" ><?php echo htmlspecialchars($user['firstname']) . ' ' . htmlspecialchars($user['lastname']); ?></h1>
        <?php endforeach; ?> 

      </div>
    </div>
  </div>
</div>






    
</div>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="./js/index.js"></script>
</body>
</html>