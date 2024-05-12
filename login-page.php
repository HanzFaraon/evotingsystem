<?php
  	session_start();
    
  	if(isset($_SESSION['admin'])){
    	header('location: admin/home.php');
  	}

    if(isset($_SESSION['voter'])){
      header('location: home.php');
    }
?>

<?php include 'includes/header.php'; ?>

<body class="hold-transition login-page">
<link rel="stylesheet" href="assets/css/login-page.css">
        <br>
        <br>
        <br>
        <!--<div class="login-logo login">
            <b>Electric Voting System</b>
        </div>

        <form action="login.php" method="POST">
        <div class="container">
            <div class="card">
                <h2>Login</h2>
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control login-input" name="voter" placeholder="Voter's ID" required>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control login-input" name="password" placeholder="Password" required>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-success">Login</button> 
                    </div>
            </div>
        </form>-->


<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <b>Electric Voting System</b>
        </div>
    
        <div class="login-box-body">
            <p class="login-box-msg">Voter's Login</p>

            <form action="login.php" method="POST">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control login-input" name="voter" placeholder="Voter's ID" required>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control login-input" name="password" placeholder="Password" required>
                </div>
                <div class="row">
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-success btn-block btn-flat" name="login">Log In</button>
                    </div>
                </div>
            </form>
        </div>
        <?php
            if(isset($_SESSION['error'])){
                echo "
                    <div class='callout callout-danger text-center mt20'>
                        <p>".$_SESSION['error']."</p> 
                    </div>
                ";
                unset($_SESSION['error']);
            }
        ?>
    </div>
	
    <?php include 'includes/scripts.php' ?>
</body>
</html>