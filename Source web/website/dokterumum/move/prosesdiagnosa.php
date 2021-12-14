<?php 
	session_start();
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:../index.php?pesan=gagal");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Scan QR Pasien</title>
<link rel="stylesheet" href="../css/kamerapasien3.css">
<script src="../js/kamerapasien.js"></script>
<script src="../js/kamerapasien2.js"></script>
<script>
	$(document).ready(function(){
		$("#myModal").modal('show');
	});
	
	
	
</script>
</head>
<body>
				
	







  

<!-- Tambah Data -------------------------------------------------- -->
		<div class="modal fade" id="myModal" role="dialog" data-backdrop="static" data-keyboard="false">
							 
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header bg-primary">
											Tambah Data Pasien
										</div>
										<div class="modal-body">
														<form role="form" action="tambahdiagnosa.php" method="post">
																		
																		<div class="form-group">
																		  <label>Nama</label>
																		  <input type="text" name="nama" id="nama" class="form-control">      
																		</div>
																		<div class="form-group">
																		  <label>Jenis Kelamin</label>
																		  <select name="jk_pasien" id="jk_pasien" class="form-control">
																							<option value="0" selected="selected">- Jenis Kelamin -</option>
																							<option value="Laki-laki">Laki-laki</option>
																							<option value="Perempuan">Perempuan</option>
																							
																			</select>      
																		</div>
																		
																		<div class="form-group">
																		  <label>Umur</label>
																		  <input onkeypress="return hanyaAngka(event)" type="text" name="umur" id="umur" class="form-control">      
																		</div>
																		<div class="form-group">
																		  <label>Alamat</label>
																		  <input type="text" name="alamat" id="alamat" class="form-control">      
																		</div>
																		<div class="form-group">
																		  <label>Email</label>
																		  <input type="text" name="email" id="email" class="form-control">      
																		</div>
																		
																		
																		
																		<div class="modal-footer">  
																		  <button type="submit" class="btn bg-primary">Tambah</button> </form>	
																		  <button type="button" class="btn btn-default" onclick="location.href='halaman_dokter.php?top=datadiagnosa.php'">Batal</button>
																		</div>
																		
																	
																																									
																		    
														 
										</div>
										
									</div>
									
								</div>
							</div> 





</body>
</html>






