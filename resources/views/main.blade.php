@extends('layouts.front')


@section('content')
<div id="fullpage">      
   <div class="section" id="intro">
       <div id="mycarousel" class="carousel slide" data-ride="carousel">        
               <!-- Wrapper for slides -->
               <div class="carousel-inner" role="listbox">
               @foreach($slide as $sl)
                 <div class="item">
                     <img src="{{url('slide-img/'.$sl->image)}}" data-color="lightblue" alt="First Image">
                     <div class="carousel-caption">
                        <h1>{{$sl->title}}</h1>
                        <p class="intro-text">{{$sl->description}}</p>
                        <a href="#about" class="btn btn-default page-scroll">More</a>
                     </div>
                 </div>
                 @endforeach
                 <!-- <div class="item">
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
                 </div> -->                                            
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
   @foreach($about as $ab)
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
               <p>{{$ab->section_one}}</p>
             </div>
             <div class="col-md-4">
               <h4>What we do</h4>
               <p>{{$ab->section_two}}</p>
             </div>
             <div class="col-md-4">
             <img src="{{url('images/'.$ab->image)}}" class="img-responsive">
             </div>
           </div>
         </div>
        </div>             
      </div>           
    </div>
   </div>
   @endforeach
   @foreach($vision as $vis)
   <div class="section" id="vimis">
     <div class="container">
       <div class="content">
           <div class="col-md-12">
           <h1>Vision and Misson</h1>
           <hr>
             <div class="row">
               <div class="col-md-4">
                 <img src="{{url('images/'.$vis->image)}}" class="img-responsive">
               </div>
               <div class="col-md-8">
                 <div class="row">
                   <div class="col-md-6">
                   <h4>Vision</h4>
                   <p>{{$vis->section_one}}</p>
                   </div>
                   <div class="col-md-6">
                     <h4>Mission</h4>
                     <p>{{$vis->section_two}}</p>                     
                   </div>
                 </div>
               </div>
             </div>
           </div>  
         </div>         
       </div>
     </div>
     @endforeach
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
                      <!-- <li><a href="#" data-filter=".transition">Web Design</a></li>
                      <li><a href="#" data-filter=".metal">Web Development</a></li> -->
                      @foreach($category as $cat)                        
                        <li><a href="#" data-filter=".{{$cat->id}}">{{$cat->name}}</a></li>
                      @endforeach
                      </ol>                      
                    </li>
                  </ul>
               </div>  
             </div>
             <div class="col-md-9">
               <div class="grid">
               @foreach($product as $prod)                                         
                 <div class="col-md-3 col-xs-6 col-sm-6 items {{$prod->category_id}}" data-category="{{$prod->category_id}}">
                 <a href="http://{{$prod->link}}" target="_new">
                   <div class="portfolio-item">
                      <div class="hover-bg">
                        <div class="hover-text">
                          <h5>{{$prod->title}}</h5>                          
                        </div>
                        <img src="{{url('product-img/'.$prod->image)}}" class="img-responsive"></div>
                    </div>
                 </div>
                 </a> 
                 @endforeach                 
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
