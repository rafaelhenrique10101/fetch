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
				<div class="brand-text brand-big visible text-uppercase">
				
				</div>
				<div class="brand-text brand-sm"><strong class="text-primary">D</strong><strong>A</strong></div></a>
			<!--<button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>-->
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

				</div>
			</div>
			<!-- Megamenu end                    -->
			<div class="list-inline-item logout">
				<a id="logout" href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout <i class="icon-logout"></i></a>				
				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
			</div>
			</div>
		</div>
	</nav>
</header>

<div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <ul class="list-unstyled">
			<li class="active" parent-li="1" type="menu-side"><a href="{{ route('admin.home') }}" id="id_link_menu" parent-li="1"> <i class="icon-home"></i>Dashboard </a></li>
			<li parent-li="2" type="menu-side"><a href="#tablesDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-grid"></i>Financeiro </a>
				<ul id="tablesDropdown" class="collapse list-unstyled ">
					<li><a href="{{ route('admin.balance') }}" id="id_link_menu" parent-li="2">Saldo de recarga</a></li>
					<li><a href="" id="id_link_menu" parent-li="2">Regargar</a></li>
				</ul>
			</li>                
        </ul>
      </nav>
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        
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
		