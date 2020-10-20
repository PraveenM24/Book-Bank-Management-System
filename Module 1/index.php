<html>

<head>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <title>Sign in</title>
</head>

<body>
  <?php
      require('db.php');
      session_start();
      // When form submitted, check and create user session.
      if (isset($_POST['username'])) {
          $username = stripslashes($_REQUEST['username']);    // removes backslashes
          $username = mysqli_real_escape_string($con, $username);
          $password = stripslashes($_REQUEST['password']);
          $password = mysqli_real_escape_string($con, $password);
          // Check user is exist in the database
          $query    = "SELECT * FROM `test-values` WHERE UserName='$username'
                       AND Password='$password'";
          $result = mysqli_query($con, $query) or die("Unable to connect");
          $rows = mysqli_num_rows($result);
          if ($rows == 1) {
              $_SESSION['username'] = $username;
              // Redirect to user dashboard page
              header("Location: ../Module 3/index.html");
          } else {
              echo "<div class='error-msg'>
                    <h3 style='text-align:center;'>Incorrect Username/password.</h3><br/>
                    <p class='link'>Click here to <a href='index.php' style='text-decoration:none;'>Login</a> again.</p>
                    </div>";
          }
      } else {
    ?>
  <div class="main">
    <p class="sign" align="center">Login</p>
    <form class="form1" action="" method="post">
      <input class="un " type="text" name="username" placeholder="Username" required></input>
      <input class="pass" type="password" name="password" placeholder="Password" required></input>
      <button class="submit" align="center"  type="submit">Sign in</button>
      <p class="Register" align="center">Not a user? <a class="Register" href="../Module 2/registration.php"><b>Register now.</b></p>
    </div>
    <?php
        }
    ?>
</body>
</html>
