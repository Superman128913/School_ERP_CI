            <!-- main-content -->
			<div class="main">


                <!-- container -->
				<div class="container">

                    	
					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="my-auto">
							<div class="d-flex">
								<h4 class="content-title mb-0 my-auto">Tickets</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0"></span>
							</div>
						</div>
					</div>
					<!-- breadcrumb -->

					<!-- row opened -->
					<div class="row row-sm">

                    <div class="col-xl-4 col-lg-5">
							<div class="card">
								<div class="main-content-left main-content-left-chat">
									<nav class="nav main-nav-line main-nav-line-chat">
										<a class="nav-link active" data-bs-toggle="tab" href="#">Active</a> <!-- <a class="nav-link" data-bs-toggle="tab" href="#">Ended</a> <a class="nav-link" data-bs-toggle="tab" href="#">All</a> -->
									</nav>
									<div class="main-chat-contacts-wrapper">
										<?php
											$limit = 8;
											$this->db->from('bz_tickets');
											$this->db->group_by('bz_tickets.use_id');
											$total = $this->db->get()->num_rows();
											$this->db->select('bz_users.use_fname, bz_users.use_image');
											$this->db->from('bz_tickets');
											$this->db->join('bz_users','bz_users.use_id = bz_tickets.use_id');
											$this->db->group_by('bz_tickets.use_id');
											$query = $this->db->limit($limit)->get();
											$result = $query->result_array();
										?>
										<label class="main-content-label main-content-label-sm">Contacts (<?= $total?>)</label>
										<div class="main-chat-contacts" id="chatActiveContacts">
											<?php foreach ($result as $user): ?>
											<div>
												<div class="main-img-user"><img alt="" src="<?php echo face_url().$user['use_image'];?>"></div><small><?php echo $user['use_fname'];?></small>
											</div>
                                            <?php endforeach; ?>
                                            <?php $more = $total - $limit;
                                            if($more > 0)
                                                echo '<div><div class="main-chat-contacts-more"><?php echo $more?>'.$more.'+</div><small>More</small></div>';
                                            ?>
										</div><!-- main-active-contacts -->
									</div><!-- main-chat-active-contacts -->
									<div class="main-chat-list" id="ChatList">
                                        <?php 
                                            $this->db->select('bz_tickets.*, CONCAT(bz_users.use_fname, " ", bz_users.use_mname, " ", bz_users.use_lname) AS use_name, bz_users.use_image');
                                            $this->db->from('bz_tickets');
                                            $this->db->join('bz_users','bz_users.use_id = bz_tickets.use_id');
                                            $query = $this->db->get();
                                            $result = $query->result_array();
                                            foreach ($result as $ticket): ?>
										<div class="media new tick_list" tick_id="<?php echo $ticket['tick_id'];?>">
											<div class="main-img-user">
												<img alt="" src="<?php echo face_url().$ticket['use_image'];?>">
											</div>
											<div class="media-body">
												<div class="media-contact-name">
													<span><?php echo $ticket['use_name'];?></span> <span>2 hours</span>
												</div>
												<p><?php echo $ticket['tick_name'];?></p>
											</div>
										</div>
                                        <?php endforeach; ?>
									</div><!-- main-chat-list -->
								</div>
							</div>
						</div>
						<div class="col-xl-8 col-lg-7">
							<div class="card" id="chat_container" style="display: none">
								<a class="main-header-arrow" href="" id="ChatBodyHide"><i class="icon ion-md-arrow-back"></i></a>
								<div class="main-content-body main-content-body-chat">
									<div class="main-chat-header">
										<div class="main-img-user"><img id="chat_use_img" alt="" src=""></div>
										<div class="main-chat-msg-name">
											<h6 id="tick_name"></h6><small id="use_name"></small>
										</div>
										<!-- <nav class="nav">
											<a class="nav-link" href=""><i class="icon ion-md-more"></i></a> <a class="nav-link" data-bs-toggle="tooltip" href="" title="Call"><i class="icon ion-ios-call"></i></a> <a class="nav-link" data-bs-toggle="tooltip" href="" title="Archive"><i class="icon ion-ios-filing"></i></a> <a class="nav-link" data-bs-toggle="tooltip" href="" title="Trash"><i class="icon ion-md-trash"></i></a> <a class="nav-link" data-bs-toggle="tooltip" href="" title="View Info"><i class="icon ion-md-information-circle"></i></a>
										</nav> -->
									</div><!-- main-chat-header -->
									<div class="main-chat-body" id="ChatBody">
										<div class="content-inner">
											<!-- <label class="main-chat-time"><span>3 days ago</span></label> -->
										</div>
									</div>
								</div>
								<div class="main-chat-footer">
                                    <input id="chat_input" class="form-control" placeholder="Type your message here..." type="text"> <a class="main-msg-send" onclick="post_chat()"><i class="far fa-paper-plane"></i></a>
								</div>
							</div>
						</div>


					</div>
					<!-- /row -->

				
                </div>
				<!-- Container closed -->

			</div>
			<!-- main-content closed -->



        <!-- Chat js -->
        <script src="<?php echo asset_url();?>plugins/lightslider/js/lightslider.min.js"></script>
        <script src="<?php echo base_url();?>js/SuperAdmin/chat.js"></script>
        <script src="<?php echo base_url();?>assets/js/chat.js"></script>