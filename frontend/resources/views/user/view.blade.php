<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/img/favicon.png">

    <title>EventHalo :: {{$user->name}}</title>

    <!-- Bootstrap CSS -->    
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="/js/html5shiv.js"></script>
      <script src="/js/respond.min.js"></script>
      <script src="/js/lte-ie7.js"></script>
    <![endif]-->
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
      <!--header start-->
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"></div>
            </div>

            <!--logo start-->
            <a href="/" class="logo">EventHalo <span></a>
            <!--logo end-->

            <div class="nav search-row" id="top_menu">                
            </div>

            <div class="top-nav notification-row">                

                    <!-- user login dropdown start-->
                      <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="/#">
                            <span class="profile-ava">
                                <img alt="" src="/img/avatar1_small.jpg">
                            </span>
                            <span class="username">{{ $user->name }}</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="/user/logout"><i class="icon_key_alt"></i> Log Out</a>
                            </li>
                            
                            </li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      
      <!--header end-->

     
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-user-md"></i> Profile</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="/">Home</a></li>
						<li><i class="fa fa-list"></i><a href="/user/connections">My Connections</a></li>
            <li><i class="fa fa-list"></i><a href="/events">Events</a></li>
					</ol>
				</div>
			</div>
              <div class="row">
                <!-- profile-widget -->
                <div class="col-lg-12">
                    <div class="profile-widget profile-widget-info">
                          <div class="panel-body">
                            <div class="col-lg-2 col-sm-2">
                              <h4>{{ $user->name }}</h4>               
                              <div class="follow-ava">
                                  <img src="/img/profile-widget-avatar.jpg" alt="">
                              </div>
                              <!--<h6>Administrator</h6>-->
                            </div>
                            <div class="col-lg-4 col-sm-4 follow-info">
                                <p>{{ $user->description }}</p>
                                <!--<p>@jenifersmith</p>
								<p><i class="fa fa-twitter">jenifertweet</i></p>-->
                                <h6>
                                    <span><i class="icon_clock_alt"></i>11:05 AM</span>
                                    <span><i class="icon_calendar"></i>25.10.13</span>
                                    <span><i class="icon_pin_alt"></i>NY</span>
                                </h6>
                            </div>
                            
                          </div>
                    </div>
                </div>
              </div>
              <!-- page start-->
              <div class="row">
                 <div class="col-lg-12">
                    <section class="panel">
                          <br>

                                  <!-- profile -->
                                  <div id="profile" class="tab-pane">
                                    <section class="panel">
                                      <div class="bio-graph-heading">
                                                {{ $user->description }}
                                      </div>
                                      <div class="panel-body bio-graph-info">
                                          <h1>Bio Graph</h1>
                                          <div class="row">
                                              <div class="bio-row">
                                                  <p><span>Full Name </span>: {{ $user->name }} </p>
                                              </div>   
                                              @if(strlen($user->occupation) > 0)
                                              <div class="bio-row">
                                                  <p><span>Occupation </span>: {{ $user->occupation }}</p>
                                              </div>
                                              @endif
                                              <div class="bio-row">
                                                  <p><span>Email </span>: {{ $user->email }} </p>
                                              </div>
                                              @if(strlen($user->phone) > 0)
                                              <div class="bio-row">
                                                  <p><span>Phone </span>: {{ $user->phone }} </p>
                                              </div>
                                              @endif
                                          </div>
                                      </div>
                                    </section>
                                      <section>
                                          <div class="row">                                              
                                          </div>
                                      </section>
                                  </div>
                                  @if ($is_me)
                                  <!-- edit-profile -->
                                  <div id="edit-profile" class="tab-pane">
                                    <section class="panel">                                          
                                          <div class="panel-body bio-graph-info">
                                              <h1> Profile Info</h1>
                                              <form class="form-horizontal" role="form" method="POST" action="/user/save">
                                                  {!! csrf_field() !!}
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Name</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" name="name" placeholder="Captain Amazing" value="{{ $user->name }}">
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">About Me</label>
                                                      <div class="col-lg-10">
                                                          <textarea name="description" class="form-control" placeholder="A bit about how incredible you are" cols="30" rows="5">{{ $user->description }}</textarea>
                                                      </div>
                                                  </div> 
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Occupation</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" placeholder="Being Awesome" name="occupation" value="{{ $user->occupation }}">
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Phone</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" placeholder="555 555-555" name="phone" value="{{ $user->phone }}">
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <div class="col-lg-offset-2 col-lg-10">
                                                          <button type="submit" class="btn btn-primary">Save</button>
                                                          <a href="/user/" class="btn btn-danger">Cancel</a>
                                                      </div>
                                                  </div>
                                              </form>
                                          </div>
                                      </section>
                                  </div>
                                  @endif
                              </div>
                          </div>
                      </section>
                 </div>
              </div>

              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section end -->
    <!-- javascripts -->
    <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="/js/jquery.scrollTo.min.js"></script>
    <script src="/js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- jquery knob -->
    <script src="/assets/jquery-knob/js/jquery.knob.js"></script>
    <!--custome script for all page-->
    <script src="/js/scripts.js"></script>

  <script>

      //knob
      $(".knob").knob();

  </script>


  </body>
</html>
