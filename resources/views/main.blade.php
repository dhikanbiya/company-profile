@extends('layouts.front')

@section('content')
<div id="fullpage">      
   <div class="section" id="intro">
       <div id="mycarousel" class="carousel slide" data-ride="carousel">        
               <!-- Wrapper for slides -->
               <div class="carousel-inner" role="listbox">
                 <div class="item">
                     <img src="img/home-bg.jpg" data-color="lightblue" alt="First Image">
                     <div class="carousel-caption">
                        <h1>DATA KOMUNIKASI <span class="brand-heading">Internusa</span></h1>
                        <p class="intro-text">Tilde truffaut street art chicharrones, unicorn activated charcoal pinterest celiac kitsch hell of pitchfork tattooed art party gentrify snackwave</p>
                        <a href="#about" class="btn btn-default page-scroll">More</a>
                     </div>
                 </div>
                 <div class="item">
                     <img src="img/home-bg.jpg" data-color="firebrick" alt="Second Image">
                     <div class="carousel-caption">
                         <h1>JOIN <span class="brand-heading">US</span></h1>
                         <p class="intro-text">Tilde truffaut street art chicharrones, unicorn activated charcoal pinterest celiac kitsch hell of pitchfork tattooed art party gentrify snackwave</p>
                         <a href="#about" class="btn btn-default page-scroll">More</a>
                     </div>
                 </div>
                 <div class="item">
                     <img src="img/intro-bg.jpg" data-color="violet" alt="Third Image">
                     <div class="carousel-caption">
                         <h1>Offal artisan  <span class="brand-heading">irure</span></h1>
                         <p class="intro-text"> Cornhole cred tattooed, farm-to-table green juice viral art party readymade pinterest</p>
                         <a href="#about" class="btn btn-default page-scroll">More</a>
                     </div>
                 </div>                                            
               </div>

               <!-- Controls -->
               <a class="left carousel-control" href="#mycarousel" role="button" data-slide="prev">
                 <!-- <span class="fa fa-chevron-left" aria-hidden="true"></span> -->
                 <span class="sr-only">Previous</span>
               </a>
               <a class="right carousel-control" href="#mycarousel" role="button" data-slide="next">
                 <!-- <span class="fa fa-chevron-right" aria-hidden="true"></span> -->
                 <span class="sr-only">Next</span>
               </a>
             </div>
           <!-- end -->
     
   </div>
   <div class="section" id="ab">
    <div class="col-md-12">
      <div class="container">
        <div class="content">
         <h1>About Us</h1>
         <hr>
         <div class="col-md-12">
           <div class="row">
             <div class="col-md-4">
               <h4>Who we are</h4>
               <p>
                 Blog af ethical, fashion axe prism master cleanse tote bag fam hell of succulents drinking vinegar vaporware keffiyeh street art flannel. Biodiesel PBR&B organic migas DIY. Green juice tbh portland vexillologist marfa, sartorial readymade direct trade VHS photo booth tote bag air plant tousled craft beer pour-over. Dreamcatcher flannel street art bushwick butcher. Irony godard selfies, retro pickled street art roof party sartorial. Bushwick dreamcatcher XOXO pour-over kinfolk unicorn, bitters scenester hot chicken small batch tofu. Enamel pin activated charcoal lo-fi subway tile, raclette synth glossier four dollar toast meditation four loko umami keffiyeh.
               </p>
             </div>
             <div class="col-md-4">
               <h4>What we do</h4>
               <p>
                 Raclette microdosing squid paleo 90's pickled. Gentrify drinking vinegar meh, irony activated charcoal try-hard mlkshk knausgaard small batch put a bird on it succulents art party messenger bag kitsch. Pok pok cold-pressed hell of, sustainable sriracha 3 wolf moon yuccie coloring book etsy hoodie vice. Chillwave bitters freegan polaroid deep v. Offal ugh iPhone shoreditch street art squid, neutra jean shorts vexillologist lumbersexual echo park pitchfork. Listicle kickstarter literally, waistcoat gochujang master cleanse microdosing brooklyn. Pabst disrupt kickstarter, gluten-free banjo poke kinfolk sriracha.
               </p>
             </div>
             <div class="col-md-4">
             <img src="img/home-bg.jpg" class="img-responsive">
             </div>
           </div>
         </div>
        </div>             
      </div>           
    </div>
   </div>
   <div class="section" id="vimis">
     <div class="container">
       <div class="content">
           <div class="col-md-12">
           <h1>Vision and Misson</h1>
           <hr>
             <div class="row">
               <div class="col-md-4">
                 <img src="img/home-bg.jpg" class="img-responsive">
               </div>
               <div class="col-md-8">
                 <div class="row">
                   <div class="col-md-6">
                   <h4>Vision</h4>
                   <p>
                     Gentrify drinking vinegar meh, irony activated charcoal try-hard mlkshk knausgaard small batch put a bird on it succulents art party messenger bag kitsch. Pok pok cold-pressed hell of, sustainable sriracha 3 wolf moon yuccie coloring book etsy hoodie vice. Chillwave bitters freegan polaroid deep v. Offal ugh iPhone shoreditch street art squid, neutra jean shorts vexillologist lumbersexual echo park pitchfork. Listicle kickstarter literally, waistcoat gochujang master cleanse microdosing brooklyn. Pabst disrupt kickstarter,
                   </p></div>
                   <div class="col-md-6">
                     <h4>Mission</h4>
                     <p>
                       Dreamcatcher flannel street art bushwick butcher. Irony godard selfies, retro pickled street art roof party sartorial. Bushwick dreamcatcher XOXO pour-over kinfolk unicorn, bitters scenester hot chicken small batch tofu. Enamel pin activated charcoal lo-fi subway tile, raclette synth glossier four dollar toast meditation four loko umami keffiyeh.
                     </p>
                   </div>
                 </div>
               </div>
             </div>
           </div>  
         </div>         
       </div>
     </div>
     <div class="section" id="prod">
      <div class="col-md-12">
         <div class="container">
           <div class="content">
             <h1>Products</h1>
             <hr>
             <div class="col-md-3">      
               <div class="categories">                      
                  <ul class="cat">
                    <li>
                      <ol class="type">
                        <li><a href="#" data-filter="*" class="active">All</a></li>
                        <li><a href="#" data-filter=".transition">Web Design</a></li>
                        <li><a href="#" data-filter=".metal">Web Development</a></li>
                      </ol>
                    </li>
                  </ul>
               </div>  
             </div>
             <div class="col-md-9">
               <div class="grid">                                         
                 <div class="col-md-3 col-xs-6 col-sm-6 items transition" data-category="transition">
                   <div class="portfolio-item">
                      <div class="hover-bg">
                        <div class="hover-text">
                          <h4>Project Title</h4>
                          <p>Web Design</p>
                        </div>
                        <img src="img/01.jpg" class="img-responsive" > </a> </div>
                    </div>
                 </div>
                 <div class="col-md-3 col-xs-6 col-sm-6 items metal" data-category="metal">
                   <div class="portfolio-item">
                      <div class="hover-bg">
                        <div class="hover-text">
                          <h4>Project Title</h4>
                          <p>Web Design</p>
                        </div>
                        <img src="img/07.jpg" class="img-responsive" > </a> </div>
                    </div>
                 </div>
                 <div class="col-md-3 col-xs-6 col-sm-6 items transition" data-category="transition">
                   <div class="portfolio-item">
                      <div class="hover-bg">
                        <div class="hover-text">
                          <h4>Project Title</h4>
                          <p>Web Design</p>
                        </div>
                        <img src="img/02.jpg" class="img-responsive" > </a> </div>
                    </div>
                 </div>
                 <div class="col-md-3 col-xs-6 col-sm-6 items metal" data-category="metal"">
                   <div class="portfolio-item">
                      <div class="hover-bg">
                        <div class="hover-text">
                          <h4>Project Title</h4>
                          <p>Web Design</p>
                        </div>
                        <img src="img/08.jpg" class="img-responsive"> </a> </div>
                    </div>
                 </div>
               </div>                      
             </div>                  
           </div>                
         </div>
      </div>
     </div>
     <div class="section" id="conts">
      <div class="col-md-12">
       <div class="container">
         <div class="content">
             <h1>Contact us</h1>
             <hr>
             <div class="col-md-12">
               <p class="text-center">
                 Fixie flexitarian irony yr bitters occupy schlitz, kale chips tbh you probably haven't heard of them normcore hexagon locavore copper mug. 
               </p><br><br>
             </div>                  
             <div class="col-md-12">
               <div class="row">
                 <div class="col-md-6  col-md-offset-1">
                   <div class="map-responsive">
                     <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d6030.418742494061!2d-111.34563870463673!3d26.01036670629853!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1471908546569" width="600" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                   </div>                        
                 </div>
                 <div class="col-md-4">
                   <h4>Data Komunikasi Internusa</h4>
                   <address>                          
                     The Plaza <br>
                     Thamrin, Central Jakarta<br>
                     <abbr title="Phone"><i class="fa fa-phone"> </i>:</abbr> (123) 456-7890
                   </address>                        
                 </div>
               </div>
               <div class="col-md-12 social">
                 <h5>Follow Us</h5>
                   <ul class="list-inline">
                     <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                     <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                     <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                     <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                   </ul>
               </div>
             </div>
         </div>

       </div>
      </div>
     </div>
     <div class="section fp-auto-height" id="foot">
         <div class="footer">                  
             <p>Data Komunikasi Internusa &copy; 2017.</p>
         </div>
     </div>            
   </div>
   @endsection
  