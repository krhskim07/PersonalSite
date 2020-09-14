<?php include('inc/head.inc.php') ?>

<?php include('inc/aside.inc.php') ?>


	<div id="main-wrapper">
		<div class="main-content">
			<?php include('section/about.section.php') ?>

			<?php include('section/competences.section.php') ?>
			


			<section id="tmpl-structure">
				<h2 class="title">Formation</h2>
				<p class="fifteen">All information within the main content area is nested within a body tag. The general template structure is pretty the same throughout the template. Here is the general structure of main page (index.html).</p>
				<pre class="brush: html">
					<header class="header_area">

					</header>

					<main class="site-main">
						<section class="section">

						</section>
						<section class="section">

						</section>
						<section class="section">

						</section>
					</main>

					<footer class="footer">

					</footer>
				</pre>
			</section>


			<section id="css-structure">
				<h2 class="title">Expériences</h2>
					<div class="container">
						<h3 class="card-title">Timeline Style</h3>
						<div class="row">
							<div class="col-md-12">
								<div class="main-timeline3">
									<div class="timeline">
										<div class="timeline-icon"><span class="year">2018</span></div>
										<div class="timeline-content">
											<h3 class="title">Web Desginer</h3>
											<p class="description">
												Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lacinia mi ultrices, luctus nunc ut, commodo enim. Vivamus sem erat.
											</p>
										</div>
									</div>
									<div class="timeline">
										<div class="timeline-icon"><span class="year">2017</span></div>
										<div class="timeline-content">
											<h3 class="title">Web Developer</h3>
											<p class="description">
												Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lacinia mi ultrices, luctus nunc ut, commodo enim. Vivamus sem erat.
											</p>
										</div>
									</div>
									<div class="timeline">
										<div class="timeline-icon"><span class="year">2016</span></div>
										<div class="timeline-content">
											<h3 class="title">Web Desginer</h3>
											<p class="description">
												Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lacinia mi ultrices, luctus nunc ut, commodo enim. Vivamus sem erat.
											</p>
										</div>
									</div>
									<div class="timeline">
										<div class="timeline-icon"><span class="year">2015</span></div>
										<div class="timeline-content">
											<h3 class="title">Web Developer</h3>
											<p class="description">
												Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lacinia mi ultrices, luctus nunc ut, commodo enim. Vivamus sem erat.
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
			</section>

				<section id="javascript">
					<h2 class="title">Javascript Files and Structure</h2>

					<p class="fifteen">These are the list of Javascript files that are loaded into templates in end of the <strong>Body Section</strong>.

						<pre class="brush: html">
				  
				<!-- JS here -->
				
				<!-- All JS Custom Plugins Link Here here -->
				<script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
				<!-- Jquery, Popper, Bootstrap -->
				<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
				<script src="./assets/js/popper.min.js"></script>
				<script src="./assets/js/bootstrap.min.js"></script>
				<!-- Jquery Mobile Menu -->
				<script src="./assets/js/jquery.slicknav.min.js"></script>

				<!-- Jquery Slick , Owl-Carousel Plugins -->
				<script src="./assets/js/owl.carousel.min.js"></script>
				<script src="./assets/js/slick.min.js"></script>
				<!-- One Page, Animated-HeadLin -->
				<script src="./assets/js/wow.min.js"></script>
				<script src="./assets/js/animated.headline.js"></script>
				<script src="./assets/js/jquery.magnific-popup.js"></script>

				<!-- Nice-select, sticky -->
				<script src="./assets/js/jquery.nice-select.min.js"></script>
				<script src="./assets/js/jquery.sticky.js"></script>
				
				<!-- contact js -->
				<script src="./assets/js/contact.js"></script>
				<script src="./assets/js/jquery.form.js"></script>
				<script src="./assets/js/jquery.validate.min.js"></script>
				<script src="./assets/js/mail-script.js"></script>
				<script src="./assets/js/jquery.ajaxchimp.min.js"></script>
				
				<!-- Jquery Plugins, main Jquery -->	
				<script src="./assets/js/plugins.js"></script>
				<script src="./assets/js/main.js"></script>
				
              </pre>

          </section>

          <section id="contact-form">
          	<h2 class="title"> Contact Form </h2>
          	<p>This is a PHP Script for sending messages to your email, you should replace <strong>demo@site.com</strong> to your email to start receive messages.</p>
          	<pre class="brush:php">
          		$to = 'demo@site.com'; // replace this mail with yours
          		$firstname = $_POST["fname"];
          		$email= $_POST["email"];
          		$headers = 'MIME-Version: 1.0' . "\r\n";
          		$headers .= "From: " . $email . "\r\n"; // Sender's E-mail
          		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

          		$message ='<table style="width:100%">
          			<tr>
          				<td>'.$firstname.'  '.$laststname.'</td>
          			</tr>
          			<tr><td>Email: '.$email.'</td></tr>
          		</table>';

          		if (@mail($to, $email, $message, $headers))
          		{
          			echo 'The message has been sent.';
          		}else{
          		echo 'failed';
          	}
          </pre>		            
      </section>
      <section id="subscription-form">
      	<h2 class="title"> Subscription Form </h2>
      	<p>Replace this action with your own mailchimp post URL. Don't remove the "". Just paste the url inside "".</p>
      	<pre class="brush: javascript">
      		<div id="mc_embed_signup">
      			//Replace this action with your own mailchimp post URL. Don't remove the "". Just paste the url inside "".
      			<form target="_blank" novalidate action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&id=92a4423d01" method="get" class="subscription relative d-flex justify-content-center"></form>
      		</div>
      	</pre>		            
      </section>
      <section id="video">
      	<h2 class="title"> Video Tutorial </h2>
      	<!-- 21:9 aspect ratio -->
      	<div class="embed-responsive embed-responsive-21by9">
      		<iframe class="embed-responsive-item" width="100%" height="515" src="https://www.youtube.com/embed/i7_PRPLOxVE?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
      	</div>	            
      </section>
      <section id="credit">
      	<h2 class="title">Source and Credit</h2>		            
      	<div class="script-source">
      		<ul>
      			<li><a target="_blank" href="http://www.pexels.com">Pexels</a></li>
      			<li><a target="_blank" href="http://jquery.com/">jQuery</a></li>
      			<li><a target="_blank" href="http://getbootstrap.com">Bootstrap Framework</a></li>
      			<li><a target="_blank" href="https://dimsemenov.com/plugins/magnific-popup/">magnific popup</a></li>
      			<li><a target="_blank" href="https://masonry.desandro.com/">masonry</a></li>
      			<li><a target="_blank" href="https://www.flaticon.com/home">flaticon</a></li>
      			<li><a target="_blank" href="http://www.owlgraphic.com/owlcarousel">Owl Carousel</a></li>
      			<li><a target="_blank" href="https://github.com/iamMonzurul/jQuery-AJAX-MailChimp">Ajax Mailchimp</a></li>
      			<li><a target="_blank" href="http://fontawesome.io/">FontAwesome</a></li>
      			<li><a target="_blank" href="https://themify.me/themify-icons">Themify Icons</a></li>

      		</ul>
      	</div>
      </section>
  </div>
</div>


<?php include('inc/footer.inc.php') ?>

