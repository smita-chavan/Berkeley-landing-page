<?php
require_once '../helpers.php';
require_once $absolute_path.'/common/xss_clean.php';
$xssClean 	 = new xssClean;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<?php
	if(!$isLive)
	{
		?>
		<meta name="robots" content="noindex, nofollow">
		<?php
	}
	?>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>UC Berkeley Data Science | Online Certificate Course</title>
	<link rel="preconnect" href="/">
	<link rel="preconnect" href="//fast.emeritus.org">
    <link rel="preconnect" href="//connect.facebook.net">
    <link rel="preconnect" href="//d2w1vb445pcruu.cloudfront.net">
    <link rel="preconnect" href="//www.googleadservices.com">
    <link rel="preconnect" href="//consent.cookiebot.com">
    <link rel="preconnect" href="//cdn.popt.in">
    <link rel="preconnect" href="//maxcdn.bootstrapcdn.com">
    <link rel="preconnect" href="//cdn.amplitude.com">
	<meta name="description" content="This ten-week online journey is for individual contributors and senior managers seeking a truly rigorous,hands-on experience with modern data analysis methods.">
	<link rel="icon" type="image/png" sizes="16x16" href="https://berkeleyonlineprograms.com/favicon.ico">
	<link rel="icon" href="https://berkeleyonlineprograms.com/favicon.ico" type="image/x-icon">
	<meta property="og:title" content="UC Berkeley Data Science | Online Certificate Course"/>
	<meta property="og:description" content="This ten-week online journey is for individual contributors and senior managers seeking a truly rigorous,hands-on experience with modern data analysis methods."/>
	<meta property="og:image" content="https://emeritus.org/wp-content/uploads/2019/05/data-science-bridging-principles-and-practice-emeritus.jpg" />
	<meta name="twitter:card" content="summary"/>
	<script type="text/javascript">
	WebFontConfig = {
	google: { families: [ 'Roboto:400,500,700&display=swap' ] }
	};
	(function() {
	var wf = document.createElement('script');
	wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
	wf.type = 'text/javascript';
	wf.async = 'true';
	var s = document.getElementsByTagName('script')[0];
	s.parentNode.insertBefore(wf, s);
	})(); </script>
	<!-- Libraries CSS Files -->
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css" />
	<link rel="stylesheet" type="text/css" href="css/base-new-min.css?v=0.32" />

	<script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="692389fc-0b21-4ae2-92f2-9006c63329f7" type="text/javascript" async></script>

 <!-- GA & GTM for live start -->
 <?php
  if($isLive)
  {
    ?>
<script>
   (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
     (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
     m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
   })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
   
   ga('create', 'UA-71668354-1', 'auto', {'allowLinker': true});
   ga('require', 'linker');
   ga('linker:autoLink', ['www.emeritus.org','sg.emeritus.org','programs.emeritus.org','www2.emeritus.org','eim.mit.edu','executive-ed.mit.edu','emeritus.gsb.columbia.edu','execed-emeritus.wharton.upenn.edu','emeritus.london.edu','professionalonline1.mit.edu','emeritus.kellogg.northwestern.edu','emeritus-admissions.secure.force'] );
   ga('set', 'anonymizeIp', true);
   ga('send', 'pageview');
 </script>
 
 <!-- Google Tag Manager -->
 <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
   new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
 j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
 'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-59VN6HZ');</script>
<!-- End Google Tag Manager --> 
<?php
}
?>

    <!-- GA & GTM for live end -->
    <?php 
if(isset($_GET['utm_source']) && trim(strtoupper($_GET['utm_source'])) == 'IMPACTRADIUS')
{
  ?>
  <script type="text/javascript"> (function(a,b,c,d,e,f,g){e['ire_o']=c;e[c]= e[c]||function(){(e[c].a=e[c].a||[]).push(arguments)};f=d.createElement(b);g=d.getElementsByTagName(b)[0];f.async=1;f.src=a;g.parentNode.insertBefore(f,g);})('//d.impactradius-event.com/A1214202-324f-4f53-beb3-17c5d6e3242e1.js','script','ire',document,window);
  ire('identify', {customerId: '', customerEmail: ''});
</script>
<?php 
}
?> 


							<script type="application/ld+json">
							{
								"@context": "https://schema.org",
								"@type": "Course",
								"name": "Data Science",
								"description": "UC Berkeley Executive Education's new program Data Science (Online) gives participants with non-technical backgrounds a foundational understanding of what data science and analytics is all about.",  
								"provider": {
									"@type": "Organization",
									"name": "UC Berkeley Executive Education",    
									"sameAs": "<?php echo $base_url?>data-science/index.php"
								}
							}
						</script>
					

					</head>
					<body>
						
						<header>
							<div class="container">
								<div class="row">
									<div class="col-sm-6 col-md-6">
										<div class="logo">
											<img src="images-new/logo.svg" title="UC Berkeley Executive Education" alt="UC Berkeley Executive Education" class="img-responsive">
										</div>
									</div>
									<div class="col-sm-6 col-md-6">
									
									</div>
								</div>
							</div>
						</header>
						<section class="banner" id="download-brochure">
							<img src="images-new/new-banner.jpg" alt="Data Science (Online)" title="Data Science (Online)">	
							<div class="container">
								<div class="banner-detail">
									<div class="banner-text col-md-7 col-sm-7">
										<h1>Data Science (Online)
										</h1>
										<p class="sbutitle">Add Data Science to your career tool kit.</p> 
									</div>
								</div>
								<div class="banner-form">
									<div class="brochure-form">
										
									</div>

								</div>	
							</div>
						</section>
						<section class="programe-info">
							<div class="container">
								<div class="row">
									<div class="col-sm-4 col-md-4">
										<div class="programe-detail">
											<div class=" bor-right">
											<div class="iconsicon1"></div>
											<div class="start-text">
												<h3>STARTS ON</h3>
												<p>August 4, 2021</p>
<!-- 							<h3>Deadline Extended</h3>
							<p>May 26, 2021</p>
							<h6 class="info">
								<a href="javascript:void(0)" onclick="trackEvent('click','BDS LP','Pop Up','Deadline Extended')" data-toggle="modal" data-target="#myModal2"> <img src="images-new/info_icon.png" alt="info" title="info" class="">&nbsp;<i class="bm">Application deadline extended</i></a>
							</h6> -->
						</div>	
					</div>
					</div>
				</div>
				<div class="col-sm-4 col-md-4">

					<div class="programe-detail">
						<div class="bor-right">
						<div class="iconsicon2"></div>
						<div class="start-text">
							<h3>DURATION</h3>
							<p>10 weeks, online<br/>6-8 hours per week*</p>
						</div>
					</div>
					</div>
				</div>
				<div class="col-sm-4 col-md-4">
					<div class="programe-detail">
						<div class="">
						<div class="iconsicon3"></div>
						<div class="start-text">
							<h3>Program FEES</h3>
							<p>$2,850</p>
							<h6 class="info">
								<a href="javascript:void(0)" onclick="trackEvent('click','BDS LP','Pop Up','Flexi Pay');trackAmplitude('Interact with Page','Flexi Payment','Popup');" data-toggle="modal" data-target="#myModalFlexi"> <div class="info-icon"></div> <i class="bm">Flexible payment available</i></a>
							</h6>
							<h6 class="info">
								<a href="javascript:void(0)" onclick="trackEvent('click','BDS LP','Pop Up','Enrollment Pricing');showGroupForm();trackAmplitude('Interact with Page','Group Enrollment','Popup');" data-toggle="modal" data-target="#special-group"> <div class="info-icon"></div> <i class="bm">Special group enrollment pricing</i></a>
							</h6>
						</div>	
					</div>
				</div>
				</div>
			</div>
		</div>
	</section>
	
	<section class="in-collaboration-sec fix-me">
		<div class="container">
			<div class="content-det">
				<div class="row col p-0 m-0 ">
					<div class="col-md-3 col-12 item-det">
						<div class="iconsicon1"></div>
						<div class="start-text">
							<h6>STARTS ON</h6> 
							<h4>August 4, 2021</h4>
							<!-- <h6>Deadline Extended</h6> 
							<h4>May 26, 2021</h4>
							<p><a href="javascript:void(0)" onclick="trackEvent('click','BDS LP','Pop Up','Deadline Extended')" data-toggle="modal" data-target="#myModal2" class="know-m"><div class="info-icon"></div>Application deadline extended</a></p> -->
						</div>
					</div>
					<div class="col-md-3 col-12 item-det">
						<div class="iconsicon2"></div>
						<div class="start-text">
							<h6>Duration</h6>
							<h4>10 weeks, online<br/>6-8 hours per week*</h4>
							<!-- <p>Designed for working professionals, with time commitment of 4-6 hours per week</p> -->
						</div>
					</div>
					<div class="col-md-3 col-12 item-det">
						<div class="iconsicon3"></div>
						<div class="start-text">
							<h6>PROGRAM Fees</h6>
							<h4>$2,850</h4>
							<p><a href="#!" data-toggle="modal" data-target="#myModalFlexi" class="know-m" onclick="trackEvent('click','BDS LP','Pop Up','Flexi Pay');trackAmplitude('Interact with Page','Flexi Payment Sticky','Popup');"><div class="info-icon"></div>Flexible payment available</a></p>
							<p><a href="#!" data-toggle="modal" data-target="#special-group" class="know-m" onclick="showGroupForm();trackAmplitude('Interact with Page','Group Enrollment Sticky','Popup');"><div class="info-icon"></div>Special group enrollment pricing</a></p>
						</div>
					</div>
					<div class="col-md-3 col-12 item-det">
						<a href="#download-brochure" class="btn btn-default download-brochure red-bg" onclick="trackEvent('click','BDS LP','ScrollUp','Download Brochure Sticky');trackAmplitude('Click on CTA','Download Brochure Sticky');">Download Brochure</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="digital-denial">
		<div class="container">
			<div class="">
				<div class="this-program"> 
					<h2 class="title1 text-center">Key Takeaways</h2>
					<h3>Adopt a data-driven mindset</h3>
					<ul class="program-text">
						<li>Learn to ask the right questions of the data</li>
						<li>Common techniques for turning data into business insights</li>
						<li>Knowing which method to use to answer specific business questions</li>
						
					</ul>
					<h3>Learn to communicate and interpret data</h3>
					<ul class="program-text">
						<li>Effective methods for data presentation</li>
						<li>The language used to communicate with data scientists</li>
						<li>Interpret data more effectively by understanding the most common techniques</li>
						
					</ul>
					<h3>Create a data-driven culture</h3>
					<ul class="program-text">
						<li>Use technology and process to drive a cultural shift where data is leveraged for strategy, decision making and execution</li>
						<li>Learn the capabilities that make for successful data science teams</li>
					</ul>
					
				</div>
				<br/><br/>
				
			</div>
			
		</div>
	</section>

	<section class="this-program padd40 bg-grey">
		<div class="container">
			<div class="">
				<h2 class="title1 text-center">Who is This Program For?</h2>
				<p class="pb">This program is for mid-career managers wanting to upskill, C-suite professionals that make impactful organizational decisions and those at an executive level looking to develop their career in a fast-growing field.</p>
				<ul class="pb">
					<li>Product Managers, Project Managers, Marketing Managers, and others in managerial positions who are integral to the decision making process and want to get deeper actionable insights for their work.</li>
					<li>Director, CEO, CTO, CIO, Vice –President, President, Founder, General Managers who are involved with making systematic data-driven decisions and would like to strengthen the application of data-science in their organizations.</li>
					<li>Executives who are looking for an introduction to Data Science and who want to gain more experience in data analysis.</li>
				</ul>

				<p class="pb">Representative roles include:</p>
				<div class="row">
				<ul class="col-sm-12 col-md-4">
					<li>Director</li>
					<li>CEO</li>
					<li>CTO</li>
					<li>CIO</li>
					<li>Vice –President</li>
					<li>President</li>
				</ul>
				<ul class="col-sm-12 col-md-4">
					<li>Founder</li>
					<li>General Manager</li>
					<li>Product Manager</li>
					<li>Project Manager</li>
					<li>Marketing Manager</li>
				</ul>
				<ul class="col-sm-12 col-md-4">
					<li>HR manager</li>
					<li>Operations Manager</li>
					<li>Sales Manager</li>
					<li>Risk Manager</li>
					<li>Executives</li>
				</ul>
			</div>
			</div>
			<a href="#download-brochure" class="btns" onclick="trackEvent('click','BDS LP','ScrollUp','Learn More Now')">LEARN MORE NOW</a>
		</div>
	</section>
	<section class="programe-topic padd40 bg-white">
		<div class="container">
			<div class="">
				<h2 class="title1 text-center">Preparing for Data Science Literacy</h2>
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<p><span>While there are no formal prerequisites such as coding knowledge, having an aptitude for quantitative concepts is important.</span> <br/>As pre-term work and in week 1, there will be a review of basic mathematical and statistical concepts such as mean, standard deviation, graphs, histograms, and linear and logarithmic functions. In addition, there will be a weekly 'prep session' to introduce key concepts from the next module that participants may want a refresher on. To gain true literacy in data science, be prepared to get dirty in the data and embrace some math and stats. We'll fully support you along the way.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="padd40 bg-grey">
		<div class="container">
			<div class="row">
				<h2 class="title1 text-center">Program Topics</h2>
				
					<div class="col-sm-12 col-md-12 prog-topics">
						<p class="pb">Over the course of ten weeks, you will be exposed to many of the most common techniques used to manipulate and analyze data. At the end of this program, you will be able to work effectively with data science and analytics teams to drive business decisions and successful outcomes for your organization.</p>
						<ul class="program-text" id="program-list2">
							<li><span>Module 1: Probabilistic Decision Making</span><br>
							This module provides a brief introduction to the foundations behind<br> data science and analytics before exploring the fundamentals of data. In addition, you will review a tutorial on using Jupyter Notebook, an interactive computational environment that will allow you to combine code execution, rich text and data plots and analyses.</li>
							<li><span>Module 2: Creating Sample Data</span><br>
							Explore the science of surveys by way of understanding data samples and sampling variation and quality. This module will describe the methods by which sampling is used to analyze the pros and cons of business decisions through the exploration of sampling, type I and type II errors and control limits.</li>
							<li><span>Module 3: Testing Hypothesis</span><br>
							Learn about the importance of making business decisions based on conducting statistical tests, comparisons, confidence intervals and margins of error. You will explore these concepts through the lens<br> of a case focused on direct mail advertising, and complete problem <br>sets using the 4M model (Motivation, Method, Mechanics, Message).</li>
							<li><span>Module 4: Extrapolating Information from Sample Data</span><br>
							Explore how to maximize profits through the extrapolation of information from sample data. You will explore linear and curved patterns, demand, price setting and elasticities.</li>
							<li><span>Module 5: Basic Regression Models</span><br>
							Simple regression analyses are at the heart of more elaborate data-driven business decision making. We’ll focus on understanding the ways in which these models are used, the assumptions that make<br> their use valid and how to leverage these models to make better business decisions. The data set for this module focuses on using<br> crime rates to predict housing pricing in Philadelphia.</li>
							<li><span>Module 6: Advanced Regression Models</span><br>
							Learn about two of the most ubiquitous uses of data science and analytics: forecasting and A/B testing. These will include the analysis of variance, time series regressions and the design and execution of simple and more complex A/B testing procedures. Application is based on the Capital Asset Pricing Model, a tool that describes the relationship between systematic risk and expected return for assets.</li>
							<li><span>Module 7: Forecasting Machine Learning</span><br>
							Explore some of the more fundamental machine learning methods<br> and how they apply to business decisions. Concepts include <br>supervised learning and ML applications such as spam detection.</li>
							<li><span>Module 8: Building Effective Data Science Teams</span><br>
							Wrap-up the program with a deep dive into the suite of competencies that define effective data science teams and how to build a data-driven culture in your organization. Common pitfalls will be stressed, and strategies to work effectively with data scientists will be laid out.</li>
						</ul>
						
					
					<p class="pb padd20">Note: In order to help you explore some of the hands-on techniques that lead directly to making better data-driven decisions, there will be two week-long learning labs as an opportunity to dig deeper into the data. This makes for a 10-week long program in total.</p>
				</div>
				
			
			</div>
			<a href="#download-brochure" class="btns" onclick="trackEvent('click','BDS LP','ScrollUp','Download Syllabus');trackAmplitude('Click on CTA','Download syllabus');">DOWNLOAD SYLLABUS</a>
		</div>
	</section>
	
	<section class="your-learning text-center">
		<div class="container">
			<div class="">
				<h2 class="title1 text-center">Your Learning Journey</h2>
				<p class="text-left pb">During this ten-week online journey, you’ll connect directly with UC Berkeley Executive Education's faculty, industry leaders and peers from every corner of the globe. Taking a rigorous, hands-on approach, you’ll analyze data sets using Jupyter Notebook, an interactive open-source platform we will use for computational analysis. While the curriculum is pre-determined, this is an agile learning experience and there may be dynamic opportunities that present themselves based on real-world happenings. </p>
				<ul class="program-text">
					<li>Interviews with industry experts who are driven by data, from leading companies including Google, the Oakland A's, Uber and more.</li>
					<li>Live weekly 'prep sessions' to introduce any technical concepts for next module, weekly office hours and live assignment reviews</li>
					<li>Live webinars with UC Berkeley Executive Education faculty including Q&A</li>
					<li>Two week-long learning labs to focus on hands-on assignments and dig deeper into the data</li>
					<li>Application exercises using Python in Jupyter Notebook to visualize and analyze data (graded as
					complete or incomplete)</li>
					<li>Moderated discussion boards</li>
				</ul>
				
				
			</div>
		</div>
	</section>
	
	<section class="company-example bg-grey">
		<div class="container">
			<div class="">
				<h2 class="title1 text-center">Company Examples</h2>
				<div class="examples">
					
					<p class="pb-30">UC Berkeley Executive Education's faculty have strong relationships with industry, including many of the top tech firms in and around Silicon Valley. Content from the program is either inspired by or directly derived from research and applications from companies that include:
					</p>
					<div class="case-study" id="program-list3">
						<div class="col-12 col-sm-4">
							<div class="case-study-img">
								<img src="images-new/amazon.svg" class="img-responsive">
							</div>
							<div class="case-study-heading">
								<h3>Amazon</h3>
							</div>
						</div>
						<div class="col-12 col-sm-4">
							<div class="case-study-img">
								<img src="images-new/uber.svg" class="img-responsive">
							</div>
							<div class="case-study-heading">
								<h3>Uber</h3>
							</div>
						</div>
						<div class="col-12 col-sm-4">
							<div class="case-study-img">
								<img src="images-new/ebay.svg" class="img-responsive">
							</div>
							<div class="case-study-heading">
								<h3>Ebay</h3>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="col-12 col-sm-4 show-slide">
							<div class="case-study-img">
								<img src="images-new/gallup.svg" class="img-responsive">
							</div>
							<div class="case-study-heading">
								<h3>Gallup</h3>
							</div>
						</div>
						<div class="col-12 col-sm-4 show-slide">
							<div class="case-study-img">
								<img src="images-new/stubhub.svg" class="img-responsive">
							</div>
							<div class="case-study-heading">
								<h3>StubHub</h3>
							</div>
						</div>
					</div>
					<a href="javascript:void(0)" id="loadMore5" class="load-btn3" onclick="slideshow()">Load More</a>
				   
					</div><br/>
				<div class="clearfix"></div>
				<em>Note: All product and company names are trademarks or registered trademarks of their respective holders. The study of these products and/or companies does not imply any affiliation with or endorsement by them.</em>
			</div>
		</div>
	</section>
	<section class="company-example bg-white">
		<div class="container">
			<div class="">
				<h2 class="title1 text-center">Industry Examples</h2>
				<div class="examples">
					
					<p class="pb-30">We exist in the analytics economy, where every organization can benefit from improving its data literacy skills. Examples come from a broad range of industries, including:
					</p>
					<div class="case-study" id="program-list">
						<div class="col-12 col-sm-4">
							<div class="case-study-img">
								<img src="images-new/fintech.svg" class="img-responsive">
							</div>
							<div class="case-study-heading">
								<h3>Fintech/Financial Svs.</h3>
							</div>
						</div>
						<div class="col-12 col-sm-4">
							<div class="case-study-img">
								<img src="images-new/healthcare.svg" class="img-responsive">
							</div>
							<div class="case-study-heading">
								<h3>Healthcare</h3>
							</div>
						</div>
						<div class="col-12 col-sm-4">
							<div class="case-study-img">
								<img src="images-new/itech.svg" class="img-responsive">
							</div>
							<div class="case-study-heading">
								<h3>Information Technology</h3>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="col-12 col-sm-4 show-slide1">
							<div class="case-study-img">
								<img src="images-new/manufacture.svg" class="img-responsive">
							</div>
							<div class="case-study-heading">
								<h3>Manufacturing</h3>
							</div>
						</div>
						<div class="col-12 col-sm-4 show-slide1">
							<div class="case-study-img">
								<img src="images-new/retail.svg" class="img-responsive">
							</div>
							<div class="case-study-heading">
								<h3>Retail</h3>
							</div>
						</div>
					</div>
					<a href="javascript:void(0)" id="loadMore6" class="load-btn3" onclick="slideshow1()">Load More</a>
					
					</div><br/>
				
			</div>
		</div>
	</section>
	<section class="participant-profile bg-grey padd40">
		<div class="container">
			<div class="row">
				<div class="col-md-12 participant-testimonials">
					<h2 class="title1 text-center">Participant Testimonials</h2>
					
					<div class="owl-carousel owl-theme" id="participant-test">
						<div class="item">
							<div class="car-item">
								<div class="part-det">
									<ul>
										<li>
											<img src="images-new/daniel.png" width="140" height="140" alt="Daniel Franco" title="Daniel Franco">
										</li>
										<li class="designation">
											<p>"Glad to share this amazing experience with anyone eager to lean more about Data Science and Machine Learning. This Executive Program from UC Berkeley is an agile learning experience, seeking a truly rigorous, hands-on experience with modern data analysis methods. The program also provides a good introduction to Python, in order to support data analysis using Jupyter Notebook, an interactive open-source platform used for computational analysis and a review of basic mathematical and statistical concepts. I'd like to thank the Professors Steve Tadelis and Shachar Kariv for this impressive learning experience."</p>
											<h4>&mdash;Daniel Franco, Chief Technology, Innovation and Business Development Officer</h4>
										</li> 
									</ul>                           	
								</div>
							</div>
						</div>
						
						<div class="item">
							<div class="car-item">
								<div class="part-det">
									<ul>
										<li>
											<img src="images-new/michael-wolff.png" width="140" height="140" alt="Michael Wolff" title="Michael Wolff">                           	
										</li>
										<li class="designation">
											<p>"I enjoyed the combination of videos, hands-on exercises and Jupyter Notebook exercises in the program."</p>
											<h4>&mdash;Michael Wolff, Executive Director, Digital Platforms & Products</h4>
										</li>
									</ul>                              	
								</div>
							</div>
						</div>
						<div class="item">
							<div class="car-item">
								<div class="part-det">
									<ul>
										<li>
											<img src="images-new/saloni-sonawala.png" width="140" height="140" alt="Saloni Sonawala" title="Saloni Sonawala">
										</li>
										<li class="designation">
											<p>“This program gave me the required insight into the world of data science, the different languages, models, algorithms as well as the value and pros/cons of using these.”</p>
											<h4>&mdash;Saloni Sonawala, Application Scientist</h4>
										</li> 
									</ul>                           	
								</div>
							</div>
						</div>
						<div class="item">
							<div class="car-item">
								<div class="part-det">
									<ul>
										<li>
											<img src="images-new/dmitry-karablinov.png" width="140" height="140" alt="Dmitry Karablinov" title="Dmitry Karablinov">
										</li>
										<li class="designation">
											<p>"Working with Jupyter Notebook, having access to a good online platform with a focus on real life cases and learning facilitators added a lot of value in my learning journey throughout this program."</p>
											<h4>&mdash;Dmitry Karablinov, Business Development Manager</h4>
										</li> 
									</ul>                           	
								</div>
							</div>
						</div>
						<div class="item">
							<div class="car-item">
								<div class="part-det">
									<ul>
										<li>
											<img src="images-new/daniel.png" width="140" height="140" alt="Dmitry Karablinov" title="Dmitry Karablinov">
										</li>
										<li class="designation">
											<p>"Glad to share this amazing experience with anyone eager to lean more about Data Science and Machine Learning. This Executive Program from UC Berkeley is an agile learning experience, seeking a truly rigorous, hands-on experience with modern data analysis methods. The program also provides a good introduction to Python, in order to support data analysis using Jupyter Notebook, an interactive open-source platform used for computational analysis and a review of basic mathematical and statistical concepts. I'd like to thank the Professors Steve Tadelis and Shachar Kariv for this impressive learning experience."</p>
											<h4>&mdash;Daniel Franco, Chief Technology, Innovation and Business Development Officer at Duratex</h4>
										</li> 
									</ul>                           	
								</div>
							</div>
						</div>
						<div class="item">
							<div class="car-item">
								<div class="part-det">
									<ul>
										<li><img src="images-new/bita-luliano.png" width="140" height="140" alt="Bita Luliano" title="Bita Luliano"></li>
										<li class="designation">
											<p>"The Jupyter Notebook assignments and the weekly office hours were the best part of the program for me."</p>
											<h4>&mdash;Bita Luliano, Talent Management Analyst</h4>
										</li>
									</ul>	
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</section>
	<section class="faculty program-faculty bg-white padd40" id="facultys">
		<div class="container">
			<div class=" text-center">
				<h2 class="title1 text-center">Program Faculty</h2>
				<div class="owl-carousel owl-theme" id="program-faculty">
					<div class="item">
						<div class="col-sm-12 mgbt">
							<div class="row">
								<div class="col-sm-2">
									<img src="images-new/faculty_2.png" width="128" height="128" class="img-responsive" alt="Steve Tadelis" title="Steve Tadelis">	
								</div>
								<div class="col-sm-10">
									<div class="field-data">
										<h5 class="user-name">STEVE TADELIS</h5>
										<h5 class="faculty_designation">James J. and Marianne B. Lowrey Chair in Business, Haas School of Business
										</h5>
										<p class="Practitioner_text">
											Prior to starting his position at Berkeley Haas, Steve was an assistant professor at Stanford University for eight years. Steve also held positions as a senior director and distinguished economist at eBay Research Labs (2011–13) and vice president of economics and market design at Amazon (2016–17) where he applied economic research tools to a variety of product and business applications...<a class="txt-color" data-toggle="modal" data-target="#steve" onclick="trackEvent('click','BDS LP','Pop Up','More Info Faculty')">More info</a>
										</p>
									</div>
								</div>




							</div>

						</div>
					</div>		
					<div class="item">
						<div class="col-sm-12 mgbt">
							<div class="row">
								<div class="col-sm-2">
									<img src="images-new/faculty_1.png" width="128" height="128" class="img-responsive" alt="Shachar Kariv" title="Shachar Kariv">	
								</div>

								<div class="col-sm-10">
									<div class="field-data">	

										<h5 class="user-name">SHACHAR KARIV</h5>
										<h5 class="faculty_designation">Benjamin N. Ward Professor of Economics, Haas School of Business
										</h5>
										<p class="Practitioner_text">
											Shachar is the former department chair and faculty director of the Experimental Social Science Laboratory (Xlab). His research in behavioral and experimental economics provides novel tools for understanding individual preferences and attitudes towards risk and time, which inform nearly all aspects of decision making. The research has uncovered valuable new insights about individuals' financial...<a class="txt-color" data-toggle="modal" data-target="#shachar" onclick="trackEvent('click','BDS LP','Pop Up','More Info Faculty')">More info</a>
										</p>
									</div>

								</div>
							</div>



							
						</div>	
					</div>
				</div>
			</div>
		</div>
	</section>  
	<section class="certificate bg-grey padd40">
		<div class="container">
			
				<div class="row">
					<div class="col-sm-4 col-md-4 pull-right">
						<h2 class="title1 text-center hide-md">Certificate</h2>
						<img src="images-new/certificate-new.jpg" alt="Certificate" title="Certificate" class="img-responsive pull-right">
					</div>
					<div class="col-sm-8 col-md-8 certificate-info">
						<h2 class="title1 text-left hide-sm">Certificate</h2>
						<p class="text-left">Get recognized! Upon successful completion of the program, UC Berkeley Executive Education grants a verified digital certificate of completion to participants. Participants must complete 80 percent of the required activities including a capstone project (if any) to obtain the certificate of completion. This program also counts toward a <a class="link-primary" href="https://executive.berkeley.edu/certificate-of-business-excellence" target="_blank">Certificate of Business Excellence.</a>
						</p>
						<a href="#download-brochure" class="btns" onclick="trackEvent('click','BDS LP','ScrollUp','Earn Certified');trackAmplitude('Click on CTA','Certificate');">EARN CERTIFICATE</a>
					</div>
				</div>
				<div class="clearfix"></div>
				<p class="text-left"><i>Note: This program results in a digital certificate of completion and is not eligible for degree credit/CEUs. After successful completion of the program, your verified digital certificate will be emailed to you in the name you used when registering for the program. All certificate images are for illustrative purposes only and may be subject to change at the discretion of UC Berkeley Executive Education.</i></p>
		
		</div>
	</section>
	<!-- Certificate of Business Excellence -->
	<section class="business-excellence">
		<div class="container">
			<div class="row">
				<div class="col-md-2">
					<img src="images-new/cobe.png" alt="Certificate of Business Excellence logo" title="Certificate of Business Excellence logo" class="img-responsive">
				</div>
				<div class="col-md-10">
					<p class="small">This program counts toward a <span>Certificate of Business Excellence</span></p>
						<ul>
							<li>Curriculum Days: Two days</li>
							<li>Pillar(s): Strategy & Management</li>
						</ul>
						<p class="small">A UC Berkeley Certificate of Business Excellence gives individuals the opportunity to create a personal plan of study structured by our four academic
							pillars. Participants will earn a mark of distinction with certification from a world-class university, and enjoy the flexibility of completing the program in
						up to three years.</p>
						<a href="https://executive.berkeley.edu/certificate-of-business-excellence" target="_blank" onclick="trackEvent('click','BDS LP','Redirect','Learn More');trackAmplitude('Interact with Page','Learn More','Redirect');">Learn more</a>
					</div>
				</div>
			</div>
		</section>
		<!-- Certificate of Business Excellence End-->
		<section class="applynow padd40 text-center">
			<div class="container">
				<div class="space60">
					<a href="https://em-executive.berkeley.edu/?program_sfid=01t0I000006amj7QAA" onclick="trackEvent('click','BDS LP','Redirect','Apply');trackAmplitude('Click on CTA','Apply Now','Redirect');" target="_blank" class="js-persist-utm btns">APPLY NOW</a>
					<h4>Early registrations are encouraged. Seats fill up quickly!</h4>
					<p>Flexible payment options available. <a href="javascript:void(0);" style="color:#fff !important;text-decoration:underline !important;" data-toggle="modal" data-target="#myModalFlexi" onclick="trackEvent('click','BDS LP','Pop Up','Flexi Pay');trackAmplitude('Interact with Page','Flexi Payment Bottom','Popup');">Learn more</a></p>
				</div>
			</div>
		</section>
		<footer class="text-center">
			<div class="container">
				<div class="space60">
					<p>UC Berkeley Executive Education is collaborating with<a href="https://emeritus.org" target="_blank"> online education provider Emeritus</a> to offer a portfolio of high-impact
						online programs. These programs leverage UC Berkeley Executive Education's thought leadership in management practice developed over years of
						research, teaching, and application. By working with Emeritus, we are able to broaden access beyond our on-campus offerings in a collaborative and engaging format that stays true to the quality of The University of California, Berkeley.</p>
					</div>
				</div>
			</footer>
			<div class="model_box">

			</div>
			<!-- The Modal -->
			<div class="modal fade" id="special-group">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<!-- Modal Header -->
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						<!-- Modal body -->
						<div class="modal-body">
					         <div class="clearfix content_h5 special-group-con">
					           <h3 class="text-center">Special Group Enrollment Pricing</h3>	
					           <p class="text-center">Special pricing up to 20% discount is available if you enroll with your colleagues.<br>
					            Please send an email to <a href="mailto:group-enrollments@emeritus.org">group-enrollments@emeritus.org</a> for more information</p>
					          </div>
					        </div>
					</div>
				</div>
			</div>
		</div>
	</div>
		<div class="model_box">
			<div class="modal fade" id="myModal2" role="dialog">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header text-center">
							<button type="button" class="close" data-dismiss="modal" onclick="trackEvent('click','BDS LP','Pop Up','Close')">X</button>
						</div>
						<div class="modal-body">
							<div class="clearfix content_h5">
								<h3 class="text-center">The application deadline has been extended until</h3>	
								<h6 class="text-center">May 26, 2021</h6>	
								<h5 class="text-center">The first week is an orientation module only, there is no teaching, and it is recorded. Join the <em>Data Science (Online)</em> program now and don't delay the impact that the program will have on your career.</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="model_box">
			<div class="modal fade" id="myModalFlexi" role="dialog">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header text-center">
							<button type="button" class="close" data-dismiss="modal" onclick="trackEvent('click','BDS LP','Pop Up','Close')">&times;</button>

						</div>
						<div class="modal-body">
							<div class="clearfix content_h5">
								<h5>The Flexible payment option allows a student to pay the course fee in installments. This option is made available in the application form and should be selected before making the payment.</h5>
							</div>
							<div class="clearfix content_p">
								<h5>The following payment options are available for the <i>Data Science (Online)</i> program:</h5>
								<h4>Pay in Full</h4>
								<ul>
									<li>Pay the entire course fee of <b>$2,850</b> at once.</li>
								</ul>
								<h4>Pay in 2 installments</h4>
								<ul>
									<li>The first installment of <b>$1,512</b> is <b>due immediately</b>.</li>
									<li>The final installment of <b>$1,395</b> is to be paid by <b>August 24, 2021</b>.</li>
								</ul>
								<h4>Pay in 3 installments</h4>
								<ul>
									<li>The first installment of <b>$1,077</b> is <b>due immediately</b>.</li>
									<li>The second installment of <b>$958</b> is to be paid by <b>August 24, 2021</b>.</li>
									<li>The final installment of <b>$958</b> is to be paid by <b>September 13, 2021</b>.</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="model_box">
			<div class="modal fade" id="steve" role="dialog">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header text-center">
							<button type="button" class="close" data-dismiss="modal" onclick="trackEvent('click','BDS LP','Pop Up','More Info Faculty Close')">&times;</button>
						</div>
						<div class="modal-body text-center">
							<img src="images-new/faculty_2.png" class="img-responsive" width="128" height="128" alt="Steve Tadelis" title="Steve Tadelis">
							<h3>STEVE TADELIS</h3>
							<h4>James J. and Marianne B. Lowrey Chair in
							Business, Haas School of Business</h4><br/>
							<p>Prior to starting his position at Berkeley Haas, Steve was an assistant professor at Stanford University for eight years.
                          <br/><br/>Steve also held positions as a senior director and distinguished economist at eBay Research Labs (2011–13) and vice president of economics and market design at Amazon (2016–17) where he applied economic research tools to a variety of product and business applications, working with technologists, machine learning scientists, and business leaders. He continues to advise Amazon part-time as an Amazon economist fellow.
								<br/><br/>Steve’s current areas of research are ecommerce, economics of organization, procurement contracting, theory of the firm and industrial organization, contract theory, and game theory.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="model_box">
			<div class="modal fade" id="shachar" role="dialog">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header text-center">
							<button type="button" class="close" data-dismiss="modal" onclick="trackEvent('click','BDS LP','Pop Up','More Info Faculty Close')" >&times;</button>
						</div>
						<div class="modal-body text-center">
							<img src="images-new/shachar.png" width="128" height="128" class="img-responsive" alt="Shachar Kariv" title="Shachar Kariv">
							<h3>SHACHAR KARIV</h3>
							<h4>Benjamin N. Ward Professor of Economics, Haas School of Business</h4><br/>
							<p>Shachar is the former department chair and faculty director of the Experimental Social Science Laboratory (Xlab). His research in behavioral and experimental economics provides novel tools for understanding individual preferences and attitudes towards risk and time, which inform nearly all aspects of decision making. The research has uncovered valuable new insights about individuals' financial and non-financial decisions; these insights enable clients to make better decisions about how to design and market their products and services, and improve client acquisition, relationship, and retention.<br/><br/>His academic experience includes visiting professorship positions at Stanford University, Princeton University, University of Oxford, University of Cambridge, the European University Institute, and the Norwegian School of Economics, among others. Shachar is a co-founder chief scientist at Capital Preferences, a company revolutionizing enterprise investment advice, lending, insurance, and talent market solutions. The breakthrough “Economic Fingerprint” technology and methodology created by Capital Preferences aims to solve the biggest challenges facing the most dynamic industries and has been featured in <em>The Investment Series</em>, a popular TV show starring Australia’s top financial experts.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<a href="#brochure-form" class="download-bro-btn hide-desktop" onclick="trackAmplitude('Click on CTA','Download Brochure Sticky','Download PDF');">Download Brochure</a>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"async></script>
		<script type="text/javascript" src="js/owl.carousel.min.js"></script>
		<script src="https://unpkg.com/@emeritus-tech/leaky-attributes@1.0.2/dist/app.js" async></script>
		<!-- Tracking Code Start--> 

				<!-- Pardot for live start -->
<?php
if($isLive)
{
  ?>
  
  <!-- Google Tag Manager (noscript) -->
 
    <!-- End Google Tag Manager (noscript) -->
    <script type="text/javascript">
     piAId = '135351';
     piCId = '1429';
     piHostname = 'pi.pardot.com';

     (function() {
      function async_load(){
        var s = document.createElement('script'); s.type = 'text/javascript';
        s.src = ('https:' == document.location.protocol ? 'https://pi' : 'http://cdn') + '.pardot.com/pd.js';
        var c = document.getElementsByTagName('script')[0]; c.parentNode.insertBefore(s, c);
      }
      if(window.attachEvent) { window.attachEvent('onload', async_load); }
      else { window.addEventListener('load', async_load, false); }
    })();
  </script>
  <!-- end pardot -->
  <?php
}
?>
<!-- & Pardot for live end -->
			
			<script>

				function trackEvent(event, category, action, label) {
					ga('send', 'event', category, action, label);
					console.log('GA==' + event + '==' + category + '==' + action + '==' + label);
				}  
			
			
</script>


<script>
	function slideshow() {  
		    $('.show-slide').slideDown();
		    $(this).show();
		    $('#loadMore5').hide();
}  
function slideshow1() {  
		    $('.show-slide1').slideDown();
		    $(this).show();
		    $('#loadMore6').hide();
}  

	var sr = 3;
	$(function () {
		

		$(".load_more_show2").slice(0, 0).show();
		$("#loadMore2").on('click', function (e) {
			e.preventDefault();
			$(".load_more_show2:hidden").slice(0, 2).slideDown();
			sr	= sr+3;
			if ($(".load_more_show2:hidden").length == 0) {
				$("#load").fadeOut('slow');
			}
			if(sr == 6)
			{
				$("#loadMore2").hide();
			}
		});
	});
	
</script>

     <script>
     	$(window).scroll(function() 
     	{    
     		var scroll = $(window).scrollTop();
     		if (scroll >= 850) 
     		{
     			$(".fix-me").slideDown(300);
     		} 
     		else 
     		{
     			$(".fix-me").slideUp(300);
     		}
     	});
     	$(document).scroll(function() {
     		var y = $(this).scrollTop();
     		if (y > 960) {
     			$('.download-bro-btn').fadeIn();
     		} else {
     			$('.download-bro-btn').fadeOut();
     		}
     	});
     </script>
     <script type="text/javascript">
     	  // participant-testimonials
			 $('#participant-test').owlCarousel({
			  infinite: true,
			   autoplay: true,
			    speed:100,
			    items:1,         
			    loop:true,
			    margin:10,
			    nav:false,
			    dots: true,
			    navigation : false,
			    responsive:{
			        0:{
			            items:1,
			            nav:false,
			            dots: true
			        },
			        768:{
			            nav:false,
			            dots: true
			        }
			    }
			    
			});

   // participant-testimonials
 $('#program-faculty').owlCarousel({
  infinite: true,
   autoplay: true,
    speed:100,
    items:1,         
    loop:true,
    margin:10,
    nav:false,
    dots: true,
    navigation : false,
    responsive:{
        0:{
            items:1,
            nav:false,
            dots: true
        },
        768:{
            nav:false,
            dots: true
        }
    }
    
});

     </script>
 </body>
 </html>	