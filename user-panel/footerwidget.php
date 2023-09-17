

<div class="f-widget"><!--footer Widget-->
			<div class="container">
				<div class="row">
					<div class="col-md-4"><!--footer twitter widget-->
						<div class="title-widget-bg">
							<div class="title-widget">Twitter Updates</div>
						</div>
						<ul class="tweets">
							<li>Check out this great #themeforest item for you
								'Simpler Landing' <a href="#">http://t.co/LbLwldb6 </a>
								<span>2 hours ago</span>
							</li>
							<li class="lastone">Check out this great #themeforest item for you
								'Simpler Landing' <a href="#">http://t.co/LbLwldb6 </a>
								<span>2 hours ago</span>
							</li>
						</ul>
						<div class="clearfix"></div>
						<a href="#" class="btn btn-default btn-follow"><i class="fa fa-twitter fa-2x"></i>
							<div>Follow us on twitter</div>
						</a>
					</div><!--footer twitter widget-->
					<div class="col-md-4"><!--footer newsletter widget-->
						<div class="title-widget-bg">
							<div class="title-widget">Newsletter Signup</div>
						</div>
						<div class="newsletter">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
								incididunt ut labore et dolore magna aliqua.
							</p>
							<form role="form">
								<div class="form-group">
									<label>Your Email address</label>
									<input type="email" class="form-control newstler-input" id="exampleInputEmail1"
										placeholder="Enter email">
									<button class="btn btn-default btn-red btn-sm">Sign Up</button>
								</div>
							</form>
						</div>
					</div><!--footer newsletter widget-->
					<div class="col-md-4"><!--footer contact widget-->
						<div class="title-widget-bg">
							<div class="title-widget-cursive"><?php echo $result["site_title"]; ?></div>
						</div>
						<ul class="contact-widget">
							<li class="fphone"><?php echo $result["site_tel"]."<br>".$result["site_gsm"]; ?></li>
							<li class="fmobile"><?php echo $result["site_faks"]; ?></li>
							<li class="fmail lastone"><?php echo $result["site_mail"]; ?></li>
						</ul>
					</div><!--footer contact widget-->
				</div>
				<div class="spacer"></div>
			</div>
		</div><!--footer Widget-->