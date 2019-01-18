<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/img/favicon.png">

    <title>EventHalo :: Events</title>

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
                            <span class="username">{{ Auth::user()->name }}</span>
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
                    <h3 class="page-header"> Events</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="/">Home</a></li>
                        <li><i class="fa fa-table"></i><a href="/user/connections">My Connections</a></li>
                        <li><i class="fa fa-table"></i>Events</li>
                    </ol>
                </div>
            </div>

            @foreach($events_companies as $event_company)
              <div class="row">
                <!-- profile-widget -->
                <div class="col-lg-12">
                    <div class="profile-widget profile-widget-info">
                          <div class="panel-body">
                            <div class="col-lg-2 col-sm-2">
                              <h4>{{$event_company->name}}</h4>
                              <div class="follow-ava">
                                  <img src="/img/client1.png" alt="">
                              </div>
                              <h6>{{$event_company->type}}</h6>
                            </div>
                            <div class="col-lg-4 col-sm-4 follow-info">
                                <p>{{$event_company->blurb}}</p>
                                <p><i class="fa fa-twitter">intstartupfest</i></p>
                                <h6>
                                    <span><i class="icon_clock_alt"></i>6:15 PM</span>
                                    <span><i class="icon_calendar"></i>25.10.13</span>
                                    <span><i class="icon_pin_alt"></i>MTL</span>
                                </h6>
                                <br>
                                <br>
                                @if($event_company->uid)
                                <a class="btn btn-default btn-lg btn-block" href="/event/{{$event_company->id}}/unsubscribe">Leave Event</a>
                                @else
                                <a class="btn btn-primary btn-lg btn-block" href="/event/{{$event_company->id}}/subscribe">Join Event</a>
                                @endif
                            </div>
                            
                          </div>
                    </div>
                </div>

                
              </div>
              <br>
              @endforeach


              <!-- page start-->
              <div class="row">
                 <div class="col-lg-12">
                    <section class="panel">
                          <br>

                                  
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