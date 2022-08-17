<!DOCTYPE html>
<html>
  <head>
  
    <meta charset="utf-8">
		
		<title>FIT STUDIO</title>

		<!-- description text that displays below the link in google search results -->
		<meta name="description" content="Description of site" /> 

	</head>
	<script>
	
	
	var textWrapper = document.querySelector('.anim');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.anim.letter',
    translateX: [40,0],
    translateZ: 0,
    opacity: [0,1],
    easing: "easeOutExpo",
    duration: 1200,
    delay: (el, i) => 500 + 30 * i
  }).add({
    targets: '.anim.letter',
    translateX: [0,-30],
    opacity: [1,0],
    easing: "easeInExpo",
    duration: 1100,
    delay: (el, i) => 100 + 30 * i
  });
  </script>
	
	
	
	
	
	
	<style>
	header:after,
nav:after,
footer:after,
.module-block:after,
.gallery:after,
.social:after {
  content: ".";
  display: block;
	height: 0;
	clear: both;
	visibility: hidden;
}


* {
	/* Universal reset: */
	margin:0;
	padding:0;
}


body {
	font-size: 16px;
	line-height: 1.5;
	font-family: 'Josefin Sans', sans-serif;
	color: black;
	background: rgb(0,0,0);
	
}

header, footer, article, section, nav {
	/* Giving a display value to the HTML5 rendered elements: */
	display:block;
}

img { 
	border-radius: 100%; 
	max-width: 100%; 
	display: block;
}

a {
	color:#D24655;
	text-decoration:none;
	-webkit-transition: all .3s ease-in-out;
	-moz-transition: all .3s ease-in-out;
	-o-transition: all .3s ease-in-out;
	transition: all .3s ease-in-out;
}

a:hover, a:focus { /* when you declare a hover state, make sure you declare a focus state as well */
	color: #000;
}

a img {
	border:none;
}


h1 {
	font-size: 50px;
 	margin: 0;
	color: white;
	font-weight: normal; 
	line-height: 1;
	}
	
	
	
	.anim {
  font-weight: 200;
  font-size: 1.8em;
  text-transform: uppercase;
  letter-spacing: 0.5em;
}

.anim .letter {
  display: inline-block;
  line-height: 1em;
}

h2 {
	font-size: 24px;
	letter-spacing:2px;
	text-transform: uppercase;
	font-weight: normal; 
	margin: 0 0 24px; 
	line-height: 1;
}


h3 {
	font-size: 30px;
	font-weight: normal; 
	margin: 0 0 24px; 
	line-height: 1;
}

p {
	font-family: 'Vollkorn', serif;
	margin-bottom: 24px;
}



/*-------------------------------------------

    	Header
-------------------------------------------*/
header { margin: 20px 40px 60px; }

header div { 
	margin-top: 40px; 
	width: 60%; 
	float: left; 
}

header p { 
	color: #272727; 
	font-size: 18px;
	margin: 0;
	font-family: 'Josefin Sans', sans-serif;
}




/*-------------------------------------------

    	Footer
-------------------------------------------*/

footer {
	padding: 40px;
	background: #fff;
}

.col { 
	float: left;
	width: 21%;
	margin: 0 5% 40px 0;
}

.col:last-of-type { 
	margin-right: 0;
}

footer h2 { font-size: 18px; margin-bottom: 40px;}

footer h3 { 
	margin-bottom: 10px;
	padding-bottom: 10px;
	border-bottom: 1px dashed rgba(10, 6, 6,.3);
	font-size: 18px;
}

footer  ul {
	margin-left: 20px;
}

footer  li { 
	color: rgba(10, 6, 6,.1); /* border color */
}

footer a { font-size: 14px; }

footer p {
	margin-bottom: 0;
	clear: both;
	font-family: 'Josefin Sans', sans-serif;
	text-align: center;
}

.up {
	margin-top: 50px; 
}

.up a { 
	background: rgba(0, 0, 0,2);
	font-size: 30px;
	padding: 12px 10px;
	border-radius: 10px;
	text-shadow: 1px 1px 2px #fff;
}

.up a:hover, .up a:focus { 
	color: rgba(0, 0, 0, .45);
	text-decoration: none;

}



/*-------------------------------------------

    	ABOUT
-------------------------------------------*/

img.right {
	float: right;
	margin: 0 0 20px 20px;
}

.social li { 
	float: left;
	list-style: none;
}


.social a { 
	display: block;
	font-size:12px;
	margin:5px 2px;
	padding:10px 10px 8px;
	text-transform:uppercase;
	font-weight: bold;
	letter-spacing: 1px;
	border-right: 1px dashed rgba(0, 0, 0, .1); 
}

.social li:last-child a { border: none; }



/*-------------------------------------------

    	Posts
-------------------------------------------*/

.post { 
	position: relative;
	margin-bottom: 50px;
	padding-left: 24%;
}

.post h3 { 
	margin-bottom: 10px;
}

.post img { 
	width: 20%; 
	position: absolute;
	left: 0;
	top: 0;
	border-radius: 0;
}

.date { 
	display: block; 
	margin-bottom: 10px; 
}


/*-------------------------------------------

    	Gallery
-------------------------------------------*/

.gallery li {
	float: left;
	list-style: none;
	width: 21%;
	margin: 0 5.3333% 20px 0;
}

.gallery li:nth-child(4n) {
	margin-right: 0;
}

.gallery a {
 	display: block;	
}

.gallery a img { 
  -webkit-transition: all 0.5s ease-in-out; 
     -moz-transition: all 0.5s ease-in-out; 
      -ms-transition: all 0.5s ease-in-out; 
       -o-transition: all 0.5s ease-in-out; 
          transition: all 0.5s ease-in-out;

}

.gallery a:hover img, .gallery a:focus img { 
	-webkit-transform: scale(1.1);  /* Saf3.1+, Chrome */
     -moz-transform: scale(1.1);  /* FF3.5+ */
      -ms-transform: scale(1.1);  /* IE9 */
       -o-transform: scale(1.1);  /* Opera 10.5+ */
          transform: scale(1.1);
}



/*-------------------------------------------

    	General
-------------------------------------------*/

.page-wrap {
	max-width:960px;
	padding: 0 20px; 
	margin:0 auto; /* center the content by defining a width and using this margin value */
}

.module-block {
	background-color: #fff;
	margin:0 0 70px 0;
	padding: 40px;
	
}

.module-block h2 { 
	padding-bottom: 30px;
	margin-bottom: 30px;
}
#bck
{
	background:white;
}
</style>

	<body>

		
		<section class="page-wrap">

	
			<header> <!-- Defining the header section of the page with the appropriate tag -->
				
				<div>
					
				</div>


				<br>
				<br>
				<h1 class="anim">ABOUT US</h1>
				
				
				
			</header>

	  
			<article id="block1" class="module-block">
			
				<h2>WHAT DO WE DO</h2>
				
				<img class="right" src="file3.png" width="270" height="250"/>

				<p> Fit Studio Has Been The Authority In Fitness Since 1965 Dating Back To The Original Fit Studio In Venice, Karnataka. It Was The Place For Serious Fitness. Opened Long Before The Modern Day Health Club Existed, The Original Fit Studio Featured Homemade Equipment And A Dedication To Getting Results. It Was An Instant Hit. 

From That First Gym In Karnataka, Fit Studio Has Become The Largest Co-Ed Gym Chain In The World With Over 70+ Clubs In our state. Today, Fit Studio Has Expanded Its Fitness Profile To Offer All Of The Latest Equipment And Services, Including Group Exercise, Personal Training, Cardiovascular Equipment, Spinning And Yoga, While Maintaining Its Core Weight Lifting Tradition.</p>

				<ul class="social">
				
				</ul>
	
			</article>
			
			
			
			
			
			
			
			
			
			<article id="block1" class="module-block">
			
				<h2>WHY CHOOSE US</h2>
				
				<img class="right" src="gym16.jpg" width="270" height="250"/>

				<p> Fit Studio Has Multiple Awards For Excellence Under Its Belt. Fit Studio Has Expanded Its Fitness Profile To Offer All Of The Latest Equipment And Services Making It The Best In The Industry. Fit Studio Provides A Comprehensive Approach To The Health And Wellbeing Of Its Members With Certified Trainers And Nutritional Counseling. Whether Your Goal Is To Burn Fat, Tone Or Add Muscle, Build Strength, Increase Flexibility Or Improve Your Cardiovascular Health, Fit Studio Lives Up To Its Reputation To Give Results. Fit Studio Believes That Fitness Is Not Just About A Toned Body But The Power To Overcome All The Obstacles.

				We Have Programs Like Personal Training, Small Group Personal Training, Customized Goal Based Quick Result Program, Fitness Assessment, Group Exercise Classes Such As Zumba, BollySalsa, MMA, Power Yoga, Spinning To Name A Few & Some Of Our Properties Also Include A Swimming Pool Facility And Specialized Functional & Circuit Training Areas. We Also Have As Add On A Travel Card Facility, So That Wherever You Are, Your Workout Never Stops.</p>

				<ul class="social">
				
				</ul>
	
			</article>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			

			
			<section id="block3" class="module-block">
				
				<h2>OUR TEAM</h2>
			  
				<ul class="gallery">

					

					<li>
						<a href="#">
							<img alt="" src="team1.jpg" />
						</a>
					</li>

					<li>
						<a href="#">
							<img alt="" src="team2.jpg" />
						</a>
					</li>

					<li>
						<a href="#">
							<img alt="" src="team3.jpg" />
						</a>
					</li>

					<li>
						<a href="#">
							<img alt="" src="team4.jpg" />
						</a>
					</li>

					
				</ul>

			</section>
			
		</section>
			
			
			<article id="block3" class="module-block">
			
		
		        <h2 style="text-align: center;"><a href="contact_us.html">CONTACT US</a></h2>

				<p style="text-align:center;font-size:xx-large;">Copyright 2021- <a href="">Fit Studio</a></p>
			</article>

	</body>
</html>