<header class="main-header">
  <nav class="navbar bg-grey navbar-static-top voter-navbar">
    <div class="container">
      <div class="navbar-header">
        <a href="#" class="navbar-brand">
        <!--<img src="assets/img/neulogo.png" alt="logo-neu" width="30" height="30" class="d-inline-block align-text-top">-->
        <b>Electric Voting System</b>
        </a>
      </div>

      

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="user user-menu">
            <a href="#">Logged in as 
              <span class="hidden-xs"><b><?php echo $voter['firstname'].' '.$voter['lastname']; ?></b></span>
            </a>
          </li>
          <li><a href="logout.php"><b>Logout</b></a></li>  
        </ul>
      </div>
    </div>
  </nav>
</header>