<!DOCTYPE html>
<html lang="en">
<head>
	<title>Đức Restaurant - Tin tức</title>
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
	
	<?php 
		// lấy uri
		$uri = $_SERVER['REQUEST_URI'];
		$uri = explode('/', $uri);
		$tranghientai = end($uri);
		//$tranghientai = $tranghientai-1;
	?>
	<div class="tieudenews">
		<div class="container">
	 		<div class="row">
	 			<div class="col-sm-12 text-xs-center wow flipInY" data-wow-delay="0s">
					<div class="tdtintuchome">
						<span class="fontdancing">Tin tức về ẩm thực</span>
						<h2 class="fontroboto">Tin mới nhất</h2>
					</div>
				</div>
	 		</div>
	 	</div>
	</div>

	<section class="noidungtin">
		<div class="container">
			<div class="row">
				<div class="col-sm-9">
					<?php foreach ($dulieutin as $motdl): ?>
					
					<div class="mottinchuan mb-3 wow fadeInUp">
						<a href="<?php echo base_url() ?>newspage/newsDetail/<?= $motdl['id'] ?>"><img src="<?= $motdl['image_news'] ?>" alt=""></a>
						<a href="<?php echo base_url() ?>newspage/newsDetail/<?= $motdl['id'] ?>" class="tieudetin1 fontoswald"><?= $motdl['title'] ?></a>
						<div class="ngaythang1"><?= date('l, d/m/Y  G:i a',$motdl['date_created']) ?> - <span class="vang"> <?= $motdl['name_catenews'] ?></span></div>
						<p class="fontroboto"><?= $motdl['quote'] ?></p>
						<div class="docthem mb-2">
							<!-- <div class="like float-xs-right fontroboto">10 like</div> -->
							<a href="<?php echo base_url() ?>newspage/newsDetail/<?= $motdl['id'] ?>" class="rm fontroboto">Xem thêm</a>
						</div>
					</div>	

					<?php endforeach ?>
					<nav class="phantrang mb-3  wow fadeInUp">
						<ul class="pagination">
							<?php if($tranghientai == 1){ ?>

							<?php } else { ?>
									<li class="prev">
										<a href="<?php echo base_url() ?>newspage/page/<?= $tranghientai-1 ?>" aria-label="Previous">
											<span aria-hidden="true">&laquo; Trước</span>
										</a>
									</li>
							<?php } ?>
							
							<?php for ($i = 0; $i < $sotrang; $i++) { ?>
									<?php if (($i+1) == $tranghientai){ ?>
										<li class="current"><?= $i+1 ?></li>
									<?php } else { ?>
										<li><a href="<?php echo base_url() ?>newspage/page/<?= $i+1 ?>"><?= $i+1 ?></a></li>
									<?php } ?>
							<?php } ?>
							<?php if($tranghientai == $sotrang){ ?>

							<?php } else { ?>
									<li class="next">
										<a href="<?php echo base_url() ?>newspage/page/<?= $tranghientai+1 ?>" aria-label="Previous">
											<span aria-hidden="true">Sau &raquo;</span>
										</a>
									</li>
							<?php } ?>
							
						</ul>
					</nav>
				</div> <!-- het cot9 -->
				<div class="col-sm-3">
					<div class="phansearch  wow fadeInUp">
						<form action="" method="POST" class="form-block">
							<input type="text" class="form-control phansearchct" placeholder="Tìm kiếm">
							<button type="submit" class="iconsearch"><i class="fa fa-search"></i></button>
						</form>
					</div>
					<div class="khoilistlink my-2  wow fadeInUp">
						<h3 class="fontoswald">Danh mục</h3>
						<ul class="fontroboto">
							<?php foreach ($danhmuc as $ds): ?>
							
							<li><a href="<?php echo base_url() ?>newspage/categoriesNews/<?= $ds['id'] ?>"><?= $ds['name_catenews'] ?></a></li>

							<?php endforeach ?>
						</ul>
					</div> <!-- het khoilistlink -->
							
				</div> <!-- het cot3 -->
			</div>
		</div>
	</section> <!-- het noidungtin -->

	<div class="footertop">
		<div class="container">
			<div class="row wow slideInUp">
				<div class="col-sm-3 cotf1 mb-2">
					<a href=""><img src="<?php echo base_url() ?>images/logo.png" alt="" class="logof"></a>
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