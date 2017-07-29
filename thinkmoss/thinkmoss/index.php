<!doctype html>
  <?php $uid = $_GET['uid']; ?>
<html>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">
 
<title>Home</title>
 <link rel="icon" href="http://www.car-ing.com/app/icon.png">


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>

<link href="http://www.whydoweplay.com/thinkmoss/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="http://www.thinkmons.com/thinkmoss/css2/style.css" rel="stylesheet" type="text/css">
<link href="http://www.whydoweplay.com/thinkmoss/css/responsive.css" rel="stylesheet" type="text/css">
<link href="http://www.whydoweplay.com/thinkmoss/css/animate.css" rel="stylesheet" type="text/css">

 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet"  type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!--[if IE]><style type="text/css">.pie {behavior:url(PIE.htc);}</style><![endif]-->

<script type="text/javascript" src="http://www.whydoweplay.com/thinkmoss/js/jquery.1.8.3.min.js"></script>
<script type="text/javascript" src="http://www.whydoweplay.com/thinkmoss/js/bootstrap.js"></script>
<script type="text/javascript" src="http://www.whydoweplay.com/thinkmoss/js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="http://www.whydoweplay.com/thinkmoss/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="http://www.whydoweplay.com/thinkmoss/js/jquery.isotope.js"></script>
<script type="text/javascript" src="http://www.whydoweplay.com/thinkmoss/js/wow.js"></script>
<script type="text/javascript" src="http://www.whydoweplay.com/thinkmoss/js/classie.js"></script>



 
    <script src="https://www.gstatic.com/firebasejs/4.1.2/firebase.js"></script>
       <script src="https://www.gstatic.com/firebasejs/4.0.0/firebase.js"></script>
    
   <script>
      var config = {
    apiKey: "AIzaSyDbik6ZsaF34Rpf1WqfKBfPgTozdXQ4r_s",
    authDomain: "thinkmons-ae5ed.firebaseapp.com",
    databaseURL: "https://thinkmons-ae5ed.firebaseio.com",
    projectId: "thinkmons-ae5ed",
    storageBucket: "thinkmons-ae5ed.appspot.com",
    messagingSenderId: "329454814635"
  };
  firebase.initializeApp(config);
        </script>


<script>
  // Initialize Firebase

      initApp = function() {
      
        firebase.auth().onAuthStateChanged(function(user) {
          
          if (user) {
                           
            var displayName = user.displayName;
                       document.getElementById('name').textContent = user.displayName;
              document.getElementById('login').remove();
             document.getElementById('logout').textContent = 'LOGOUT';
        //  document.getElementById("photo").src = """ + user.photoURL + """ ;
            var email = user.email;
            var emailVerified = user.emailVerified;
            var photoURL = user.photoURL;
            var uid = user.uid;
            var phoneNumber = user.phoneNumber;
            var providerData = user.providerData;
         
           
            user.getToken().then(function(accessToken) {
            
               
          });
          } 
          
          if(!user) {
             
             
           
            document.getElementById('name').remove();
            document.getElementById('logout').remove();  
            
          }
        }, function(error) {
          console.log(error);
        }
        );
      
     }
  
  
         window.onload = function() {
      initApp();
    };
    
</script>
  
  <style>
  h3, h4 {
      margin: 10px 0 30px 0;
      letter-spacing: 10px;      
      font-size: 20px;
      color: #111;
  }
  
  .bg-1 {
      
       background-color: #ffffff;
      color: #000000;
  }
  .bg-1 h3 {color: #fff;
            }
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
      border-top-right-radius: 0;
      border-top-left-radius: 0;
  }
  .list-group-item:last-child {
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail p {
      margin-top: 15px;
      color: #555;
  }
 
  
  </style>


</head>
<body>

     
<nav class="main-nav-outer" id="test"><!--main-nav-start-->
	<div class="container">
        <ul class="main-nav">
        	<li><a href="#header">Home</a></li>
         
            <li><a href="#Portfolio">Our Events</a></li>
            
            <li> Click Logo for Home >></li>
            
            <li class="small-logo"><a href="#header"><img src="http://www.whydoweplay.com/thinkmoss/d1.png" alt=" "width="50" height="50"></a></li>
            <li><a href="#contact">About Us</a></li>
           
             <li><a id="name" href="http://www.whydoweplay.com/" ></a></li>
              <li><a href ="#" id="logout" ></a></li>
                            <li><a href ="http://www.thinkmons.com/log.php" id="login" >LOGIN</a></li>
        
              
              
        
        <script type="text/javascript">
 
var myLink = document.getElementById('logout');

myLink.onclick = function(){

  firebase.auth().signOut().then(function() {
  // Sign-out successful.
       //  document.getElementById('login').textContent = 'Login';
        
       window.location.href = 'http://www.thinkmons.com/Code/index.php/people/index?uid=';
       return false;
      
}, function(error) {
  // An error happened.
});

}


</script>
        </ul>
        <a class="res-nav_click" href="#"><i class="fa-bars"></i></a>
    </div>
</nav><!--main-nav-end-->

<header class="header" id="header"><!--header-start-->
	<div class="container">
      <h1 class="animated fadeInDown delay-07s">Welcome To Thinkmons</h1>
        <ul class="we-create animated fadeInUp delay-1s">
      
        </ul>
            
    </div>
</header>
<section class="main-section paddind" id="Portfolio"><!--main-section-start-->
	<div class="container">
    	<h2>OUR EVENTS</h2>
    	<h6> HAVE A LOOK AT OUR ONGOING EVENTS </h6>
    	
      <br> 
        
	</div>
	
    <?php $i=0;?>	        
<!-- Container (TOUR Section) -->
<div id="tour" class="bg-1">
  <div class="container">
   
    <div class="row text-center">
    
    
<?php foreach ($names as $row) { ?>
  
      <div class="col-sm-4">
        <div class="thumbnail">
             <?php $i++;$v="http://www.car-ing.com/app/".(string)$i.".jpg"; ?>

          <img src="<?=$v?>" alt="Paris" width="400" height="300">
          <p><strong><?=$row->EVENT_NAME?></strong></p>
          <p><?=$row->REG_CLOSE?></p>
             

<button onclick="f<?php echo $i?>()" type="button" class="btn btn-primary">Participate</button>

 <script>

  function f<?php echo $i?>(){

var id =  "<?php echo $uid ?>";

if(id){


 window.location.href='http://www.thinkmons.com/thinkmoss/index.php?id=<?php echo $row->EVENT_ID ?>&uid=<?php echo $uid ?>';

}
else{
window.location.href=' http://www.thinkmons.com/log.php';

}
     
}
  </script>   
        </div>
      </div>
      <?php } ?> 
    </div>
  </div>

 
 
</section>


<section class="main-section alabaster"><!--main-section alabaster-start-->
	<div class="container">
    	<div class="row">
			<figure class="col-lg-5 col-sm-4 wow fadeInLeft">
            	<img  src="https://www.engage2excel.com/wp-content/uploads/2015/09/Events_that_matter-icon.png" alt="">
            </figure>
        	<div class="col-lg-7 col-sm-8 featured-work">
            	<h2>About ThinkMons!</h2>
            	<P class="padding-b">We, with the help of this platform want to reach out to people with all the events we have in our bags and make this world an open playground for everyone. Come, be a part of our Journey!</P>
            	<div class="featured-box">
                	<div class="featured-box-col1 wow fadeInRight delay-02s">
                    	<i class="fa-magic"></i>
                    </div>	
                	<div class="featured-box-col2 wow fadeInRight delay-02s">
                        <h3>INSPIRE</h3>
                        <p>Inspire everyone to be a part of this journey. </p>
                    </div>    
                </div>
                <div class="featured-box">
                	<div class="featured-box-col1 wow fadeInRight delay-04s">
                    	<i class="fa-gift"></i>
                    </div>	
                	<div class="featured-box-col2 wow fadeInRight delay-04s">
                        <h3>CONNECT</h3>
                        <p>Connect with each other without boundaries. </p>
                    </div>    
                </div>
                <div class="featured-box">
                	<div class="featured-box-col1 wow fadeInRight delay-06s">
                    	<i class="fa-dashboard"></i>
                    </div>	
                	<div class="featured-box-col2 wow fadeInRight delay-06s">
                        <h3>INITIATE</h3>
                        <p>Initiate the best in you and bring it out to the world. </p>
                    </div>    
                </div>
                <a class="Learn-More" href="#">Learn More</a>
            </div>
        </div>
	</div>
</section><!--main-section alabaster-end-->




<!--main-section-end-->


<section class="main-section client-part" id="client"><!--main-section client-part-start-->
	<div class="container">
		<b class="quote-right wow fadeInDown delay-03"><i class="fa-quote-right"></i></b>
    	<div class="row">
        	<div class="col-lg-12">
            	<p class="client-part-haead wow fadeInDown delay-05">Participate and Win With Us!</p>
            </div>
        </div>
    	<ul class="client wow fadeIn delay-05s">
        	<li><a href="#">
            	
                <h3>www.thinkmons.com</h3>
                
            </a></li>
        </ul>
    </div>
</section>

<footer class="footer">
    <div class="container">
        <div class="footer-logo"><a href="#"><img src="http://www.whydoweplay.com/thinkmoss/d1.png" alt=" "width="50" height="50"></a></div>
        <span class="copyright"><h1>THINKMONS</h1></span>
        <div class="credits">
 
        </div>
    </div>
</footer>


<script type="text/javascript">
    $(document).ready(function(e) {
        $('#test').scrollToFixed();
        $('.res-nav_click').click(function(){
            $('.main-nav').slideToggle();
            return false    
            
        });
        
    });
</script>

  <script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100
      }
    );
    wow.init();
  </script>


<script type="text/javascript">
	$(window).load(function(){
		
		$('.main-nav li a, .servicelink').bind('click',function(event){
			var $anchor = $(this);
			
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top - 102
			}, 1500,'easeInOutExpo');
			
      if ($(window).width() < 768 ) { 
        $('.main-nav').hide(); 
      }
			event.preventDefault();
		});
	})
</script>

<script type="text/javascript">

$(window).load(function(){
  
  
  var $container = $('.portfolioContainer'),
      $body = $('body'),
      colW = 375,
      columns = null;

  
  $container.isotope({
    // disable window resizing
    resizable: true,
    masonry: {
      columnWidth: colW
    }
  });
  
  $(window).smartresize(function(){
    // check if columns has changed
    var currentColumns = Math.floor( ( $body.width() -30 ) / colW );
    if ( currentColumns !== columns ) {
      // set new column count
      columns = currentColumns;
      // apply width to container manually, then trigger relayout
      $container.width( columns * colW )
        .isotope('reLayout');
    }
    
  }).smartresize(); // trigger resize to set container width
  $('.portfolioFilter a').click(function(){
        $('.portfolioFilter .current').removeClass('current');
        $(this).addClass('current');
 
        var selector = $(this).attr('data-filter');
        $container.isotope({
			
            filter: selector,
         });
         return false;
    });
  
});

</script>

</body>
</html>