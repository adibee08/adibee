<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet" >
  </head>
  <body>
 
<!-- Hero section -->
<?php include 'navbar.php' ?>

  <section id="hero" class="mb-3">
    <div class="container mt-3">
      <div class="row">
        <div class="col-lg-6">
          <h1 class="mt-5">Penyediaan jasa perjalanan <br>SMK ISFI Banjarmasin</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam cum id consequuntur cupiditate dignissimos minus at totam ab blanditiis neque facilis, molestiae beatae veniam quo.</p>

          <a href="#paket" class="btn btn-md btn-primary px-5">Pilih Paket</a>
        </div>
        
        <div class="col-lg-6"> <br>
        <br>
        <img src="../assets/img/lugu.png" alt="" class="img-fluid mx-auto d-block" width="200">
        </div>
      </div>
    </div>
  </section>
  <br>
  <br>

  <section class="SiTentang section-padding" id="Tentang">
        <div class="container">
          <div class="row">
            <div class="col-6">
                <h3>SiAntares Giude</h3>
                <span style="display:block; width:100%; border-style:solid;border-color:;border-width: 1px 0 0 0;" class=""></span>
            </br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat illo maiores amet doloribus ex ad blanditiis molestias vero nisi repellat tempore ipsam dignissimos, enim distinctio natus modi magni? Quibusdam quis, excepturi velit consequatur itaque perspiciatis necessitatibus provident doloribus nostrum beatae rem autem cupiditate quos vel fugit omnis numquam ab quia?</p>\
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti numquam officiis quod nam, voluptatibus minima temporibus nisi in possimus vel natus reiciendis earum a omnis sapiente. Illum natus laudantium maiores quaerat suscipit quisquam neque sint perspiciatis provident soluta? Molestias sunt vel necessitatibus consequuntur excepturi sequi numquam explicabo ad quibusdam dolore.</p>  
              </div>
            <div class="col-lg-6">
                <img src="../assets/img/esopot1.jpeg" alt="Ice" class="img-fluid" style="width: 400px; height: 500px;">
            </div>
           </div>
        </div>
        <br>
        <br>
      </section>
      <section class="Step section-padding">
        <div class="container">
          <div class="row">
            <div class="col-4">
                <img src="../assets/img/esopot3.jpg" alt="Ice" class="img-fluid" style="width: 650px; height: 550px;">
            </div>
            <div class="col-8">
              <h3>Our Checkpoint</h3>
              <span style="display:block; width:100%; border-style:solid;border-color:;border-width: 1px 0 0 0;" class=""></span>
            </br>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima sint beatae rem labore similique officia necessitatibus velit mollitia ab excepturi obcaecati cum delectus eius voluptate dolorum modi doloribus illo, vero veritatis repellendus numquam quae? Dolor illum nihil voluptate consequatur? Id cupiditate quis sunt et dolorem, hic delectus minus! Commodi, ipsam.</p> 
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae temporibus alias cupiditate similique pariatur ipsam? Dolor recusandae nihil enim repellat eius. Suscipit eius natus voluptatem.</p>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure in officiis cupiditate nam explicabo? Quaerat delectus consequuntur provident praesentium libero laudantium officia autem doloribus quae!</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam adipisci error quia cum, minus debitis dignissimos neque sunt alias accusamus sapiente vero dolores, nulla harum. Aut minima officia eos aliquid inventore. Sint ullam odio nobis tempore et. Autem accusamus nulla illo pariatur rem unde voluptatibus, aspernatur veniam impedit similique natus consectetur? Nemo earum, ut et laudantium possimus distinctio obcaecati excepturi praesentium illo sint corrupti nam voluptate quis, fugit corporis porro?</p> 
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa a corporis ut quo, consequatur natus aperiam accusantium nisi consectetur laboriosam!</p>
            </div>
           </div>
        </div>
      </section>

  <section id="paket">
    <div class="container my-5">
      <h3 class="text-center mb-3">Daftar Paket</h3>
      <div class="row justify-content-center">

            <div class="row">
                <?php
                   require "../data/produk.php";
                   foreach ($perjalanan as $index => $value) {
                    // var_dumb($index);
                    // var_dumb($value);s
                ?>
                
                  <div class="col-5 col-md-12 col-lg-3">
                    <div class="card text-light text-center bg-white pb-3">
                      <div class="card-body text-dark">
                        <img src="../assets/img/<?=$value[3]?>" alt="" class="img-fluid " height="50">
                          <h3 class="card-tittle">
                            <h5><?= $value[0]?></h5>
                            <p><?= $value[1] ?></p>
                            <h5>Rp. <?= number_format($value[2], 0, '.', ',') ?></h5>
                            <!-- index mengambil dari variabel index di atas-->
                          <a href="transaksi.php?id=<?= $index ?>" class="btn btn-dark">pilih</a>   
                      </div>
                   </div>
                  </div>
                  <?php } ?> 
            </div>
        <br>
      </div>
    </div>
  </section>
  <section class="barista section-padding" id="Barista">
        <div class="container">
          <div class="row">
            <div class="col text-center">
              <h3>Sitourguide</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid consequatur ducimus minus libero? Dolore, distinctio!</p>
            </div>
          </div>
          <div class="row">
            <div class="col-3 text-center">
                <div class="card">
                  <div class="card-body">
                    <img src="../assets/img/oom.jpg" class="img-fluid rounded-circle" style="width: 200px; height: 200px;">
                    <h4>Oom Fajri</h4>
                    <p>The Magician</p>
                    <a href="https://www.instagram.com/" i class="bi bi-instagram"></i></a>
                    <a href="https://id.pinterest.com/adibnurr/" i class="bi bi-pinterest"></i></a>
                  </div>
                </div>
            </div>
            <div class="col-3 text-center">
              <div class="card">
                <div class="card-body">
                  <img src="../assets/img/enal.jpg" class="img-fluid rounded-circle" style="width: 200px; height: 200px;">
                  <h4>Abang Enal</h4>
                  <p>El Matador</p>
                  <a href="https://www.instagram.com/adibnoerrahman/" i class="bi bi-instagram"></i></a>
                  <a href="https://id.pinterest.com/adibnurr/" i class="bi bi-pinterest"></i></a>
                </div>
              </div>
          </div>
          <div class="col-3 text-center">
            <div class="card">
              <div class="card-body">
                <img src="../assets/img/akhay.jpg" class="img-fluid rounded-circle" style="width: 200px; height: 200px;">
                <h4>Adibe</h4>
                <p>Gran Maestro</p>
                <a href="https://www.instagram.com/adibnoerrahman/" i class="bi bi-instagram"></i></a>
                <a href="https://id.pinterest.com/adibnurr/" i class="bi bi-pinterest"></i></a>
              </div>
            </div>
        </div>
        <div class="col-3 text-center">
          <div class="card">
            <div class="card-body">
              <img src="../assets/img/aldo.jpg" class="img-fluid rounded-circle" style="width: 200px; height: 200px;">
              <h4>aa Ado</h4>
              <p>Mr.Pes 5-0</p>
              <a href="https://www.instagram.com/adibnoerrahman/" i class="bi bi-instagram"></i></a>
              <a href="https://id.pinterest.com/adibnurr/" i class="bi bi-pinterest"></i></a>
            </div>
          </div>
        </div>
        </div>
      </section>

<?php
include 'footer.php';
?>
