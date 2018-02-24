@extends('adminlte::master')

@section('body')

<header class="header">   
	<nav class="navbar navbar-expand-lg">
		<div class="search-panel">
			<div class="search-inner d-flex align-items-center justify-content-center">
			<div class="close-btn">Close <i class="fa fa-close"></i></div>
			<form id="searchForm" action="#">
				<div class="form-group">
				<input type="search" name="search" placeholder="What are you searching for...">
				<button type="submit" class="submit">Search</button>
				</div>
			</form>
			</div>
		</div>
		<div class="container-fluid d-flex align-items-center justify-content-between">
			<div class="navbar-header"><a href="index.html" class="navbar-brand">
				<div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">Dark</strong><strong>Admin</strong></div>
				<div class="brand-text brand-sm"><strong class="text-primary">D</strong><strong>A</strong></div></a>
			<button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
			</div>
			<div class="right-menu list-inline no-margin-bottom">    
			<div class="list-inline-item"><a href="#" class="search-open nav-link"><i class="icon-magnifying-glass-browser"></i></a></div>
			<div class="list-inline-item dropdown"><a id="navbarDropdownMenuLink1" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link messages-toggle"><i class="icon-email"></i><span class="badge dashbg-1">5</span></a>
				<div aria-labelledby="navbarDropdownMenuLink1" class="dropdown-menu messages"><a href="#" class="dropdown-item message d-flex align-items-center">
					<div class="profile"><img src="https://d19m59y37dris4.cloudfront.net/dark-admin-premium/1-3-2/img/avatar-3.jpg" alt="..." class="img-fluid">
					<div class="status online"></div>
					</div>
					<div class="content">   <strong class="d-block">Nadia Halsey</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">9:30am</small></div></a><a href="#" class="dropdown-item message d-flex align-items-center">
					<div class="profile"><img src="https://d19m59y37dris4.cloudfront.net/dark-admin-premium/1-3-2/img/avatar-2.jpg" alt="..." class="img-fluid">
					<div class="status away"></div>
					</div>
					<div class="content">   <strong class="d-block">Peter Ramsy</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">7:40am</small></div></a><a href="#" class="dropdown-item message d-flex align-items-center">
					<div class="profile"><img src="https://d19m59y37dris4.cloudfront.net/dark-admin-premium/1-3-2/img/avatar-1.jpg" alt="..." class="img-fluid">
					<div class="status busy"></div>
					</div>
					<div class="content">   <strong class="d-block">Sam Kaheil</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">6:55am</small></div></a><a href="#" class="dropdown-item message d-flex align-items-center">
					<div class="profile"><img src="https://d19m59y37dris4.cloudfront.net/dark-admin-premium/1-3-2/img/avatar-5.jpg" alt="..." class="img-fluid">
					<div class="status offline"></div>
					</div>
					<div class="content">   <strong class="d-block">Sara Wood</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">10:30pm</small></div></a><a href="#" class="dropdown-item text-center message"> <strong>See All Messages <i class="fa fa-angle-right"></i></strong></a></div>
			</div>
			<!-- Tasks-->
			<div class="list-inline-item dropdown"><a id="navbarDropdownMenuLink2" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link tasks-toggle"><i class="icon-new-file"></i><span class="badge dashbg-3">9</span></a>
				<div aria-labelledby="navbarDropdownMenuLink2" class="dropdown-menu tasks-list"><a href="#" class="dropdown-item">
					<div class="text d-flex justify-content-between"><strong>Task 1</strong><span>40% complete</span></div>
					<div class="progress">
					<div role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-1"></div>
					</div></a><a href="#" class="dropdown-item">
					<div class="text d-flex justify-content-between"><strong>Task 2</strong><span>20% complete</span></div>
					<div class="progress">
					<div role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-3"></div>
					</div></a><a href="#" class="dropdown-item">
					<div class="text d-flex justify-content-between"><strong>Task 3</strong><span>70% complete</span></div>
					<div class="progress">
					<div role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-2"></div>
					</div></a><a href="#" class="dropdown-item">
					<div class="text d-flex justify-content-between"><strong>Task 4</strong><span>30% complete</span></div>
					<div class="progress">
					<div role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-4"></div>
					</div></a><a href="#" class="dropdown-item">
					<div class="text d-flex justify-content-between"><strong>Task 5</strong><span>65% complete</span></div>
					<div class="progress">
					<div role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-1"></div>
					</div></a><a href="#" class="dropdown-item text-center"> <strong>See All Tasks <i class="fa fa-angle-right"></i></strong></a>
				</div>
			</div>
			<!-- Tasks end-->
			<!-- Megamenu-->
			<div class="list-inline-item dropdown menu-large"><a href="#" data-toggle="dropdown" class="nav-link">Mega <i class="fa fa-ellipsis-v"></i></a>
				<div class="dropdown-menu megamenu">
				<div class="row">
					<div class="col-lg-3"><strong class="text-uppercase">Elements Heading</strong>
					<ul class="list-unstyled">
						<li><a href="#">Lorem ipsum dolor</a></li>
						<li><a href="#">Sed ut perspiciatis</a></li>
						<li><a href="#">Voluptatum deleniti</a></li>
						<li><a href="#">At vero eos</a></li>
						<li><a href="#">Consectetur adipiscing</a></li>
						<li><a href="#">Duis aute irure</a></li>
						<li><a href="#">Necessitatibus saepe</a></li>
						<li><a href="#">Maiores alias</a></li>
					</ul>
					</div>
					<div class="col-lg-3"><strong class="text-uppercase">Elements Heading</strong>
					<ul class="list-unstyled">
						<li><a href="#">Lorem ipsum dolor</a></li>
						<li><a href="#">Sed ut perspiciatis</a></li>
						<li><a href="#">Voluptatum deleniti</a></li>
						<li><a href="#">At vero eos</a></li>
						<li><a href="#">Consectetur adipiscing</a></li>
						<li><a href="#">Duis aute irure</a></li>
						<li><a href="#">Necessitatibus saepe</a></li>
						<li><a href="#">Maiores alias</a></li>
					</ul>
					</div>
					<div class="col-lg-3"><strong class="text-uppercase">Elements Heading</strong>
					<ul class="list-unstyled">
						<li><a href="#">Lorem ipsum dolor</a></li>
						<li><a href="#">Sed ut perspiciatis</a></li>
						<li><a href="#">Voluptatum deleniti</a></li>
						<li><a href="#">At vero eos</a></li>
						<li><a href="#">Consectetur adipiscing</a></li>
						<li><a href="#">Duis aute irure</a></li>
						<li><a href="#">Necessitatibus saepe</a></li>
						<li><a href="#">Maiores alias</a></li>
					</ul>
					</div>
					<div class="col-lg-3"><strong class="text-uppercase">Elements Heading</strong>
					<ul class="list-unstyled">
						<li><a href="#">Lorem ipsum dolor</a></li>
						<li><a href="#">Sed ut perspiciatis</a></li>
						<li><a href="#">Voluptatum deleniti</a></li>
						<li><a href="#">At vero eos</a></li>
						<li><a href="#">Consectetur adipiscing</a></li>
						<li><a href="#">Duis aute irure</a></li>
						<li><a href="#">Necessitatibus saepe</a></li>
						<li><a href="#">Maiores alias</a></li>
					</ul>
					</div>
				</div>
				<div class="row megamenu-buttons text-center">
					<div class="col-lg-2 col-md-4"><a href="#" class="d-block megamenu-button-link dashbg-1"><i class="fa fa-clock-o"></i><strong>Demo 1</strong></a></div>
					<div class="col-lg-2 col-md-4"><a href="#" class="d-block megamenu-button-link dashbg-2"><i class="fa fa-clock-o"></i><strong>Demo 2</strong></a></div>
					<div class="col-lg-2 col-md-4"><a href="#" class="d-block megamenu-button-link dashbg-3"><i class="fa fa-clock-o"></i><strong>Demo 3</strong></a></div>
					<div class="col-lg-2 col-md-4"><a href="#" class="d-block megamenu-button-link dashbg-4"><i class="fa fa-clock-o"></i><strong>Demo 4</strong></a></div>
					<div class="col-lg-2 col-md-4"><a href="#" class="d-block megamenu-button-link bg-danger"><i class="fa fa-clock-o"></i><strong>Demo 5</strong></a></div>
					<div class="col-lg-2 col-md-4"><a href="#" class="d-block megamenu-button-link bg-info"><i class="fa fa-clock-o"></i><strong>Demo 6</strong></a></div>
				</div>
				</div>
			</div>
			<!-- Megamenu end                    -->
			<div class="list-inline-item logout">
				<a id="logout" href="login.html" class="nav-link">Logout <i class="icon-logout"></i></a>
			</div>
			</div>
		</div>
	</nav>
</header>

<div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="https://d19m59y37dris4.cloudfront.net/dark-admin-premium/1-3-2/img/avatar-6.jpg" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">Mark Stephen</h1>
            <p>Web Designer</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
                <li class="active"><a href="index.html"> <i class="icon-home"></i>Home </a></li>
                <li><a href="#tablesDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-grid"></i>Tables </a>
                  <ul id="tablesDropdown" class="collapse list-unstyled ">
                    <li><a href="tables.html">Bootstrap tables</a></li>
                    <li><a href="tables-datatable.html">Datatable</a></li>
                  </ul>
                </li>
                <li><a href="#chartsDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-bar-chart"></i>Charts </a>
                  <ul id="chartsDropdown" class="collapse list-unstyled ">
                    <li><a href="charts.html">Charts</a></li>
                    <li><a href="charts-gauge-sparkline.html">Gauge + Sparkline</a></li>
                  </ul>
                </li>
                <li><a href="#formsDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-padnote"></i>Forms </a>
                  <ul id="formsDropdown" class="collapse list-unstyled ">
                    <li><a href="forms.html">Basic forms</a></li>
                    <li><a href="forms-advanced.html">Advanced forms</a></li>
                    <li><a href="forms-autocomplete.html">Autocomplete</a></li>
                    <li><a href="forms-texteditor.html">Text editor</a></li>
                    <li><a href="forms-dropzone.html">Files upload</a></li>
                  </ul>
                </li>
                <li><a href="#componentsDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-light-bulb"></i>Components </a>
                  <ul id="componentsDropdown" class="collapse list-unstyled ">
                    <li><a href="components-cards.html">Cards</a></li>
                    <li><a href="components-calendar.html">Calendar</a></li>
                    <li><a href="components-gallery.html">Gallery</a></li>
                    <li><a href="components-notifications.html">Notifications</a></li>
                    <li><a href="components-loading-buttons.html">Loading buttons</a></li>
                    <li><a href="components-preloader.html">Preloaders</a></li>
                  </ul>
                </li>
                <li><a href="login.html"> <i class="icon-logout"></i>Login page </a></li>
        </ul><span class="heading">Extras</span>
        <ul class="list-unstyled">
          <li> <a href="#"> <i class="icon-settings"></i>Demo </a></li>
          <li> <a href="#"> <i class="icon-writing-whiteboard"></i>Demo </a></li>
          <li> <a href="#"> <i class="icon-chart"></i>Demo </a></li>
        </ul>
      </nav>
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Dashboard</h2>
          </div>
        </div>
		
		@yield('content')

        <footer class="footer">
          <div class="footer__block block no-margin-bottom">
            <div class="container-fluid text-center">
              <p class="no-margin-bottom">2018 © Your company. </p>
            </div>
          </div>
        </footer>
      </div>
    </div>
@stop
		