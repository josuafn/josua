<html>
    <head>
        <title>SIG Sekolah Menengah Pertama</title>
        <img src="logosmp.png" height= "100px" width= "80px" style="float:left;margin:0 20px 3px 0" border= "2px" margin-left = "20px" /> <h2>SISTEM INFORMASI GEOGRAFIS</h2><h3>SEKOLAH MENENGAH PERTAMA DI BANDAR LAMPUNG</h3>
        
        <style>
            #ucapan {
                color:black;
                font-family: Times;
            }
            #npm {
                color: black;
                font-family: Times;
                background-color :white;
            }
            body {
                background-color: lavender;
                width: 100%;
            }
        </style>

        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <script src="script.js"></script>
        <link rel="stylesheet" href="styles.css">
    </head>
    <br> <br>

    <body>
        <div id='cssmenu'>
            <ul>
                <li><a href='Home.html'><span>Menu Awal</span></a></li>

                <li><a href='index.php'><span>Pencarian Data</span></a>
                </li>

                <li><a href='kecamatan.html'>Pilihan SMP (Kecamatan)</span></a>
                </li>
                
                <li class='active has-sub'><a href='#'><span>Pilihan SMP (Status)</span></a>
                    <ul>
                       <li><a href='SMP Negeri.html'><span>SMP Negeri</span></a>
                       </li>
                       <li><a href='SMP Swasta.html'><span>SMP Swasta</span></a>
                       </li>
                       <li><a href='SMP Luar Biasa.html'><span>SMP Luar Biasa</span></a>
                       </li>
                    </ul>
                  </li>
                  
                  <li><a href='direction.html'><span>Petunjuk Arah</span></a></li>

                  <li><a href='Image Overlay.html'><span>Image Overlay</span></a></li>

                 <li class='last'><a href='Tentang Kami.html'><span>Tentang Kami</span></a></li>
              </ul>
            </div>

    </body>

<?php
    error_reporting(0) ; 
include 'koneksi.php'
?>


<html lang="en"> 
   <head>
  
   <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
      <meta charset="utf-8">
      <title>SIG Sekolah Menengah Pertama</title>
	  <style type="text/css">
		form {
			width:250px;
			margin:50px auto;
		}
		.search {
			padding:10px 30px;
			background:rgba(50, 50, 50, 0.2);
			border:10px solid black;
		}
		.button {
            background-color: #4CAF50; 
            border: none;
            color: white;
            padding: 16px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 18px;
            margin: 10px 10px;
            -webkit-transition-duration: 0.4s; 
            transition-duration: 0.4s;
            cursor: pointer;
			float: right;
            }
		.button2 {
    		background-color: white; 
   			color: black; 
    		border: 2px solid #008CBA;
		}	

		.button2:hover {
    		background-color: #008CBA;
    		color: white;
}
		}	  
	</style>
   </head>
<body>
<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
					<div class="table">
<form action = "" method = "POST" >
    <input class="search" name = "query" type="text" placeholder="Cari..." required>	
</form> 

<div class="container">
	<center><h1>Daftar Pencarian Sekolah Menengah Pertama</h1></center> <br>
	<table class="highlighted-column">
		<thead>
			<tr>
				<th>No</th>
				<th>NPSN</th>
				<th>Nama Sekolah</th>
				<th>Alamat Sekolah</th>
				<th>Status</th>
				<th>Akreditasi</th>
				
			</tr>
		</thead>

    <?php
    $no = 1 ; 
    $query = $_POST ['query']; 
    if ($query != '') {
        $select = mysqli_query ($conn, "SELECT * FROM tb_hotel WHERE Nama_Sekolah LIKE '".$query."' "); 
    }

    else {
        $select = mysqli_query ($conn, "SELECT * FROM tb_hotel");    
    }
        if (mysqli_num_rows($select)) {
        while ($baris = mysqli_fetch_array($select)) {
?>


<tr>
<td> <?php echo $no++ ?> </td>
<td> <?php echo $baris['NPSN'] ?> </td>
<td> <?php echo $baris['Nama_Sekolah'] ?> </td>
<td> <?php echo $baris['Alamat Sekolah'] ?> </td>
<td> <?php echo $baris['Status'] ?> </td>
<td> <?php echo $baris['Akreditasi'] ?> </td>

</tr>
     <?php }} else{
        echo '<tr> <td colspan = "5"> tidak ada data </td></tr>' ; 
     } ?>
    


    </table>
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
</body>

<br>
<a href='index.php'><button class="button button2">Refresh</button></a>
</html> 