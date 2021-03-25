<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Data Pemantaun Covid19 Wilayah Jawa Barat</title>
    <style>
    form{
      background-color:bisque;

    }
      .box{
        padding: 30px 40px;
        border-radius: 5px;
      }
      .layanan{
        font-weight: bold;
      }
      .gif{
        font-family: "Arial Black", Gadget, sans-serif;
        color: red;
      }
    </style>
  </head>
  <body>
  <form action="" method="post">
    <table>
      <tr>
          <td for="wilayah">Nama Wilayah </td>
          <td>:</td>
          <td>
          <select name="wilayah" id="wilayah" required>
            <option value="" disabled selected>Pilih Wilayah</option>
            <option value="DKI Jakarta">DKI Jakarta</option>
            <option value="Jawa Barat">Jawa Barat</option>
            <option value="Banten">Banten</option>
            <option value="Jawa Tengah">Jawa Tengah</option>
          </select>
          <td>
        </tr>
        <tr>
         <td for="Positif">Jumlah Positif</td>
         <td>:</td>
         <td>
          <input type="text" name="positif" id="positif" required>
        </tr>
        <tr>
         <td for="Dirawat">Jumlah Dirawat</td>
         <td>:</td>
         <td>
          <input type="text" name="dirawat" id="dirawat" required>
        </tr>
        <tr>
         <td for="Sembuh">Jumlah Sembuh</td>
         <td>:</td>
         <td>
          <input type="text" name="sembuh" id="sembuh" required>
        </tr>
        <tr>
         <td for="Meninggal">Jumlah Meninggal </td>
         <td>:</td>
         <td>
          <input type="text" name="meninggal" id="meninggal" required>
        </tr>
        <tr>
         <td for="Operator">Nama Operator </td>
         <td>:</td>
         <td>
          <input type="text" name="operator" id="operator" required>
        </tr>
        <tr>
         <td for="NIM">NIM Mahasiswa</td>
         <td>:</td>
         <td>
          <input type="text" name="nim" id="nim" required>
        </tr>
        <td>
      <button type="submit" name="submit" class="btn-submit">SUBMIT</button>
  </table>
  </form>
  </div>
  <?php 
    if(isset($_POST["submit"])){
      $wilayah = $_POST["wilayah"];
      $positif = $_POST["positif"];
      $dirawat = $_POST["dirawat"];
      $sembuh = $_POST["sembuh"];
      $meninggal = $_POST["meninggal"];
      $operator = $_POST["operator"];
      $nim = $_POST["nim"];
  ?>
    <!--Jumbotron-->
    <div class="jumbotron jumbotron-fluid bg-info text-white">
        <div class="container text-center">
            <h1 class="display-4">Data Pemantauan Covid-19 Wilayah <?php echo $wilayah; ?></h1>
            <?php
              echo date('d F Y h:i:s',time())
            ?>
            <p class="lead">
              <h3><?php echo $operator.'/'.$nim; ?></h3>

            </p>
        </div>
    </div>
    <!--Akhir Jumbotron-->
    <!--isi-->
    <div class="container text-white">
      <div class="row">
        <div class="col-md-3">
          <div class="bg-secondary box">
            <div class="row ">
              <div class="col-md-6">
                <h5>Positif</h5>
                <h2 id="data-kasus"><?php echo $positif;?></h2>
                <h5>Orang</h5>
              </div> 
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="bg-warning box">
            <div class="row ">
              <div class="col-md-6">
                <h5>Dirawat</h5>
                <h2 id="data-dirawat"><?php echo $dirawat; ?></h2>
                <h5>Orang</h5>
              </div> 
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="bg-success box">
            <div class="row ">
              <div class="col-md-6">
                <h5>Sembuh</h5>
                <h2 id="data-sembuh"><?php echo $sembuh; ?></h2>
                <h5>Orang</h5>
              </div> 
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="bg-danger box">
            <div class="row ">
              <div class="col-md-6">
                <h5>Meninggal</h5>
                <h2 id="data-mati"><?php echo $meninggal; ?></h2>
                <h5>Orang</h5>
              </div> 
            </div>
          </div>
        </div>
      </div>

    </div>
    <br>
    <br>
    <!--Akhir Dari isi-->

    <!--Info Layanan-->
    <ul>
    <div class="layanan" >
      Pusat Layanan COVID-19
    </div><br>
    <button type="button" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="119"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
    </svg>
      119
    </button>
    <button type="button" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="(021)-5210-411"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
    </svg>
      (021)-5210-411
    </button>
  </ul>
    <!--Akhir Info Layanan-->
    <div class="gif text-center">
      <ul>
        <div id="2">JANGAN PANIK!</div>
        <div id="2">Bersama Kita Cegah Penyebaran COVID-19.</div>
    </ul>
    </div>

    <!--footer-->
    <footer class="bg-secondary text-center text-white mt-3 bt-2 pb-2">
      Create by.Zeti Afifah
    </footer>
    <!--akhir footer-->
    <?php
    }
    ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
<!-- contoh perubahan -->
