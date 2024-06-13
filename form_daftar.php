<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulir Pendaftaran Karyawan Sambal Bakar| Jakarta</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="form_daftar.css" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg position-sticky top-0 shadow">
      <div class="container">
        <a class="navbar-brand" href="#"
          >Form Pendaftaraan Karyawan <span class="brand">Sambal </span><span class="LogoBrand text-secoundary">Bakar</span></a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse shadow bg-danger" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item ">
              <a class="text-secondary" href="index.php">Home</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section id="form" class="pb-4">
      <br /><br />
      <div class="container text-dark">
        <div
          class="row justify-content-center"
          data-aos="fade-up"
          data-aos-duration="1300"
        >
          <div class="col-md-6 pe-4 ps-4">
            <form action="proses-pendaftaran.php" method="POST">
              <div class="mb-3">
                <label for="nama" class="form-label">Nama lengkap :</label>
                <input
                  name="nama"
                  type="name"
                  class="form-control border-primary"
                  id="nama"
                  aria-describedby="nama" required minlength="3"
                />
              </div>
              <div class="mb-3">
                <label for="alamat" class="form-label">Alamat :</label>
                <textarea
                  name="alamat"
                  class="form-control input border-primary"
                  id="alamat"
                  rows="3"
                  style="box-shadow: 0px 0px 10px #ccc"
                  placeholder="isi alamat anda" required minlength="9"
                ></textarea>
              </div>
              <div class="mb-3">
                <label for="jenis_kelamin" class="form-label"
                  >Jenis kelamin :</label
                >
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="jenis_kelamin"
                    value="Laki-laki"
                    id="flexRadioDefault1"
                  />
                  <label class="form-check-label" for="flexRadioDefault1">
                    laki-laki
                  </label>
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="jenis_kelamin"
                    value="Perempuan"
                    id="flexRadioDefault2"
                    checked
                  />
                  <label class="form-check-label" for="flexRadioDefault2">
                    perempuan
                  </label>
                </div>
              </div>
              <div class="mb-3">
                <label for="job_desk" class="form-label" required>JOB DESK :</label>
                <select
                  class="form-select"
                  aria-label="Default select example"
                  name="job_desk"
                >
                  <option selected>Pelayan</option>
                  <option value="CEO">CEO</option>
                  <option value="GM">General Manager</option>
                  <option value="Kasir">Kasir</option>
                  <option value="Dishwasher">Dishwasher</option>
                  <option value="Chef">Chef</option>
                  <option value="Barista">Barista</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="pengalaman" class="form-label"
                  >Pengalaman</label
                >
                <input
                  name="pengalaman"
                  type="text"
                  class="form-control border-primary"
                  id="asal_sekolah"
                  aria-describedby="Pengalaman" required minlength="5"
                />
              </div>

              <div id="liveAlertPlaceholder"></div>
              <input
                class="btn btn-outline-primary"
                type="submit"
                value="Daftar"
                name="daftar"
                id="liveAlertBtn"
              />
            </form>
          </div>
        </div>
      </div>
      <br />
    </section>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
