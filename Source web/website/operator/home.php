<head>
  <title>Dashboard | Data Diagnosa</title>
</head>


<div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Pasien</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
						<?php 
						  include "koneksi.php";
						  $sql    ="SELECT * FROM pasien";
							$query    =mysqli_query($koneksi,$sql);
							$count    =mysqli_num_rows($query);
							 echo "$count"; 	 
						  ?> 
					  </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas  fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Gejala</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
					  <?php 
						  include "koneksi.php";
						  $sql    ="SELECT * FROM gejala";
							$query    =mysqli_query($koneksi,$sql);
							$count    =mysqli_num_rows($query);
							 echo "$count"; 	 
						  ?> 
						  </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Penyakit</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
						  <?php 
						  include "koneksi.php";
						  $sql    ="SELECT * FROM penyakit";
							$query    =mysqli_query($koneksi,$sql);
							$count    =mysqli_num_rows($query);
							 echo "$count"; 	 
						  ?> </div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            
          </div>
		  
		  <!-- Content Row -->

         

          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-6 mb-4">

              <!-- Project Card Example -->
              

              <!-- Color System -->
              

            </div>

            <div class="col-lg-6 mb-4">

              <!-- Illustrations -->
              

              <!-- Approach -->
              

            </div>
          </div>