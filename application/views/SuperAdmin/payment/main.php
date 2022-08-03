            <!-- main-content -->
			<div class="main">


                <!-- container -->
				<div class="container">

                    	
					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="my-auto">
							<div class="d-flex">
								<h4 class="content-title mb-0 my-auto">Payments</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0"></span>
							</div>
						</div>
					</div>
					<!-- breadcrumb -->

					<!-- row opened -->
					<div class="row row-sm">

						<!--div-->
						<div class="col-xl-12">
							<div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-0">Payment List</h4>
										<i class="mdi mdi-dots-horizontal text-gray"></i>
									</div>
									<p class="tx-12 tx-gray-500 mb-2">Example Example Example Example Example </p>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="example" class="table key-buttons text-md-nowrap">
											<thead>
												<tr>
													<th class="border-bottom-0">School ID</th>
													<th class="border-bottom-0">Name</th>
													<th class="border-bottom-0">City</th>
													<th class="border-bottom-0">Address</th>
													<th class="border-bottom-0">Actual Payment</th>
													<th class="border-bottom-0">Paid Payment</th>
													<th class="border-bottom-0">Pending Payment</th>
													<!-- <th class="border-bottom-0">Website</th> -->
													<th class="border-bottom-0">Action</th>
												</tr>
											</thead>
											<tbody>

                                            <?php 
                                                $j = 1; 
                                                $rec = $this->db->get('bz_schools')->result_array();
                                                foreach ($rec as $row): 

                                                ?>

												<tr>
													<td class="text-right"><?= $row['sch_id'] ?></td>
													<td><?= $row['sch_name'] ?></td>
													<td><?= $row['sch_city'] ?></td>
													<td><?= $row['sch_address'] ?></td>
													<td class="text-right"><?= $row['sch_pay_actual'] ?></td>
													<td class="text-right"><?= $row['sch_pay_paid'] ?></td>
													<td class="text-right"><?= $row['sch_pay_pending'] ?></td>
													
                                                    <td class="text-center">
                                                        <div class="dropdown">
                                                            <button style="padding: 2px 10px;" aria-expanded="false" aria-haspopup="true" class="btn ripple btn-primary"
                                                            data-toggle="dropdown" id="dropdownMenuButton" type="button">Action <i class="fas fa-caret-down ml-1"></i></button>
                                                            <div  class="dropdown-menu tx-13">
                                                                <a class="dropdown-item payment_edit"  data-target="#payment_modal" data-toggle="modal">Edit</a>
                                                                <a class="dropdown-item" onclick="confirm_del('<?php echo base_url('schools/delete/' . $row['sch_id']);?>')">Delete</a>
                                                            </div>
                                                        </div>
                                                    </td>
												</tr>

												<?php $j++; endforeach;?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->



					</div>
					<!-- /row -->

				
                </div>
				<!-- Container closed -->

			</div>
			<!-- main-content closed -->

            			<!-- Modal effects -->
			<div class="modal" id="payment_modal">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content modal-content-demo">
                    
                	<?php echo form_open_multipart('payment/edit');?>
						<div class="modal-header">
							<h6 class="modal-title" id="sch_name"></h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
						</div>
						<div class="modal-body">
                            <div class="form-group">
								<label for="sch_id" hidden>School ID</label>
								<input name="sch_id" type="text" class="form-control" id="sch_id" hidden>
								<label for="sch_pay_actual">Actual Payment</label>
								<input name="sch_pay_actual" type="text" class="form-control" id="sch_pay_actual">
								<br>
								<label for="sch_pay_paid">Paid Payment</label>
								<input name="sch_pay_paid" type="text" class="form-control" id="sch_pay_paid" >
								<br>
								<label for="sch_pay_pending">Pending Payment</label>
								<input name="sch_pay_pending" type="text" class="form-control" id="sch_pay_pending" >
							</div>
									
                        </div>
						<div class="modal-footer">
							<button  name="update" type="submit"  class="btn ripple btn-primary" type="button">Save</button>
							<button  data-dismiss="modal"  class="btn ripple btn-primary" type="button">Cancel</button>
						</div>
                        </form>
					</div>
				</div>
			</div>
			<!-- End Modal effects-->


			<script src="<?php echo base_url();?>js/SuperAdmin/payment.js"></script>
			<script src="<?php echo base_url();?>js/SuperAdmin/school.js"></script>