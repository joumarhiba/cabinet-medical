<?php
  session_start();
  if (isset($_SESSION["username"])) {
    header("location:patients.php");
  }
  $Message = "";
  if (isset($_POST["user"])) {
    if (empty($_POST["user"]) || empty($_POST["password"])) {
      $Message = '<div style="color:red;text-align:center">All fields is required</div>';
    }else {
      include("connection.php");
      $un = $_POST["user"];
      $pw = sha1($_POST["password"]);
      $res = $con->prepare("SELECT username,pw from medecin where username = :un AND pw = :pw");
      $res->execute(array(':un'=>$un,':pw'=>$pw));
      $count =$res->rowCount();
      if ($count > 0) {
        $_SESSION["username"] = $_POST["user"];
        header("location:patients.php");
      }else {
        $Message = "username or password is incorrect";
      }
    }
  }


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <script src="https://kit.fontawesome.com/a7f2aae210.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./styles/login.css">
</head>
<body>
  <?php
  if (isset($ccc)) {
    echo $ccc;
  } 
  ?>
  <div class="login">
    <h1 class="heading2">Authentification</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
      <label for="user-name"><i class="fas fa-user"></i><input type="text" name="user" placeholder="User Name"></label>
      <label for="password"><i class="fas fa-key"></i><input type="password" name="password" placeholder="Password"></label>
      <div id="msg"><?php echo $Message ?></div>
      <input type="submit" value="Login">
    </form>
  </div>
</body>
</html>