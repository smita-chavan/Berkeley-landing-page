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
	<meta name="robots" content="noindex, nofollow">	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>UC Berkeley Data Science | Online Certificate Course</title>
	<link rel="preconnect" href="/">
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
									<div class="brochure-form thankyou text-center">
										<p class="thankyou">Thank you for your interest in the <em>Data Science (Online)</em> Program. Our program advisor will get in touch with you shortly.</p>
										<div class="schedule-text">
											<p class="getintouch">Easily <a href="https://calendly.com/team-programadvisory/wl-b-ds" target="_blank" onclick="trackEvent('click','CYB TP','Schedule a call');trackAmplitude('Interact with Page','Schedule a call','Redirect');" class="sch-link"><u>schedule a call</u></a> with a program advisor to learn more.</p>
											<h5>Or</h5>
											<p class="getintouch">Speak to a program advisor</p>
								<p class="getintouch"><a href="tel:+1-510-822-8883"><img src="images-new/phone.png"> +1-510-822-8883</a></p>
										</div>
										<a href="https://em-executive.berkeley.edu/programs/01t0I000006amj7QAA/brochure" class="btns" onclick="trackEvent('click','BDS TP','Download PDF','Download Brochure');trackAmplitude('Click on CTA','Download Brochure','Download PDF');">Download Brochure</a>
										<a href="https://em-executive.berkeley.edu/?program_sfid=01t0I000006amj7QAA" target="_blank" class="js-persist-utm btns" onclick="trackEvent('click','BDS TP','Redirect','Apply');trackAmplitude('Click on CTA','Apply Now','Redirect');">Apply Now</a>
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
												<p>March 2, 2022</p>
							<!-- <h3>Deadline Extended</h3>
							<p>November 4, 2021</p>
							<h6 class="info">
								<a href="javascript:void(0)" onclick="trackEvent('click','BDS TP','Pop Up','Deadline Extended')" data-toggle="modal" data-target="#myModal2"> <img src="images-new/info_icon.png" alt="info" title="info" class="">&nbsp;<i class="bm">Application deadline extended</i></a>
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
							<p>10 weeks, online<br/>6-8 hours per week</p>
						</div>
					</div>
					</div>
				</div>
				<div class="col-sm-4 col-md-4">
					<div class="programe-detail">
						<div class="">
						<div class="iconsicon3"></div>
						<div class="start-text">
							<h3>Program FEE</h3>
							<p><b><s>US$2,850</s> US$2,550</b></p>							
							<h6 class="info">
								<b><a href="https://em-executive.berkeley.edu/en/refer/01t0I000006amj7QAA?source=pricing" onclick="trackEvent('click','BDS TP','Redirect','referral');trackAmplitude('Interact with Page','Referral','Redirect');" target="_blank">or get US$285 off with a referral</a></b>
							</h6>
							<h6 class="info">
								<a href="javascript:void(0)" onclick="trackEvent('click','BDS TP','Pop Up','Flexi Pay');trackAmplitude('Interact with Page','Flexi Payment','Popup');" data-toggle="modal" data-target="#myModalFlexi"> <div class="info-icon"></div> <i class="bm">Flexible payment available</i></a>
							</h6>
							<h6 class="info">
								<a href="javascript:void(0)" onclick="trackEvent('click','BDS TP','Pop Up','Enrollment Pricing');showGroupForm();trackAmplitude('Interact with Page','Group Enrollment','Popup');" data-toggle="modal" data-target="#special-group"> <div class="info-icon"></div> <i class="bm">Special group enrollment pricing</i></a>
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
							<h4>March 2, 2022</h4>
							<!-- <h6>Deadline Extended</h6> 
							<h4>November 4, 2021</h4>
							<p><a href="javascript:void(0)" onclick="trackEvent('click','BDS LP','Pop Up','Deadline Extended')" data-toggle="modal" data-target="#myModal2" class="know-m"><div class="info-icon"></div>Application deadline extended</a></p> -->
						</div>
					</div>
					<div class="col-md-3 col-12 item-det">
						<div class="iconsicon2"></div>
						<div class="start-text">
							<h6>Duration</h6>
							<h4>10 weeks, online<br/>6-8 hours per week</h4>
							<!-- <p>Designed for working professionals, with time commitment of 4-6 hours per week</p> -->
						</div>
					</div>
					<div class="col-md-3 col-12 item-det">
						<div class="iconsicon3"></div>
						<div class="start-text">
							<h6>PROGRAM Fee</h6>
							<h4><b><s>US$2,850</s> US$2,550</b></h4>
							<p><b><a class="know-m" href="https://em-executive.berkeley.edu/en/refer/01t0I000006amj7QAA?source=pricing" onclick="trackEvent('click','BDS TP','Redirect','referral');trackAmplitude('Interact with Page','Referral','Redirect');" target="_blank">or get US$285 off with a referral</a></b></p>
							<p><a href="#!" data-toggle="modal" data-target="#myModalFlexi" class="know-m" onclick="trackEvent('click','BDS LP','Pop Up','Flexi Pay');trackAmplitude('Interact with Page','Flexi Payment Sticky','Popup');"><div class="info-icon"></div>Flexible payment available</a></p>
							<p><a href="#!" data-toggle="modal" data-target="#special-group" class="know-m" onclick="showGroupForm();trackAmplitude('Interact with Page','Group Enrollment Sticky','Popup');"><div class="info-icon"></div>Special group enrollment pricing</a></p>
						</div>
					</div>
					<div class="col-md-3 col-12 item-det">
						<a href="https://em-executive.berkeley.edu/programs/01t0I000006amj7QAA/brochure" class="btn btn-default download-brochure red-bg" onclick="trackEvent('click','BDS LP','ScrollUp','Download Brochure Sticky');trackAmplitude('Click on CTA','Download Brochure Sticky');">Download Brochure</a>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- 	<section class="enr-alumni padd40 bg-white">
		<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<h2 class="title1 text-center">Invest in Yourself in 2022</h2>
						<p>This new year, Berkeley Executive Education in partnership with Emeritus is offering 15% tuition assistance on this online program to set you up for professional success. Enroll before January 25, 2022, 04:00 PM PST to get this benefit.</p>
					</div>
				</div>
		</div>
	</section> -->
	<!-- application detail section -->
  <!-- <section class="enr-alumni padd40 bg-grey">
		<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<h2 class="title1 text-center">Application Details</h2>						
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 col-md-4">
						<img src="images-new/r1.jpg" class="img-responsive">
					</div>
					<div class="col-sm-12 col-md-4">
						<img src="images-new/r2.jpg" class="img-responsive">
					</div>
					<div class="col-sm-12 col-md-4">
						<img src="images-new/r3.jpg" class="img-responsive">
					</div>
				</div>
		</div>
	</section> -->
	<!-- application detail section end-->
<section class="enr-alumni padd40 bg-white text-center">
		<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<h3 class="title-2 text-center"><strong>Enrolling in this program is the first step in your journey to alumni benefits.</strong></h3>
						<a href="#alumni-sec" onclick="trackEvent('click','BDS LP','ScrollDown','Learn More')">Learn More</a>
					</div>
				</div>
		</div>
	</section>
	
<section class="programe-topic padd40 bg-grey">
		<div class="container">
			<div class="">
				<h2 class="title1 text-center">Every Company Is a Data Company</h2>
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<p class="pb">Don’t let a data-driven organization overtake you. Become a data organization too. No matter the industry, every organization must be in the data business.</p>
						<p class="pb">According to NewVantage Partners’ 2021 survey of senior executives, 96% said AI and big data had produced successful business outcomes, up more than 25% over the previous year. Still, only 41% say they are competing on analytics, and fewer than a quarter say their organizations have built a data-driven culture. The challenge to realizing the potential of big data lies not in the technology itself, but rather in the transformation of teams, culture, and processes.</p>
						<p>In this program, prepare to dive right into that transformation by getting dirty in the data. Data Science: Bridging Principles and Practice provides a foundational understanding of what data science and analytics is all about. By the end of this program, you will be able to work effectively with data teams to drive successful outcomes for your organization.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="digital-denial bg-white">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
				<div class="this-program"> 
					<h2 class="title1 text-center">Key Takeaways</h2>
					<p>In this program, you will be introduced to the basics of statistics and analytics in order to build a foundation in data science. You will acquaint yourself with the tools of analytics, explore the business applications of data concepts and tools, and develop the language and skills to work effectively with your data team. By the end of the program, you will be prepared to do the following:</p>
					<ul class="program-text">
						<li><b>Adopt a data-driven mindset,</b> ask the right questions, turn data into business insights, and identify the best methods to answer questions.</li>
						<li><b>Learn to communicate and interpret data,</b> master data presentation methods, communicate with data scientists, and interpret data effectively.</li>
						<li><b>Create a data-driven culture,</b> use technology and processes to drive a cultural shift where data is leveraged for strategy, decision making, and execution.</li>	
					</ul>
				</div>
				</div>		
			</div>
		</div>
	</section>

	<section class="this-program padd40 bg-grey">
		<div class="container">
			<div class="">
				<h2 class="title1 text-center">Who is This Program For?</h2>
				<p class="pb">This program is for mid-career managers who want to upskill, C-suite professionals that make impactful organizational decisions, and executives who want to develop their career in a fast-growing field.</p>
				<ul class="pb">
					<li>Product Managers, Product managers, project managers, marketing managers, and others in managerial positions who are integral to the decision-making process and want to get deeper actionable insights for their work.</li>
					<li>Directors, CEOs, CTOs, CIOs, vice presidents, presidents, founders, and general managers who are involved in making systematic data-driven decisions and would like to strengthen the application of data science in their organizations.</li>
					<li>Executives who want an introduction to Data Science and want to gain more experience in data analysis.</li>
				</ul>				
			</div>
			<a href="https://em-executive.berkeley.edu/programs/01t0I000006amj7QAA/brochure" class="btns" onclick="trackEvent('click','BDS TP','ScrollUp','Learn More Now')">LEARN MORE NOW</a>
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
				<h2 class="title1 text-center">Program Modules</h2>
				
					<div class="col-sm-12 col-md-12 prog-topics">
						<p class="pb">As you work through the hands-on modules, you will gain meaningful business insights from the data and example cases derived from a broad sampling of industries.</p>
						<div class="row">
							<div class="col-md-6 col-sm-12">
									<ul class="program-text" id="program-list2">
							<li><span>Module 1: Probabilistic Decision Making</span><br>
							We’ll introduce the foundational concepts behind data science and analytics before exploring the fundamentals of data.
								<ul class="pt-ul">
									<li>Compare categorical vs. numerical data.</li>
									<li>Explore the basic ways that data reveal information.</li>
									<li>Learn from a healthcare example: HMO membership and doctor visits using aggregated data.</li>
									<li>Become acquainted with Jupyter Notebook, Python, and Panda.</li>
								</ul>
							</li>
							<li><span>Module 2: Creating Sample Data</span><br>
							Learn the definitions of key survey terms as well as methods that use sampling to analyze the pros and cons of business decisions through the exploration of sampling, type I and type II errors, and control limits.
								<ul class="pt-ul">
									<li>Learn to define types of data samples, sampling variation, and quality.</li>
									<li>Identify and define foundational sampling concepts.</li>
									<li>Identify and mitigate bias when sampling data.</li>
									<li>Evaluate examples that illustrate joint, marginal, and conditional probability: Comcast, Google, and Nextag.</li>
								</ul>
							</li>
							<li><span>Module 3: Testing Hypotheses</span><br>
							Making data-driven business decisions relies on well-articulated hypotheses that lend themselves to statistical tests. We’ll cover the foundations of this approach, including statistical comparisons, confidence intervals, and margins of error.
								<ul class="pt-ul">
									<li>Identify the basic tenets of experimentation.</li>
									<li>Identify and discriminate between one-sided and two-sided statistical tests.</li>
									<li>Complete problem sets using the 4M model (Motivation, Method, Mechanics, and Message).</li>
									<li>Analyze an industry example: 24 Hour Fitness tests a new proprietary diet—testing between control and treatment groups.</li>
								</ul>
							</li>
							<li><span>Module 4: Extrapolating Information from Sample Data</span><br>
							We’ll explore the most common linear and curved patterns and understand different ways to fit data to linear models. A central application will be understanding market demand, price setting, and elasticities.
								<ul class="pt-ul">
									<li>Identify conditions for using and interpreting linear and curved patterns.</li>
									<li>Examine curved (non-linear) patterns as applied to vehicle weight and fuel efficiency.</li>
									<li>Complete problem sets using the 4M model for credit cards, crime, and housing prices in Philadelphia.</li>		
								</ul>
							</li>
						</ul>
							</div>

							<div class="col-md-6 col-sm-12">
								<ul class="program-text" id="program-list2">
							<li><span>Module 5: Basic Regression Models</span><br>
							Simple regression analyses are at the heart of more elaborate data-driven business decision making. We’ll focus on understanding how these models are used, the assumptions that make their use valid, and how to leverage these models to make better business decisions.
								<ul class="pt-ul">
									<li>Define and apply the simple regression model and identify conditions for its use.</li>
									<li>Apply and interpret prediction intervals.</li>
									<li>Identify three major problems that affect regression models: changing variation in data, outliers, and dependence among observations.</li>
									<li>Practice with a retail example: use regression modeling to determine the location of a franchise outlet.</li>
								</ul>
							</li>
							<li><span>Module 6: Advanced Regression Models</span><br>
							Build on the basics to define the multiple regression model and explore different use cases.
								<ul class="pt-ul">
									<li>Discriminate between marginal and partial slopes.</li>
									<li>Articulate inference in the multiple regression model.</li>
									<li>Summarize the process of fitting and building a multiple regression model.</li>
									<li>Learn from a financial example: build a multiple regression model to explain the returns on Sony’s stock.</li>
									<li>Practice with a human resources example: analyze salary data using MRM to identify gender imbalances.</li>
								</ul>
							</li>
							<li><span>Module 7: Forecasting and Machine Learning</span><br>
								We’ll demystify machine learning by mastering the fundamentals and studying different applications.
								<ul class="pt-ul">
									<li>Discriminate between supervised, semi-supervised, and unsupervised learning.</li>
									<li>Examine machine learning approaches, including the “bag-of-words” method for supervised learning.</li>
									<li>Practice forecasting by using time series regressions.</li>
									<li>Explore a cybersecurity example: machine learning for spam detection.</li>									
								</ul>
							</li>
							<li><span>Module 8: A/B Testing & Building Effective Data Science Teams</span><br>
									With the fundamentals and some of the most common tools under our belts, we’ll dive deep into the competencies that define effective data science teams and show you how to build a data-driven culture in your organization. We will stress common pitfalls and strategies to work effectively with data scientists.
								<ul class="pt-ul">
									<li>Review the requirements for building effective data science teams.</li>
									<li>Continue the exploration of building a data-driven culture.</li>
									<li>Evaluate an advertising example: Rocket Fuel’s conversion rate, benefit, ROI, opportunity cost, and A/B testing.</li>						
								</ul>
							</li>
						</ul>
						
							</div>

						</div>
						
					
					<p class="pb padd20"><i>Note: In order to help you explore some of the hands-on techniques that lead directly to making better data-driven decisions, there will be two weeklong learning labs that provide an opportunity to dig deeper into the data. This extends the program to a total of 10 weeks.</i></p>
				</div>
				
			
			</div>
			<a href="https://em-executive.berkeley.edu/programs/01t0I000006amj7QAA/brochure" class="btns" onclick="trackEvent('click','BDS TP','ScrollUp','Download Syllabus');trackAmplitude('Click on CTA','Download syllabus');">DOWNLOAD SYLLABUS</a>
		</div>
	</section>
	
	<section class="your-learning text-center bg-white">
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
					
					<p class="pb-30">UC Berkeley Executive Education’s faculty members have built strong relationships with industry, including many of the top organizations in and around Silicon Valley. The program's content is either inspired by or directly derived from research and applications from companies that include:
					</p>
					<div class="case-study" id="program-list3">
						<div class="col-12 col-sm-4">
							<div class="case-study-img">
								<img src="images-new/amazon.jpg" class="img-responsive">
							</div>
							<div class="case-study-heading">
								<h3>Amazon</h3>
							</div>
						</div>
						<div class="col-12 col-sm-4">
							<div class="case-study-img">
								<img src="images-new/uber.jpg" class="img-responsive">
							</div>
							<div class="case-study-heading">
								<h3>Uber</h3>
							</div>
						</div>
						<div class="col-12 col-sm-4">
							<div class="case-study-img">
								<img src="images-new/ebay.jpg" class="img-responsive">
							</div>
							<div class="case-study-heading">
								<h3>Ebay</h3>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="col-12 col-sm-4 show-slide">
							<div class="case-study-img">
								<img src="images-new/gallup.jpg" class="img-responsive">
							</div>
							<div class="case-study-heading">
								<h3>Gallup</h3>
							</div>
						</div>
						<div class="col-12 col-sm-4 show-slide">
							<div class="case-study-img">
								<img src="images-new/stubhub.jpg" class="img-responsive">
							</div>
							<div class="case-study-heading">
								<h3>StubHub</h3>
							</div>
						</div>
					</div>
					<a href="javascript:void(0)" id="loadMore5" class="load-btn3" onclick="slideshow()">Load More</a>
				   
					</div><br/>
				<div class="clearfix"></div>
				<em>Note: All product and company names are trademarks™ or registered® trademarks of their respective holders. Their use does not imply any affiliation with or endorsement by them.</em>
			</div>
		</div>
	</section>
	<section class="company-example bg-white">
		<div class="container">
			<div class="">
				<h2 class="title1 text-center">Industry Examples</h2>
				<div class="examples">
					
					<p class="pb-30">Since every company is a data company and every organization can benefit from improving its data literacy, we will explore examples from a range of industries, including: 
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
					<h2 class="title1 text-center">What Participants Say</h2>
					
					<div class="owl-carousel owl-theme" id="participant-test">
						<div class="item">
							<div class="car-item">
								<div class="part-det">
									<ul>										
										<li class="designation text-center">
											<p>"It was the right level of difficulty and fun to learn some basic Python."</p>
											<h4>&mdash;Moritz Marti, Senior Consultant Digital & Business Transformation, Campana & Schott, New York City</h4>
										</li> 
									</ul>                           	
								</div>
							</div>
						</div>
						
						<div class="item">
							<div class="car-item">
								<div class="part-det">
									<ul>
										<li class="designation text-center">
											<p>"The notebooks were great because they were practical."</p>
											<h4>&mdash;Melanie Somiah, Senior Manager, Deloitte, Canada</h4>
										</li>
									</ul>                              	
								</div>
							</div>
						</div>
						<div class="item">
							<div class="car-item">
								<div class="part-det">
									<ul>										
										<li class="designation text-center">
											<p>“The examples and exercises helped me put theory and practice together in a fun way.”</p>
											<h4>&mdash;Angel Camacho, Director of Product Marketing, Aerospike, California</h4>
										</li> 
									</ul>                           	
								</div>
							</div>
						</div>
						<div class="item">
							<div class="car-item">
								<div class="part-det">
									<ul>										
										<li class="designation text-center">
											<p>"The math is the core for data science and gives the proper understanding of the mechanics."</p>
											<h4>&mdash;Marco Evangelista, Key Account Director, Oracle, Brazil</h4>
										</li> 
									</ul>                           	
								</div>
							</div>
						</div>
						<div class="item">
							<div class="car-item">
								<div class="part-det">
									<ul>										
										<li class="designation text-center">
											<p>"It offered a simple transition into coding for a novice."</p>
											<h4>&mdash;Chris Campbell , Medical Science Liaison at Eisai US, Chicago</h4>
										</li> 
									</ul>                           	
								</div>
							</div>
						</div>
						<div class="item">
							<div class="car-item">
								<div class="part-det text-center">
									<ul>										
										<li class="designation">
											<p>"I really enjoyed the mix of media, from lectures to videos to notebooks – a nice way to blend the learning."</p>
											<h4>&mdash;Robert Fox, CTO, HG Insights, California</h4>
										</li>
									</ul>	
								</div>
							</div>
						</div>
						<div class="item">
							<div class="car-item">
								<div class="part-det text-center">
									<ul>										
										<li class="designation">
											<p>"The Jupyter Notebook assignments and problem sets were great – nothing like getting your hands dirty, translating lectures into action."</p>
											<h4>&mdash;Jerry Yen, CEO & Cofounder, Advice Analytics, California</h4>
										</li>
									</ul>	
								</div>
							</div>
						</div>
						<div class="item">
							<div class="car-item">
								<div class="part-det text-center">
									<ul>										
										<li class="designation">
											<p>"Easy to follow for a statistics/Python novice."</p>
											<h4>&mdash;Natalie Duffy, Strategic Workforce Planning Manager, Nissan Motor Corp., UAE</h4>
										</li>
									</ul>	
								</div>
							</div>
						</div>
						<div class="item">
							<div class="car-item">
								<div class="part-det text-center">
									<ul>										
										<li class="designation">
											<p>"I was looking for a data science class designed for business people, focused more on the real world. And this course delivered exactly what I was looking for."</p>
											<h4>&mdash;Sarah Wang, Senior Product Manager, iRobot, Boston</h4>
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
									<img src="images-new/faculty_2.png" class="img-responsive" width="128" height="128" alt="Steve Tadelis" title="Steve Tadelis">	
								</div>
								<div class="col-sm-10">
									<div class="field-data">
										<h5 class="user-name">STEVE TADELIS</h5>
										<h5 class="faculty_designation">Professor of Economics and Sarin Chair in Leadership and Strategy, Berkeley Haas
										</h5>
										<p class="Practitioner_text">
											An expert in e-commerce and the economics of the internet, Prof. Tadelis has extensive experience in the field, including a position as senior director and distinguished economist at eBay (2011–13) and vice president of economics and market design at Amazon (2016–17)...<a class="txt-color" data-toggle="modal" data-target="#steve" onclick="trackEvent('click','BDS TP','Pop Up','More Info Faculty')">More info</a>
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
									<img src="images-new/faculty_1.png" class="img-responsive" width="128" height="128" alt="Shachar Kariv" title="Shachar Kariv">	
								</div>

								<div class="col-sm-10">
									<div class="field-data">	

										<h5 class="user-name">SHACHAR KARIV</h5>
										<h5 class="faculty_designation">Benjamin N. Ward Professor of Economics, Berkeley Haas
										</h5>
										<p class="Practitioner_text">
											Former chair of the department of economics and faculty director of the Experimental Social Science Lab (Xlab), Prof. Kariv is an expert in behavioral and experimental economics, focused on individuals’ financial and non-financial decisions...<a class="txt-color" data-toggle="modal" data-target="#shachar" onclick="trackEvent('click','BDS TP','Pop Up','More Info Faculty')">More info</a>
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

	<section class="alumni-benefits bg-grey padd40" id="alumni-sec">
		<div class="container">
			<div class="">
				<h2 class="title1 text-center">Path to Alumni Benefits</h2>
				<p class="pb">Enrolling in the Data Science program is your first step toward the <b>Certificate of Business Excellence.</b> You will have access to a private global network of more than 41,000 UC Berkeley alumni in more than 80 countries, along with exclusive benefits available only to UC Berkeley alumni who have completed the Certificate of Business Excellence:</p>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<h4>Networking and events</h4>
						<ul>
							<li>Join local alumni chapters or clubs in your region</li>
							<li>Participate in the annual Berkeley Haas Alumni Conference</li>
							<li>Attend select Berkeley Haas and Berkeley Executive Education Networking events open to the COBE community</li>
						</ul>
					</div>
					<div class="col-md-4 col-sm-12">
						<h4>Berkeley resources</h4>
						<ul>
							<li>Activate an @haas.executivealumni.berkeley.edu email forwarding address</li>
							<li>Enjoy a 30% discount on eligible programs after completion of your COBE program</li>
							<li>Gain online access to the Long Business Library and other university databases</li>
						</ul>
					</div> 
					<div class="col-md-4 col-sm-12">
						<h4>News and communication</h4>
						<ul>
							<li>A one year complimentary digital subscription to <i>California Management Review</i></li>
							<li>Berkeley Haas Alumni newsletter</li>
							<li>Berkeley Haas Alumni Jobs e-Newsletter featuring job postings from distinguished employers</li>
							<li>Haas Insights offering the latest research and thought leadership from industry speakers and faculty</li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<p class="note"><i>Note: All benefits subject to change.</i></p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="certificate bg-white padd40">
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
						<a href="#download-brochure" class="btns" onclick="trackEvent('click','BDS TP','ScrollUp','Earn Certified');trackAmplitude('Click on CTA','Certificate');">EARN CERTIFICATE</a>
					</div>
				</div>
				<div class="clearfix"></div>
				<p class="text-left"><i>Note: This program results in a digital certificate of completion and is not eligible for degree credit/CEUs. After successful completion of the program, your verified digital certificate will be emailed to you in the name you used when registering for the program. All certificate images are for illustrative purposes only and may be subject to change at the discretion of UC Berkeley Executive Education.</i></p>
		
		</div>
	</section>
	<!-- Certificate of Business Excellence -->
	<section class="business-excellence bg-grey">
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
						<a href="https://executive.berkeley.edu/certificate-of-business-excellence" target="_blank" onclick="trackEvent('click','BDS TP','Redirect','Learn More');trackAmplitude('Interact with Page','Learn More','Redirect');">Learn more</a>
					</div>
				</div>
			</div>
		</section>
		<!-- Certificate of Business Excellence End-->
		<section class="applynow padd40 text-center">
			<div class="container">
				<div class="space60">
					<a href="https://em-executive.berkeley.edu/?program_sfid=01t0I000006amj7QAA" onclick="trackEvent('click','BDS TP','Redirect','Apply');trackAmplitude('Click on CTA','Apply Now','Redirect');" target="_blank" class="js-persist-utm btns">APPLY NOW</a>
					<h4>Early registrations are encouraged. Seats fill up quickly!</h4>
					<p>Flexible payment options available. <a href="javascript:void(0);" style="color:#fff !important;text-decoration:underline !important;" data-toggle="modal" data-target="#myModalFlexi" onclick="trackEvent('click','BDS TP','Pop Up','Flexi Pay');trackAmplitude('Interact with Page','Flexi Payment Bottom','Popup');">Learn more</a></p>
				</div>
			</div>
		</section>
		<footer class="text-center">
			<div class="container">
				<div class="space60">
					<p>UC Berkeley Executive Education is collaborating with<a href="https://emeritus.org" target="_blank"> online education provider Emeritus</a> to offer a portfolio of high-impact
						online programs. These programs leverage UC Berkeley Executive Education's thought leadership in management practice developed over years of
						research, teaching, and application. By working with Emeritus, we are able to broaden access beyond our on-campus offerings in a collaborative and engaging format that stays true to the quality of The University of California, Berkeley.</p>
						<p class="access"><a href="https://em-executive.berkeley.edu/accessibility">Accessibility</a></p>
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
							<button type="button" class="close" data-dismiss="modal" onclick="trackEvent('click','BDS TP','Pop Up','Close')">X</button>
						</div>
						<div class="modal-body">
							<div class="clearfix content_h5">
								<h3 class="text-center">The application deadline has been extended until</h3>	
								<h6 class="text-center">November 4, 2021</h6>	
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
							<button type="button" class="close" data-dismiss="modal" onclick="trackEvent('click','BDS TP','Pop Up','Close')">&times;</button>

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
									<li>The final installment of <b>$1,395</b> is to be paid by <b>March 22, 2022</b>.</li>
								</ul>
								<h4>Pay in 3 installments</h4>
								<ul>
									<li>The first installment of <b>$1,077</b> is <b>due immediately</b>.</li>
									<li>The second installment of <b>$958</b> is to be paid by <b>March 22, 2022</b>.</li>
									<li>The final installment of <b>$958</b> is to be paid by <b>April 11, 2022</b>.</li>
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
							<button type="button" class="close" data-dismiss="modal" onclick="trackEvent('click','BDS TP','Pop Up','More Info Faculty Close')">&times;</button>
						</div>
						<div class="modal-body text-center">
							<img src="images-new/faculty_2.png" width="128" height="128" class="img-responsive" alt="Steve Tadelis" title="Steve Tadelis">
							<h3>STEVE TADELIS</h3>
							<h4>Professor of Economics and Sarin Chair in Leadership and Strategy, Berkeley Haas</h4><br/>
							<p class="pb-30">An expert in e-commerce and the economics of the internet, Prof. Tadelis has extensive experience in the field, including a position as senior director and distinguished economist at eBay (2011–13) and vice president of economics and market design at Amazon (2016–17). His current areas of research include the economics of incentives and organizations, industrial organizations, game theory, and microeconomics. Prior to his position at Berkeley Haas, Prof. Tadelis was assistant professor at Stanford University.</p>
							<p>He holds a BA in economics from the University of Haifa, an MSc in economics from Techion Israel Institute of Technology, and a PhD in economics from Harvard University.</p>
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
							<button type="button" class="close" data-dismiss="modal" onclick="trackEvent('click','BDS TP','Pop Up','More Info Faculty Close')" >&times;</button>
						</div>
						<div class="modal-body text-center">
							<img src="images-new/shachar.png" width="128" height="128" class="img-responsive" alt="Shachar Kariv" title="Shachar Kariv">
							<h3>SHACHAR KARIV</h3>
							<h4>Benjamin N. Ward Professor of Economics, Berkeley Haas</h4><br/>
							<p class="pb-30">Former Chair of the Department of Economics and Faculty Director of the Experimental Social Science Lab (Xlab), Prof. Kariv is an expert in behavioral and experimental economics, focused on individuals’ financial and non-financial decisions. He is cofounder and chief scientist at Capital Preferences and has been a visiting professor at Stanford University, Princeton University, University of Oxford, and University of Cambridge among others.</p>
							<p>He holds a BA in economics from Tel Aviv University and an MA and a PhD in economics from New York University.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<a href="https://em-executive.berkeley.edu/programs/01t0I000006amj7QAA/brochure" class="download-bro-btn hide-desktop" onclick="trackAmplitude('Click on CTA','Download Brochure Sticky','Download PDF');">Download Brochure</a>
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
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-59VN6HZ"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
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