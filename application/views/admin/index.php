
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row ">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-6 col mr-2">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                               <h6>Total Surat</h6> <h6><?php echo $total_surat; ?></h6></div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-envelope-open fa-4x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-6">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                              <h6> Total Admin </h6> <h6><?php echo $total_admin; ?></h6></div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-4x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>

                
		<div class="container ml-3">
			<div class="row">
				<div class="card m-3 col-6 text-primary" >
					<div class="card-header">
					<i class="fas fa-envelope-open"></i>
					Surat Baru Cepat</div>
					<div class="card-body">
							<div class="text-center">
								<a href="<?php echo site_url('Admin/tambah_surat/') ?>"class="btn btn-primary btn-lg mt-4">Surat Baru</a>
											
							</div>			
					</div>
					<div class="card-footer small text-muted">Pintasan untuk membuat surat tugas  baru</div>
				</div>
            </div>
        </div>
                


         