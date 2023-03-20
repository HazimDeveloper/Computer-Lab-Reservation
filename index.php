<!DOCTYPE html>
<html>
<head>
<title>Laman Utama - STMK</title>
 <!-- Favicons -->
  <link href="pwnlogo.png" rel="icon">

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("sukselangor.jpg");
  min-height: 100%;
}

.w3-bar .w3-button {
  padding: 16px;
}
</style>
</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
   <img src = "pwnlogo.png" 
    <!-- Right-sided navbar links -->
    <div class="w3-centre w3-hide-small">
      <a href="login.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i> LOG MASUK</a>
      <a href="daftar.php" class="w3-bar-item w3-button"><i class="fa fa-address-card-o"aria-hidden="true"></i> DAFTAR PENGGUNA BARU</a>
      <a href="admin/login.php" class="w3-bar-item w3-button"><i class="fa fa-user-circle-o" aria hidden= "true"></i> ADMIN</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Tutup</a>
  <a href="logmasuk.php" onclick="w3_close()" class="w3-bar-item w3-button">Log Masuk</a>
  <a href="daftar.php" onclick="w3_close()" class="w3-bar-item w3-button">Daftar Akaun</a>
  <a href="admin/login.php" onclick="w3_close()" class="w3-bar-item w3-button">ADMIN</a>
	<p> 
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-left w3-text-white" style="padding:48px">
    <span class="w3-jumbo w3-hide-small">Sistem Tempahan Makmal Komputer</span><br>
	<
</header>

<!-- About Section -->
<div class="w3-container" style="padding:128px 16px" id="about">
  <h3 class="w3-center">Perbendaharaan Negeri Selangor</h3>
  <p class="w3-center w3-large">TINGKAT 2,8-12, BANGUNAN SULTAN SALAHUDDIN ABDUL AZIZ SHAH 40592, SHAH ALAM SELANGOR, MALAYSIA</p>
</div>

<!-- Team Section -->
<div class="w3-container" style="padding:128px 16px" id="team">
  <h3 class="w3-center">UNIT TEKNOLOGI MAKLUMAT</h3>
	<div class="w3-row-padding w3-grayscale" style="margin-top:64px">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
      
        <div class="w3-container">
          <h3>PUAN NUR NUHA BINTI MOHD YUSUFF</h3>
          <p class="w3-opacity">Penolong Pegawai Kewangan Negeri</p>
          <p>Email Rasmi: nurnuha@selangor.gov.my</p>
        </div>
      </div>
    </div>
    
  </div>
  
  <div class="w3-row-padding w3-grayscale" style="margin-top:64px">
    <div class="w3-col l3 m6 w3-margin-right">
      <div class="w3-card">
      
        <div class="w3-container">
          <h3>PUAN NUR FAZILA BINTI ABDUL RAHAMAN</h3>
          <p class="w3-opacity">Penolong Pegawai Teknologi Maklumat 4 (Admin)</p>
          <p>Email Rasmi: nurfazila@selangor.gov.my</p>
        </div>
      </div>
    </div>
    
  </div>
</div>
<!-- Contact Section -->
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
  <h3 class="w3-center">HUBUNGI KAMI</h3>
  <div style="margin-top:48px">
    <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> Seksyen 5, Shah Alam</p>
    <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i>03-5544-7000</p>
    <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: pwn_helpdesk@selangor.gov.my</p>
    <br>
    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-border" type="text" placeholder="Nama" required name="Name"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Email Rasmi" required name="Email"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Intipati" required name="Subject"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Pesanan" required name="Message"></p>
      <p>
        <button class="w3-button w3-black" type="submit">
          <i class="fa fa-paper-plane"></i> HANTAR PESANAN
        </button>
      </p>
    </form>
    <!-- Image of location/map -->
    
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
<p>Hak Cipta Terpelihara<a href="Unit Teknologi Maklumat" title="W3.CSS" target="_blank" class="w3-hover-text-green"> PWN</a></p>
</footer>
 
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>

</body>
</html>
