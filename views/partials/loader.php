<style type="text/css">
section.loader-wrap {position: fixed; top:0; left:0; z-index:1000;overflow:hidden; }
section.loader-wrap.ready { animation: slide-loader 1s; animation-delay:0s; top:150vh;}
.loader { width:100%; background-color:#FFF; height:100vh;  top:0; left:0; position: relative;}
.loader-after {content: " "; border-top: 25vw solid #FFF; border-left:50vw solid transparent; border-right:50vw solid transparent; width:100vw; height: 50vh; display: block; }
.loader-logo {margin: 0 auto; padding-top:40vh; width:200px; text-align: center;  }
section.loader-wrap.ready .loader-logo {animation: pazud 0.25s infinite; animation-delay:0.25s;}
.logo-img { width:88px;}
.loader-animation {overflow: hidden; width:200px; height:60px; margin-top: 10px;}

 .anim {
 	width:60px; padding:25px; display: inline-block; float:left;height:30px;
    margin-top: 0%;
    animation-iteration-count: infinite;
  }
  	.anim svg {width: 30px;  }

 	.anim.first {animation: slide-first 0.75s infinite; }
 	.anim.second {animation: slide-first 0.75s infinite; animation-delay:0.125s; }
 	.anim.third {animation: slide-first 0.75s infinite; animation-delay:0.25s; }

    @keyframes slide-first {
  	0%   { margin-top: 10px; } 
  	15%   { margin-top: 10px; } 
 	50% { margin-top: 0px;  }
 	100% { margin-top: 10px;  }
  }

    @keyframes slide-loader {
  	0%   { top: 0; }
  	50%   { top: 0; }
 	100% {top: -150vh; }
  }
     @keyframes pazud {
  	0%   { opacity: 1; }
 	100% {opacity: 0; }
  }



</style>

<section class="loader-wrap">
<div class="loader">
	<div class="loader-logo"><img class="logo-img" src="./public/img/loader/logo.png" />
	<div class="loader-animation">
		<div class="first anim">
			<svg x="0px" y="0px" viewBox="0 0 96.6 41.8" enable-background="new 0 0 96.6 41.8" xml:space="preserve">
			<polygon fill="#00ADD4" points="48.3,13.9 24.1,0 0,13.9 24.3,28 48.3,41.8 72.6,28 96.6,13.9 72.4,0 "/></svg>
		</div>
		<div class="second anim">
			<svg x="0px" y="0px" viewBox="0 0 96.6 41.8" enable-background="new 0 0 96.6 41.8" xml:space="preserve">
			<polygon fill="#00ADD4" points="48.3,13.9 24.1,0 0,13.9 24.3,28 48.3,41.8 72.6,28 96.6,13.9 72.4,0 "/></svg>
		</div>
		<div class="third anim">
			<svg x="0px" y="0px" viewBox="0 0 96.6 41.8" enable-background="new 0 0 96.6 41.8" xml:space="preserve">
			<polygon fill="#00ADD4" points="48.3,13.9 24.1,0 0,13.9 24.3,28 48.3,41.8 72.6,28 96.6,13.9 72.4,0 "/></svg>
		</div>
			</div>
	<div class="clear"></div>
	</div>
</div>
<div class="loader-after"></div>
</section>