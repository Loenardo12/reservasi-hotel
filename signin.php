<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>sign in</title>
    <link rel="stylesheet" href="signin.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="login.js" />
  </head>
  <body>
    <nav>
      <a href="index.php">Home</a>
      <a href="login.php">log in</a>
      <a href="service.php">service</a>
      <a href="contact.php">Contact Us</a>
    </nav>
    <div class="wrapper">
      <form action="signin-proses.php" method="post">
        <h1 class="title">sign in</h1>
        
        <div class="inp">
          <input
            type="username"
            name="username"
            class="input"
            placeholder="username"
            required
          />
         
         <div class="inp">
          <input
            type="password"
            name="password"
            class="input"
            placeholder="PASSWORD"
            required
          />
        </div>
       
      <div class="inp">
          <input
            type="text"
            name="email"
            class="input"
            placeholder="EMAIL"
            required
          />
        </div>

        <button class="submit" name="signin">sign in</button>
        <p class="footer">
          sudah punya akun? <a href ="login.php" class="link">log in</a>
        </p>
      </form>
   
      <div class="banner">
        <h1 class="wel_text">Reservasi Hotel</h1>
        <br />
      </div>
    </div>
  </body>
</html>
