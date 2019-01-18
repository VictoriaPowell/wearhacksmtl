<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/img/favicon.png">

    <title>EventHalo :: My Connections</title>

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

      <!--sidebar start-->
      

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-table"></i> My Connections</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="/">Home</a></li>
						<li><i class="fa fa-table"></i>My Connections</li>
            <li><i class="fa fa-table"></i><a href="/events">Events</a></li>
					</ol>
				</div>
			</div>
              <!-- page start-->
              
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
                                 <th><i class="icon_profile"></i> Full Name</th>
                                 <th><i class="icon_calendar"></i> Date</th>
                                 <th><i class="icon_mail_alt"></i> Email</th>
                                 <th><i class="icon_pin_alt"></i> Event</th>
                                 <th><i class="icon_mobile"></i> Phone</th>
                                 <th><i class="icon_cogs"></i> Action</th>
                              </tr>
                              @if (count($connections) > 0)
                                @foreach ($connections as $connection)
                                <tr>
                                   <td><a href="/user/{{$connection->user_id}}">{{$connection->user_name}}</a></td>
                                   <td>{{$connection->connection_created_at}}</td>
                                   <td>{{$connection->email}}</td>
                                   <td><a href="/event/{{$connection->event_company_id}}">{{$connection->event_name}}</a></td>
                                   <td>{{$connection->phone}}</td>
                                   <td>
                                    <div class="btn-group">
                                        
                                        <a class="btn btn-success" href="/#"><i class="icon_check_alt2"></i></a>
                                        <a class="btn btn-danger" href="/#"><i class="icon_close_alt2"></i></a>
                                    </div>
                                    </td>
                                </tr>
                                @endforeach
                              @else
                                <tr>
                                  <td>You haven't made any connections yet. Why not <a href="/events">join an event</a>?</td>
                                </tr>
                              @endif
                           </tbody>
                        </table>
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
    <!-- nicescroll -->
    <script src="/js/jquery.scrollTo.min.js"></script>
    <script src="/js/jquery.nicescroll.js" type="text/javascript"></script>
    <!--custome script for all page-->
    <script src="/js/scripts.js"></script>


  </body>
</html>
