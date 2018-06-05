<?php
// Free html5 templates : www.zerotheme.com

$text = "<span style='color:red; font-size: 35px; line-height: 40px; magin: 10px;'>Error! Please try again.</span>";

if(isset($_POST['submitcontact']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];

	$to = "promod5@ukr.net";
	$subject = "Zerotheme - Testing Contact Form";
	$message = " Name: " . $name ."\r\n Email: " . $email . "\r\n Message:\r\n" . $message;
	 
	$from = "Zerotheme";
	$headers = "From:" . $from . "\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
	 
	if(@mail($to,$subject,$message,$headers))
	{
	  $text = "<span style='color:blue; font-size: 35px; line-height: 40px; margin: 10px;'>Your Message was sent successfully !</span>";
	}
}
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Bolgarpartments</title>
	<meta name="description" content="Free Responsive Html5 Css3 Templates | #">
	<meta name="author" content="#">
	
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
  ================================================== -->
  	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/menu.css">
	<link rel="stylesheet" href="css/responsiveslides.css">
	<!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
    
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->
    
</head>
<body>
<div class="wrap-body">

<!--////////////////////////////////////Header-->
<header >
	<div class="zerogrid">
		<div class="wrap-header">
			<div class="logo t-center"><a href="index.html"><img src="images/sea1.jpg"/></a></div>	
			<div id='cssmenu' class="align-center">
				<ul>
				   <li class="active"><a href='index.html'><span>Главная</span></a></li>
				 <!--   <li class=' has-sub'><a href='archive.html'><span>Category</span></a>
				 					  <ul>
				 						 <li class='has-sub'><a href='#'><span>Item 1</span></a>
				 							<ul>
				 							   <li><a href='#'><span>Sub Item</span></a></li>
				 							   <li class='last'><a href='#'><span>Sub Item</span></a></li>
				 							</ul>
				 						 </li>
				 						 <li class='has-sub'><a href='#'><span>Item 2</span></a>
				 							<ul>
				 							   <li><a href='#'><span>Sub Item</span></a></li>
				 							   <li class='last'><a href='#'><span>Sub Item</span></a></li>
				 							</ul>
				 						 </li>
				 					  </ul>
				 </li> -->
				  <!--  <li><a href='archive.html'><span>Галерея</span></a></li> -->
				   <li><a href='archive.html'><span>Про нас</span></a></li>
				   <li class='last'><a href='contact.html'><span>Контакт</span></a></li>
				</ul>
			</div>
		</div>
		<div style="margin-bottom: 30px;" >
			<img src="images/" alt="">
		</div>
	</div>
</header>


<section id="container">
	<div class="zerogrid">
		<div class="wrap-container clearfix">
			<div id="main-content">
				<div class="wrap-content" style="padding: 0;">
					<article>
						<div class="art-header">
							<div class="embed-container maps">

								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23462.397648101563!2d27.702434125264187!3d42.686784921665655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40a69f00e39bceaf%3A0x6322076aff73b0ae!2sPMG+Royal+Sun+Apartments!5e0!3m2!1sru!2sua!4v1528124310196" width="1198" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
<br><br>
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2931.9558321395366!2d27.708962315467286!3d42.70465597916528!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40a69e364678b0f7%3A0xdcd8dee895cffa3a!2sCascadas!5e0!3m2!1sru!2sua!4v1528124497689" width="1198" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>

							</div>
						</div>
						<div class="art-content">
							<h1 class="entry-title">Контакты</h1>
							<div class="row">
								<div class="col-1-3">
									<div class="wrap-col">
										<span>3 апартамент . Семейный курортный отель Cascadas расположен на курорте Солнечный берег, всего в 9 минутах ходьбы от ближайшего пляжа. К услугам гостей 4 ресторана, 9 открытых бассейнов с барами у бассейна. На всей территории предоставляется бесплатный Wi-Fi.
Студия-смарт семейного отеля Cascadas оснащена кондиционером, телевизором с плоским экраном с кабельными каналами, бесплатным wi-fi и стиральной машиной. В числе удобств кухонные принадлежности,посуда, холодильник, микроволновка,чайник, тостер, утюг, фен. Предоставляются постельное белье и полотенца.
В отеле работает оздоровительный спа-центр с гидромассажем и паровой баней, а также фитнес-центр. Гости могут посетить тематический эко-парк с открытым кинотеатром и 2 мини-аквапарками. В парке ежедневно проводятся мероприятиями для детей. Здесь также можно покататься на пони. На территории обустроены помещения для проведения конференций.

</span>
										<p>Прогулка до торговой улицы с 2 гипермаркетами, аптекой и банкоматом занимает несколько минут. До международного аэропорта Бургас — 25 минут езды.</p>

										<p>Адреса: СASCADAS 149 Chaika Street,<br>  
										Cascadas Complex,<br> 
										8240 Солнечный берег,<br> 
										Болгария<br>
											</p>
										  
											+38 (050) 412 89 00</p>
										<p>promod5@ukr.net</p>
									</div>
								</div>
								<div class="col-2-3">
									<div class="wrap-col">
										<div class="contact">
											<div id="contact_form">
												<form name="form1" id="ff" method="post" action="contact.php">
													<label class="row">
														<div class="col-1-2">
															<div class="wrap-col">
																<input type="text" name="name" id="name" placeholder="Enter name" required="required"/>
															</div>
														</div>
														<div class="col-1-2">
															<div class="wrap-col">
																<input type="email" name="email" id="email" placeholder="Enter email" required="required"/>
															</div>
														</div>
													</label>
													<label class="row">
														<div class="wrap-col">
															<input type="text" name="subject" id="subject" placeholder="Subject" required="required" />
														</div>
													</label>
													<label class="row">
														<div class="wrap-col">
															<textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required"
															placeholder="Message"></textarea>
														</div>
													</label>
													<center><input class="sendButton" type="submit" name="submitcontact" value="Submit"></center>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</article>
				</div>
			</div>
		</div>
	</div>
</section>
	
<!--////////////////////////////////////Footer-->
<footer>
	<div class="zerogrid">
		<div class="wrap-footer">
			<div class="row">
				<div class="col-1-2">
					<div class="wrap-col">
						<div class="copy-right">
							<p>Copyright @ Petlitskiy 2018<a href="#" title="free website templates"></a></p>
						</div>
					</div>
				</div>
				<!-- <div class="col-1-2">
					<div class="wrap-col">
						<ul class="bottom-social f-right">
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						</ul>
						<div class="clear"></div>
					</div>
				</div> -->
			</div>
		</div>
	</div>
</footer>

<script src="js/jquery1111.min.js" type="text/javascript"></script>
<script src="js/script.js"></script>
	
<script type="text/javascript">
    $(function() {
		if ($.browser.msie && $.browser.version.substr(0,1)<7)
		{
		$('li').has('ul').mouseover(function(){
			$(this).children('ul').css('visibility','visible');
			}).mouseout(function(){
			$(this).children('ul').css('visibility','hidden');
			})
		}

		/* Mobile */
		$("#menu-trigger").on("click", function(){
			$("#menu").slideToggle();
		});

		// iPad
		var isiPad = navigator.userAgent.match(/iPad/i) != null;
		if (isiPad) $('#menu ul').addClass('no-transition');      
    });          
</script>


</div>
</body></html>