
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>My Landing Page</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" >
    <title>landing</title>
   
  </head>
  <body>
    <header>hotel</header>
    <nav>
      <a href="index.php">Home</a>
      <a href="signin.php">sign in</a>
      <a href="service.php">service</a>
      <a href="contact.php">Contact Us</a>
      <a href=""
        ><div class="theme-switch">
          <input type="checkbox" class="checkbox" id="checkbox" />
          <label for="checkbox" class="label">
            <ion-icon name="partly-sunny-outline" class="sun"></ion-icon>
            <ion-icon name="moon-outline" class="moon"></ion-icon>
            <div class="switcher"></div>
          </label></div
      ></a>
    </nav>

    <main>
     
      <!-- <h2>About Me</h2>
        <p>Nikmati Kemewahan dan Kenyamanan Tak Tertandingi di hotel kami</p> -->
    <section class="people" id="stakeholders">
      <div class="stakeholders">
        <div class="persons">
          <div class="person-1">
            <img
              src="https://3dbrute.com/wp-content/uploads/2023/02/1114981-02-2023-300x300.jpg"
              alt="John Doe"
            />
            <p class="name">single</p>
            <p class="role">bad</p>
          </div>
          <div class="person-2">
            <img
              src="https://s.alicdn.com/@sc04/kf/H64ce6258c996460c957a13e528fb82deT.jpg_300x300.jpg"
              alt="Jane Doe"
            />
            <p class="name">Fasilitas yang lengkap</p>
            <p class="role"></p>
          </div>
          <div class="person-3">
            <img
              src="https://www.hotel-saint-malo-ladresse.com/wp-content/uploads/2023/03/slide-chambre-double-signature-300x300.jpg"
              alt="John Doe Jnr"
            />
            <p class="name">Double</p>
            <p class="role">Bed</p>
          </div>
        </div>
      </div>
    </section>
    <div class="slides">
      <div class="slide">
        <img
          src="https://3dbrute.com/wp-content/uploads/2023/02/1114981-02-2023-300x300.jpg"
          alt=""
        />
      </div>
      <div class="slide">
        <img
          src="https://s.alicdn.com/@sc04/kf/H64ce6258c996460c957a13e528fb82deT.jpg_300x300.jpg"
          alt=""
        />
      </div>
      <div class="slide">
        <img
          src="https://www.hotel-saint-malo-ladresse.com/wp-content/uploads/2023/03/slide-chambre-double-signature-300x300.jpg"
          alt=""
        />
      </div>
      <div class="navigation">
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(-1)">&#10095;</a>
      </div>
    </div>

        <h2>the hotel</h2>
        <p>
          Manjakan diri Anda dengan pengalaman menginap mewah di penginapan kami
          . Hotel bintang [jumlah bintang] kami menawarkan kamar yang luas dan
          elegan, pelayanan kelas dunia, serta fasilitas premium seperti.
        </p>
        <ul>
          <li>spa</li>
          <li>kolam renang</li>
          <li>restoran</li>
          <li>dan lainya</li>
        </ul>
      

    </main>
    <section class="about" id="about">
      <h3>Reservasi Hotel</h3>
      <p>
        Pamper yourself with a luxurious stay at the same accommodation. Our
        5-star hotel offers spacious and elegant rooms, world-class service, as
        well as premium facilities such as a spa, swimming pool, etc.
      </p>

    <footer>&copy; Landing Page 2024</footer>
      <h3>Enjoy the Facilities</h3>
      <p>Enjoy Unrivaled Luxury and Comfort at our hotel.</p>
    </section>
  </body>
  <script>
    const checkbox = document.querySelector("#checkbox");

    checkbox.addEventListener("change", () => {
      // Toggle website theme
      document.body.classList.toggle("dark");
    });
  </script>
  <script>
    var slideIndex = 1;
    showSlides(slideIndex);
    function plusSlides(n) {
      showSlides((slideIndex += n));
    }
    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("slide");
      if (n > slides.length) {
        slideIndex = 1;
      }
      if (n < 1) {
        slideIndex = slides.length;
      }
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slides[slideIndex - 1].style.display = "block";
    }
  </script>
  <script src="index.js"></script>
  </html>