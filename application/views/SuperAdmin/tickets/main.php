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
										<a class="nav-link active" data-bs-toggle="tab" href="#">Active</a> <a class="nav-link" data-bs-toggle="tab" href="#">Ended</a> <a class="nav-link" data-bs-toggle="tab" href="#">All</a>
									</nav>
									<div class="main-chat-contacts-wrapper">
										<label class="main-content-label main-content-label-sm">Contacts (5)</label>
										<div class="main-chat-contacts" id="chatActiveContacts">
											<div>
												<div class="main-img-user"><img alt="" src="<?php echo asset_url();?>img/faces/3.jpg"></div><small>Adrian</small>
											</div>
											<div>
												<div class="main-img-user"><img alt="" src="<?php echo asset_url();?>img/faces/12.jpg"></div><small>John</small>
											</div>
											<div>
												<div class="main-img-user"><img alt="" src="<?php echo asset_url();?>img/faces/4.jpg"></div><small>Daniel</small>
											</div>
											<div>
												<div class="main-img-user"><img alt="" src="<?php echo asset_url();?>img/faces/13.jpg"></div><small>Katherine</small>
											</div>
											<div>
												<div class="main-img-user"><img alt="" src="<?php echo asset_url();?>img/faces/5.jpg"></div><small>Raymart</small>
											</div>
											<div>
												<div class="main-img-user"><img alt="" src="<?php echo asset_url();?>img/faces/14.jpg"></div><small>Junrisk</small>
											</div>
											<div>
												<div class="main-img-user"><img alt="" src="<?php echo asset_url();?>img/faces/6.jpg"></div><small>George</small>
											</div>
											<div>
												<div class="main-img-user"><img alt="" src="<?php echo asset_url();?>img/faces/15.jpg"></div><small>Maryjane</small>
											</div>
											<div>
												<div class="main-chat-contacts-more">
													20+
												</div><small>More</small>
											</div>
										</div><!-- main-active-contacts -->
									</div><!-- main-chat-active-contacts -->
									<div class="main-chat-list" id="ChatList">
                                        <?php foreach ($ticket_list as $ticket): ?>
										<div class="media new">
											<div class="main-img-user">
												<img alt="" src="<?php echo asset_url()."img/faces/".$ticket['use_image'];?>">
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
							<div class="card">
								<a class="main-header-arrow" href="" id="ChatBodyHide"><i class="icon ion-md-arrow-back"></i></a>
								<div class="main-content-body main-content-body-chat">
									<div class="main-chat-header">
										<div class="main-img-user"><img alt="" src="<?php echo asset_url();?>img/faces/9.jpg"></div>
										<div class="main-chat-msg-name">
											<h6>Reynante Labares</h6><small>Last seen: 2 minutes ago</small>
										</div>
										<nav class="nav">
											<a class="nav-link" href=""><i class="icon ion-md-more"></i></a> <a class="nav-link" data-bs-toggle="tooltip" href="" title="Call"><i class="icon ion-ios-call"></i></a> <a class="nav-link" data-bs-toggle="tooltip" href="" title="Archive"><i class="icon ion-ios-filing"></i></a> <a class="nav-link" data-bs-toggle="tooltip" href="" title="Trash"><i class="icon ion-md-trash"></i></a> <a class="nav-link" data-bs-toggle="tooltip" href="" title="View Info"><i class="icon ion-md-information-circle"></i></a>
										</nav>
									</div><!-- main-chat-header -->
									<div class="main-chat-body" id="ChatBody">
										<div class="content-inner">
											<label class="main-chat-time"><span>3 days ago</span></label>
											<div class="media flex-row-reverse">
												<div class="main-img-user"><img alt="" src="<?php echo asset_url();?>img/faces/9.jpg"></div>
												<div class="media-body">
													<div class="main-msg-wrapper right">
														Nulla consequat massa quis enim. Donec pede justo, fringilla vel...
													</div>
													<div class="main-msg-wrapper right">
														rhoncus ut, imperdiet a, venenatis vitae, justo...
													</div>
													<div class="main-msg-wrapper pd-0"><img alt="" class="wd-100 ht-100" src="<?php echo asset_url();?>img/ecommerce/01.jpg"></div>
													<div>
														<span>9:48 am</span> <a href=""><i class="icon ion-android-more-horizontal"></i></a>
													</div>
												</div>
											</div>
											<div class="media">
												<div class="main-img-user"><img alt="" src="<?php echo asset_url();?>img/faces/6.jpg"></div>
												<div class="media-body">
													<div class="main-msg-wrapper left">
														Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
													</div>
													<div>
														<span>9:32 am</span> <a href=""><i class="icon ion-android-more-horizontal"></i></a>
													</div>
												</div>
											</div>
											<div class="media flex-row-reverse">
												<div class="main-img-user"><img alt="" src="<?php echo asset_url();?>img/faces/9.jpg"></div>
												<div class="media-body">
													<div class="main-msg-wrapper right">
														Nullam dictum felis eu pede mollis pretium
													</div>
													<div>
														<span>11:22 am</span> <a href=""><i class="icon ion-android-more-horizontal"></i></a>
													</div>
												</div>
											</div><label class="main-chat-time"><span>Yesterday</span></label>
											<div class="media">
												<div class="main-img-user"><img alt="" src="<?php echo asset_url();?>img/faces/6.jpg"></div>
												<div class="media-body">
													<div class="main-msg-wrapper left">
														Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
													</div>
													<div>
														<span>9:32 am</span> <a href=""><i class="icon ion-android-more-horizontal"></i></a>
													</div>
												</div>
											</div>
											<div class="media flex-row-reverse">
												<div class="main-img-user"><img alt="" src="<?php echo asset_url();?>img/faces/9.jpg"></div>
												<div class="media-body">
													<div class="main-msg-wrapper right">
														Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
													</div>
													<div class="main-msg-wrapper right">
														Nullam dictum felis eu pede mollis pretium
													</div>
													<div>
														<span>9:48 am</span> <a href=""><i class="icon ion-android-more-horizontal"></i></a>
													</div>
												</div>
											</div><label class="main-chat-time"><span>Today</span></label>
											<div class="media">
												<div class="main-img-user"><img alt="" src="<?php echo asset_url();?>img/faces/6.jpg"></div>
												<div class="media-body">
													<div class="main-msg-wrapper left">
														Maecenas tempus, tellus eget condimentum rhoncus
													</div>
													<div class="main-msg-wrapper left">
														Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus.
													</div>
													<div>
														<span>10:12 am</span> <a href=""><i class="icon ion-android-more-horizontal"></i></a>
													</div>
												</div>
											</div>
											<div class="media flex-row-reverse">
												<div class="main-img-user"><img alt="" src="<?php echo asset_url();?>img/faces/9.jpg"></div>
												<div class="media-body">
													<div class="main-msg-wrapper right">
														Maecenas tempus, tellus eget condimentum rhoncus
													</div>
													<div class="main-msg-wrapper right">
														Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus.
													</div>
													<div>
														<span>09:40 am</span> <a href=""><i class="icon ion-android-more-horizontal"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="main-chat-footer">
                                    <input class="form-control" placeholder="Type your message here..." type="text"> <a class="main-msg-send" href=""><i class="far fa-paper-plane"></i></a>
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
        <script src="<?php echo asset_url();?>js/chat.js"></script>
        <script src="<?php echo asset_url();?>plugins/lightslider/js/lightslider.min.js"></script>