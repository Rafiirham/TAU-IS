 <script type="text/javascript">
 function konfirmasi(iduser){
	var kd_hapus=iduser;
	var url_str;
	url_str="hapususer.php?kdhapus="+kd_hapus;
	var r=confirm("Yakin ingin menghapus data..?");
	if (r==true){   
		window.location=url_str;
		}else{
			//alert("no");
			}
	} 
</script>

<head>
  <title>Admin | Data User Login</title>
</head>

<!-- <div id="alerts"></div> -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-users"></i> Data User</h1>
  <a href="#" type="button" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#myModalTambahData"><i class="fas fa-download fa-sm text-white-50"></i> Tambah Data</a>
</div>  

<!-- ================= Tambah Data ======================= -->
<div class="modal fade" id="myModalTambahData" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Tambah Data User
			</div>

			<div class="modal-body">
				<form role="form" action="tambahuser.php" method="post">
					<div class="form-group">
						<label>Nama</label>
						<input type="text" name="nama" id="nama" class="form-control">      
					</div>
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="username" id="username"  class="form-control">      
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="text" name="password" id="password" class="form-control">      
					</div>
					<div class="form-group">
						<label>Level</label>
						<select name="level" id="level" class="form-control">
							<option value="admin">Admin</option>
							<option value="dokterparu">Dokter Spesialis Paru</option>
							<option value="dokterdalam">Dokter Spesialis Penyakit Dalam</option>
							<option value="dokterumum">Dokter Umum</option>
							<option value="operator">Operator</option>
						</select>
					</div>


					<div class="modal-footer">  
						<button type="submit" class="btn btn-success">Kirim</button>
						<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					</div>
				</form>		
			</div>
		</div>
	</div>
</div>



<!-- ================= Tabel Data User ======================= -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Data User Login</h6>
	</div>
			
	<div class="card-body">
    <div class="table-responsive">
    	<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
				  
				  <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Password</th>
            <th>Level</th>
					  <th class="text-center">Ubah</th>
            <th class="text-center">Hapus</th>
          </tr>
				</thead>
				 
				<tbody>
				  <?php
						include "koneksi.php";
							$sql = "SELECT * FROM user ORDER BY iduser DESC";
							$qry = mysqli_query($koneksi,$sql)  or die ("SQL Error".mysqli_error());
							$no=0;
							while ($data=mysqli_fetch_array($qry)) {
							$no++;
					?>
				
          <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $data['nama'];?></td>
            <td><?php echo $data['username'];?></td>
            <td>. . . . . .</td>
            <td><?php echo $data['level'];?></td>
					  
					  <td align='center'> 
					  	<a href="#" type="button" class='btn btn-success btn-circle' data-toggle="modal" data-target="#myModal<?php echo $data['iduser']; ?>"><i class='fa fa-edit'></i></a>
					  </td>
					  <td align="center">
					  	<a href="#" class="btn btn-danger btn-circle"  onclick="return konfirmasi('<?php echo $data['iduser'];?>');"><i class="fas fa-trash"></i></a>
					  </td>					  					                       
          </tr>
                    
                   
					<!-- ================= Modal Edit User ======================= -->  
					<div class="modal fade" id="myModal<?php echo $data['iduser']; ?>" role="dialog">
							 
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									Update Data User
								</div>

								<div class="modal-body">
									<form role="form" action="edituser.php" method="get">
										<?php
											$iduser = $data['iduser']; 
											$query_edit = mysqli_query($koneksi, "SELECT * FROM user WHERE iduser='$iduser'");
																	
											while ($row = mysqli_fetch_array($query_edit)) {  
										?>

										<input type="hidden" name="iduser" value="<?php echo $row['iduser']; ?>">
											<div class="form-group">
												<label>Nama</label>
												<input type="text" name="nama" class="form-control" value="<?php echo $row['nama']; ?>">      
											</div>

											<div class="form-group">
												<label>Username</label>
												<input type="text" name="username" class="form-control" value="<?php echo $row['username']; ?>">      
											</div>

											<div class="form-group">
												<label>Level</label>
												<select name="level" class="form-control">
													<option selected="selected"><?php echo $row['level']; ?></option>
													<option value="admin">Admin</option>
													<option value="dokterparu">Dokter Spesialis Paru</option>
													<option value="dokterdalam">Dokter Spesialis Penyakit Dalam</option>
													<option value="dokterumum">Dokter Umum</option>
													<option value="operator">Operator</option>
												</select>
											</div>
																		
											<div class="modal-footer">  
												<button type="submit" class="btn btn-success">Ubah</button>
												<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
											</div>

										<?php  } ?> 
									</form>
								</div>
								
							</div>
						</div>
					</div>
							
					<?php } ?>
         </tbody>
       </table>

       <!--

       <script>
       	function alertSuccess(message) {
    		$('#alerts').append(
        '<div class="alert alert-success alert-dismissible fade show">' + 
        	'<strong>Success!</strong> Your message has been sent successfully.<button type="button" class="btn-close" data-bs-dismiss="alert"></button>' + message + '</div>');
				}
				alertSuccess("Success alert is enabled");

       </script>

     		-->
				
							
		</div>
  </div>
</div>
		  
		  

	
 
  
