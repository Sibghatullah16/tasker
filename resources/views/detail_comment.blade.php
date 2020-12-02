<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">        
<style>
    body{
background:#eee;
}

h2 {
    clear: both;
    font-size: 1.8em;
    margin-bottom: 10px;
    padding: 10px 0 10px 30px;
}

h3 > span {
    border-bottom: 2px solid #C2C2C2;
    display: inline-block;
    padding: 0 5px 5px;
}

/* USER PROFILE */
#user-profile h2 {
    padding-right: 15px;
}
#user-profile .profile-status {
	font-size: 0.75em;
	padding-left: 12px;
	margin-top: -10px;
	padding-bottom: 10px;
	color: #8dc859;
}
#user-profile .profile-status.offline {
	color: #fe635f;
}
#user-profile .profile-img {
	border: 1px solid #e1e1e1;
	padding: 4px;
	margin-top: 10px;
	margin-bottom: 10px;
}
#user-profile .profile-label {
	text-align: center;
	padding: 5px 0;
}
#user-profile .profile-label .label {
	padding: 5px 15px;
	font-size: 1em;
}
#user-profile .profile-stars {
	color: #FABA03;
	padding: 7px 0;
	text-align: center;
}
#user-profile .profile-stars > i {
	margin-left: -2px;
}
#user-profile .profile-since {
	text-align: center;
	margin-top: -5px;
}
#user-profile .profile-details {
	padding: 15px 0;
	border-top: 1px solid #e1e1e1;
	border-bottom: 1px solid #e1e1e1;
	margin: 15px 0;
}
#user-profile .profile-details ul {
	padding: 0;
	margin-top: 0;
	margin-bottom: 0;
	margin-left: 40px;
}
#user-profile .profile-details ul > li {
	margin: 3px 0;
	line-height: 1.5;
}
#user-profile .profile-details ul > li > i {
	padding-top: 2px;
}
#user-profile .profile-details ul > li > span {
	color: #34d1be;
}
#user-profile .profile-header {
	position: relative;
}
#user-profile .profile-header > h3 {
	margin-top: 10px
}
#user-profile .profile-header .edit-profile {
	margin-top: -6px;
	position: absolute;
	right: 0;
	top: 0;
}
#user-profile .profile-tabs {
	margin-top: 30px;
}
#user-profile .profile-user-info {
	padding-bottom: 20px;
}
#user-profile .profile-user-info .profile-user-details {
	position: relative;
	padding: 4px 0;
}
#user-profile .profile-user-info .profile-user-details .profile-user-details-label {
	width: 110px;
	float: left;
	bottom: 0;
	font-weight: bold;
	left: 0;
	position: absolute;
	text-align: right;
	top: 0;
	width: 110px;
	padding-top: 4px;
}
#user-profile .profile-user-info .profile-user-details .profile-user-details-value {
	margin-left: 120px;
}
#user-profile .profile-social li {
	padding: 4px 0;
}
#user-profile .profile-social li > i {
	padding-top: 6px;
}
@media only screen and (max-width: 767px) {
	#user-profile .profile-user-info .profile-user-details .profile-user-details-label {
		float: none;
		position: relative;
		text-align: left;
	}
	#user-profile .profile-user-info .profile-user-details .profile-user-details-value {
		margin-left: 0;
	}
	#user-profile .profile-social {
		margin-top: 20px;
	}
}
@media only screen and (max-width: 420px) {
	#user-profile .profile-header .edit-profile {
		display: block;
		position: relative;
		margin-bottom: 15px;
	}
	#user-profile .profile-message-btn .btn {
		display: block;
	}
}


.main-box {
    background: #FFFFFF;
    -webkit-box-shadow: 1px 1px 2px 0 #CCCCCC;
    -moz-box-shadow: 1px 1px 2px 0 #CCCCCC;
    -o-box-shadow: 1px 1px 2px 0 #CCCCCC;
    -ms-box-shadow: 1px 1px 2px 0 #CCCCCC;
    box-shadow: 1px 1px 2px 0 #CCCCCC;
    margin-bottom: 16px;
    padding: 20px;
}
.main-box h2 {
    margin: 0 0 15px -20px;
    padding: 5px 0 5px 20px;
    border-left: 10px solid #c2c2c2; /*7e8c8d*/
}

.btn {
    border: none;
	padding: 6px 12px;
	border-bottom: 4px solid;
	-webkit-transition: border-color 0.1s ease-in-out 0s, background-color 0.1s ease-in-out 0s;
	transition: border-color 0.1s ease-in-out 0s, background-color 0.1s ease-in-out 0s;
	outline: none;
}
.btn-default,
.wizard-cancel,
.wizard-back {
	background-color: #7e8c8d;
	border-color: #626f70;
	color: #fff;
}
.btn-default:hover,
.btn-default:focus,
.btn-default:active,
.btn-default.active, 
.open .dropdown-toggle.btn-default,
.wizard-cancel:hover,
.wizard-cancel:focus,
.wizard-cancel:active,
.wizard-cancel.active,
.wizard-back:hover,
.wizard-back:focus,
.wizard-back:active,
.wizard-back.active {
	background-color: #949e9f;
	border-color: #748182;
	color: #fff;
}
.btn-default .caret {
	border-top-color: #FFFFFF;
}
.btn-info {
	background-color: #5daee7;
	border-color: #4c95c9;
}
.btn-info:hover,
.btn-info:focus,
.btn-info:active,
.btn-info.active, 
.open .dropdown-toggle.btn-info {
	background-color: #4c95c9;
	border-color: #3f80af;
}
.btn-link {
	border: none;
}
.btn-primary {
	background-color: #3fcfbb;
	border-color: #2fb2a0;
}
.btn-primary:hover,
.btn-primary:focus,
.btn-primary:active,
.btn-primary.active, 
.open .dropdown-toggle.btn-primary {
	background-color: #38c2af;
	border-color: #2aa493;
}
.btn-success {
	background-color: #8dc859;
	border-color: #77ab49;
}
.btn-success:hover,
.btn-success:focus,
.btn-success:active,
.btn-success.active, 
.open .dropdown-toggle.btn-success {
	background-color: #77ab49;
}
.btn-danger {
	background-color: #fe635f;
	border-color: #dd504c;
}
.btn-danger:hover,
.btn-danger:focus,
.btn-danger:active,
.btn-danger.active, 
.open .dropdown-toggle.btn-danger {
	background-color: #dd504c;
}
.btn-warning {
	background-color: #f1c40f;
	border-color: #d5ac08;
}
.btn-warning:hover,
.btn-warning:focus,
.btn-warning:active,
.btn-warning.active, 
.open .dropdown-toggle.btn-warning {
	background-color: #e0b50a;
	border-color: #bd9804;
}

.icon-box {
	
}
.icon-box .btn {
	border: 1px solid #e1e1e1;
	margin-left: 3px;
	margin-right: 0;
}
.icon-box .btn:hover {
	background-color: #eee;
	color: #2BB6A3;
}

a {
    color: #2bb6a3;
	outline: none !important;
}
a:hover,
a:focus {
	color: #2bb6a3;
}


/* TABLES */
.table {
    border-collapse: separate;
}
.table-hover > tbody > tr:hover > td,
.table-hover > tbody > tr:hover > th {
	background-color: #eee;
}
.table thead > tr > th {
	border-bottom: 1px solid #C2C2C2;
	padding-bottom: 0;
}
.table tbody > tr > td {
	font-size: 0.875em;
	background: #f5f5f5;
	border-top: 10px solid #fff;
	vertical-align: middle;
	padding: 12px 8px;
}
.table tbody > tr > td:first-child,
.table thead > tr > th:first-child {
	padding-left: 20px;
}
.table thead > tr > th span {
	border-bottom: 2px solid #C2C2C2;
	display: inline-block;
	padding: 0 5px;
	padding-bottom: 5px;
	font-weight: normal;
}
.table thead > tr > th > a span {
	color: #344644;
}
.table thead > tr > th > a span:after {
	content: "\f0dc";
	font-family: FontAwesome;
	font-style: normal;
	font-weight: normal;
	text-decoration: inherit;
	margin-left: 5px;
	font-size: 0.75em;
}
.table thead > tr > th > a.asc span:after {
	content: "\f0dd";
}
.table thead > tr > th > a.desc span:after {
	content: "\f0de";
}
.table thead > tr > th > a:hover span {
	text-decoration: none;
	color: #2bb6a3;
	border-color: #2bb6a3;
}
.table.table-hover tbody > tr > td {
	-webkit-transition: background-color 0.15s ease-in-out 0s;
	transition: background-color 0.15s ease-in-out 0s;
}
.table tbody tr td .call-type {
	display: block;
	font-size: 0.75em;
	text-align: center;
}
.table tbody tr td .first-line {
	line-height: 1.5;
	font-weight: 400;
	font-size: 1.125em;
}
.table tbody tr td .first-line span {
	font-size: 0.875em;
	color: #969696;
	font-weight: 300;
}
.table tbody tr td .second-line {
	font-size: 0.875em;
	line-height: 1.2;
}
.table a.table-link {
	margin: 0 5px;
	font-size: 1.125em;
}
.table a.table-link:hover {
	text-decoration: none;
	color: #2aa493;
}
.table a.table-link.danger {
	color: #fe635f;
}
.table a.table-link.danger:hover {
	color: #dd504c;
}

.table-products tbody > tr > td {
	background: none;
	border: none;
	border-bottom: 1px solid #ebebeb;
	-webkit-transition: background-color 0.15s ease-in-out 0s;
	transition: background-color 0.15s ease-in-out 0s;
	position: relative;
}
.table-products tbody > tr:hover > td {
	text-decoration: none;
	background-color: #f6f6f6;
}
.table-products .name {
	display: block;
	font-weight: 600;
	padding-bottom: 7px;
}
.table-products .price {
	display: block;
	text-decoration: none;
	width: 50%;
	float: left;
	font-size: 0.875em;
}
.table-products .price > i {
	color: #8dc859;
}
.table-products .warranty {
	display: block;
	text-decoration: none;
	width: 50%;
	float: left;
	font-size: 0.875em;
}
.table-products .warranty > i {
	color: #f1c40f;
}
.table tbody > tr.table-line-fb > td {
	background-color: #9daccb;
	color: #262525;
}
.table tbody > tr.table-line-twitter > td {
	background-color: #9fccff;
	color: #262525;
}
.table tbody > tr.table-line-plus > td {
	background-color: #eea59c;
	color: #262525;
}
.table-stats .status-social-icon {
	font-size: 1.9em;
	vertical-align: bottom;
}
.table-stats .table-line-fb .status-social-icon {
	color: #556484;
}
.table-stats .table-line-twitter .status-social-icon {
	color: #5885b8;
}
.table-stats .table-line-plus .status-social-icon {
	color: #a75d54;
}

.daterange-filter {
	background: none repeat scroll 0 0 #FFFFFF;
	border: 1px solid #CCCCCC;
	cursor: pointer;
	padding: 5px 10px;
}
.filter-block .form-group {
	margin-right: 10px;
	position: relative;
}
.filter-block .form-group .form-control {
	height: 36px;
}
.filter-block .form-group .search-icon {
	position: absolute;
	color: #707070;
	right: 8px;
	top: 11px;
}
.filter-block .btn {
	margin-left: 5px;
}
@media only screen and (max-width: 440px) {
	.filter-block {
		float: none !important;
		clear: both
	}
	.filter-block .form-group {
		float: none !important;
		margin-right: 0;
	}
	.filter-block .btn {
		display: block;
		float: none !important;
		margin-bottom: 15px;
		margin-left: 0;
	}
	#reportrange {
		clear: both;
		float: none !important;
		margin-bottom: 15px;
	}
}


.tabs-wrapper .tab-content {
    margin-bottom: 20px;
    padding: 0 10px;
}

/* RECENT - USERS */
.widget-users {
    list-style: none;
	margin: 0;
	padding: 0;
}
.widget-users li {
	border-bottom: 1px solid #ebebeb;
	padding: 15px 0;
	height: 96px;
}
.widget-users li > .img {
	float: left;
	margin-top: 8px;
	width: 50px;
	height: 50px;
	overflow: hidden;
	border-radius: 50%;
}
.widget-users li > .details {
	margin-left: 60px;
}
.widget-users li > .details > .name {
	font-weight: 600;
}
.widget-users li > .details > .name > a {
	color: #344644;
}
.widget-users li > .details > .name > a:hover {
	color: #2bb6a3;
}
.widget-users li > .details > .time {
	color: #2bb6a3;
	font-size: 0.75em;
	padding-bottom: 7px;
}
.widget-users li > .details > .time.online {
	color: #8dc859;
}


/* CONVERSATION */
.conversation-inner {
    padding: 0 0 5px 0;
	margin-right: 10px;
}
.conversation-item {
	padding: 5px 0;
	position: relative;
}
.conversation-user {
	width: 50px;
	height: 50px;
	overflow: hidden;
	float: left;
	border-radius: 50%;
	margin-top: 6px;
}
.conversation-body {
	background: #f5f5f5;
	font-size: 0.875em;
	width: auto;
	margin-left: 60px;
	padding: 8px 10px;
	position: relative;
}
.conversation-body:before {
	border-color: transparent #f5f5f5 transparent transparent;
	border-style: solid;
	border-width: 6px;
	content: "";
	cursor: pointer;
	left: -12px;
	position: absolute;
	top: 25px;
}
.conversation-item.item-right .conversation-body {
	background: #dcfffa;
}
.conversation-item.item-right .conversation-body:before {
	border-color: transparent transparent transparent #dcfffa;
	left: auto;
	right: -12px;
}
.conversation-item.item-right .conversation-user {
	float: right;
}
.conversation-item.item-right .conversation-body {
	margin-left: 0;
	margin-right: 60px;
}
.conversation-body > .name {
	font-weight: 600;
	font-size: 1.125em;
}
.conversation-body > .time {
	position: absolute;
	font-size: 0.875em;
	right: 10px;
	top: 0;
	margin-top: 10px;
	color: #605f5f;
	font-weight: 300;
}
.conversation-body > .time:before {
	content: "\f017";
	font-family: FontAwesome;
	font-style: normal;
	font-weight: normal;
	text-decoration: inherit;
	margin-top: 4px;
	font-size: 0.875em;
}
.conversation-body > .text {
	padding-top: 6px;
}
.conversation-new-message {
	padding-top: 10px;
}

textarea.form-control {
    height: auto;
}
.form-control {
    border-radius: 0px;
    border-color: #e1e1e1;
    box-shadow: none;
    -webkit-box-shadow: none;
}

 *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html{
    font: normal 13px sans-serif;
}

.comment-section{
    list-style: none;
    max-width: 800px;
    width: 100%;
    margin: 50px auto;
    padding: 10px;
}

.comment{
    display: flex;
    border-radius: 3px;
    margin-bottom: 45px;
    flex-wrap: wrap;
}

.comment.user-comment{
    color:  #808080;
}

.comment.author-comment{
    color:  #60686d;
    justify-content: flex-end;
}

/* User and time info */

.comment .info{
    width: 17%;
}

.comment.user-comment .info{
    text-align: right;
}

.comment.author-comment .info{
    order: 3;
}


.comment .info a{	/* User name */
    display: block;
    text-decoration: none;
    color: #656c71;
    font-weight: bold;
    text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap;
    padding: 10px 0 3px 0;
}

.comment .info span{	/* Time */
    font-size: 11px;
    color:  #9ca7af;
}


/* The user avatar */

.comment .avatar{
    width: 8%;
}

.comment.user-comment .avatar{
    padding: 10px 18px 0 3px;
}

.comment.author-comment .avatar{
    order: 2;
    padding: 10px 3px 0 18px;
}

.comment .avatar img{
    display: block;
    border-radius: 50%;
}

.comment.user-comment .avatar img{
    float: right;
}





/* The comment text */

.comment p{
    line-height: 1.5;
    padding: 18px 22px;
    width: 50%;
    position: relative;
    word-wrap: break-word;
}

.comment.user-comment p{
    background-color:  #f3f3f3;
}

.comment.author-comment p{
    background-color:  #e2f8ff;
    order: 1;
}

.user-comment p:after{
    content: '';
    position: absolute;
    width: 15px;
    height: 15px;
    border-radius: 50%;
    background-color: #ffffff;
    border: 2px solid #f3f3f3;
    left: -8px;
    top: 18px;
}

.author-comment p:after{
    content: '';
    position: absolute;
    width: 15px;
    height: 15px;
    border-radius: 50%;
    background-color: #ffffff;
    border: 2px solid #e2f8ff;
    right: -8px;
    top: 18px;
}




/* Comment form */

.write-new{
    margin: 80px auto 0;
    width: 50%;
}

.write-new textarea{
    color:  #444;
    font: inherit;

    outline: 0;
    border-radius: 3px;
    border: 1px solid #cecece;
    background-color:  #fefefe;
    box-shadow: 1px 2px 1px 0 rgba(0, 0, 0, 0.06);
    overflow: auto;

    width:100%;
    min-height: 80px;
    padding: 15px 20px;
}

.write-new img{
    border-radius: 50%;
    margin-top: 15px;
}

.write-new button{
    float:right;
    background-color:  #87bae1;
    box-shadow: 1px 2px 1px 0 rgba(0, 0, 0, 0.12);
    border-radius: 2px;
    border: 0;
    color: #ffffff;
    font-weight: bold;
    cursor: pointer;

    padding: 10px 25px;
    margin-top: 18px;
}



/* Responsive styles */

@media (max-width: 800px){
    /* Make the paragraph in the comments take up the whole width,
    forcing the avatar and user info to wrap to the next line*/
    .comment p{
        width: 100%;
    }

    /* Reverse the order of elements in the user comments,
    so that the avatar and info appear after the text. */
    .comment.user-comment .info{
        order: 3;
        text-align: left;
    }

    .comment.user-comment .avatar{
        order: 2;
    }

    .comment.user-comment p{
        order: 1;
    }


    /* Align toward the beginning of the container (to the left)
    all the elements inside the author comments. */
    .comment.author-comment{
        justify-content: flex-start;
    }


    .comment-section{
        margin-top: 10px;
    }

    .comment .info{
        width: auto;
    }

    .comment .info a{
        padding-top: 15px;
    }

    .comment.user-comment .avatar,
    .comment.author-comment .avatar{
        padding: 15px 10px 0 18px;
        width: auto;
    }

    .comment.user-comment p:after,
    .comment.author-comment p:after{
        width: 12px;
        height: 12px;
        top: initial;
        left: 28px;
        bottom: -6px;
    }

    .write-new{
        width: 100%;
    }
}



/* ------- Demo footer. Please ignore and remove ------- */

footer {
    font: normal 16px Arial, Helvetica, sans-serif;
    padding: 15px 35px;
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    background-color: #1B1F22;
    box-shadow: 0 -1px 1px rgba(0, 0, 0, 0.2);
    z-index: 1;
    text-align: left;
}

footer a.tz{
    font-weight: normal;
    font-size: 16px !important;
    text-decoration: none !important;
    display: block;
    margin-right: 300px;
    text-overflow: ellipsis;
    white-space: nowrap;
    color: #CCC !important;
    position: relative;
    padding-left: 140px;
}

footer a.tz:before{
    font-weight: bold;
    color: #FFF;
    content: 'tutorial';
    position: absolute;
    text-align: right;
    width: 100px;
    left: -20px;
}

footer a.tz:after{
    content: 'zine';
    position: absolute;
    font-weight: bold;
    color: #DA431C;
    left: 80px;
}


@media (max-width: 1024px) {
    footer{ display:none;}
}


span { display: block; }
.input-valid { color: #080 }
.input-invalid { color: #A00  }
</style>

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
                  <a class="nav-link" href="post task.html" target="_blank">POST A TASK </a>
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


 
<div class="container bootstrap snippets bootdeys">
    <div class="row" id="user-profile">
        <div class="col-lg-3 col-md-4 col-sm-4">
            <div class="main-box clearfix">
                <h2>{{ $user[0]->firstname  }} </h2>
                <div class="profile-status">
                    <i class="fa fa-check-circle"></i> Online
                </div>
                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="profile-img img-responsive center-block" width="200px">
                <div class="profile-label">
                    <span class="label label-danger">Customer</span>
                </div>

                <div class="profile-stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                   
                </div>

                <div class="profile-since">
                    Member since: {{ $user[0]->created_at }}
                </div>
            </div>
        </div>

        <div class="col-lg-9 col-md-8 col-sm-8">
            <div class="main-box clearfix">
                <div class="profile-header">
                    <h3><span>Post info</span></h3>
                </div>

                <div class="row profile-user-info">
                    <div class="col-sm-8">
                        <div class="profile-user-details clearfix">
                            <div class="profile-user-details-label">
                                Title
                            </div>
                            <div class="profile-user-details-value">
                                {{ $post[0]->title }}
                            </div>
                        </div>
                        <div class="profile-user-details clearfix">
                            <div class="profile-user-details-label">
                                Description
                            </div>
                            <div class="profile-user-details-value">
                                {{ $post[0]->description }}
                            </div>
                        </div>
                        <div class="profile-user-details clearfix">
                            <div class="profile-user-details-label">
                                Address
                            </div>
                            <div class="profile-user-details-value">
                                {{ $post[0]->address }}
                            </div>
                        </div>
                        <div class="profile-user-details clearfix">
                            <div class="profile-user-details-label">
                                City
                            </div>
                            <div class="profile-user-details-value">
                                {{ $post[0]->City }}
                            </div>
                        </div>
                        <div class="profile-user-details clearfix">
                            <div class="profile-user-details-label">
                                Price
                            </div>
                            <div class="profile-user-details-value">
                                {{ $post[0]->price }}
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 profile-social">
                        <ul class="fa-ul">
                            <img src="https://image.flaticon.com/icons/png/512/235/235804.png" alt="" class="profile-img img-responsive center-block" width="200px">
                
                        </ul>
                    </div>
                </div>
                <div class="profile-header">
                    <h3><span>Comment Section</span></h3>
                    
                </div>
                <div class="tabs-wrapper profile-tabs">
                    <ul class="comment-section">

                        @foreach ($comment as $item)
                        <li class="comment user-comment" style="text-align:center;">
                            
                                <a href="#" class="info" style="margin-left: 100px;">{{ \App\Models\User::where('id','=',$item->userid) -> first("firstname")->firstname }}</a>
                            
                            <p>{{ $item->comment }}</p>
                        </li>
                        @endforeach
                        
                    
                        <!-- More comments -->
                        @auth
                        <li class="write-new" id="froala-editor">
                    
                            <form action="/postComment/{{$post[0]->id}}" method="post" onsubmit="return validate()">
                                @csrf
                                <textarea placeholder="Write your comment here" name="comment" id="ph" onchange="validate()"></textarea>
                                <div>
                                   <button type="submit" onclick="validate()">Submit</button>
                                   <span class="validation-text"></span>
                                </div>
                            </form>
                    
                        </li>
                        @endauth
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
const PATTERN_MOBILE_INDIA = /\b([0|+[0-9]{1,6})?([0-9][0-9]{8})\b/;

function validate() {
  var desc = document.getElementById('ph').value;
  var match = desc.match(PATTERN_MOBILE_INDIA);
  var contains = match != null;
  var exists = contains ? ('exists: ' + match[0]) : 'does not exist.';
  var el = document.querySelector('.validation-text');
  if(exists=='does not exist.'){

  el.innerHTML = 'Valid phone number ' + exists;
  el.classList.toggle('input-valid', contains);
  el.classList.toggle('input-invalid', !contains);
  return true;

  }else{

  el.innerHTML = 'Valid phone number ' + exists;
  el.classList.toggle('input-valid', contains);
  el.classList.toggle('input-invalid', !contains);
  return false;
  }
}
    
</script>
