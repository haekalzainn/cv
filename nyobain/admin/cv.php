<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cv Haekal</title>
</head>
<style> table {
    width: 75%; 
    margin-left: 15%; 
  }
  td{
  color:#F8943F;
  }
  h1{
    margin-left: 35%;
    color:#F8943F;
  }
  img.poto{
    margin-left: 50%;
  }
  .background{
    background-color: white;
  }
  </style>
<body>
    <?php 
    session_start();
    if($_SESSION['status']!="login"){
      header("location:../index.php?pesan=belum_login");
    }
    ?>
   
    <h4>Selamat datang, <?php echo $_SESSION['username']; ?>! anda telah login.</h4>
   
    <br/>
    
   
    
  <div class="background">
   <table>
  <tr>
  <td><img src="img/btpn.png" alt="Logo BTPN Syariah"></td>
  <td>About Us</td>
  <td>Product</td>
  <td>Investor Relation</td>
  <td>News & Media</td>
  <td>Contact Us</td>
  </table>
    <br><br>
    <h1>Data Diri</h1>
    <table >
      <tr>
      <td><img class="poto" src="img/haekal.jpg" width="250px" height="250px"/></td>
      </tr>
      <tr></tr><tr></tr>
      <tr>
      <td><b>Nama Lengkap</b></td>
      <td>:</td>
      <td>Haekal Zainputra Salahuddin</td>
      </tr>
      
      <tr>
      <td><b>Nama Panggilan</b></td>
      <td>:</td>
      <td>Haekal</td>
      </tr>

      <tr>
      <td><b>Tempat, Tanggal Lahir</b></td>
      <td>:</td>
      <td>Jakarta,19 Oktober 1998</td>
      </tr>

      <tr>
      <td><b>Umur</b></td>
      <td>:</td>
      <td>21 Tahun</td>
      </tr>

      <tr>
      <td><b>Jenis Kelamin</b></td>
      <td>:</td>
      <td>Laki - Laki</td>
      </tr>

      <tr>
      <td><b>Hobi</b></td>
      <td>:</td>
      <td>Badminton,Sepakbola,Futsal</td>
      </tr>

      <tr>
      <td><b>Agama</b></td>
      <td>:</td>
      <td>Islam</td>
      </tr>

      <tr>
      <td><b>Alamat</b></td>
      <td>:</td>
      <td>Bekasi Utara</td>
      </tr>
      <tr>
          <td><b>Motto Hidup</b></td>
          <td>:</td>
          <td>"Usaha + Doa = Hasil"</td>
          </tr>
    </table>
    <a href="logout.php" style="float: right;" >LOGOUT</a>
  </div>

</body>
</html>



  