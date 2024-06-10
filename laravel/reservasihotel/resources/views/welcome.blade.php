
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>My Landing Page</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
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

        <div class="cards-categories">
                <h2>Kategori Kucing</h2>
                <div class="card-categories">
                    @if (count($categories) == 0)
                        <h3 style="text-align: center; color: red;">Data Kosong</h3>
                    @endif
                    @foreach ($categories as $data)
                        <div class="card">
                            <div class="card-image">
                                <img src="{{ asset('img_categories/' . $data->gambar) }}" alt="tidak ada gambar" />
                            </div>
                            <div class="card-content">
                                <h5>{{ $data->nama }}</h5>
                                <p class="description">{{ $data->deskripsi }}</p>
                                <p class="price">{{ $data->harga }}</p>
                                <button class="btn_belanja" type="button"
                                    onclick='bukaModal({{ $data->id_categories }})'>Beli</button>
                            </div>
                        </div>
                        <!-- Modal 1 -->
                        <div id="myModal{{ $data->id_categories }}" class="modal-container"
                            onclick="tutupModal({{ $data->id_categories }})">
                            <div class="modal-dialog" onclick="event.stopPropagation()">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title " style="color:  #ffb72b;">Formulir Pembayaran</h1>
                                        <button type="button" class="btn-close" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <input type="hidden" name="category_id" id="category_id"
                                                value="{{ $data->id_categories }}">
                                            <div class="form-group">
                                                <label class="labelmodal" for="recipient-name">Nama :</label>
                                                <input class="inputdata" type="text" class="form-control"
                                                    id="recipient-name">
                                            </div>
                                            <div class="form-group">
                                                <label class="labelmodal" for="handphone">No. Hp :</label>
                                                <input class="inputdata" type="text" class="form-control"
                                                    id="handphone">
                                            </div>
                                            <div class="form-group">
                                                <label class="labelmodal" for="alamat-text">Alamat:</label>
                                                <textarea class="inputalamat" class="form-control" id="alamat-text"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            onclick="tutupModal({{ $data->id_categories }})">Keluar</button>
                                        <button type="button" class="btn btn-yellow"
                                            onclick="bukaModal2({{ $data->id_categories }})">Lanjutkan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal 2 -->
                        <div id="myModal2{{ $data->id_categories }}" class="modal-container"
                            onclick="tutupModal2({{ $data->id_categories }})">
                            <div class="modal-dialog" onclick="event.stopPropagation()">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title" style="color:  #ffb72b;">Data Transaksi</h1>
                                        <button type="button" class="btn-close" aria-label="Close"
                                            onclick="tutupModal2()"></button>
                                    </div>
                                    <form action="{{ route('transaction') }}" method="post">
                                        @csrf
                                        <div class="modal-body">
                                            <h4> Kategori</h4>
                                            <div class="form-group">
                                                <input type="hidden" name="id_categories"
                                                    value="{{ $data->id_categories }}">
                                                <label class="labelmodal" for="detail-kategori">Kategori :</label>
                                                <input class="inputdata" type="text" name="detail-kategori"
                                                    class="form-control" id="detail-kategori"
                                                    value="{{ $data->nama }}">
                                            </div>
                                            <div class="form-group">
                                                <label class="labelmodal" for="detail-harga">Harga :</label>
                                                <input class="inputdata" type="text" name="detail-harga"
                                                    class="form-control" id="detail-harga"
                                                    value="{{ $data->harga }}" readonly>
                                            </div>
                                            <h4>Pembeli</h4>
                                            <div class="form-group">
                                                <label class="labelmodal" for="detail-nama">Nama :</label>
                                                <input class="inputdata" name="detail-nama" type="text"
                                                    class="form-control" id="detail-nama" readonly>
                                                @error('detail-nama')
                                                    <p style="font-size: 10px; color: red">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label class="labelmodal" for="detail-nomorhp">No. Hp :</label>
                                                <input class="inputdata" name="detail-nomor" type="text"
                                                    class="form-control" id="detail-nomorhp" readonly>
                                                @error('detail-nomor')
                                                    <p style="font-size: 10px; color: red">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label class="labelmodal" for="detail-alamat">Alamat:</label>
                                                <textarea class="inputalamat" name="detail-alamat" class="form-control" id="detail-alamat" readonly></textarea>
                                                @error('detail-alamat')
                                                    <p style="font-size: 10px; color: red">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <input type="hidden" name="status" value="succes">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                onclick="kembaliKeModalPertama({{ $data->id_categories }})">Kembali</button>
                                            <button name="simpan" type="submit" class="btn btn-yellow"
                                                onclick="lakukanPembayaran()">Lakukan Pembayaran</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
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
  <script>
        function bukaModal(categoryId) {
            var modal = document.getElementById('myModal' + categoryId);
            modal.style.display = 'flex';
        }

        function tutupModal(categoryId) {
            var modal = document.getElementById('myModal' + categoryId);
            modal.style.display = 'none';
        }

        function bukaModal2(categoryId) {
            tutupModal(categoryId); // Tutup modal pertama
            var modal2 = document.getElementById('myModal2' + categoryId);
            modal2.style.display = 'flex';

            // Ambil nilai dari input fields pada modal pertama
            var modal1 = document.getElementById('myModal' + categoryId);
            var nama = modal1.querySelector("#recipient-name").value;
            var nomorhp = modal1.querySelector("#handphone").value;
            var alamat = modal1.querySelector("#alamat-text").value;

            // Set nilai pada modal kedua
            var modal2 = document.getElementById('myModal2' + categoryId);
            modal2.querySelector("#detail-nama").value = nama;
            modal2.querySelector("#detail-nomorhp").value = nomorhp;
            modal2.querySelector("#detail-alamat").value = alamat;

        }

        function tutupModal2(categoryId) {
            var modal2 = document.getElementById('myModal2' + categoryId);
            modal2.style.display = 'none';
        }

        function kembaliKeModalPertama(categoryId) {
            tutupModal2(categoryId);
            bukaModal(categoryId);
        }

        window.onclick = function(event) {
            if (event.target.classList.contains('modal-container')) {
                event.target.style.display = 'none';
            }
        };

        function lakukanPembayaran() {
            alert("Pembayaran berhasil!");
            tutupModal2();
            document.getElementById("recipient-name").value = "";
            document.getElementById("handphone").value = "";
            document.getElementById("alamat-text").value = "";
        }
    </script>
  </html>
