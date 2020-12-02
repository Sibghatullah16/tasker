<html>
    <head>
        <title>
            Labour Online Services
        </title>
        <link rel="icon" href="labour.ico" sizes="16x16" type="image/png">
        <link rel="stylesheet" href="{{asset('data/style.css')}}">
        <link rel="stylesheet" href="{{asset('data/MAIN.css')}}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
    </head>
    <body>
         <!-----Navigation bar-->

         <section id="nav-bar">
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
           <a class="navbar-brand" href="Main Page.html " target="_blank"></a>
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
           </button>
           <div class="collapse navbar-collapse" id="navbarNav">
               <a href="index.html">  <img src="{{asset('data/images/labour_logo.png')}}" height="35px" /></a><i><h3 style="margin-top:4px;font-family:cal;color:dimgray">Labour Services</h3></i>
               <ul class="navbar-nav ml-auto">
                   
                   @if(Auth::user() && Auth::user()->usertype== 'customer')
                   <li class="nav-item active">
                       <a class="nav-link" href="/post" target="_blank">POST A TASK </a>
                   </li>
                   @endif
                   <li class="nav-item">
                       <a class="nav-link" href="/allpost">EARN MONEY<span class="sr-only">(current)</span></a>
                   </li>
                   @guest
                   <li class="nav-item">
                       <a class="nav-link" href="/login " >LOGIN<span class="sr-only">(current)</span></a>
                   </li>
                   @endguest
                   @guest
                   <li class="nav-item">
                       <a class="nav-link" href="/register " >REGISTER<span class="sr-only">(current)</span></a>
                   </li>
                   @endguest
                   <li class="nav-item active">
                       <a class="nav-link" href="#services">SERVICES</a>
                   </li>
                   <li class="nav-item active">
                       <a class="nav-link" href="#team">OUR TEAM</a>
                   </li>
                   <li class="nav-item active">
                       <a class="nav-link" href="#contact">CONTACT US </a>
                   </li>
                   @auth
                   <li>
                    <div class="dropdown">
                        <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Notifications
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                          @foreach ( \App\Models\notification::where('userid', Auth::id())->get() as $item)  
                          <a href="/details/{{ $item->postid }}"><pre> {{ $item->body }}</pre></a>
                          @endforeach
                        </div>
                    </div>
                </li>
                   @endauth
                   @auth
                   <li>
                       &nbsp &nbsp
                       <li class="nav-item">
                        <a class="nav-link" href="/logout " >Logout<span class="sr-only">(current)</span></a>
                    </li>
                </a>
                   </li>
                   @endauth
               </ul>
           </div>
         </nav>
       </section>
       <!---slider--><!----src="images/image1.png" width="1024" height="500"-->
       <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
         <div class="carousel-inner">
           <div class="carousel-item active">
             <img src="{{asset('data/images/image1.png')}}" width="1024" height="500" class="d-block w-100" alt="...">
           </div>
           <div class="carousel-item">
             <img src="{{asset('data/images/image2.jpg')}}" width="1024" height="500" class="d-block w-100" alt="...">
           </div>
           <div class="carousel-item">
             <img src="{{asset('data/images/image3.jpg')}}" width="1024" height="500"class="d-block w-100" alt="...">
           </div>
         </div>
         <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
           <span class="sr-only">Next</span>
         </a>
       </div>
       <!----earn money-->
       <section id="about" style="background-color: white;">
  <div class="container" >
    <div class="row">
     <div class="col-md-6">
       <h2>How to Earn Money</h2>
       <div class="about-content">
         Earn upto PKR. 100,000/- a month with Labour Services...<br>
         With Labour Services you will have a chance to work on things that really excites you, things that you are really good at. 
         You will find tons of different tasks on Supertasker, you can choose the one that suits your skills and place your bid on it. 
         You don’t need to stay online always, just login, browse task, make an offer on the task you would like to do. 
         With Supertasker location filter you can even find work in your surrounding areas.
       </div>
       <a class="buy-btn" href="text.txt" target="_blank">Read More>></a>
     </div>
     <div class="col-md-6 skills-bar">
        <p>Painter Services</p>
        <div class="progress">
          <div class="progress-bar" style="width: 80%;">80%</div>
        </div>
        <p>Car Wash Services</p>
        <div class="progress">
          <div class="progress-bar" style="width: 75%;">75%</div>
        </div>
        <p>Computer Support Services</p>
        <div class="progress">
          <div class="progress-bar" style="width: 91%;">91%</div>
        </div>
        <p>Photography Services</p>
        <div class="progress">
          <div class="progress-bar" style="width: 65%;">65%</div>
        </div>
        <p>Wedding Services</p>
        <div class="progress">
          <div class="progress-bar" style="width: 96%;">96%</div>
        </div>
     </div>
    </div>
  </div>
       </section>
       <!----Services-->
       <section id="services">
         <div class="container">
           <h1>Our Services</h1>
           <div class="row services">
             <div class="col-md-3 text-center">
               <div class="icon">
                 <i class="fa fa-wrench"></i>
               </div>
               <h3>Why Labour Online Services ?</h3>
               <p>Supertasker is a trusted marketplace for people and businesses to outsource their tasks, whether you are looking for work or you need someone to do a specific task we are here to help you hire.</p>
             </div>
             <div class="col-md-3 text-center">
               <div class="icon">
                 <i class="fa fa-wrench"></i>
               </div>
               <h3>How it Works?</h3>
               <p>It works in 3 simple steps. Just post the required task to be done, chose the right person for your job by checking ratings, and wait for it to be done.</p>
             </div>
             <div class="col-md-3 text-center">
               <div class="icon">
                 <i class="fa fa-wrench"></i>
               </div>
               <h3>What is Our Motive?</h3>
               <p>We are here to change people's lifestyle A new way of connecting people who are ready to work, with people who need their work done.</p>
             </div>
             <div class="col-md-3 text-center">
               <div class="icon">
                 <i class="fa fa-wrench"></i>
               </div>
               <h3>What is Policy For Community ?</h3>
               <p>Sreating a community where all members can enjoy a safe and rewarding. Supertasker experience requires trust. Being responsible and respectful to others are the building blocks that form our marketplace integrity.</p>
             </div>
           </div>
         </div>
       </section>
       <!---Our team-->
 <section id="team" style="background-color: white;">
   <div class="container">
     <h1>Our Team</h1>
     <div class="row">
       <div class="col-md-3 profile-pic text-center">
         <div class="img-box">
           <img src="{{asset('data/images/sir.jpg')}}" width="200px" height="300px" class="img-responsive">
           <ul>
             <a href="#"><li><i class="fa fa-facebook"></i></li></a>
             <a href="#"><li><i class="fa fa-envelope-square"></i></li></a>
           </ul>
         </div>
         <h2>Ahmad Arslan</h2>
         <h3 style="color:lightcoral">Project Supervisor</h3>
         <p>Details</p>
       </div>
       <div class="col-md-3 profile-pic text-center">
         <div class="img-box">
           <img src="{{asset('data/images/saad.jpg')}}" width="200px" height="300px" class="img-responsive">
           <ul>
             <a href="#"><li><i class="fa fa-facebook"></i></li></a>
             <a href="#"><li><i class="fa fa-envelope-square"></i></li></a>
           </ul>
         </div>
         <h2>Saad Bin Fayyaz</h2>
         <h3 style="color:lightcoral">Project Memmber</h3>
         <p>Details</p>
       </div>
       <div class="col-md-3 profile-pic text-center">
         <div class="img-box">
           <img src="{{asset('data/images/taha.jpg')}}" width="200px" height="300px" class="img-responsive">
           <ul>
             <a href="#"><li><i class="fa fa-facebook"></i></li></a>
             <a href="#"><li><i class="fa fa-envelope-square"></i></li></a>
           </ul>
         </div>
         <h2>Taha Naeem</h2>
         <h3 style="color:lightcoral">Project Memmber</h3>
         <p>Details</p>
       </div>
       <div class="col-md-3 profile-pic text-center">
         <div class="img-box">
           <img src="{{asset('data/images/naeem.jpg')}}" width="200px" height="300px" class="img-responsive">
           <ul>
             <a href="#"><li><i class="fa fa-facebook"></i></li></a>
             <a href="#"><li><i class="fa fa-envelope-square"></i></li></a>
           </ul>
         </div>
         <h2>Naeem u din</h2>
         <h3 style="color:lightcoral">Project Memmber</h3>
         <p>Details</p>
       </div>
     </div>
   </div>
 </section>
       <!----PRomo-->
       <section id="promo">
         <div class="container">
           <p>Get Increament After Sucesssful Reviews From 100 Customers</p>
           <a href="login.html " target="_blank" class="btn btn-primary">Contact Us</a>
         </div>
       </section>
       <!----price plans-->
<section id="price">
  <div class="container">
   <h2 style="color: rgb(66, 24, 24);text-align: center;font-size: 40px;">" Terms And Conditions Before Joining Labour Online Services Website "</h1>
   <div class="row">
     <div class="col-md-3">
       <div class="single-price">
         <div class="price-head">
           <h3>Supertasker Roles and Obligations</h3>
           <p>Please Follow the Instructions</p>
         </div>
         <div class="price-content">
           <ul>
             <li>◘ Supertasker provides the Supertasker Platform only, enabling Users to publish Posted Tasks and make Offers on Posted Tasks.</li>
             <li>◘ Supertasker only permits individuals over 18 years of age to become Users.</li>
             <li>◘ At its absolute discretion, Supertasker may refuse to allow any person to register or create an account with Supertasker or cancel or suspend any existing account.</li>
             <li>◘ Supertasker has no obligation to any User to assist or involve itself in any dispute between Users, although may do so to improve User experience.</li><br>
             <li>◘ Except for liability in relation to any Non-excludable Condition, the Supertasker Service is provided on an "as is" basis, express or implied. To the extent permitted by law, we and our suppliers specifically disclaim any implied warranties of title,fitness for a particular purpose.</li>
           </ul>
         </div>
         <div class="price-button">
           <a class="buy-btn" href="register.html " target="_blank">Join Now</a>
         </div>
       </div>
     </div>
     <div class="col-md-3">
       <div class="single-price">
         <div class="price-head">
           <h3>User Obligations</h3><br>
           <p>Please Follow the Instructions</p>
         </div>
         <div class="price-content">
           <ul>
             <li>◘ You agree that any content (whether provided by Supertasker, a User or a third party) on the Supertasker Platform may not be used on third party sites or for other business purposes without Supertasker’s prior permission.</li>
             <li>◘ You must not use the Supertasker Platform for any illegal or immoral purpose.</li>
             <li>◘ You must maintain control of Your Supertasker account and must not deal your account in any way, including by allowing others to use Your account, or by transferring or selling Your account or any of its content to another person.</li>
             <li>◘ You agree that any information posted on the Supertasker Platform must not, in any way whatsoever, be potentially or actually harmful to Supertasker or any other person. Harm includes, but is not limited to, economic loss that will or may be suffered by Supertasker.</li>
             <br>
             <br>
           </ul>
         </div>
         <div class="price-button">
           <a class="buy-btn" href="register.html " target="_blank">Join Now</a>
         </div>
       </div>
     </div>
     <div class="col-md-3">
       <div class="single-price">
         <div class="price-head">
           <h3>Fees</h3><br><br>
           <p>Please Follow the Instructions</p>
         </div>
         <div class="price-content">
           <ul>
             <li>◘ Creation of a Task Contract, the Tasker owes Supertasker the Service Fee. The Service Fee will automatically be deducted from the Agreed Price held in the Escrow Account.</li>
             <li>◘ Posted Task requires a Tasker to incur costs in completing the Services, the cost incurred will not be included in any calculation of Fees.</li>
             <li>◘ Fees do not include any fees that may be due to Third Party Service providers. All Third Party Service providers are paid pursuant to a User's separate agreement with that Third Party Service provider.</li>
             <li>◘ All Fees and charges payable to Supertasker are non-cancellable and non-refundable, subject to Your rights under any Non-Excludable Conditions.</li>
             <li>◘ If Supertasker introduces a new service on the Supertasker Platform, the Fees applying to that service will be payable as from the launch of the service.</li>
           </ul>
         </div>
         <div class="price-button">
           <a class="buy-btn" href="register.html " target="_blank">Join Now</a>
         </div>
       </div>
     </div>
     <div class="col-md-3">
       <div class="single-price">
         <div class="price-head">
           <h3>Payment Facility</h3><br>
           <p>Please Follow the Instructions</p>
         </div>
         <div class="price-content">
           <ul>
             <li>◘ Supertasker will be using multiple payment gateways to ensure convenience and security.</li>
             <li>◘ Supertasker is currently offering Jazz cash, Jazz mobile wallet, Credit and Debit Card facility and bank transfer. Apart from these online services we are also offering Cash on delivery option for your convenience.</li>
             <li>◘ No additional charges will be applicable for online transaction. Supertasker will bear those additional charges.</li>
             <li>◘  We highly recommend our users to use online payment methods instead of offline method (Cash on Delivery). This will ensure taskers, that their payment is already secured and since payment is held with Supertasker, this can insure better work quality from the taskers as well. So it will be beneficial for both parties.</li>
             <li>◘ All the payments held in Escrow account will be transferred to the taskers as per their share</li>
           </ul>
         </div>
         <div class="price-button">
           <a class="buy-btn" href="register.html " target="_blank">Join Now</a>
         </div>
       </div>
     </div>
   </div>
  </div>
</section>
<!----Testomnails-->
<section id="testimonials">
  <div class="container">
    <h2 style="text-align: center;color: rgb(161, 160, 255);">Testimonials</h1>
    <p style="color: rgb(255, 253, 126);" class="text-center">Subcribe To Our Offical Labour Online Services Facebook Page. </p>
    <pre class="testi">                                                                   <a href="">Facebook Page<i class="fa fa-facebook-f"></i></a></pre>
  </div>
</section>
<!----Contact Us-->
<section id="contact">
  <div class="container">
    <h1>Complain / Contact</h1>
    <div class="row">
      <div class="col-md-6">
        <form class="contact form">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Your-Name">
          </div>
          <div class="form-group">
           <input type="number" class="form-control" placeholder="Phone Number">
         </div>
         <div class="form-group">
           <input type="email" class="form-control" placeholder="Enter Your Email-Address">
         </div>
         <div class="form-group">
           <textarea class="form-control" rows="4" placeholder="Message"></textarea>
         </div>
         <a class="buy-btn" href="lgin.html" target="_blank">Send Message</a>
        </form>
      </div>
      <div class="col-md-6 contact-info">
        <div class="follow">
         <i class="fa fa-map-pin"></i><b> Location:-</b>Xyz Road,Pakistan
        </div>
        <div class="follow">
         <i class="fa fa-envelope-square"></i><b> Email-Address:-</b>saadsheikh1997@gmail.com
       </div>
       <div class="follow">
         <i class="fa fa-phone"></i><b> Phone:-</b>+923317858090
       </div>
       <div class="follow">
           <a href=""><i class="fa fa-facebook-f"></i></a>
           <label><b> Facebook Page-</b></label>
       </div>
      </div>
    </div>
  </div>
</section>
<!-----foooter-->
 <!-- Site footer -->
   <footer class="site-footer">
     <div class="container">
       <div class="row">
         <div class="col-sm-12 col-md-6">
           <h6>About US</h6>
           <p class="text-justify">Labour Service <i>is a community </i>  platform that connects skilled/unskilled people who want to sell their services/time to individual users/household/business. Traditional methods that are currently being followed in Pakistan have lot of drawbacks in it. Identifying those loopholes we are revolutionizing the way how people outsource their tasks</p>
         </div>

         <div class="col-xs-6 col-md-3">
           <h6>Categories</h6>
           <ul class="footer-links">
             <li><a href="">Painter Services</a></li>
             <li><a href="">Car Wash Service</a></li>
             <li><a href="">Labour For Construction</a></li>
             <li><a href="">House Clean Services</a></li>
             <li><a href="">Electricity Reparing Services</a></li>
             <li><a href="">Plumber Services</a></li>
           </ul>
         </div>

         <div class="col-xs-6 col-md-3">
           <h6>Quick Links</h6>
           <ul class="footer-links">
             <li><a href="">About Us</a></li>
             <li><a href="">Contact Us</a></li>
             <li><a href="">Post A Task</a></li>
             <li><a href="">Earn Money</a></li>
             <li><a href="">Our Team</a></li>
           </ul>
         </div>
       </div>
       <hr>
     </div>
     <div class="container">
       <div class="row">
         <div class="col-md-8 col-sm-6 col-xs-12">
          
         </div>

         <div class="col-md-4 col-sm-6 col-xs-12">
           <ul class="social-icons">
             <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
             <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
             <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
             <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
           </ul>
         </div>
       </div>
     </div>
</footer>
<!----footerclose-->
<script src="js/smooth-scroll.js"></script>
<script>
   var scroll = new SmoothScroll('a[href*="#"]');
</script>
    </body>
</html>