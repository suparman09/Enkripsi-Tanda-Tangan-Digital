<?php 
if(isset($_POST['img_data'])) {
    // Mendekode data gambar dari base64
    $imagedata = $_POST['img_data'];
    $imagedata = base64_decode($imagedata);

    // Mengirimkan kembali data gambar terenkripsi sebagai respons
    echo $imagedata2=base64_encode($imagedata);
} else {
    // Jika data gambar tidak ditemukan, kirim pesan kesalahan
    echo "Data gambar tidak ditemukan.";
}
?>