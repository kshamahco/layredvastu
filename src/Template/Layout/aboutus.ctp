<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title></title>
		<meta name="description" content="">
		<link rel="canonical" href="<? print_r($canonical);?>">
		<?php  echo $this->element('common-part'); ?>
		<link rel="stylesheet" href="<?= SITE_PATH ?>css/others_style.css" />
	</head>
	<style>
	    .ftr_enqsec {
	      display: none !important;
	    }
	</style>
	<body>
		<?php echo $this->element('header'); ?>
			<main>
			<section class="container-fluid position-relative">
				<div class="inner_bg">
					<div class="roundbg">
						<svg class="fill-body" viewBox="0 0 500 150" preserveAspectRatio="none">
							<path d="M0,150 L0,40 Q250,150 500,40 L580,150 Z"></path>
						</svg>
					</div>
				</div>
			</section>

			<section class="inner_content abt">
				<div class="container-xl">
					<div class="row justify-content-lg-center">
						<div class="col-lg-10">
							<figure>
								<figcaption>
									<h1>About Us</h1>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
								</figcaption>
								<img src="<?= SITE_PATH.'img/listingimage/'.$pages[0]['listing_image'] ?>" class="img-fluid w-100" alt="<?= $pages[0]['heading_1']; ?>">
							</figure>
						</div>
					</div>
					<div class="row justify-content-lg-center">
						<div class="col-lg-10">
							<h2>Lorem ipsum dolor, sit amet consectetur adipisicing elit</h2>
							<blockquote>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut omnis similique alias voluptatum consequatur nihil cumque nesciunt eaque molestiae deserunt voluptatem, minus commodi eveniet dicta iste doloribus explicabo aliquam quidem!</p>
							</blockquote>
							<div class="exp">
								<div class="exp__icon"><img src="<?= SITE_PATH ?>img/experience.png" alt="Vastu Experience"></div>
								15 Years Of Experience With
								<span>Vastu Related Services</span>
							</div>
							<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque nostrum qui officia incidunt fugiat minus nobis est totam, voluptas sapiente.</p>
							<div class="mission">
								<div class="h2">My mission</div>
								<p>For as long as there have been cities, the public square has been a fundamental part of the urban landscape - an open, approachable space to meet and engage with friends and neighbours. Space aims to capture this spirit of bringing people together in an exciting, welcoming environment.</p>

								<ul>
									<li><i class="fa-duotone fa-highlighter"></i> <span>High quality Co-Living spaces
										</span>
										Our fully furnished spaces are designed and purpose-built with Co-Living in mind, featuring high-end finishes and amenities that go far beyond traditional apartment buildings.
									</li>
									<li><i class="fa-solid fa-gauge"></i> <span>Fostering vibrant communities</span>
										Our passion is bringing people together. Beyond creating beautiful spaces, we provide shared experiences.</li>
									<li><i class="fa-regular fa-line-height"></i> <span>High quality Co-Living spaces
										</span>
										Our fully furnished spaces are designed and purpose-built with Co-Living in mind, featuring high-end finishes and amenities that go far beyond traditional apartment buildings.
									</li>
									<li><i class="fa-solid fa-light-emergency-on"></i> <span>Simple and all-inclusive</span>
										We worry about the details so that our residents don't have to. From our online application process to simple, all-inclusive billing we aim to make the living experience as effortless as possible.</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				</div>
			</section>
		</main>
		<?php echo $this->element('footer'); ?>
	</body>
</html>