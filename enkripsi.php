

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Digital Signature with jQuery & Canvas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- navbar -->
<nav class="navbar navbar-expand-lg position-relative position-sticky top-0" style="background-color: #98ABEE; z-index:1">
  <div class="container d-flex d-flex justify-items-around">
    <div>
    <a class="navbar-brand" href="index.php">Digital Signature</a>
    </div>
    <div class="" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php"">Home</a>
        </li>
        <li class="nav-item bg-light rounded">
          <a class="nav-link active" href="enkripsi.php">Enkripsi</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="deskripsi.php">Deskripsi</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <!-- end navbar-->
    <section>
    <h2 class="mt-4">Digital Signature Encryption</h2>
    <!-- Formulir untuk mengirimkan tanda tangan -->
    <div class="signature-area bg-dark">
        <h2 class="title-area text-light">Tanda Tangan disini,</h2>
        <div class="sig sigWrapper" style="height:auto;">
            <div class="typed"></div>
            <canvas class="sign-pad" id="sign-pad" width="300" height="100"></canvas>
        </div>
    </div>
    <div class="container d-flex justify-content-around w-50">
    <button class="btn-save p-2 w-25 mr-4">Enkripsi</button>
    <button type="button" class="btn-clear w-25">Clear</button>
    </div>
    
    <div class="signature-container mt-4">
        <h5>Hasil Enkripsi :</h5>
                <form method="post" action="getTxt.php">
                <textarea name="txt" class="form-control" rows="8" id="comment"></textarea><br>
                <label class="text-dark">Salin untuk digunakan saat dekripi /</label>
                <button type="submit" class="btn btn-success" href="gettxt.php">Unduh .txt</button>
                </form>
    </div>
    </section>
    <footer>
      <p class="mt-5">Copyright &copy; 2024 - Digital Signature</p>
    </footer>
    

    <!-- Scripts disini -->
    <script src="./js/jquery.min.js"></script>
    <script src="./js/numeric-1.2.6.min.js"></script>
    <script src="./js/bezier.js"></script>
    <script src="./js/jquery.signaturepad.js"></script>
    <script src="./js/html2canvas.js" type='text/javascript'></script>
    <script src="./js/json2.min.js"></script>
    <script>
        $(document).ready(function() {
    $(".signature-area").signaturePad({
        drawOnly: true,
        drawBezierCurves: true,
        lineTop: 90
    });

    $(".btn-clear").click(function(e) {
        $(".signature-area").signaturePad().clearCanvas();
    });

    $(".btn-save").click(function(e) {
        html2canvas([document.getElementById('sign-pad')], {
            onrendered: function(canvas) {
                var canvas_data = canvas.toDataURL('image/png');
                var img_data = canvas_data.replace(/^data:image\/(png|jpg);base64,/, "");
                $.ajax({
                    url: 'script.php',
                    data: {
                        img_data: img_data
                    },
                    type: 'POST',
                    success: function(response) {
                        $(".signature-area").signaturePad().clearCanvas();
                        $('#comment').val(response);
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                        alert("Terjadi kesalahan saat mengirim data.");
                    }
                });
            }
        });
    });
});

    </script>
    <!-- bootsrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
