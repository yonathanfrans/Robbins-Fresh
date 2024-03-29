<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Robbins'Fresh</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  </head>
  <body class="login-page">
    <!-- Navbar judul -->
    <header>
      <nav class="navbar-login">
        <img src="./assets/img/Logo.png" alt="logo login">
        <div class="login-title">
          <a href="home.php">ICE <span>CREAM</span></a>
        </div>
      </nav>
    </header>
    
    <!-- Login -->
    <main>
      <section id="login">
        <div class="form-containers">
          <div class="login-img">
            <img src="./assets/img/login.png" alt="login image">
          </div>
          <div class="form-login">
            <div class="form-content" id="signin"> 
              <h2>Sign In</h2> 
              <?php
                if (isset($loginError)) {
                    echo "<p class='error-message'>$loginError</p>";
                }
              ?>
              <form action="process.php" method="post"> 

               <div class="inputBox"> 
                <span class="icon-form">
                  <i class='bx bx-user'></i>
                </span>
                <input type="text" name="username" required> 
                <label for="username">Username</label>
               </div> 
         
               <div class="inputBox">
                <span class="icon-form" id="showPasswordLogin">
                  <i class='bx bx-low-vision'></i>
                </span>      
                <input type="password" name="password" id="PasswordLogin" maxlength="8" required> 
                <label for="password">Password</label> 
               </div> 
         
               <div class="form-links"> 
                <a href="#">Forgot Password?</a> 
                <a href="#" id="registerLink">Register</a> 
               </div> 
        
               <div class="inputBox">
                <input type="submit" name="login" value="Login"> 
               </div> 

              </form> 
             </div> 

             <div class="form-content" id="signup"> 
              <h2>Sign Up</h2> 
              <?php
                  if (isset($registerError)) {
                      echo "<p class='error-message'>$registerError</p>";
                  }
              ?>
              <form action="process.php" method="post"> 

                <div class="inputBox"> 
                  <span class="icon-form">
                    <i class='bx bx-envelope'></i>
                  </span>
                  <input type="email" name="email" required> 
                  <label for="email">Email</label>
                 </div> 

               <div class="inputBox"> 
                <span class="icon-form">
                  <i class='bx bx-user'></i>
                </span>
                <input type="text" name="username" required> 
                <label for="username">Username</label>
               </div> 
         
               <div class="inputBox">
                <span class="icon-form" id="showPasswordRegister">
                  <i class='bx bx-low-vision'></i>
                </span>      
                <input type="password" name="password" id="PasswordRegister" maxlength="8" required> 
                <label for="password">Password</label> 
               </div> 
         
               <div class="form-links"> 
                <p>Already have an account? <a href="#" id="loginLink">Login</a></p> 
               </div> 
        
               <div class="inputBox">
                <input type="submit" name="register" value="Register"> 
               </div> 

              </form> 
             </div> 
          </div>
        </div>
      </section>
    </main>


    <!-- Script JS -->
    <script src="assets/js/script.js"></script>
  </body>
</html>
