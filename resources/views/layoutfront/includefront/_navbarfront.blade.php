<?php  
$link_full = $_SERVER['REQUEST_URI'];
$arr_link_full = explode('/', $link_full);
?>

<!-- NAVBAR -->
<header class="header_area">
	<div class="main_menu">
		<nav class="navbar navbar-expand-lg navbar-light">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<a class="navbar-brand logo_h" href="/"><img src="{{asset('satner/img/logo_celerates.png')}}" alt=""></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-end">
                <li class="nav-item <?php if ($arr_link_full[1]=='') {echo 'active';} ?>"><a class="nav-link" href="/">Beranda</a></li>
                <li class="nav-item <?php if ($arr_link_full[1]=='service') {echo 'active';} ?>"><a class="nav-link" href="/service">Dasbor</a></li>
                <li class="nav-item <?php if ($arr_link_full[1]=='portofolio') {echo 'active';} ?>"><a class="nav-link" href="/portofolio">Model</a></li>
                <li class="nav-item <?php if ($arr_link_full[1]=='about') {echo 'active';} ?>"><a class="nav-link" href="/about">Tentang Kami</a></li>
            </ul>
        </div>
		</div>
	</nav>
</div>
</header>
<!-- END NAVBAR -->


