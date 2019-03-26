<html>
    <head>
        <title></title>
        <link href="css/bootstrap.min.css"  rel="stylesheet">
        <link href="css/style.css">
        <link href="index.css" rel="stylesheet">
        <!--<script src="js/bootstrap.min.js"></script>-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
         <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
        <!--<script type="text/javascript" src="js/jquery-3.3.1.js"></script>-->
         <script src="js/main.js"></script>
        <script src="js/skdslider.min.js"></script>
        <link href="css/skdslider.css" rel="stylesheet">
        <script type="text/javascript">
        	jQuery(document).ready(function(){
			jQuery('#demo1').skdslider({'delay':5000, 'animationSpeed': 2000,'showNextPrev':true,'showPlayButton':true,'autoSlide':true,'animationType':'fading'});
						
			jQuery('#responsive').change(function(){
			  $('#responsive_wrapper').width(jQuery(this).val());
			});
			
		});
</script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
        
 
    </head>
    <body>
    	<header >
    		<div class="container-fluid" >
    			<h1>PLANET <span>EDUCATION</span></h1>  
    			<h3>Make Your Learning Worthy</h3>  		
    		</div>
    	</header> 
    	<nav>
    		<div class="container-fluid">
                 <ul>
                 	<li><a href="#">HOME</a></li>
                     <li><a href="#">SERVICES</a></li>
                     <li><a href="#">COURSES</a></li>
                     <li><a href="register.php">REGISTER</a></li>
                       <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">LOGIN</a>
                            <!--<span class="caret"></span></a>-->
                            <ul class="dropdown-menu">
                              <li><a href="#">User Login</a></li>
                              <li><a href="#">Login as admin</a></li>
                              </ul>
                          </li>
                     <li><a href="#">ABOUT</a></li>
                 </ul>
    	    </div>
    	</nav>
        
    
        <div class="w3-slider" class="col-lg-12">	
		<ul id="demo1">
			<li>
				<img src="images/stud.jpg" alt="" />
				<div class="slide-desc">
					<h3>Fashion</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's dummy. </p>
				</div>
			</li>
			<li>
				<img src="images/teach.jpg" alt="" />
				  <div class="slide-desc">
					<h3>Life Style </h3>
					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
				</div>
			</li>
			<!--<li>
				<img src="images/3.jpg" alt="" />
				<div class="slide-desc">
					<h3>Photography</h3>
					<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature. </p>
				</div>
			</li>-->
			
		</ul>
	</div>
        <div class="col-sm-12" class="container-fluid" id="back1">
        	<div class="row">
     		<h1>WHAT WE DO</h1>
     		<p>cghchgvvbjhbhj

							Block, for sections in a webpage
							Inline, for text
							Table, for two-dimensional table data
							Positioned, for explicit position of an element
							The Flexible Box Layout Module, makes it easier to design flexible responsive layout structure without using float or positioning.
						</p>
     	</div>
     	</div>
     	<div class="container-fluid" >
     		 
     		 	<div class="col-md-12 course" >
     		 		<div class="row">
                    <section class="col-sm-6">
                    	<h1 class="text-white">COURSES WE OFFER</h1>
                    </section>
                    <aside class="col-sm-6">
                    	
                    		<div class="row">
                    			<div class="col-sm-2">
                    				  <div class="row">
                                            <div class="d-sm-flex p-3 ">  
										       <div class="p-2 bg-success">
											    	<img src="images/ag.png" class="img-thumbnail" alt="AET">
											       	<a href="#">Agriculture Engineering And Technology</a>
										        </div>
											    <div class="p-2 bg-warning">
											    	<img src="images/cs.png" class="img-thumbnail" alt="CSE" >
											       	<a href="#">Computer Science and Engineering</a>
											    </div>
										        <div class="p-2 bg-secondary">
										            <img src="images/ece.png" class="img-thumbnail" alt="ECE">
										       	    <a href="#">Electronics Communication and Engineering</a>
										        </div>
									  
                    			            </div>     				  
                                            <div class="d-sm-flex p-3 ">  
												 <div class="p-2 bg-info">
												    <img src="images/it.gif" class="img-thumbnail" alt="IT">
										       	    <a href="#">Information Technology</a>
												 </div>
												 <div class="p-2 bg-danger">
												 	 <img src="images/bt.png" class="img-thumbnail" alt="BT">
										       	    <a href="#">Bio-Technology</a>
										       	 </div>
										    </div>
                    	              </div>
                                </div>
                            </div>
                    </aside>
     		 	</div>
            </div>
        </div>
        <section class="banner-bottom py-lg-5 py-md-5 py-3">
        	<div class="container">
              <div class="inner-sec py-lg-5 py-3">
                 <h1 class="text-center">
                    OUR<span id="adv"> ADVANTAGES </span>
                 </h1>
                 <div class="row middle-grids mt-lg-5 pt-5">
                    <div class="col-lg-6">
                       <img src="images/lib.jpg" class="img-fluid" style="border-radius: 40px;">
                    </div>
                    <div class="col-lg-6">
                         <p>ghgjhjhjhjhjhjghfffgjbjjghfgfgfgfg</p>
                    </div>
                 </div>
                 <div class="row">
                    <div class="col-lg-6">
                       <h4></h4>
                       <p>dhshfhhhhhhhhh</p>
                    </div>
                    <div class="col-lg-6" >
                        <img src="images/bg2.jpg" class="img-fluid" style="border-radius: 40px; margin-top: 10%;">
                    </div>
                 </div>
              </div>
        	</div>
        </section>
        <footer class="pymd-5 py-4" id="footer" style="background-color: black;">
            <div class="container">
               <div class="row ">
                    <div class="col-lg-4 ">
                         <h3 class="text-white" style="margin-left:0%;">CONTACT US</h3>
                         <p class="text-white" style="padding-top: 30px;"> School Of Engineering And Technology</p>
                         <p class="text-white"> near DC Court Dimapur, Nagaland</p>
                         <p class="text-white"> PHONE: </p>
                         <p class="text-white"> Email:</p>
                    </div>
                    <div class="col-lg-6">
                         <h3 class="text-white"> ABOUT US</h3>
                         <p class="text-white" style="padding-top: 30px;">vhfvhfh</p>
                    </div>
               </div>
            </div>
        </footer>
     </body>
 </html>