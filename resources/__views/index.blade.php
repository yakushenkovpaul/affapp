
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home v-3 - Listty</title>

  <!-- PLUGINS CSS STYLE -->
  <link href="{{ asset('plugins/jquery-ui/jquery-ui.min.css')  }}" rel="stylesheet">
  <link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css')  }}" rel="stylesheet">
  <link href="{{ asset('plugins/font-awesome/css/font-awesome.min.css')  }}" rel="stylesheet">
  <link href="{{ asset('plugins/listtyicons/style.css')  }}" rel="stylesheet">
  <link href="{{ asset('plugins/bootstrapthumbnail/bootstrap-thumbnail.css')  }}" rel="stylesheet">
  <link href="{{ asset('plugins/datepicker/datepicker.min.css')  }}" rel="stylesheet">
  <link href="{{ asset('plugins/selectbox/select_option1.css')  }}" rel="stylesheet">
  <link href="{{ asset('plugins/owl-carousel/owl.carousel.min.css')  }}" rel="stylesheet">
  <link href="{{ asset('plugins/fancybox/jquery.fancybox.pack.css')  }}" rel="stylesheet">
  <link href="{{ asset('plugins/isotope/isotope.min.css')  }}" rel="stylesheet">
  <link href="{{ asset('plugins/map/css/map.css')  }}" rel="stylesheet">

  <!-- GOOGLE FONT -->
  <link href="https://fonts.googleapis.com/css?family=Muli:200,300,400,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Herr+Von+Muellerhoff" rel="stylesheet">

  <!-- CUSTOM CSS -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

  <!-- FAVICON -->
  <link href="{{ asset('img/favicon.png') }}" rel="shortcut icon">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body class="body-wrapper">
  <div class="page-loader" style="background: url(img/preloader.gif) center no-repeat #fff;"></div>
  <div class="main-wrapper">
    <!-- HEADER -->
    <header id="pageTop" class="header">

      <!-- TOP INFO BAR -->

      <div class="nav-wrapper navbarWhite">

        <div class="container-fluid header-bg">
          <div class="row">
            <div class="col-lg-4 col-sm-4 col-xs-6 header-left empty">empty
            </div>
            <div class="col-lg-8 col-sm-8 col-xs-6 header-right empty">empty
            </div>
          </div>
        </div>

        <!-- NAVBAR -->
        <nav id="menuBar" class="navbar navbar-default lightHeader" role="navigation">
          <div class="container">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.html"><img src="img/logo-blue.png" alt="logo"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active dropdown singleDrop">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">home <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <li><a href="index.html">Map Version</a></li>
                      <li><a href="index-2.html">Travel Version</a></li>
                      <li><a href="index-3.html">Automobile Version</a></li>
                    </ul>
                  </li>
                  <li class=" dropdown megaDropMenu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Listing <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                    <ul class="row dropdown-menu">
                      <li class="col-sm-4 col-xs-12">
                        <ul class="list-unstyled">
                            <li><h5>listing Grids</h5></li>
                            <li><a href="category-grid.html">Listing Grid Left</a></li>
                            <li><a href="category-grid-right.html">Listing Grid Right</a></li>
                            <li><a href="category-grid-full.html">Listing Grid Fullwidth</a></li>
                            <li><h5>listing lists</h5></li>
                            <li><a href="category-list-left.html">Listing list Left</a></li>
                            <li><a href="category-list-right.html">Listing list Right</a></li>
                            <li><a href="category-list-full.html">Listing list Full</a></li>
                        </ul>
                      </li>
                      <li class="col-sm-4 col-xs-12">
                        <ul class="list-unstyled">
                            <li><h5>listing Sidebar Map</h5></li>
                            <li><a href="listing-sidebar-map-left.html">Listing Sidebar Map left</a></li>
                            <li><a href="listing-sidebar-map-right.html">Listing Sidebar Map right</a></li>
                            <li><a href="listing-sidebar-map-full.html">Listing Sidebar Map Full</a></li>
                            <li><h5>listing Details</h5></li>
                            <li><a href="listing-details-left.html">Listing Details Left</a></li>
                            <li><a href="listing-details-right.html">Listing Details Right</a></li>
                            <li><a href="listing-details-full.html">Listing Details Full</a></li>
                        </ul>
                      </li>
                      <li class="col-sm-4 col-xs-12">
                        <ul class="list-unstyled">
                            <li class="mega-img">
                                <a href=""><img src="img/works/works-big-3.png" alt=""></a>
                            </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class=" dropdown singleDrop">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">pages <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                    <ul class="dropdown-menu dropdown-menu-left">
                      <li><a href="contact-us.html">Contact Us</a></li>
                      <li><a href="terms-of-services.html">Terms and Conditions</a></li>
                      <li><a href="sign-up.html">Create Account</a></li>
                      <li><a href="login.html">Login</a></li>
                      <li><a href="pricing-table.html">Pricing</a></li>
                      <li><a href="payment-process.html">Payment</a></li>
                      <li><a href="how-it-works.html">How It Works</a></li>
                    </ul>
                  </li>
                  <li class=""><a href="blog.html">blog </a></li>
                  <li class=" dropdown singleDrop">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">admin <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <li><a href="dashboard.html">Dashboard</a></li>
                      <li><a href="add-listings.html">Add Listing</a></li>
                      <li><a href="edit-listings.html">Edit Listing</a></li>
                      <li><a href="listings.html">My Listings</a></li>
                      <li><a href="profile.html">My Profile</a></li>
                      <li><a href="oders.html">My Orders</a></li>
                    </ul>
                  </li>
                </ul>
            </div>
            <button class="btn btn-default navbar-btn" type="button" data-toggle="modal" data-target="#loginModal"> + <span>Add Listing</span> </button>
          </div>
        </nav>
      </div>
    </header>


<!-- MAP SECTION -->
<section class="clearfix p0">
	<div id="map-canvas"></div>
</section>





<!-- CATEGORY SECTION -->
<section class="clearfix bg-light">
	<div class="container">
	  <div class="row">
	    <div class="col-xs-12 ">
	      <div class="bg-search-white">
	        <form class="form-inline" action="category-grid.html" method="">
	          <div class="form-group">
	            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter your keywords">
	          </div>
	          <div class="form-group">
	            <div class="searchSelectbox">
	              <select name="guiest_id3" id="guiest_id3" class="select-drop">
	                <option value="0">All Location</option>
	                <option value="1">U.S.A</option>
	                <option value="2">U.K</option>
	                <option value="3">ASIA</option>
	              </select>
	            </div>
	          </div>
	          <div class="form-group">
	            <div class="searchSelectbox">
	              <select name="guiest_id4" id="guiest_id4" class="select-drop">
	                <option value="0">All Categories</option>
	                <option value="1">All Categories 1</option>
	                <option value="2">All Categories 2</option>
	                <option value="3">All Categories 3</option>
	              </select>
	            </div>
	          </div>
	          <div class="form-group">
	            <button type="submit" class="btn btn-primary">Search </button>
	          </div>
	        </form>
	      </div>
	    </div>
	  </div>
	</div>
	<div class="container">
		<div class="page-header text-center">
			<h2>Browse by Categories <small>Explore and connect with great local businesses </small></h2>
		</div>
		<div class="row">
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="categoryItem">
					<i class="icon-listy icon-car-1"></i>
					<h2>Cars & Vehicles</h2>
					<ul class="list-unstyled">
						<li><a href="category-grid-full.html">Bikes & Scooters</a></li>
						<li><a href="category-list-left.html">Commercial Vehicles</a></li>
						<li><a href="category-grid.html">Bicycles Spare Parts</a></li>
						<li><a href="category-list-right.html">Accessories</a></li>
						<li><a href="category-grid-right.html">Other Vehicles</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="categoryItem">
					<i class="icon-listy icon-mobile-phone"></i>
					<h2>Electronics & Gedgets</h2>
					<ul class="list-unstyled">
						<li><a href="category-list-full.html">Mobile Phones</a></li>
						<li><a href="category-list-left.html">Computers & Tablets</a></li>
						<li><a href="category-list-right.html">Computer Accessories</a></li>
						<li><a href="category-grid.html">Cameras & Camcorders</a></li>
						<li><a href="category-list-full.html">Mobile Phone Accessories</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="categoryItem">
					<i class="icon-listy icon-neighborhood"></i>
					<h2>Real Estate</h2>
					<ul class="list-unstyled">
						<li><a href="category-grid-full.html">Apartments & Flats</a></li>
						<li><a href="category-list-left.html">Plots & Land</a></li>
						<li><a href="category-grid-right.html">Rooms</a></li>
						<li><a href="category-grid-full.html">Accessories</a></li>
						<li><a href="category-list-left.html">Houses</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="categoryItem">
					<i class="icon-listy icon-coat-1"></i>
					<h2>Fshion & Beauty</h2>
					<ul class="list-unstyled">
						<li><a href="category-list-full.html">Clothing</a></li>
						<li><a href="category-list-left.html">Watches</a></li>
						<li><a href="category-list-right.html">Health & Beauty Products</a></li>
						<li><a href="category-list-left.html">Jewellery</a></li>
						<li><a href="category-list-full.html">Bags</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="categoryItem">
					<i class="icon-listy icon-medicine-book"></i>
					<h2>Books & Magazines</h2>
					<ul class="list-unstyled">
						<li><a href="category-grid-full.html">Equipment</a></li>
						<li><a href="category-grid.html">Instruments</a></li>
						<li><a href="category-grid-right.html">Children's</a></li>
						<li><a href="listing-details-right.html">Games & Consoles</a></li>
						<li><a href="category-grid.html">Travel, Events</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="categoryItem">
					<i class="icon-listy icon-suitcase"></i>
					<h2>Job Openings</h2>
					<ul class="list-unstyled">
						<li><a href="category-grid-full.html">Delivery/ Collections</a></li>
						<li><a href="category-grid.html">BPO/ Telecaller</a></li>
						<li><a href="category-grid-right.html">Data Entry / Back Office</a></li>
						<li><a href="category-grid.html">Marketing</a></li>
						<li><a href="category-grid-full.html">Sales</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="categoryItem">
					<i class="icon-listy icon-music"></i>
					<h2>Music & Arts</h2>
					<ul class="list-unstyled">
						<li><a href="category-list-right.html">Drums</a></li>
						<li><a href="category-list-full.html">Keyboard</a></li>
						<li><a href="category-list-left.html">Flute</a></li>
						<li><a href="category-list-right.html">Guitar</a></li>
						<li><a href="category-list-full.html">Bass Guitar</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="categoryItem">
					<i class="icon-listy icon-house"></i>
					<h2>Home Appliances</h2>
					<ul class="list-unstyled">
						<li><a href="category-grid-right.html">Furniture</a></li>
						<li><a href="category-grid.html">Electricity, AC,</a></li>
						<li><a href="category-grid-full.html">Bathroom & Garden</a></li>
						<li><a href="category-grid.html">Home Appliances</a></li>
						<li><a href="category-grid-full.html">Other Home Items</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>


<!-- THINGS SECTION -->
<section class="clearfix thingsArea">
	<div class="container">
		<div class="page-header text-center">
			<h2>Popular Things Near You <small>This are some of most popular listing</small></h2>
		</div>
		<div class="row">
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="thingsBox thinsSpace">
					<div class="thingsImage">
						<img src="img/things/things-1.jpg" alt="Image things">
						<div class="thingsMask">
							<ul class="list-inline rating">
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
							</ul>
							<a href="blog-details.html"><h2>The City Theater <i class="fa fa-check-circle" aria-hidden="true"></i></h2></a>
							<p>10 Bay Street Toronto Ontario Canada</p>
						</div>
					</div>
					<div class="thingsCaption ">
						<ul class="list-inline captionItem">
							<li><i class="fa fa-heart-o" aria-hidden="true"></i> 10 k</li>
							<li><a href="category-list-full.html">Hotel, Restaurant</a></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="thingsBox thinsSpace">
					<div class="thingsImage">
						<img src="img/things/things-2.jpg" alt="Image things">
						<div class="thingsMask">
							<ul class="list-inline rating">
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
							</ul>
							<a href="blog-details.html"><h2>The City Theater</h2></a>
							<p>10 Bay Street Toronto Ontario Canada</p>
						</div>
					</div>
					<div class="thingsCaption ">
						<ul class="list-inline captionItem">
							<li><i class="fa fa-heart-o" aria-hidden="true"></i> 10 k</li>
							<li><a href="category-grid-full.html">Hotel, Restaurant</a></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="thingsBox thinsSpace">
					<div class="thingsImage">
						<img src="img/things/things-3.jpg" alt="Image things">
						<div class="thingsMask">
							<ul class="list-inline rating">
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
							</ul>
							<a href="blog-details.html"><h2>The City Theater <i class="fa fa-check-circle" aria-hidden="true"></i></h2></a>
							<p>10 Bay Street Toronto Ontario Canada</p>
						</div>
					</div>
					<div class="thingsCaption ">
						<ul class="list-inline captionItem">
							<li><i class="fa fa-heart-o" aria-hidden="true"></i> 10 k</li>
							<li><a href="category-list-left.html">Hotel, Restaurant</a></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="thingsBox thinsSpace">
					<div class="thingsImage">
						<img src="img/things/things-1.jpg" alt="Image things">
						<div class="thingsMask">
							<ul class="list-inline rating">
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
							</ul>
							<a href="blog-details.html"><h2>The City Theater</h2></a>
							<p>10 Bay Street Toronto Ontario Canada</p>
						</div>
					</div>
					<div class="thingsCaption ">
						<ul class="list-inline captionItem">
							<li><i class="fa fa-heart-o" aria-hidden="true"></i> 10 k</li>
							<li><a href="category-grid-right.html">Hotel, Restaurant</a></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="thingsBox thinsSpace">
					<div class="thingsImage">
						<img src="img/things/things-2.jpg" alt="Image things">
						<div class="thingsMask">
							<ul class="list-inline rating">
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
							</ul>
							<a href="blog-details.html"><h2>The City Theater <i class="fa fa-check-circle" aria-hidden="true"></i></h2></a>
							<p>10 Bay Street Toronto Ontario Canada</p>
						</div>
					</div>
					<div class="thingsCaption ">
						<ul class="list-inline captionItem">
							<li><i class="fa fa-heart-o" aria-hidden="true"></i> 10 k</li>
							<li><a href="category-list-full.html">Hotel, Restaurant</a></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="thingsBox thinsSpace">
					<div class="thingsImage">
						<img src="img/things/things-3.jpg" alt="Image things">
						<div class="thingsMask">
							<ul class="list-inline rating">
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
							</ul>
							<a href="blog-details.html"><h2>The City Theater</h2></a>
							<p>10 Bay Street Toronto Ontario Canada</p>
						</div>
					</div>
					<div class="thingsCaption ">
						<ul class="list-inline captionItem">
							<li><i class="fa fa-heart-o" aria-hidden="true"></i> 10 k</li>
							<li><a href="category-grid-full.html">Hotel, Restaurant</a></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="thingsBox thinsSpace">
					<div class="thingsImage">
						<img src="img/things/things-1.jpg" alt="Image things">
						<div class="thingsMask">
							<ul class="list-inline rating">
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
							</ul>
							<a href="blog-details.html"><h2>The City Theater <i class="fa fa-check-circle" aria-hidden="true"></i></h2></a>
							<p>10 Bay Street Toronto Ontario Canada</p>
						</div>
					</div>
					<div class="thingsCaption ">
						<ul class="list-inline captionItem">
							<li><i class="fa fa-heart-o" aria-hidden="true"></i> 10 k</li>
							<li><a href="category-list-left.html">Hotel, Restaurant</a></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="thingsBox thinsSpace">
					<div class="thingsImage">
						<img src="img/things/things-2.jpg" alt="Image things">
						<div class="thingsMask">
							<ul class="list-inline rating">
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
							</ul>
							<a href="blog-details.html"><h2>The City Theater</h2></a>
							<p>10 Bay Street Toronto Ontario Canada</p>
						</div>
					</div>
					<div class="thingsCaption ">
						<ul class="list-inline captionItem">
							<li><i class="fa fa-heart-o" aria-hidden="true"></i> 10 k</li>
							<li><a href="category-grid.html">Hotel, Restaurant</a></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="thingsBox thinsSpace">
					<div class="thingsImage">
						<img src="img/things/things-2.jpg" alt="Image things">
						<div class="thingsMask">
							<ul class="list-inline rating">
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
							</ul>
							<a href="blog-details.html"><h2>The City Theater</h2></a>
							<p>10 Bay Street Toronto Ontario Canada</p>
						</div>
					</div>
					<div class="thingsCaption ">
						<ul class="list-inline captionItem">
							<li><i class="fa fa-heart-o" aria-hidden="true"></i> 10 k</li>
							<li><a href="category-list-full.html">Hotel, Restaurant</a></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-xs-12">
				<div class="btnArea btnAreaBorder text-center">
					<a href="category-grid-full.html" class="btn btn-primary">Explore More</a>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- SERVICES SECTION -->
<section class="clearfix servicesSection">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="servicesItem">
					<ul class="list-inline listServices">
						<li>
							<div class="servicesIcon">
								<i class="icon-listy icon-key"></i>
							</div>
							<div class="servicesInfo">
								<h2>Secure Trading</h2>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed eiusmod</p>
							</div>
						</li>
						<li>
							<div class="servicesIcon">
								<i class="icon-listy icon-wreath"></i>
							</div>
							<div class="servicesInfo">
								<h2>24/7 Hours Support</h2>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed eiusmod</p>
							</div>
						</li>
						<li>
							<div class="servicesIcon">
								<i class="icon-listy icon-tag3"></i>
							</div>
							<div class="servicesInfo">
								<h2>Easy Trading</h2>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed eiusmod</p>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- APP DOWNLOAD SECTION -->
<section class="clearfix appDownload">
	<div class="container">
		<div class="page-header text-center">
			<h2>Download on App Store</h2>
		</div>
		<div class="row">
			<div class="col-sm-4 col-xs-12">
				<a href="#" class="btn btn-primary btn-transparent">
					<i class="icon-listy icon-playstore"></i><span>available on <br><strong>Google Play</strong></span>
				</a>
			</div>
			<div class="col-sm-4 col-xs-12">
				<a href="#" class="btn btn-primary btn-transparent">
					<i class="icon-listy icon-apple"></i><span>available on <br><strong>Google Play</strong></span>
				</a>
			</div>
			<div class="col-sm-4 col-xs-12">
				<a href="#" class="btn btn-primary btn-transparent">
					<i class="icon-listy icon-microsoft"></i><span>available on <br><strong>Google Play</strong></span>
				</a>
			</div>
		</div>
	</div>
</section>

    <!-- FOOTER -->
    <footer class="footerWhite">
      <!-- FOOTER INFO -->
      <div class="clearfix footerInfo">
        <div class="container">
          <div class="row">
            <div class="col-sm-7 col-xs-12">
              <div class="footerText">
                <a href="index.html" class="footerLogo"><img src="img/logo-blue.png" alt="Footer Logo"></a>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor</p>
                <ul class="list-styled list-contact">
                  <li><i class="fa fa-phone" aria-hidden="true"></i>[88] 657 524 332</li>
                  <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="#">info@listy.com</a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-3 col-xs-12">
              <div class="footerInfoTitle">
                <h4>Links</h4>
              </div>
              <div class="useLink">
                <ul class="list-unstyled">
                  <li><a href="dashboard.html">Dashboard</a></li>
                  <li><a href="sign-up.html">Create Account</a></li>
                  <li><a href="login.html">Login</a></li>
                  <li><a href="add-listings.html">Add Listing</a></li>
                  <li><a href="edit-listings.html">Edit Listing</a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-2 col-xs-12">
              <div class="footerInfoTitle">
                <h4>Company</h4>
              </div>
              <div class="useLink">
                <ul class="list-unstyled">
                  <li><a href="contact-us.html">Contact Us</a></li>
                  <li><a href="terms-of-services.html">Terms and Conditions</a></li>
                  <li><a href="how-it-works.html">How It Works</a></li>
                  <li><a href="payment-process.html">Payment</a></li>
                  <li><a href="pricing-table.html">Pricing</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- COPY RIGHT -->
      <div class="clearfix copyRight">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="copyRightWrapper">
                <div class="row">
                  <div class="col-sm-5 col-sm-push-7 col-xs-12">
                    <ul class="list-inline socialLink">
                      <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                  <div class="col-sm-7 col-sm-pull-5 col-xs-12">
                    <div class="copyRightText">
                      <p>Copyright &copy; 2017. All Rights Reserved by <a href="http://www.iamabdus.com/" target="_blank">Abdus</a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </footer>
  </div>

  <!-- LOGIN  MODAL -->
  <div id="loginModal" tabindex="-1" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Log In to your Account</h4>
        </div>
        <div class="modal-body">
          <form class="loginForm">
            <div class="form-group">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <input type="email" class="form-control" id="email" placeholder="Email">
            </div>
            <div class="form-group">
              <i class="fa fa-lock" aria-hidden="true"></i>
              <input type="password" class="form-control" id="pwd" placeholder="Password">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block">Log In</button>
            </div>
            <div class="checkbox">
              <label><input type="checkbox"> Remember me</label>
              <a href="#" class="pull-right link">Fogot Password?</a>
            </div>

          </form>
        </div>
        <div class="modal-footer">
          <p>Don’t have an Account? <a href="#" class="link">Sign up</a></p>
        </div>
      </div>

    </div>
  </div>

  <!-- JAVASCRIPTS -->
  <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
  <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('plugins/smoothscroll/SmoothScroll.min.js') }}"></script>
  <script src="{{ asset('plugins/waypoints/waypoints.min.js') }}"></script>
  <script src="{{ asset('plugins/counter-up/jquery.counterup.min.js') }}"></script>
  <script src="{{ asset('plugins/datepicker/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset('plugins/selectbox/jquery.selectbox-0.1.3.min.js') }}"></script>
  <script src="{{ asset('plugins/owl-carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('plugins/isotope/isotope.min.js') }}"></script>
  <script src="{{ asset('plugins/fancybox/jquery.fancybox.pack.js') }}"></script>
  <script src="{{ asset('plugins/isotope/isotope-triger.min.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBEDfNcQRmKQEyulDN8nGWjLYPm8s4YB58"></script>
  <script src="{{ asset('plugins/map/js/rich-marker.js') }}"></script>
  <script src="{{ asset('plugins/map/js/infobox_packed.js') }}"></script>
  <script src="{{ asset('js/map.js') }}"></script>
  <script src="{{ asset('js/custom.js') }}"></script>

</body>

</html>
