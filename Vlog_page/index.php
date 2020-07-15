<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Vlogpage</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
</head>
<body>

<div class="header">
  <h2>vlog Page</h2>
</div>
<div class="content">
    <!-- notification message -->
    <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
      <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
      <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
<div id="main-content" class="container">
        <div id="upload_vlog" class="vertical-center">
                    <section>
                        <div class="input-group" class="vertical-center">
                            <button type="submit" class="btn" name="upload_vlog" class="text-center" style="text-align: center"><p><a href="upload.php">Upload vlog</a></p></button>
                        </div>
                       
                    </section>
            </div>
            <div id="about_vlog" align="text-center">
                    <section>
                       <div class="input-group">
                            <button type="submit" class="btn" name="about_vlog"><p align="text-center"><a href="https://en.wikipedia.org/wiki/Vlog">About vlog</a></p></button>
                        </div>
                        
                    </section>
            </div>
    </div>
</body>
</html>