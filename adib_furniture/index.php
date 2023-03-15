<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="/assets/bootstrap/css/login.css">
  </head>
  <body>

  <div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div>Site<span>Random</span></div>
		</div>
		<br>
		<div class="login">
        <form action="" method="POST">
                            
                            <div class="mb-2 text-center">
                                <input type="text" name="username" class="from-control" placeholder="Username" required></br>
                            </div>
                            <div class="md-5 text-center"><br>
                                <input type="password" name="password" class="from-control" placeholder="Password" required>   
                            </div>
                            <div class="text-center"><br>
                            <input type="submit" name="login" class="btn btn-primary" value="login">
                                
                            </div>
                        </form>
		</div>
		

<?php
    if (isset($_POST['login'])) {
        $username   = $_POST['username'];
        $password   = $_POST['password'];
        /**mengecek apakah login sudah di tekan atau belum */
        
        if ($username === "adib" && $password === "01"){
            echo "<meta http-equiv='refresh' content='1;url=pages/home.php'>";
        }
         else {
            echo "<script>alert('Login Gagal atau Salah')</script>";
        }
        /**kembali di percabangan data inputan tersimpan maka pengguna dapat memasuki halaman web dengan mengisi sesuai $username dan $password */
    }
?>
    
  </body>
</html>