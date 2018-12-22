<!-- Header section -->
<header class="header-section fixed-top">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3">
				<div class="site-logo">
					<img src="{{ URL::asset('img/logo.png') }}" alt="">
				</div>
				<div class="nav-switch">
					<i class="fa fa-bars"></i>
				</div>
			</div>
			<div class="col-lg-9 col-md-9">
				@if(Auth::guest())
					<a href="/register" class="site-btn header-btn">Register</a>
					<nav class="main-menu" style="margin-top: -4px;">
						<ul>
							<li><a href="/">Home</a></li>
							<li><a href="/courses">Courses</a></li>
							<li><a href="/blog">Free Knowledge</a></li>
							<li><a href="/contact">Contact</a></li>
							<li><a href="/login">Login</a></li>
						</ul>
					</nav>
				@elseif(session()->has('admin_login'))

				@else
					<nav class="main-menu" style="margin-top: -4px;">
						<ul>
							<li><a href="/members/dashboard">Dashboard</a></li>
							<li><a href="/members/community">Community</a></li>
							<li><a href="/members/courses">Courses</a></li>
							<li><a href="/blog">Extra Resources</a></li>
							<li><a href="/contact">Contact</a></li>
							<li><a href="/members/logout">Logout</a></li>
						</ul>
					</nav>
				@endif
			</div>
		</div>
	</div>
</header>
<!-- Header section end -->