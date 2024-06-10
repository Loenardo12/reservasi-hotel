<html>
  <head>
    <meta charset="utf-8" />
    <title>service</title>
    <link href="service.css" rel="stylesheet" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  </head>
  <body>
    <nav>
      <a href="index.php">Home</a>
      <a href="signin.php">sign in</a>
      <a href="service.php">service</a>
      <a href="contact.php">Contact Us</a>
    </nav>
    <div id="contact" class="formBtn">Contact</div>
    <div id="contactForm">
      <h1 style="margin-bottom: 10px">Keep in touch</h1>
      <form action="#">
        <input placeholder="Name" type="text" required />
        <input placeholder="Email" type="email" required />
        <input placeholder="Subject" type="text" required />
        <input placeholder="Message" />
        <button class="formBtn" type="submit">Submit</button>
      </form>
    </div>
    <script src="/js/main.js"></script>
  </body>
</html>
