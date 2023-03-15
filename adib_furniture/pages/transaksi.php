<?php
// id di dapat dari url yang berada di atas yang di simpan ke dalam $id
    $id = $_GET["id"];
    // get untuk mengambil id yang di transferkan dari id di file sebelumnya//
    //echo $id;
    /** id akan di pakai untuk mencari index array */
    require "../data/produk.php";
?>
<!doctype html> 
<html lang="en"> 
    <head> 
<!-- Required meta tags --> 
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
    
        <link 
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384- 
            1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
<!-- MY Style --> 
        <link rel="stylesheet" href="../assets/css/style.css"> 
        <title>Transaksi</title> 
    </head> 
<body> 
<?php 
    include 'navbar.php'; 
   
    ?>
    </br>
</br>
<div class="container mt-4">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <div class="card">
          <div class="card-body">
            <h4 class="text-center mb-4">Transaksi</h4>

            <form action="" method="POST">
              <div class="mb-3">
                <label for="no-transaksi" class="form-label">No. Transaksi</label>
                <input type="text" class="form-control" id="no-transaksi" name="no-transaksi" value="<?= mt_rand() ?>" readonly>
               <!-- untuk membuat angka acak -->
              </div>
              <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal Transaksi</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" required>
              </div>
              <div class="mb-3">
                <label for="nama" class="form-label">Nama Customer</label>
                <input type="text" class="form-control" id="nama-customer" name="nama-customer" required>
              </div>
              <div class="mb-3">
                <label for="produk" class="form-label">Pilihan paket</label>
                <input type="text" class="form-control" id="produk" value="<?= $perjalanan[$id][0] ?>" readonly>
              </div>
              <div class="mb-3">
                <label for="harga" class="form-label">Harga Paket</label>
                <input type="text" class="form-control" id="harga" name="harga"  value="<?= $perjalanan[$id][2] ?>" readonly>
              </div>
              <div class="mb-3">
              <label for="harga" class="form-label">Jumlah</label>
              <input type="number" id="jumlah"  name="jumlah" class="form-control" />
            </div>
              <div class="my-2"> 
                <button type="button"  class="btn btn-sm btn-dark" onclick="hitungTotal()">Hitung Total Harga</button> 
            </div>

              <hr> 
    <div class="mb-2"> 
        <label for="total-harga" class="form-label">Total Harga</label> 
        <input type="text" name="total_harga" id="total_harga" class="form-control" readonly> 
    </div>
    <div class="row"> 
        <div class="col-6"> 
            <div class="mb-2">  
                <label for="pembayaran" class="form-label">Pembayaran</label> 
                <input type="text" name="pembayaran" id="pembayaran" class="form-control" required> 
            </div> 
            <button type="button" class="btn btn-sm btn-dark" onclick="hitungKembalian()">Hitung Kembalian</button> 
        </div>
        <div class="col-6"> 
            <div class="mb-2"> 
                <label for="kembalian" class="form-label">Kembalian</label> 
                <input type="text" name="kembalian" id="kembalian" class="form-control" readonly> 
            </div>
            <button type="button" class="btn btn-sm btn-dark w-100" onclick="simpan()">Simpan Transaksi</button> 
        </div> 
    </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
<br>
<?php 
include 'footer.php'; 
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min .js" integrity="sha384- 
                ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script> 
// HITUNG TOTAL HARGA 
        function hitungTotal() { 
        let harga = parseInt(document.querySelector("#harga").value);
        let jumlah = parseInt(document.querySelector("#jumlah").value); 
        let totalHarga = harga * jumlah; 
        document.getElementById("total_harga").value = totalHarga; 
} 

// HITUNG KEMBALIAN 
    function hitungKembalian() { 
        let total = parseInt(document.getElementById("total_harga").value); 
        let pembayaran = parseInt(document.getElementById("pembayaran").value); 
        if (pembayaran >= total) { 
        let kembalian = pembayaran - total; 
        document.getElementById("kembalian").value = kembalian; 
} else { 
alert("Uang Tidak Cukup"); 
} 
} 
/** 
 * 
 */
// SIMPAN TRANSAKSI 
    function simpan() { 
        alert('Data Berhasil Disimpan'); 
        window.location = 'home.php'; 
} 
    </script> 
    </body> 
</html>


 
     

 
 

     
 

 