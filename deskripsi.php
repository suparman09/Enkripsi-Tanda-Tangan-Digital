<!doctype html>
<html lang="en">
  <head>
    <title>Dekripsi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Style -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <!-- navbar -->
<nav class="container-fluid navbar navbar-expand-lg position-absolute position-sticky top-0" style="background-color: #98ABEE; z-index: 1">
  <div class="container d-flex d-flex justify-items-around">
    <div>
    <a class="navbar-brand" href="index.php">Digital Signature</a>
    </div>
    <div class="" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="enkripsi.php">Enkripsi</a>
        </li>
        <li class="nav-item bg-light rounded">
          <a class="nav-link active" href="deskripsi.php">Deskripsi</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<section class="">
    <!-- end navbar -->
    <div class="container-fluid bg-cover" id="dekripsi" style="margin-top:0px;">
      <div class="my-4 text-center ">
        <h3><b>DESKRIPSI GAMBAR</b></h3> 
      </div>
      <div class="col-md-12">
          <form method="post" enctype="multipart/form-data">
            
            <h5 style="text-align:left">Masukan ciphertext  :</h5>
              <div class="form">
                <div class="form-floating">
                <textarea class="form-control m-auto" placeholder="Leave a comment here" id="text" style="height: 50vh; width: 70vw;" name="teks" required></textarea>
                </div>
                <div class="d-grid gap-2 col-6 mx-auto my-4">
                <button class="btn btn-warning" type="submit" id="submit" name="submit">Deskripsi</button>
                </div>
              </div>
          </form>
        </div>
        
    </div>

    <!-- Hasil Dekripsi -->
    <div id="dekripsi" class="container-fluid" style="margin-top:0px; height: 60vh; background-color:#B4D4FF;" >
        <div class="col-md-12">
          <h5>Hasil Dekripsi :</h5>
          <hr>
          <?php
            if(isset($_POST['submit'])){
              $teks = @$_POST['teks'];
          ?>
          <br>
                <div style="height:30vh; width: 45vw;" class="container d-flex justify-content-center">
          <img style="" src="data:image/jpeg;base64,<?php echo $teks;?>" class = "signature-area" name="img">
          </div>
        </div>
          <?php
            }
          ?>        
      </div>
    </div>
    </section>
    <!-- end hasil dekripsi -->
    <footer style="background-color: #DCF2F1;">
      <p class="mt-5">Copyright &copy; 2024 - Digital Signature</p>
    </footer>
    </script>
    <!-- then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>