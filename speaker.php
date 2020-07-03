<section class="section single-speaker">
	<div style="height: 100px"></div>
	<div class="container">
		<div class="block">
			<div class="row">
				<div class="col-lg-5 col-md-6 align-self-md-top">
					<div class="image-block">
						<img src="images/speakers/<?php echo $speaker->image;?>" class="img-fluid" alt="speaker">
					</div>
				</div>
				<div class="col-lg-7 col-md-6 align-self-center">
					<div class="content-block">
						<div class="name">
							<h3><?php echo $speaker->name;?></h3>
						</div>
						<div class="profession">
							<p><?php echo $speaker->institution;?></p>
						</div>
						<div class="details" style="margin-top: 40px">
							<h5 style="line-height: 30px"><?php echo $speaker->title;?></h5>
							<p><?php echo $speaker->abstract;?></p>
							<p>
								<span style="font-weight: bold; color: black" data-i18n="speakers.bio"></span>
								<?php echo $speaker->bio;?>
							</p>
						</div>
						<div class="social-profiles">
							<ul class="list-inline social-list">
								<li class="list-inline-item">
									<a href="<?php echo $speaker->webpage;?>"><i class="fa fa-globe"></i></a>
								</li>
								<li class="list-inline-item">
									<a href="mailto:<?php echo $speaker->email;?>"><i class="fa fa-envelope "></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>