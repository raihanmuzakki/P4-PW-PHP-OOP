<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tugas 4</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
      <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
      <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
      <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="layout-top-nav bg-light
<div class="wrapper">
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link text-primary" href="#">WEB02</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-primary" href="#">Review PHP</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-primary" href="#">PHP5 OOP</a>
          </li>
        </ul>

        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <div>
              <form class="form-inline">
                <div class="input-group input-group-sm pt-1">
                  <input class="form-control form-control-navbar bg-light" type="search"
                    aria-label="Search"> &nbsp
                  <div class="input-group-append">
                  <input id="text1" type="submit" style="color:blue">
                    </button>
                  </div>
                </div>
              </form>
            </div>
      </div>
    </nav>
    <hr class="mt-0">

    <div class="content-wrapper">
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 border border-dark">
              <div class="content-header">
                <div class="container-fluid">
                  <div class="row mb-2">
                    <div class="col-sm-6">
                      <h3 class="m-0">Form Nilai Ujian</h3>
                    </div>
                    <hr> 
                    <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                      </ol>
                    </div>
                  </div>
                </div>
              </div>
            
              <div class="content">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-md-12">
                      <form method="POST" action="data_nilaimahasiswa.php" autocomplete="off">
                        <div class="form-group row">
                          <label for="nim" class="col-4 col-form-label text-right">NIM</label>
                          <div class="col-4">
                            <input id="nim" name="nim" placeholder="NIM" type="number" class="form-control"
                              required="required">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="select" class="col-4 col-form-label text-right">Pilih MK</label>
                          <div class="col-4">
                            <select id="select" name="matkul" class="custom-select" required="required">
                              <option value="Pemweb">Pemrograman Web</option>
                              <option value="Jaringan Komputer">Jaringan Komputer</option>
                              <option value="PPKN">PPKN</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="nilai" class="col-4 col-form-label text-right">Nilai</label>
                          <div class="col-2">
                            <input id="nilai" name="nilai" placeholder="Nilai" type="number"
                              class="form-control" required="required">
                          </div>
                        </div>
                        <div class="form-group row text-left">
                          <div class="offset-4 col-8">
                            <button name="proses" type="submit" class="btn btn-success">Simpan</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 pt-3">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-7 text-center pt-4 pb-4">
                      <?php
                        if(isset($_POST['proses'])) {
                        $nim = $_POST['nim'];
                        $mata_kuliah = $_POST['matkul'];
                        $nilai = $_POST['nilai'];

                        switch($mata_kuliah){
                            case "PEMWEB": 
                                $nama_kuliah = "Pemograman Web"; 
                                break;
                            case "Jaringan Komputer": 
                                $nama_kuliah = "Jaringan Komputer"; 
                                break;
                            case "PPKN": 
                                $nama_kuliah = "PPKN"; 
                                break;
                            default: "";
                        };
                        echo 'NIM : '.$nim;
                        echo '<br/>Mata Kuliah : '.$nama_kuliah;
                        echo '<br/>Nilai : '.$nilai;
                        
                        $mahasiswa = new NilaiMahasiswa($nama_kuliah, $nilai, $nim);
                        echo '<br/>Grade : '.$mahasiswa->grade();
                        echo '<br/>Hasil Ujian : '.$mahasiswa->hasil();

                        }else{
                            echo '<div class="alert alert-danger" role="alert"> Silahkan Isi Form Diatas Untuk Menampilkan Nilai, Grade dan Predikat </div>';
                        }
                        ?>
                    </div>
                    <div class="col-md-3">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 pt-2">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="main-footer">
      <div>
      <b>Lab Pemrograman Web Lanjutan<b>
        <br/>
        <p>Dosen: Sirojul Munir S.Si,M.Kom <br> STT-NF - Kampus B</p>
      </div>
    </footer>
  </div>
  <script src="plugins/jquery/jquery.min.js"></script>
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="dist/js/adminlte.min.js"></script>
</body>
</html>