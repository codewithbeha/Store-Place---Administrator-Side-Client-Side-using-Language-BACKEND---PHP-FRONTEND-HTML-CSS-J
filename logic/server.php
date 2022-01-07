<?php
session_start();

// inicializimi vetiak i variablave
$username = "";
$email    = "";
$errors = array(); 

// konektimi i te dhenave ne databaze
$db = mysqli_connect('localhost', 'root', '', 'crud_db');

// regjistrimi i userit
if (isset($_POST['reg_user'])) {
  // marrja e krejt vlerave input nga forma 
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // forma e validimit
  // duke perdorur (array_push()) corresponding error into $errors array
  if (empty($username)) { array_push($errors, "Username is required need a valide username"); }
  if (empty($email)) { array_push($errors, "Email is required need a valide email with @gmail.com"); }
  if (empty($password_1)) { array_push($errors, "Password is required need upp 6 characters and down 20 characters"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // Mas pari kontrollon ne databaze per tu siguruar se
  // ky user nuk egziston me username ose email te njejt
  $user_check_query = "SELECT * FROM user WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // nese useri egziston
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Permes ketu behet regjistrimi final i userit nese nuk ka errors
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt - enkriptimi i passwordit kur ruhet ne databaze

  	$query = "INSERT INTO user (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: ../views/index.php');
  }
}


// pjesa e USER LOGIN
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['username'] = $username;
          $_SESSION['success'] = "You are now logged in";
          header('location: ../views/index.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
  }
  
  ?>