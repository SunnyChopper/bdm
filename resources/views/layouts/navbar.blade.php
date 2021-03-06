<!-- Header section -->
<header class="header-section fixed-top">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3">
				<div class="site-logo">
					<a href="/"><img src="{{ URL::asset('img/logo.png') }}" alt="Digital Age CEO Logo" style="height: 50px;"></a>
				</div>
				<div class="nav-switch">
					<i class="fa fa-bars"></i>
				</div>
			</div>
			<div class="col-lg-9 col-md-9">
				@if(Auth::guest())
					{{-- <a href="/register" class="site-btn header-btn">Register</a> --}}
					<nav class="main-menu" style="margin-top: -4px;">
						<ul>
							<li><a href="/">Home</a></li>
							{{-- <li><a href="/courses">Courses</a></li> --}}
							<li><a href="/blog">Free Knowledge</a></li>
							<li><a href="/public-courses">Public Courses</a></li>
							<li><a href="/contact">Contact</a></li>
							<li><a href="/login">Login</a></li>
							<li><a href="/register">Register</a></li>
						</ul>
					</nav>
				@elseif(session()->has('admin_login'))
					<nav class="main-menu" style="margin-top: -4px;">
						<ul>
							<li><a href="/admin/dashboard">Dashboard</a></li>
							<li><a href="/admin/posts/view">Blog Posts</a></li>
							<li><a href="/admin/downloads/view">Downloadables</a></li>
							<li><a href="/admin/public-courses/view">Public Courses</a></li>
							<li><a href="/admin/logout">Logout</a></li>
						</ul>
					</nav>
				@else
					<nav class="main-menu" style="margin-top: -4px;">
						<ul>
							<li><a href="/members/dashboard">Dashboard</a></li>
							{{-- <li><a href="/members/community">Community</a></li> --}}
							{{-- <li><a href="/members/courses">Courses</a></li> --}}
							<li><a href="/public-courses">Public Courses</a></li>
							<li><a href="/members/tools">Tools</a></li>
							<li><a href="/members/downloads">Extra Resources</a></li>
							<li><a href="/profile/{{ Auth::id() }}">Profile</a></li>
							<li><a href="/members/logout">Logout</a></li>
						</ul>
					</nav>
				@endif
			</div>
		</div>
	</div>
</header>
<!-- Header section end -->