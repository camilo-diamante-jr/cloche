<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
	<!-- Left navbar links -->
	<ul class="navbar-nav">
		<li class="nav-item">
			<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
		</li>
	</ul>

	<!-- Right navbar links -->
	<ul id="notifications" class="navbar-nav ms-auto">
		<li class="nav-item">
			<a id="currentTime" class="nav-link"></a>
		</li>
		<!-- Notifications Dropdown Menu -->
		<li class="nav-item dropdown">
			<a class="nav-link" data-bs-toggle="dropdown" href="#">
				<i class="far fa-bell"></i>
				<span class="badge bg-warning navbar-badge d-none">
					<span class="notifCounts"></span>
				</span>
			</a>
			<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
				<span class="dropdown-item dropdown-header ">
					<span class="notifCounts">0</span> Notifications

				</span>
				<div class="dropdown-divider"></div>
				<div class="notif-container">
					<!-- Notif load dynamically -->
				</div>
				<div class="dropdown-divider"></div>

				<div class="dropdown-divider"></div>
				<a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
			</div>
		</li>

		<li class="nav-item">
			<a class="nav-link" data-widget="fullscreen" href="#" role="button">
				<i class="fas fa-expand-arrows-alt"></i>
			</a>
		</li>
	</ul>
</nav>
<!-- /.navbar -->