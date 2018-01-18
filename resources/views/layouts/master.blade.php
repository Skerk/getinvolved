<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie10 lt-ie9"><![endif]-->
<!--[if IE 9]><html class="no-js lt-ie10">		 <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js">
<!--<![endif]-->

<!-- Mirrored from www.creabox.es/themes/white/theme/video_youtube.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Jun 2017 10:09:04 GMT -->

<head>

	<!-- ==============================================
	TITLE AND BASIC META TAGS
	=============================================== -->
	<meta charset="utf-8">
	<title>Get Involved - {{ 'Engages-Toi' }}</title>
	<meta name="keywords" content="" />
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="format-detection" content="telephone=no" />

	<!-- ==============================================
	MOBILE METAS
	=============================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- ==============================================
	WEB FONTS
	=============================================== -->
	<link href='http://fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:200,300,700' rel='stylesheet' type='text/css'>

	<!-- ==============================================
	CSS STYLES
	=============================================== -->
	<link rel="stylesheet" href="{{ url('bootstrap/css/bootstrap.css') }}" type="text/css" media="screen" />
	<link rel="stylesheet" href="{{ url('css/page_animations.css') }}" type="text/css" media="screen" />
	<link rel="stylesheet" href="{{ url('css/magnific-popup.css') }}" type="text/css" media="screen" />
	<link rel="stylesheet" href="{{ url('css/elegant-font.css') }}" type="text/css" media="screen" />
	<link rel="stylesheet" href="{{ url('css/style.css') }}" type="text/css" media="screen" />
	<link rel="stylesheet" href="{{ url('css/responsive.css') }}" type="text/css" media="screen" />

	<!-- ==============================================
	JS
	=============================================== -->
	<script type="text/javascript" src="{{ url('js/modernizr.js') }}"></script>
	<script type="text/javascript" src="{{ url('js/device.min.js') }}"></script>

	<!-- ==============================================
	Favicons
	=============================================== -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ url('img/favicon/apple-touch-icon-144x144-precomposed.png') }}">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ url('img/favicon/apple-touch-icon-114x114-precomposed.png') }}">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ url('img/favicon/apple-touch-icon-72x72-precomposed.png') }}">
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="{{ url('img/favicon/apple-touch-icon-57x57-precomposed.png') }}">
	<link rel="shortcut icon" href="{{ url('img/favicon/favicon.png') }}" />

	<!-- DEMO Switcher
  	================================================== -->
	<link rel="stylesheet" href="{{ url('css/styleswitcher.css') }}" />

</head>

<body>

	<!--<div id="ut_styleswitcher">
		<div style="position: relative;">
            <a href="#" class="toggle"></a>
            <h1>Homepage style</h1>
	            <p>
		     		<a class="button-switcher" href="index.html">Image Slider</a>
		     		<a class="button-switcher" href="single_image.html">Single Image</a>
		     		<a class="button-switcher" href="single_image_gradient.html">Single Image<br/><span>(gradient background)</span></a>
		     		<a class="button-switcher" href="video.html">Video version</a>
		     		<a class="button-switcher" target="_blank" href="video_youtube.html">Youtube version</a>
		     		<a class="button-switcher" target="_blank" href="video_youtube_list.html">Youtube version<br/><span>(video list)</span></a>
		     		<a class="button-switcher" href="video_vimeo.html">Vimeo version</a>
		     		<a class="button-switcher" href="gradient.html">Gradient background</a>
	     		</p>	
            <p class="info">This Panel is only for demo purposes! </p>
        </div>
    </div>-->

	<div id="pattern"></div>
	<div id="backSlider" class="css3AnimateSlow"></div>


	<div class="pt-wrapper">


		<!-- ==============================================
	PRELOADER
	=============================================== -->
		<div class="loader">
			<div id="loader-content">
				<p class="loader-logo"><span class="redspan">GI</span></p>
				<div id="loader-circle"></div>
			</div>
		</div>

		<!-- ==============================================
	IMAGE REPLACEMENT IN MOBILE AND TABLETS DEVICES
	=============================================== -->
		<div id="bgimg"></div>

		<!-- ==============================================
	NAVIGATION BAR
	=============================================== -->
		<nav id="mainNav" class="css3Animate lightNav" role="navigation">
			<div class="pt-trigger-container">
				<h1><button class="navbar-brand round-logo pt-trigger css3Animate" data-animation="22" data-goto="1" data-style="lightNav">GI</button></h1>
				<ul class="nav navbar-nav hidden-xs">
					<li><button class="pt-trigger css3Animate" data-animation="22" data-goto="2" data-style="darkNav" data-style2="aboutmeNav">Who we are<span class="line css3Animate"></span></button></li>
					<li><button class="pt-trigger right-margin css3Animate" data-animation="22" data-goto="3" data-style="darkNav" data-style2="workNav">Problem<span class="line css3Animate"></span></button></li>
					<li><button class="pt-trigger left-margin css3Animate" data-animation="22" data-goto="5" data-style="darkNav" data-style2="blogNav">Missions<span class="line css3Animate"></span></button></li>
					<li><button class="pt-trigger css3Animate" data-animation="22" data-goto="6" data-style="lightNav" data-style2="contactNav">Sign In<span class="line css3Animate"></span></button></li>
				</ul>
				<a href="#" id="menuMobileOpen" class="css3Animate hidden-sm hidden-md hidden-lg" aria-hidden="true" data-icon="&#x61;" title=""></a>
			</div>
		</nav>
		<div class="menu-mobile">
			<a href="#" id="menuMobileClose" class="css3Animate" aria-hidden="true" data-icon="&#x51;" title=""></a>
			<ul class="nav navbar-nav">
				<li><button class="pt-trigger css3Animate" data-animation="22" data-goto="2" data-style="darkNav" data-style2="aboutmeNav">Who we are<span class="line css3Animate"></span></button></li>
				<li><button class="pt-trigger css3Animate" data-animation="22" data-goto="3" data-style="darkNav" data-style2="workNav">Problem<span class="line css3Animate"></span></button></li>
				<li><button class="pt-trigger css3Animate" data-animation="22" data-goto="5" data-style="darkNav" data-style2="blogNav">Missions<span class="line css3Animate"></span></button></li>
				<li><button class="pt-trigger css3Animate" data-animation="22" data-goto="6" data-style="lightNav" data-style2="contactNav">Sign In<span class="line css3Animate"></span></button></li>
			</ul>
		</div>





		<!-- ==============================================
	HOMEPAGE
	=============================================== -->
		<div class="pt-page css3Animate homepage">
			<section>
				<div class="container">
					<div class="row">
						<div class="col-md-12 messages">
							<div>
								<h2>DO YOU CONSIDER<br/>YOURSELF <span class="redspan">ADVENTUROUS</span> ? </h2>
								
							</div>
							<div>
								<h2>DO YOU THINK YOU CAN MAKE<br/>AN <span class="redspan">IMPACT</span> IN THIS WORLD ? </h2>
								
							</div>
							<div>
								<h2>IF YOU WANT TO BE<br/>A PART OF THE <span class="redspan">SOLUTION</span></h2>
								
							</div>
							<div>
								<h2>JOIN THE <span class="redspan">MOVEMENT</span><br/>GET INVOLVED </h2>
								
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>





		<!-- ==============================================
	ABOUT ME
	=============================================== -->
		<div class="pt-page aboutme">
			<section class="section-author-image-2">
				<div class="container">
					<div class="row author-image-2">
						<div class="col-md-5 col-md-offset-7">
							<h2>Hello.<br/>We are <br/>Get Involved.</h2>
							<h3>We want to give new opportunities to young folks, to take part of the changemakers movement, to change those broken
								relationships between our nations and to inspire new initiatives solving social, environmental and economic issues.</h3>
							<a class="css3Animate" href="#" title="Get Involved">Explore</a>
							<hr>
							
						</div>
					</div>
				</div>
			</section>
			<section class="skills">
				<div class="container">
					<div class="row">
						<h3>Missions</h3>
						<h4>Check points</h4>
						<div class="clearfix"></div>
						<div class="col-md-12 skill">
							<h5><span aria-hidden="true" data-icon="&#xe108;"></span>MANIFESTO</h5>
							<div class="skill-content">
								<p>There are many social entrepreneurs around the globe with great projects to fulfill. We want to take part in this
									awesome movement.</p>
								<p>The youth of the world have the ability to make these greater. We want to inspirit them to take action and to make
									it successful.</p>
								<p>Each social issue is an opportunity to realize ourselves and to change the status quo! With a perfect combination
									of ambition, humility and a motivated team, the impossible become possible. We must change the game!</p>
								<p>"We don’t solve a problem with the same thinking that has created it in the first place” — A. Einstein Our job is
									to spread the news.</p>
									<p><strong>EVERYBODY IS A CHANGEMAKER!</strong></p>
<p>What is the point to do something if it is not to make a change?</p>
							</div>
							<h1 id="movement" class="text-center"><span aria-hidden="true" data-icon="&#xe00e;"></span>MOVEMENT IS TAKING PLACE</h1>
						</div>
						<div class="col-md-6 skill">
							
							


								<div class="bar">
								<div class="skill-content">
							
									<div class="col-md-12">
									<a class="img-problem" target="_blank" href="http://www.bridgeinternationalacademies.com"><img class="img-problem" src="{{ url('img/bridge.jpg') }}" alt="statistique getinvolved"></a>
										<p><strong>Problematic : Affordable education</strong>
</p>
<p><strong>Salvation : Bridge International Academies</strong></p>
<p class="textstat">They etablished in 2008 in Nairobi. Their mission is to provide a life-changing education to pupils. By working with governements, communities , teachers and parents they making sure these children receive an highly-quality and affordable education. Moreover that education allows them to fullfil their potential wich is according to BIA the key. Bridge was built as a changemaker. Millions of children around the world suffering from this status in wich school are expensive, unserviced and sometimes corrupted.
</p>
									</div>
								
								
							</div>
							<div class="bar">
									
									<div class="col-md-12">
									<a class="img-problem" target="_blank" href="http://www.flyzipline.com/"><img class="img-problem" src="{{ url('img/zip.jpg') }}" alt="statistique getinvolved"></a>
										<p><strong>Problematic :  Adequate access to essential medical products</strong></p>

<p><strong>Salvation : FlyZipLine</strong></p>
<p class="textstat">Zipline is making sure health workers at remote clinics and hospitals receive all the medical products they need including blood and items. They provide a seamless delivery service, rain or shine. Soon as received, the command is packed and flyin by drones. That command is landing gently by parachute, no pilot needed. Within 30 minutes the package is delivered. Present in several countries such as USA, Rwanda and Tanzania. They completely reduce waste and stock-outs.

</p>
									</div>
								
								
							</div>
							</div>
						</div>
						<div class="col-md-6 skill">
							<h5>Out-of-school adolescents of lower secondary school age in 2015(SOURCE UNESCO)</h5>
							<div class="skill-content">
								<!--<img src="img\get_involved_stat.png" alt="statistique get_involved">-->


								<div class="bar">
									<div class="col-md-4">
										<div class="pie-chart" data-percent="61">
									<p class="percentage css3Animate">61,6%</p>
									<p class="percentage-title css3Animate">Thaïland</p>
								</div>
									</div>
								
							</div>
							
							<div class="bar">
									<div class="col-md-4">
										<div class="pie-chart" data-percent="58">
									<p class="percentage css3Animate">58%</p>
									<p class="percentage-title css3Animate">Bénin</p>
								</div>
									</div>
									<div class="bar">
							</div>
									<div class="col-md-4">
										<div class="pie-chart" data-percent="56">
									<p class="percentage css3Animate">56,3%</p>
									<p class="percentage-title css3Animate">Guatemala</p>
								</div>
									</div>
								
							</div>
									
							</div>
								
							
								<!--<img src="img\get_involved_stat.png" alt="statistique get_involved">-->


								<div class="bar">
									<div class="col-md-4">
										<div class="pie-chart" data-percent="52">
									<p class="percentage css3Animate">52,4%</p>
									<p class="percentage-title css3Animate">Cambodge</p>
								</div>
									</div>
								
							</div>
							
							<div class="bar">
									<div class="col-md-4">
										<div class="pie-chart" data-percent="44">
									<p class="percentage css3Animate">44,2%</p>
									<p class="percentage-title css3Animate">Colombie</p>
								</div>
									</div>
									<div class="bar">
							</div>
									<div class="col-md-4">
										<div class="pie-chart" data-percent="38">
									<p class="percentage css3Animate">38,7%</p>
									<p class="percentage-title css3Animate">Maurice</p>
								</div>
									</div>
							</div>							
						</div>
						
					</div>
				</div>
				
			</section>
			<!-- <section class="testimonials">
				
				<div class="container">
					<div class="row">
						<div class="col-md-12 testimonials-messages">
							<div>
								<p class="comment">GET INVOLVED IN THE MOVEMENT</p>
								
							</div>
							<div>
								<p class="comment">MISSION AVAILABLE</p>
								
							</div>
							<div>
								<p class="comment">CHANGE THE WORLD</p>
								
							</div>
						</div>
					</div>
				</div>
			</section> -->
			
		</div>
		<!-- END ABOUT ME SECTION -->





		<!-- ==============================================
	WORK
	=============================================== -->
		<div class="pt-page work">
			<section id="marginbottom">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h3>Check out and enjoy</h3>
							<h4>OUR STORY</h4>

							<div class="clearfix"></div>

							<!-- FILTER -->
							<div id="filters">
								<!--<button class="css3Animate checked" data-filter="*">ALL</button>
							<button class="css3Animate" data-filter=".design">DESIGN</button>
							<button class="css3Animate" data-filter=".video">VIDEO</button>
							<button class="css3Animate" data-filter=".photo">PHOTOGRAPHY</button>-->
							</div>

							<!-- GALLERY -->
							<div id="gallery">
								<div class="grid-sizer"></div>
								<div>
									<p>When we see what is happening around the world, it brings us some inability to understand why things are going so
										wrong. </p>

									<p>Indeed, international development programs keep on failing in the so-called “developing countries”. They assure
										to give help, but actually cause more damage. Is it not the time to change this and to make things right?
									</p>

									<p>On the one side, there are many social entrepreneurs who are making real significant change in those countries.
									</p>

									<p>On the other side, we have many young graduated people, with the best diplomas, who have trouble to get a job in
										the so-called “developed countries” and, this, because they, apparently, lack of experience. But if nobody accepts
										to give them a chance, how will they ever get experience?</p>

									<p>That is why we wanted to bring something new on the table. We believe that if we give the opportunity to the youth
										to find professional experience by improving relationship between Western and Southern countries… something great
										will happen! </p>

									<p>Therefore, we’ve decided to go and find those social entrepreneurs to ask them: “what could help you to go further
										in the work you’re already doing. Their answer was clear: “we need some skills, but we don’t have the money to
										find them.” </p>

									<p>From that, we made this commitment to give them the skills they need, while solving the youth unemployment issue
										in Europe.</p>
									<br/>
									<br/>
									<br/>
									<br/>



									<h3 id="getinvolved"><strong>GET INVOLVED IS BORN</strong></h3>
									<br/>


									<p class="text-center"><em>We want to give new opportunities to young folks, to take part of the changemakers movement, to change those broken
										relationships between our nations and to inspire new initiatives solving social, environmental and economic issues.</em></p>
								</div>
							</div>
							<!-- FINISH GALLERY -->
						</div>
						

					</div>
				</div>
			</section>
		</div>
		<!-- END WORK SECTION -->


		<!-- ==============================================
	WORK - CONTENT
	=============================================== -->
		<div class="pt-page single-work">
			<section>
				<div class="container">
					<div class="row work-container">
						<button class="pt-trigger css3Animate menu-show" data-animation="20" data-goto="3" data-style="darkNav" data-style2="workNav">
	            		<span aria-hidden="true" data-icon="&#x4d;"></span>
	              	</button>
						<div id="work-content">

						</div>
					</div>
				</div>
			</section>
		</div>
		<!-- END CONTACT SECTION -->



		<!-- ==============================================
	BLOG
	=============================================== -->
		<div class="pt-page blog">
			<section>
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<h3>Missions</h3>
							<h4>Follow Us</h4>
							<div class="clearfix"></div>
							<!-- POST 1 -->
							<div class="col-md-12 post">
								<div class="post-left">
									<div class="post-date">
										<span>FR</span>
										
									</div>
									
								</div>
								<div class="post-right">
									<div class="post-image">
										<img id="monImage" src="{{url('img/blog/1.jpg') }}" class="img-responsive" alt="Get involved" />
									</div>
									<h5>Danané, Côte d'Ivoire</h5>
									<p class="info-post">Mission 2017 | Get Involved</p>
										
									<div class="row text-center" id="texteUn">
	<h3><strong>Ce qu’on dit de la Côte d’Ivoire:</strong></h3><br><br>
<em>« 48.9% de Taux de pauvreté - 2.9% Taux annuel de croissance démographique- 9.8% Taux de
croissance du PIB (en 2012) - 0.43 Indicateur de développement humain - 61% Taux d’accès à l’eau
potable - 56.1% Taux net de scolarisation (primaire) » <strong>Source : PNUD</strong></em>
<br>
<br>Cependant, en Côte d’Ivoire un mouvement est en marche. Les projets de développement durable
visant à renforcer la population s’implémentent dans divers endroits du pays. Bien que les ivoiriens
doivent encore faire face à de nombreux défis tels que: la sécurité, la réintégration des ex-
combattants, la cohésion sociale, l’emploi des jeunes, la dynamisation du secteur privé… Les choses
sont en train de changer !

								
										</div>
									
								</div>
							</div>
							


							<!--<div class="col-md-4 post">
								<div class="post-left">
									<div class="post-date">
										<span>FR</span>
										
									</div>
									
								</div>
								<div class="post-right">
									<div class="post-image">
										<img id="monImage2" src="img/blog/1.jpg" class="img-responsive" alt="" />
									</div>
									<h5>Brussels, Belgium</h5>
									<p class="info-post">Mission 2017 | Get Involved</p>
									<p id="texteDeux">Suspendisse libero odio, vulputate non pellentesque eu, interdum et purus. Integer sodales magna non nibh porta
										ultricies...
									</p>
									
								</div>
							</div>
							


							<div class="col-md-4 post">
								<div class="post-left">
									<div class="post-date">
										<span>ENG</span>
										
									</div>
									
								</div>
								<div class="post-right">
									<div class="post-image">
										<img id="monImage3" src="img/blog/1.jpg" class="img-responsive" alt="" />
									</div>
									<h5>London, England</h5>
									<p class="info-post">Mission 2017 | Get Involved</p>
									<p id="texteTrois">Suspendisse libero odio, vulputate non pellentesque eu, interdum et purus. Integer sodales magna non nibh porta
										ultricies...
									</p>
									
								</div>
							</div>-->



						<!--<div class="row">
							


							<div class="col-md-4 post">
								<div class="post-left">
									<div class="post-date">
										<span>FR</span>
										
									</div>
									
								</div>
								<div class="post-right">
									<div class="post-image">
										<img id="monImage4" src="img/blog/1.jpg" class="img-responsive" alt="" />
									</div>
									<h5>Brussels, Belgium</h5>
									<p class="info-post">Mission 2017 | Get Involved</p>
									<p id="texteQuatre">Suspendisse libero odio, vulputate non pellentesque eu, interdum et purus. Integer sodales magna non nibh porta
										ultricies...
									</p>
									
								</div>
							</div>
						


							<div class="col-md-4 post">
								<div class="post-left">
									<div class="post-date">
										<span>NL</span>
										
									</div>
									
								</div>
								<div class="post-right">
									<div class="post-image">
										<img id="monImage5" src="img/blog/1.jpg" class="img-responsive" alt="" />
									</div>
									<h5>Antwerp, Belgium</h5>
									<p class="info-post">Mission 2017 | Get Involved</p>
									<p id="texteCinq">Suspendisse libero odio, vulputate non pellentesque eu, interdum et purus. Integer sodales magna non nibh porta
										ultricies...
									</p>
									
								</div>
							</div>
						


							<div class="col-md-4 post">
								<div class="post-left">
									<div class="post-date">
										<span>NL</span>
										
									</div>


								</div>
								<div class="post-right">
									<div class="post-image">
										<img id="monImage6" src="img/blog/1.jpg" class="img-responsive" alt="" />
									</div>
									<h5>Rotterdam, Holland</h5>
									<p class="info-post">Mission 2017 | Get Involved</p>
									<p id="texteSix">Suspendisse libero odio, vulputate non pellentesque eu, interdum et purus. Integer sodales magna non nibh porta
										ultricies...
									</p>
									
								</div>
							</div>
						</div>-->
					</div>
				</div>
			</section>
		</div>


		<!-- END BLOG SECTION -->





		<!-- ==============================================
	CONTACT
	=============================================== -->
		<div class="pt-page contact">
			<section class="contact-form">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h3>Connect</h3>
							<h4>and change the world</h4>
							<br/>
							<br/>
							<br/>
							<div class="clearfix"></div>
							<form method="POST" action="{{ route('login') }}" id="contactform">
							{{ csrf_field() }}
								<div class="col-md-6 form-group{{ $errors->has('email') ? ' has-error' : '' }}">
									<input type="email" name="email" class="form-control" value="{{ old('email') }}" required autofocus placeholder="EMAIL">
									@if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
								</div>
								<div class="col-md-6 form-group{{ $errors->has('password') ? ' has-error' : '' }}">
									<input type="password" name="password" class="form-control" placeholder="PASSWORD" required>
									@if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
								</div>
								<div class="checkbox col-md-12">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>

								<!--<div class="col-md-12">
								<textarea name="message" rows="5" class="form-control" placeholder="MESSAGE"></textarea>
							</div>-->
								<div class="col-md-12 send-div">
									<button class="btn btn-default css3Animate" type="submit" value="Send">CONNECT</button></br>
									</br>
									<button class="btn btn-default css3Animate" style="background:#3b5998" type="submit" value="Send">Connect with Facebook account</button></br>
									</br>
									<button class="btn btn-default css3Animate" style="background:#DD4B39" type="submit" value="Send">Connect with Google account</button></br>
									</br>
									<!-- <button class="btn btn-default css3Animate" type="submit" value="Send">Register</button> -->
									<a class="btn btn-default css3Animate" href="{{ url('/register')}}" title="Register here">Register</a>
								</div>
							</form>
							<div class="clearfix"></div>
							<div class="success-message"></div>
							<div class="error-message"></div>
						</div>
					</div>
				</div>
			</section>

			<div id="map"></div>
			<div id="cd-zoom-in" class="css3Animate"><span aria-hidden="true" data-icon="&#x4c;"></span></div>
			<div id="cd-zoom-out" class="css3Animate"><span aria-hidden="true" data-icon="&#x4b;"></span></div>

		</div>
		<!-- END CONTACT SECTION -->





		<!-- ==============================================
	FOOTER
	=============================================== -->
		<footer class="hide">
			<hr class="footer-line">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-4">
						<p><span class="info" aria-hidden="true" data-icon="&#xe01d;"></span></p>
						<!--<p>Calle Sandoval 31001-->
						<br/>Brussels (Belgium)</p>
					</div>
					<div class="col-md-4 col-sm-4">
						<p><span class="info" aria-hidden="true" data-icon="&#xe00b;"></span></p>
						<p>+123 456 789</p>
					</div>
					<div class="col-md-4 col-sm-4">
						<p><span class="info" aria-hidden="true" data-icon="&#xe010;"></span></p>
						<p>info@getinvolved.com</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<ul class="footer-social">
							<li>
								<a class="facebook css3Animate" href="#" aria-hidden="true" data-icon="&#xe093;" data-toggle="tooltip" data-placement="top"
								    title="Facebook" title=""></a>
							</li>
							<li>
								<a class="twitter css3Animate" href="https://twitter.com/GetInvolvedEuro" target="_blank" aria-hidden="true" data-icon="&#xe094;"
								    data-toggle="tooltip" data-placement="top" title="Twitter" title=""></a>
							</li>
							<li>
								<a class="instagram css3Animate" href="https://www.instagram.com/getinvolved.europe/" target="_blank" aria-hidden="true"
								    data-icon="&#xe09a;" data-toggle="tooltip" data-placement="top" title="Instagram" title=""></a>
							</li>
							<!--<li><a class="pinterest css3Animate" href="#" target="_blank" aria-hidden="true" data-icon="&#xe095;" data-toggle="tooltip" data-placement="top" title="Pinterest" title=""></a></li>-->
							<li>
								<a class="googleplus css3Animate" href="#" aria-hidden="true" data-icon="&#xe096;" data-toggle="tooltip" data-placement="top"
								    title="Google Plus" title=""></a>
							</li>
						</ul>
						<p class="copyright">Copyright &#169; 2017 <a href="#">TF YounGeek's</a> - All rights reserved.</p>
					</div>
				</div>
			</div>
			<a href="#" class="toTop css3Animate" aria-hidden="true" data-icon="&#x32;" title=""></a>
		</footer>
		<!-- END FOOTER SECTION -->


	</div>
	<!-- END PT-WRAPPER  -->

	<div id="video-content"></div>
	<a id="bgndVideo" class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=y-ZeBO0ro8Q',containment:'#video-content',autoPlay:true,loop:true, mute:true, startAt:0, opacity:1, quality:'high'}"><a/>

		<!-- BOOTSTRAP CORE JAVASCRIPT
	================================================== -->
		<!-- PLACED AT THE END OF THE DOCUMENT SO THE PAGES LOAD FASTER -->
		<script type="text/javascript" src="{{url('js/jquery-1.11.2.min.js') }}"></script>
		<script type="text/javascript" src="{{url('js/jquery-ui.js') }}"></script>
		<script type="text/javascript" src="{{ url('bootstrap/js/bootstrap.min.js') }}"></script>
		<script type="text/javascript" src="{{ url('js/circle-progress.js') }}"></script>
		<script type="text/javascript" src="{{ url('js/jquery.easypiechart.js') }}"></script>
		<script type="text/javascript" src="{{ url('js/transition.js') }}"></script>
		<script type="text/javascript" src="{{ url('js/map_script.js') }}"></script>
		<script type="text/javascript" src="{{ url('js/isotope.pkgd.min.js') }}"></script>
		<script type="text/javascript" src="{{ url('js/imagesloaded.js') }}"></script>
		<script type="text/javascript" src="{{ url('js/jquery.magnific-popup.min.js') }}"></script>
		<script type="text/javascript" src="{{ url('js/map.js') }}"></script>
		<script type="text/javascript" src="{{ url('js/jquery.mb.YTPlayer.js') }}"></script>
		<script type="text/javascript" src="{{ url('js/video_youtube.js') }}"></script>
		<script type="text/javascript" src="{{ url('js/custom_2.js') }}"></script>
        <script src='{{ ('../assets/js/bootstrap.js') }}'></script>

		<!-- DEMO Switcher
  	================================================== -->
		<script src="{{ url('js/styleswitcher.js') }}"></script>


</body>
<!--Le reste est à finir dans la fin du mois de juillet (surtout la catégorie Problem, y a le footer qui veut pas se déplacer et quand tu réussis à le déplacer, le mode mobile ne suit pas)
<!-- Mirrored from www.creabox.es/themes/white/theme/video_youtube.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Jun 2017 10:09:04 GMT -->

</html>