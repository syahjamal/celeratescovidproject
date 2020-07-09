<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="{{url('grafikmodel')}}" class="{{Request::segment(1) === 'grafikmodel' ? 'active' : null}}"><i class="lnr lnr-chart-bars"></i> <span>Grafik Model</span></a></li>
						<li><a href="{{url('dashboard')}}" class="{{Request::segment(1) === 'dashboard' ? 'active' : null}}"><i class="lnr lnr-chart-bars"></i> <span>Grafik Data</span></a></li>
						<li><a href="{{url('harian')}}" class="{{Request::segment(1) === 'harian' ? 'active' : null }}"><i class="lnr lnr-dice"></i> <span>Tabel Harian</span></a></li>
						<li><a href="{{url('kumulatif')}}" class="{{Request::segment(1) === 'kumulatif' ? 'active' : null}}"><i class="lnr lnr-dice"></i> <span>Tabel Kumulatif</span></a></li>
						<li><a href="{{url('model')}}" class="{{Request::segment(1) === 'model' ? 'active' : null}}"><i class="lnr lnr-dice"></i> <span>Tabel Model</span></a></li>
						<li><a href="{{url('perbandingan')}}" class="{{Request::segment(1) === 'perbandingan' ? 'active' : null}}"><i class="lnr lnr-dice"></i> <span>Tabel Perbandingan</span></a></li>
				</nav>
			</div>
		</div>
<!-- END LEFT SIDEBAR -->

