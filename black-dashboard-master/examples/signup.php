<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      .signup{
        margin-top: 1rem;
        border: 2px solid black;
        border-radius: 1rem;
        background-color: black;
      }
    </style>
</head>
<body>
    <?php include "head.php" ?>
    <?php include "navbar.php" ?>
    <?php 
    echo '
    <div class="container signup">
     <form action="signup_handal.php" method="post">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">User name</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="username" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">Well never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="pass">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Conform Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="cpass">
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
    </div>
    <button type="submit" class="btn btn-seondary">Submit</button>
  </form>
  </div>';
    ?>
    <?php include "footer.php" ?>
    
</body>
</html>