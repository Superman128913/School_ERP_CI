
            <!-- main-content opened -->
			<div class="main-content horizontal-content">

                <!-- container opened -->
				<div class="container">

                    	
					
					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
							<div>
							  <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">Hi, welcome to <?php if($this->session->userdata['ust_id'] != 1)$this->db->get_where('bz_schools', array('sch_id' => $this->session->userdata['sch_id']))->row()->sch_name ?> !</h2>
							  <p class="mg-b-0">Schools monitoring dashboard.</p>
							</div>
						</div>
						<div class="main-dashboard-header-right">
							<!-- <div>
								<label class="tx-13">Visitor Ratings</label>
								<div class="main-star">
									<i class="typcn typcn-star active"></i> <i class="typcn typcn-star active"></i> <i class="typcn typcn-star active"></i> <i class="typcn typcn-star active"></i> <i class="typcn typcn-star"></i> <span>(14,873)</span>
								</div>
							</div> -->
							<!-- <div>
								<label class="tx-13">Online </label>
								<h5>563,275</h5>
							</div>
							<div>
								<label class="tx-13">Offline </label>
								<h5>783,675</h5>
							</div> -->
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row row-sm">
						<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
							<div class="card overflow-hidden Teachers-card bg-primary-gradient">
								<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
									<div class="">
										<h6 class="mb-3 tx-12 text-white">SCHOOLS</h6>
									</div>
									<div class="pb-0 mt-0">
										<div class="d-flex">
											<div>
												<h1 class="tx-30 font-weight-bold mb-1 text-white"><?php $this->db->from('bz_schools'); $rec = $this->db->get()->num_rows(); echo $rec; ?></h1>
												<p class="mb-0 tx-12 text-white op-7">We have <?= $rec; ?> schools on my site</p>
											</div>
										</div>
									</div>
								</div>
								<!-- <span id="compositeline" class="pt-1">5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12</span> -->
							</div>
						</div>
						<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
							<div class="card overflow-hidden Teachers-card bg-danger-gradient">
								<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
									<div class="">
										<h6 class="mb-3 tx-12 text-white">QUERIES</h6>
									</div>
									<div class="pb-0 mt-0">
										<div class="d-flex">
											<div class="">
												<h4 class="tx-30 font-weight-bold mb-1 text-white"><?php $this->db->from('bz_tickets'); echo $rec = $this->db->get()->num_rows();?></h4>
												<p class="mb-0 tx-12 text-white op-7">There are <?= $rec; ?> tickets now</p>
											</div>
										</div>
									</div>
								</div>
								<!-- <span id="compositeline2" class="pt-1">3,2,4,6,12,14,8,7,14,16,12,7,8,4,3,2,2,5,6,7</span> -->
							</div>
						</div>
						<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
							<div class="card overflow-hidden Teachers-card bg-success-gradient">
								<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
									<div class="">
										<h6 class="mb-3 tx-12 text-white">COLLECTED PAYMENT</h6>
									</div>
									<div class="pb-0 mt-0">
										<div class="d-flex">
											<div class="">
											
												<h4 class="tx-30 font-weight-bold mb-1 text-white"><?php
											$this->db->select('SUM(sch_pay_paid) AS paid_sum');
											$this->db->from('bz_schools'); 
											echo $rec = $this->db->get()->row()->paid_sum;
											?></h4>
												<p class="mb-0 tx-12 text-white op-7">Compared to last week</p>
											</div>
											<span class="float-right my-auto ml-auto">
												<i class="fas fa-arrow-circle-up text-white"></i>
												<span class="text-white op-7"> 52.09%</span>
											</span>
										</div>
									</div>
								</div>
								<!-- <span id="compositeline3" class="pt-1">5,10,5,20,22,12,15,18,20,15,8,12,22,5,10,12,22,15,16,10</span> -->
							</div>
						</div>
						<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
							<div class="card overflow-hidden Teachers-card bg-warning-gradient">
								<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
									<div class="">
										<h6 class="mb-3 tx-12 text-white">PENDING PAYMENT</h6>
									</div>
									<div class="pb-0 mt-0">
										<div class="d-flex">
											<div class="">
												<h4 class="tx-30 font-weight-bold mb-1 text-white"><?php
											$this->db->select('SUM(sch_pay_pending) AS paid_sum');
											$this->db->from('bz_schools'); 
											echo $rec = $this->db->get()->row()->paid_sum;
											?></h4>
												<p class="mb-0 tx-12 text-white op-7">Compared to last week</p>
											</div>
											<span class="float-right my-auto ml-auto">
												<i class="fas fa-arrow-circle-down text-white"></i>
												<span class="text-white op-7"> -152.3%</span>
											</span>
										</div>
									</div>
								</div>
								<!-- <span id="compositeline4" class="pt-1">5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12</span> -->
							</div>
						</div>
					</div>
					<!-- row closed -->

					<!-- row opened -->
					<div class="row row-sm">
						<div class="col-md-12 col-lg-12 col-xl-7">
							<div class="card">
								<!-- <div class="card-header bg-transparent pd-b-0 pd-t-20 bd-b-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mb-0">Students PROGRESS</h4>
										<i class="mdi mdi-dots-horizontal text-gray"></i>
									</div>
									<p class="tx-12 text-muted mb-0">PROGRESS and Tracking. Track your PROGRESS from  date to arrival. To begin, enter your Student ID.</p>
								</div> -->
								<!-- <div class="card-body">
									<div class="total-revenue">
										<div>
										  <h4>120,750</h4>
										  <label><span class="bg-primary"></span>success</label>
										</div>
										<div>
										  <h4>56,108</h4>
										  <label><span class="bg-danger"></span>Fail</label>
										</div>
										<div>
										  <h4>32,895</h4>
										  <label><span class="bg-warning"></span>Failed</label>
										</div>
									  </div>
									<div id="bar" class="Teachers-bar mt-4"></div>
								</div> -->
							</div>
						</div>
						<!-- <div class="col-lg-12 col-xl-5">
							<div class="card card-dashboard-map-one">
								<label class="main-content-label">Transportation Areas</label>
								<span class="d-block mg-b-20 text-muted tx-12">Track transportation areas and bus details</span>
								<div class="">
									<div class="vmap-wrapper ht-180" id="vmap2"></div>
								</div>
							</div>
						</div> -->
					</div>
					<!-- row closed -->

					<!-- row opened -->
					<div class="row row-sm">
						<div class="col-xl-4 col-md-12 col-lg-12">
							<div class="card">
								<div class="card-header pb-1">
									<h3 class="card-title mb-2">Ticket List</h3>
									<!-- <p class="tx-12 mb-0 text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque impedit dolorum,</p> -->
								</div>
								<div class="card-body p-0 Visitors mt-1">
									<div class="list-group list-lg-group list-group-flush">
									<?php 
                                            $this->db->select('bz_tickets.*, CONCAT(bz_users.use_fname, " ", bz_users.use_mname, " ", bz_users.use_lname) AS use_name, bz_users.use_image');
                                            $this->db->from('bz_tickets');
                                            $this->db->join('bz_users','bz_users.use_id = bz_tickets.use_id');
                                            $query = $this->db->limit(5)->get();
                                            $result = $query->result_array();
                                            foreach ($result as $ticket): ?>
										<div class="list-group-item list-group-item-action" href="#">
											<div class="media mt-0">
												<img class="avatar-lg rounded-circle mr-3 my-auto" src="<?php echo face_url().$ticket['use_image'];?>" alt="Image description">
												<div class="media-body">
													<div class="d-flex align-items-center">
														<div class="mt-0">
															<h5 class="mb-1 tx-15"><?php echo $ticket['tick_name'];?></h5>
															<p class="mb-0 tx-13 text-muted"><?php echo $ticket['use_name'];?></p>
														</div>
													</div>
												</div>
											</div>
										</div>
                                        <?php endforeach; ?>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-md-12 col-lg-8 col-xl-8">
							<div class="card card-table-two">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mb-1">SCHOOLS PAYMENT</h4>
									<i class="mdi mdi-dots-horizontal text-gray"></i>
								</div>
								<span class="tx-12 tx-muted mb-3 ">This is schools payment status.</span>
								<div class="table-responsive country-table">
									<table class="table table-striped table-bordered mb-0 text-sm-nowrap text-lg-nowrap text-xl-nowrap">
										<thead>
											<tr>
												<th class="wd-lg-25p">School Name</th>
												<th class="wd-lg-25p tx-right">Actual Payment</th>
												<th class="wd-lg-25p tx-right">Paid Payment</th>
												<th class="wd-lg-25p tx-right">Pending Payment</th>
											</tr>
										</thead>
										<tbody>
										<?php 
                                                $j = 1; 
                                                $rec = $this->db->get('bz_schools')->result_array();
                                                foreach ($rec as $row): 

                                                ?>
											<tr>
												<td class=" tx-medium tx-inverse"><?= $row['sch_name'] ?></td>
												<td class="tx-right tx-medium tx-inverse"><?= $row['sch_pay_actual'] ?></td>
												<td class="tx-right tx-medium tx-inverse"><?= $row['sch_pay_paid'] ?></td>
												<td class="tx-right tx-medium tx-danger"><?= $row['sch_pay_pending'] ?></td>
											</tr>
											<?php $j++; endforeach;?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<!-- /row -->

				
                </div>
				<!-- Container closed -->

			</div>
			<!-- main-content closed -->

			
	<!--Internal Apexchart js-->
	<script src="<?php echo asset_url();?>js/apexcharts.js"></script>