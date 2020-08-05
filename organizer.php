<div class="col-lg-3 col-md-4 col-sm-6">
	<div class="speaker-item">
    	<div class="image">
        	<img src="images/organizadores/<?php echo $org->imagem;?>" alt="speaker" class="img-fluid" />
            <div class="primary-overlay"></div>
            <div class="socials">
				<ul class="list-inline">
					<li class="list-inline-item">
						<a href="<?php echo $org->link;?>">
						<?php 
							if (strstr($org->link, 'lattes'))
								echo '<img src="images/icon/lattes-2.png" style="padding-top: 8px;" width="40px" height="40px"></img>';
							else
								echo '<i class="fa fa-globe"></i>';
						 ?>
						</a>
					</li>
					<li class="list-inline-item">
						<a href="mailto:<?php echo $org->email;?>"><i class="fa fa-envelope "></i></a>
					</li>
				</ul>
			</div>
		</div>
		<div class="content text-center">
			<p style="font-size: 16.5px" class="affiliation"><?php echo $org->nome;?></p>
			<p style="font-size: 12px" class="affiliation"><?php echo $org->universidade;?></p>
		</div>
	</div>
</div>