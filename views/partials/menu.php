
<section class="main-nav">
  <div class="language-bar">
    <div class="lang active">LV</div>
    <div class="lang"><a href="#">RU</a></div>
  </div>
	<div class="nav-top">
		<div class="container lg">
			<div class="row">
				<div class="col-md-3 col-xs-12 logo-div">
					<a class="main-nav__logo" href="index.php"><img src="../public/img/logo.svg" width="210" "></a>
					<div class="logo-robs"></div>
					<button class="nav-burger">
						<span class="burger">
		<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
			 viewBox="0 0 113.4 113.4" enable-background="new 0 0 113.4 113.4" xml:space="preserve">
		<rect x="32.3" y="46.5" fill="#00ADD4" width="48.8" height="4"/>
		<rect x="32.3" y="57.1" fill="#00ADD4" width="48.8" height="4"/>
		<rect x="32.3" y="67.7" fill="#00ADD4" width="48.8" height="4"/>
		</svg>	
						</span>
						<span class="close-menu" style="display: none;">
											<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					 viewBox="0 0 113.4 113.4" enable-background="new 0 0 113.4 113.4" xml:space="preserve">
				<rect x="32.3" y="54.7" transform="matrix(0.7071 0.7071 -0.7071 0.7071 56.6929 -23.4829)" fill="#00ADD4" width="48.8" height="4"/>
				<rect x="32.3" y="54.7" transform="matrix(-0.7071 0.7071 -0.7071 -0.7071 136.8687 56.6929)" fill="#00ADD4" width="48.8" height="4"/>
				</svg>
				</span>
					</button>
				</div>
				<div class="col-md-9 col-xs-12 menus" style="padding-right:0px;">
					
					<ul>
						<li><a href="about-project.php">Dzīvojamais fonds </a>
							<?php if(isset($menu) AND ($menu=="dzivojamais-fonds")): ?>
							<ul>
								<li class="active"><a href="#"> Dzīvokļi </a></li>
								<li><a href="#"> Mājas </a></li>
							</ul>
						<?php endif; ?>
						</li>
						<li class="active"><a href="./map-search.php"> Komercīpašumi </a>
							<?php if(isset($menu) AND ($menu=="komercipasumi")): ?>
							<ul>
								<li class="active"><a href="#"> Noliktavas </a></li>
								<li><a href="./map-search.php"> Map search </a></li>
								<li><a href="./jaunie-map-search.php"> Jaunie map search </a></li>
							</ul>
							<?php endif; ?>
						</li>
						<li ><a href="./group.php"> Investīcijas </a>
							<?php if(isset($menu) AND ($menu=="investicijas")): ?>
							<ul>
								<li class="active"><a href="#"> Ēku kompleksi </a></li>
								<li><a href="#"> Viesnīcas </a></li>
								<li><a href="#"> Veikali </a></li>
							</ul>
							<?php endif; ?>
						</li>
						<li ><a href="./jaunie.php"> Jaunie projekti </a>
	
						</li>
						<li ><a href="./par-mums.php"> Par kompāniju </a>
							<?php if(isset($menu) AND ($menu=="par-kompaniju")): ?>
							<ul>
								<li class="active"><a href="./par-mums.php"> Par kompāniju </a></li>
								<li><a href="./pakalpojumi.php"> Pakalpojumi </a></li>
								<li><a href="./single.php"> Kontakti </a></li>
								<li><a href="./news.php"> Jaunumi </a></li>
							</ul>
							<?php endif; ?>
						</li>
					</ul>


				</div>
			</div>		
		</div>
	</div>
	<div class="nav-bottom">
		<div class="container">
			<div class="row">

			</div>
		</div>
	</div>

</section>

