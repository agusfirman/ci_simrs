
	<nav class="navbar navbar-expand navbar-light bg-white">
		<a class="sidebar-toggle d-flex mr-2">
			<i class="hamburger align-self-center"></i>
		</a>

		<form class="form-inline d-none d-sm-inline-block">
			<input class="form-control mr-sm-2" type="text" placeholder="Search projects" aria-label="Search">
		</form>

		<div class="navbar-collapse collapse">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item dropdown">
					<a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown" data-toggle="dropdown">
						<div class="position-relative">
							<i class="align-middle" data-feather="message-circle"></i>
							<span class="indicator">4</span>
						</div>
					</a>
					<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0" aria-labelledby="messagesDropdown">
						<div class="dropdown-menu-header">
							<div class="position-relative">
								4 New Messages
							</div>
						</div>
						<div class="list-group">
							<a href="#" class="list-group-item">
								<div class="row no-gutters align-items-center">
									<div class="col-2">
										<img src="<?= base_url('assets/img/avatar5.png')?>" class="avatar img-fluid rounded-circle" alt="Ashley Briggs">
									</div>
									<div class="col-10 pl-2">
										<div class="text-dark">Ashley Briggs</div>
										<div class="text-muted small mt-1">Nam pretium turpis et arcu. Duis arcu tortor.</div>
										<div class="text-muted small mt-1">15m ago</div>
									</div>
								</div>
							</a>
							<a href="#" class="list-group-item">
								<div class="row no-gutters align-items-center">
									<div class="col-2">
										<img src="<?= base_url('assets/img/avatar2.png')?>" class="avatar img-fluid rounded-circle" alt="Carl Jenkins">
									</div>
									<div class="col-10 pl-2">
										<div class="text-dark">Carl Jenkins</div>
										<div class="text-muted small mt-1">Curabitur ligula sapien euismod vitae.</div>
										<div class="text-muted small mt-1">2h ago</div>
									</div>
								</div>
							</a>
							<a href="#" class="list-group-item">
								<div class="row no-gutters align-items-center">
									<div class="col-2">
										<img src="<?= base_url('assets/img/avatar4.png')?>" class="avatar img-fluid rounded-circle" alt="Stacie Hall">
									</div>
									<div class="col-10 pl-2">
										<div class="text-dark">Stacie Hall</div>
										<div class="text-muted small mt-1">Pellentesque auctor neque nec urna.</div>
										<div class="text-muted small mt-1">4h ago</div>
									</div>
								</div>
							</a>
							<a href="#" class="list-group-item">
								<div class="row no-gutters align-items-center">
									<div class="col-2">
										<img src="<?= base_url('assets/img/avatar3.png')?>" class="avatar img-fluid rounded-circle" alt="Bertha Martin">
									</div>
									<div class="col-10 pl-2">
										<div class="text-dark">Bertha Martin</div>
										<div class="text-muted small mt-1">Aenean tellus metus, bibendum sed, posuere ac, mattis non.</div>
										<div class="text-muted small mt-1">5h ago</div>
									</div>
								</div>
							</a>
						</div>
						<div class="dropdown-menu-footer">
							<a href="#" class="text-muted">Show all messages</a>
						</div>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-toggle="dropdown">
						<div class="position-relative">
							<i class="align-middle" data-feather="bell-off"></i>
						</div>
					</a>
					<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0" aria-labelledby="alertsDropdown">
						<div class="dropdown-menu-header">
							4 New Notifications
						</div>
						<div class="list-group">
							<a href="#" class="list-group-item">
								<div class="row no-gutters align-items-center">
									<div class="col-2">
										<i class="text-danger" data-feather="alert-circle"></i>
									</div>
									<div class="col-10">
										<div class="text-dark">Update completed</div>
										<div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
										<div class="text-muted small mt-1">2h ago</div>
									</div>
								</div>
							</a>
							<a href="#" class="list-group-item">
								<div class="row no-gutters align-items-center">
									<div class="col-2">
										<i class="text-warning" data-feather="bell"></i>
									</div>
									<div class="col-10">
										<div class="text-dark">Lorem ipsum</div>
										<div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate hendrerit et.</div>
										<div class="text-muted small mt-1">6h ago</div>
									</div>
								</div>
							</a>
							<a href="#" class="list-group-item">
								<div class="row no-gutters align-items-center">
									<div class="col-2">
										<i class="text-primary" data-feather="home"></i>
									</div>
									<div class="col-10">
										<div class="text-dark">Login from 192.186.1.1</div>
										<div class="text-muted small mt-1">8h ago</div>
									</div>
								</div>
							</a>
							<a href="#" class="list-group-item">
								<div class="row no-gutters align-items-center">
									<div class="col-2">
										<i class="text-success" data-feather="user-plus"></i>
									</div>
									<div class="col-10">
										<div class="text-dark">New connection</div>
										<div class="text-muted small mt-1">Anna accepted your request.</div>
										<div class="text-muted small mt-1">12h ago</div>
									</div>
								</div>
							</a>
						</div>
						<div class="dropdown-menu-footer">
							<a href="#" class="text-muted">Show all notifications</a>
						</div>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="userDropdown" data-toggle="dropdown">
						<span class="d-inline-block d-md-none">
							<i class="align-middle" data-feather="settings"></i>
						</span>
						<span class="d-none d-sm-inline-block">
							<img src="<?= base_url('assets/img/avatar.png')?>" class="avatar img-fluid rounded-circle mr-1" alt="Chris Wood" /> <span class="text-dark">Chris Wood</span>
						</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
						<a class="dropdown-item" href="#"><i class="align-middle mr-1" data-feather="user"></i> Profile</a>
						<a class="dropdown-item" href="#"><i class="align-middle mr-1" data-feather="pie-chart"></i> Analytics</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Settings & Privacy</a>
						<a class="dropdown-item" href="#">Help</a>
						<a class="dropdown-item" href="#">Sign out</a>
					</div>
				</li>
			</ul>
		</div>
	</nav>
