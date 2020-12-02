<html>
    <head>
        <title>
            Labour Online Services
        </title>
        <link rel="icon" href="labour.ico" sizes="16x16" type="image/png">
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="https://supertasker.pk/css/bootstrap-common.css";
        <link href="https://supertasker.pk/css/st_custom.css?v=1606674962" rel="stylesheet" type="text/css">
        <link href="https://supertasker.pk/css/star-rating.css" media="all" rel="stylesheet" type="text/css"/>
        <link rel="preload" href="https://supertasker.pk/css/st_custom.css?v=1606674962" as="style">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
<script defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCmRiAtWGVub0UInhO4d0P433LRj2g-HTM&callback=initMap">
</script>

<style> 
       #map {
        height: 400px;
        /* The height is 400 pixels */
        width: 100%;
        /* The width is the width of the web page */
      }

      .table-wrapper {
  max-height: 650px;
  overflow: auto;
  display:inline-block;
}
.table-earnings {
	background: #F3F5F6;
}


 </style>  

 <script>

function initMap() {
        // The location of Uluru
        const uluru = { lat: -25.344, lng: 131.036 };
        // The map, centered at Uluru
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 4,
          center: uluru,
        });
        // The marker, positioned at Uluru
        const marker = new google.maps.Marker({
          position: uluru,
          map: map,
        });
      }

 </script>
    </head>
    <body data-spy="scroll">
         <!-----Navigation bar-->

         <section id="nav-bar">
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
          
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
           </button>
           <div class="collapse navbar-collapse" id="navbarNav">
               <a href="index.html">  <img src="{{asset('data/images/labour_logo.png')}}" height="35px" /></a><i><h3 style="margin-top:4px;font-family:cal;color:dimgray">Labour Services</h3></i>
               <ul class="navbar-nav ml-auto">
                   
                   @if(Auth::user() && Auth::user()->usertype== 'customer')
                   <li class="nav-item active">
                       <a class="nav-link" href="post task.html" target="_blank">POST A TASK </a>
                   </li>
                   @endif
                   <li class="nav-item">
                       <a class="nav-link" href="#about">EARN MONEY<span class="sr-only">(current)</span></a>
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
       <div class="container">
        <div class="well" style="text-align: center;">All Your Jobs are Here</div>
        <div class="row justify-content-center">
        <div class="col-sm-3 col-md-6 col-lg-5">
            <div class=table-wrapper>
                <table class="table table-earnings table-earnings__challenge" >
                        <thead>
                            <tr>
                                <th>Job</th>
                            </tr>                
                        </thead>
                        <tbody>
                            @foreach ($posts as $item)
                            <tr>
                                <a href="/details/{{$item->id}}">
                                <div class="card" style="width: 35rem; text-align:center;>
                                    <div class="card-body">
{{--                                        
                                       <h3 class="card-title">{{\App\Models\User::where('id','=',$item->id) -> first("firstname")->firstname ?? 'empty'}}</h3>
                                       <h5 class="card-title">{{$item->title}}</h5>
                                       <h6 class="card-subtitle mb-2 text-muted">{{$item->price}}</h6>
                                       <p class="card-text">{{$item->description}}</p>
                                       <a href="#" class="card-link">Address: {{$item->address}}</a> <br>
                                       <a href="#" class="card-link">Date: {{$item->date}}</a>
  --}}
                                      <a href="/details/{{$item->id}}" class="list-group-item list-group-item-action task-detail-link selected" data-url="https://supertasker.pk/api/tasks/62966/web" data-id="62966"><div class="listing_style"><div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 remove-padding"><div class="col-md-8 col-lg-8 col-xs-12 col-sm-8 info"><h3 class="listing-task-title">{{$item->title}}</h3></div><div class="col-md-3 col-lg-3 col-xs-3 col-sm-3 price"><span class="badge">Rs {{$item->price}}</span></div></div><div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 add_margin"><span class="fa fa-map-marker"></span> Online </div><div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 add_margin"><span class="fa fa-calendar-o"></span> {{$item->date}}</div></div><div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 hr-line"><hr></div><div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 status"><span class="current-status">Open</span></div></a>
                                    </div>
                                  </div>
                                  &nbsp;    
                                </a>
                            </tr>    
                            @endforeach
                            
                        </tbody>
                    </table>
                  </div>
        </div>
        <div class="col-sm-9 col-md-6 col-lg-7">
            <div id="map"></div>
        </div>
        

        </div>
    </div>
<script src="js/smooth-scroll.js"></script>
<script>
   var scroll = new SmoothScroll('a[href*="#"]');
</script>
    </body>
</html>