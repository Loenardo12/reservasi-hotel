<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>login</title>
    <link rel="stylesheet" href="login.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="login.js" />
    
  </head>
  <body>
    <nav>
      <a href="index.html">Home</a>
      <a href="signin.html">sign in</a>
      <a href="service.html">service</a>
      <a href="contact.html">Contact Us</a>
    </nav>
    <div class="wrapper">
      <form action="entrylogin.php" method="post"  class="form">
        <h1 class="title">log in</h1>
        <div class="inp">
          <input
            type="text"
            name="nama"
            id=""
            class="input"
            placeholder="EMAIL/PHONE NUMBER"
            required
          />
        </div>
        <div class="inp">
          <input
            type="password"
            name="password"
            id=""
            class="input"
            placeholder="PASSWORD"
            required
          />
        </div>
        <button class="submit" name="simpan">Log In</button>
        <p class="footer">
          Belum punya akun? <a href="signin.html" class="link">registrasi</a>
        </p>
      </form>
      <div></div>
      <div class="banner">
        <h1 class="wel_text">Reservasi Hotel</h1>
        <br />
      </div>
    </div>
    <script>
      let docTitle = document.title;
      window.addEventListener("blur", () => {
        document.title = "Come Back Please";
      });
      window.addEventListener("focus", () => {
        document.title = docTitle;
      });
    </script>
  </body>
</html>
