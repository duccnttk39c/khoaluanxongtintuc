<!DOCTYPE html>
<html lang="en">
<head>
	<title>Đức Restaurant - Tin chi tiết</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700&amp;subset=vietnamese" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700&amp;subset=vietnamese" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700&amp;subset=vietnamese" rel="stylesheet">
	
	<script type="text/javascript" src="<?php echo base_url() ?>vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="<?php echo base_url() ?>vendor/isotope.pkgd.min.js"></script>
 	<script type="text/javascript" src="<?php echo base_url() ?>vendor/imagesloaded.pkgd.min.js"></script>
 	<script type="text/javascript" src="<?php echo base_url() ?>1.js"></script>
	<link rel="stylesheet" href="<?php echo base_url() ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?php echo base_url() ?>1.css">
</head>
<?php include 'header_home.php'; ?>

<div class="tieudenews">
		<div class="container">
	 		<div class="row">
	 			<div class="col-sm-12 text-xs-center wow flipInY" data-wow-delay="0s">
					<div class="tdtintuchome">
						<span class="fontdancing">Đức Restaurant</span>
						<h2 class="fontroboto">Tin tức về ẩm thực</h2>
					</div>
				</div>
	 		</div>
	 	</div>
	</div>
	
	<section class="noidungtin">
		<div class="container">
			<div class="row">
				<div class="col-sm-9">
					<div class="mottinchuan mb-3  wow  fadeInUp fontroboto">
						<?php foreach ($dulieutinct as $value): ?>
						
						<h1 class="tieudetin1 fontoswarld"><?= $value['title'] ?></h1>
						<div class="ngaythang1"><?= date('l, d/m/Y  G:i a',$value['date_created']) ?> -<span class="vang"> <?= $value['name_catenews'] ?></span></div>
						<hr>
						<h5><?= $value['quote'] ?></h5>
						<ul class="ml-2 mt2 mb-2">
							<?php foreach ($tinlienquan as $tinlq): ?>
							
							<li><a href="<?php echo base_url() ?>newspage/newsDetail/<?= $tinlq['id'] ?>"><?= $tinlq['title'] ?></a></li>

							<?php endforeach ?>
						</ul>
						<hr>
						<?= $value['content_news'] ?>

						<?php endforeach ?>		 
					</div>
					<div class="row">
						<div class="col-sm-12">
							<h3>Các tin khác</h3>
							<hr>
						</div>
						<?php foreach ($tinlienquan as $tinlq): ?>
						
						<div class="col-sm-4 wow slideInLeft mb-3">
							<div class="card-deck-wrapper">
								<div class="card-deck">
									<div class="card">
										<a href="<?php echo base_url() ?>newspage/newsDetail/<?= $tinlq['id'] ?>"><img class="card-img-top img-fluid" src="<?= $tinlq['image_news'] ?>" alt="Card image cap"></a>
										<div class="card-block">
											<h5 class="card-title" ><?= $tinlq['title'] ?></h5>
											<p class="card-text"><?= $tinlq['quote'] ?></p>
											<p class="card-text"><small class="text-muted"><?= date('l, d/m/Y  G:i a',$tinlq['date_created']) ?> - <span class="vang"> <?= $tinlq['name_catenews'] ?></span></small></p>
										</div>
									</div>
								</div>
							</div>
						</div> <!-- HET COT 4 -->

						<?php endforeach ?>
					</div>
				</div> <!-- HET COT 9 -->
				<div class="col-sm-3">
					<div class="phansearch  wow  fadeInUp">
							<input type="text" class="form-control phansearchct"  placeholder="Search">			 
							<button type="submit" class="iconsearch"><i class="fa fa-search"></i></button>
					</div>
					<div class="khoilistlink my-2  wow  fadeInUp">
						<h3 class="fontoswald">Danh mục </h3>
						<ul class="fontroboto">
							<?php foreach ($danhmuc as $ds): ?>
							
							<li><a href="<?php echo base_url() ?>newspage/categoriesNews/<?= $ds['id'] ?>"><?= $ds['name_catenews'] ?></a></li>

							<?php endforeach ?>
						</ul>
					</div><!--  	het listlink  -->
					
				</div>  <!-- HET COT 3 -->
			</div>
		</div>		
	</section><!--  het noidung tin -->

	<div class="footertop">
		<div class="container">
			<div class="row wow slideInUp">
				<div class="col-sm-3 cotf1 mb-2">
					<a href=""><img src="images/logo.png" alt="" class="logof"></a>
					<p>Marsh mallow muffin soufflé jelly-o tart cake Marshmallow macaroon jelly jubes dont 
					tiramisu croissant cake.</p>
					<div class="motdong">
						<i class="fa fa-paper-plane-o"></i>
						<span class="textmd">Address : 44 New Design Street,</br>
						Melbourne 005
						</span>
					</div>
					<div class="motdong">
						<i class="fa fa-phone"></i>
						<span class="textmd">Phone : (01) 800 433 633
						</span>
					</div>
					<div class="motdong">
						<i class="fa fa-envelope-o"></i>
						<span class="textmd">Email : info@Example.com
						</span>
					</div>
				</div> <!-- het cotf1 -->
				<div class="col-sm-2 push-sm-1 cotf2 mb-2">
					<h2 class="tdft">Userfull Link</h2>
					<ul>
						<li><a href="">About company</a></li>
						<li><a href="">Reservation</a></li>
						<li><a href="">Help center</a></li>
						<li><a href="">Our Blog</a></li>
						<li><a href="">Careers</a></li>
						<li><a href="">Contact us</a></li>
					</ul>
				</div> <!-- het cotf2 -->
				<div class="col-sm-3 cotf3 mb-2">
					<h2 class="tdft">Userfull Link 2</h2>
					<ul>
						<li><a href="">About company</a></li>
						<li><a href="">Reservation</a></li>
						<li><a href="">Help center</a></li>
						<li><a href="">Our Blog</a></li>
						<li><a href="">Careers</a></li>
						<li><a href="">Contact us</a></li>
					</ul>
				</div> <!-- het cotf3 -->
				<div class="col-sm-3 cotf4">
					<h2 class="tdft">Openning hours</h2>
					<div class="openning1">
						<div class="phai float-xs-right">9:00 am - 23:00 pm</div>
						<div class="trai">Mon — Fri</div>
					</div>
					<div class="openning1">
						<div class="phai float-xs-right">10:00 am - 22:00 pm</div>
						<div class="trai">Saturday</div>
					</div>
					<div class="openning1">
						<div class="phai float-xs-right">10:00 am - 21:00 pm</div>
						<div class="trai">Sunday </div>
					</div>
					<p>Note: Arctica Restaurant is closed on holidays.
					</p>
				</div> <!-- het cotf4 -->
			</div>
		</div>
	</div> <!-- het footertop -->

	<div class="footerbottom text-xs-center fontroboto">
		Copyrights @ 2019 All Right Reserved.
	</div>
</body>
</html>