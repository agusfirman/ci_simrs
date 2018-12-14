<div class="sidebar-content">
	<a class="sidebar-brand" href="http://192.168.3.142/simrs">
		<i class="align-middle" data-feather="box"></i>
		<span class="align-middle">SIM-RS</span>
	</a>

	<ul class="sidebar-nav">
		<li class="sidebar-header">
			Main
		</li>
		<li class="sidebar-item active">
			<a href="http://192.168.3.142/simrs" class="sidebar-link">
				<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
				<span class="sidebar-badge badge badge-primary">6</span>
			</a>
		</li>
		<li class="sidebar-item">
			<a href="#pages" data-toggle="collapse" class="sidebar-link collapsed">
				<i class="align-middle" data-feather="layout"></i> <span class="align-middle">Master Data</span>
			</a>
			<ul id="pages" class="sidebar-dropdown list-unstyled collapse ">
					<?php echo "
						<li >
							<a class='sidebar-link' href='index.php?page=". base64_encode('inventori_it')."&ID=".base64_encode('barang_it')."'> Data Inventori IT</a>
							</li>
						<li >
							<a class='sidebar-link' href='index.php?page=". base64_encode('users')."&ID=".base64_encode('daftar_users')."'> Data Users</a>
						</li>
						<li>
							<a class='sidebar-link'href='index.php?page=".base64_encode('e-filling')."&ID=".base64_encode('departement')." '>
								<span>Departement</span>
							</a>
						</li>
						<li>
							<a class='sidebar-link' href='index.php?page=". base64_encode('dokter')." '>Data Pemilik Rekening</a>
						</li>
						<li><a class='sidebar-link' href='index.php?page=". base64_encode('kamar')." '>Data Kamar</a></li>
						<li><a class='sidebar-link' href='index.php?page=". base64_encode('task')."&ID=".base64_encode('cat_task')."'>Task Categories</a></li>
						<li><a class='sidebar-link' href='index.php?page=". base64_encode('doorprice')."'>Hadiah Doorprice</a></li>
					";
					 ?>

				<li class="sidebar-item"><a class="sidebar-link" href="pages-sign-in.html">Sign In</a></li>
				<li class="sidebar-item"><a class="sidebar-link" href="pages-sign-up.html">Sign Up</a></li>
				<li class="sidebar-item"><a class="sidebar-link" href="pages-reset-password.html">Reset Password</a></li>
				<li class="sidebar-item"><a class="sidebar-link" href="pages-blank.html">Blank Page</a></li>
				<li class="sidebar-item"><a class="sidebar-link" href="pages-invoice.html">Invoice <span class="sidebar-badge badge badge-primary">New</span></a></li>
				<li class="sidebar-item"><a class="sidebar-link" href="pages-404.html">404 Page</a></li>
				<li class="sidebar-item"><a class="sidebar-link" href="pages-500.html">500 Page</a></li>
			</ul>
		</li>
		<?php
		echo "
		<li class='sidebar-item'>
			<a class='sidebar-link' href='index.php?page=". base64_encode('ams')." '>
				<i class='align-middle' data-feather='book-open'></i> <span class='align-middle'>Asset Management</span>
			</a>
		</li>
		<li class='sidebar-item'>
		  <a class='sidebar-link' href='index.php?page=". base64_encode('mytask')."&ID=".base64_encode('mytask')."'>
				<i class='align-middle' data-feather='book-open'></i> <span class='align-middle'>MyTask</span>
			</a>
		</li>
		";
		 ?>
		<li class="sidebar-item">
			<a href="#layouts" data-toggle="collapse" class="sidebar-link collapsed">
				<i class="align-middle" data-feather="monitor"></i> <span class="align-middle">Event</span>
			</a>
			<ul id="layouts" class="sidebar-dropdown list-unstyled collapse ">
				<?php
				echo "
				<li>
          <a class='sidebar-link' href='index.php?page=".base64_encode('buku-tamu')." '>
           <span>Buku Tamu</span>
          </a>
        </li>
				<li>
          <a class='sidebar-link' href='index.php?page=".base64_encode('undian-doorprice')."' target='blank'>
            <span>Undian Doorprice</span>
          </a>
        </li>";
				 ?>
				<li class="sidebar-item"><a class="sidebar-link" href="layouts-sidebar-sticky.html">Sticky Sidebar <span class="sidebar-badge badge badge-primary">New</span></a></li>
				<li class="sidebar-item"><a class="sidebar-link" href="layouts-sidebar-collapsed.html">Collapsed Sidebar</a></li>
				<li class="sidebar-item"><a class="sidebar-link" href="layouts-boxed.html">Boxed Layout</a></li>
			</ul>
		</li>
		<li class="sidebar-item">
			<a class="sidebar-link" href="documentation.html">
				<i class="align-middle" data-feather="book-open"></i> <span class="align-middle">Documentation</span>
			</a>
		</li>
		<li class="sidebar-header">
			Components
		</li>
		<li class="sidebar-item">
			<a href="#ui" data-toggle="collapse" class="sidebar-link collapsed">
				<i class="align-middle" data-feather="grid"></i> <span class="align-middle">UI Elements</span>
			</a>
			<ul id="ui" class="sidebar-dropdown list-unstyled collapse ">
				<li class="sidebar-item"><a class="sidebar-link" href="ui-alerts.html">Alerts</a></li>
				<li class="sidebar-item"><a class="sidebar-link" href="ui-buttons.html">Buttons</a></li>
				<li class="sidebar-item"><a class="sidebar-link" href="ui-cards.html">Cards</a></li>
				<li class="sidebar-item"><a class="sidebar-link" href="ui-general.html">General</a></li>
				<li class="sidebar-item"><a class="sidebar-link" href="ui-grid.html">Grid</a></li>
				<li class="sidebar-item"><a class="sidebar-link" href="ui-modals.html">Modals</a></li>
				<li class="sidebar-item"><a class="sidebar-link" href="ui-notifications.html">Notifications</a></li>
				<li class="sidebar-item"><a class="sidebar-link" href="ui-tabs.html">Tabs</a></li>
				<li class="sidebar-item"><a class="sidebar-link" href="ui-typography.html">Typography</a></li>
			</ul>
		</li>
		<li class="sidebar-item">
			<a href="#charts" data-toggle="collapse" class="sidebar-link collapsed">
				<i class="align-middle" data-feather="pie-chart"></i> <span class="align-middle">Charts</span>
			</a>
			<ul id="charts" class="sidebar-dropdown list-unstyled collapse ">
				<li class="sidebar-item"><a class="sidebar-link" href="charts-chartjs.html">Chart.js</a></li>
				<li class="sidebar-item"><a class="sidebar-link" href="charts-apexcharts.html">ApexCharts <span class="sidebar-badge badge badge-primary">New</span></a></li>
			</ul>
		</li>
		<li class="sidebar-item">
			<a href="#forms" data-toggle="collapse" class="sidebar-link collapsed">
				<i class="align-middle" data-feather="check-square"></i> <span class="align-middle">Forms</span>
				<span class="sidebar-badge badge badge-secondary">7</span>
			</a>
			<ul id="forms" class="sidebar-dropdown list-unstyled collapse ">
				<li class="sidebar-item"><a class="sidebar-link" href="forms-layouts.html">Layouts</a></li>
				<li class="sidebar-item"><a class="sidebar-link" href="forms-basic-elements.html">Basic Elements</a></li>
				<li class="sidebar-item"><a class="sidebar-link" href="forms-advanced-elements.html">Advanced Elements</a></li>
				<li class="sidebar-item"><a class="sidebar-link" href="forms-input-groups.html">Input Groups</a></li>
				<li class="sidebar-item"><a class="sidebar-link" href="forms-editors.html">Editors</a></li>
				<li class="sidebar-item"><a class="sidebar-link" href="forms-validation.html">Validation</a></li>
				<li class="sidebar-item"><a class="sidebar-link" href="forms-wizard.html">Wizard</a></li>
			</ul>
		</li>
		<li class="sidebar-item">
			<a href="#tables" data-toggle="collapse" class="sidebar-link collapsed">
				<i class="align-middle" data-feather="list"></i> <span class="align-middle">Tables</span>
			</a>
			<ul id="tables" class="sidebar-dropdown list-unstyled collapse ">
				<li class="sidebar-item"><a class="sidebar-link" href="tables-bootstrap.html">Bootstrap</a></li>
				<li class="sidebar-item"><a class="sidebar-link" href="tables-datatables.html">DataTables</a></li>
			</ul>
		</li>
		<li class="sidebar-item">
			<a href="#icons" data-toggle="collapse" class="sidebar-link collapsed">
				<i class="align-middle" data-feather="heart"></i> <span class="align-middle">Icons</span>
			</a>
			<ul id="icons" class="sidebar-dropdown list-unstyled collapse ">
				<li class="sidebar-item"><a class="sidebar-link" href="icons-feather.html">Feather</a></li>
				<li class="sidebar-item"><a class="sidebar-link" href="icons-font-awesome.html">Font Awesome</a></li>
			</ul>
		</li>
		<li class="sidebar-item">
			<a href="#maps" data-toggle="collapse" class="sidebar-link collapsed">
				<i class="align-middle" data-feather="map-pin"></i> <span class="align-middle">Maps</span>
			</a>
			<ul id="maps" class="sidebar-dropdown list-unstyled collapse ">
				<li class="sidebar-item"><a class="sidebar-link" href="maps-google.html">Google Maps</a></li>
				<li class="sidebar-item"><a class="sidebar-link" href="maps-vector.html">Vector Maps</a></li>
			</ul>
		</li>
	</ul>

	<div class="sidebar-bottom d-none d-lg-block">
		<div class="media">
			<img class="rounded-circle mr-3" src="img/avatar.jpg" alt="Chris Wood" width="40" height="40">
			<div class="media-body">
				<h5 class="mb-1 text-white">Chris Wood</h5>
				<div class="text-light">
					<i class="fas fa-circle text-success"></i> Online
				</div>
			</div>
		</div>
	</div>
</div>
