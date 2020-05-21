<!DOCTYPE html>
<!--<a class="header-item" href="/#welcome">Welkom</a>
					<a class="header-item" href="/#tools">Gereedschap</a>
					<a class="header-item" href="/#fashion">Fashion</a>
					<a class="header-item" href="/#about">Over ons</a>
					<a class="header-item" href="/#contact">Contact</a> -->
<html>
    <head>
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/fullpage.css') }}" />
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style-index.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}" />              <!-- Temp style -->
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.min.css') }}" />
		<script
			src="https://code.jquery.com/jquery-3.4.1.min.js"
			integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
			crossorigin="anonymous">
		</script>
		<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
		<script type="text/javascript" src="{{ URL::asset('js/fullpage.js') }}"></script>
		<script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
		<script type="text/javascript" src="{{ URL::asset('js/header.js') }}"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    </head>

    <body>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <a class="navbar-brand" href="#">Navbar</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
		    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
		      <li class="nav-item active">
		        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Link</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link disabled" href="#">Disabled</a>
		      </li>
		    </ul>
		    <form class="form-inline my-2 my-lg-0">
		      <input class="form-control mr-sm-2" type="search" placeholder="Search">
		      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		    </form>
		  </div>
		</nav>

        <!-- FULLPAGE section -->
        <div id="fullpage">

            <!-- WELCOME section -->
            <div class="section active" id="section0">
				<div class="welcome-image-container">
					<div id="trapezoid-left">
						<h1>Product-<br><br>groepen</h1>
					</div>
					<div id="parallelogram-line-left">

					</div>
					<div id="parallelogram-image-left">

					</div>
					<div id="parallelogram-image-right">

					</div>
					<div id="parallelogram-line-right">

					</div>
					<div id="trapezoid-right">

					</div>
				</div>

				<div class="welcome-title">
					<h1>De verassende Non Food Company</h1>
				</div>
				<div class="welcome-content">
					<p>
						Hesta International B.V. is "De verrassende NON_FOOD company".<br>
						Wij zijn toonaangevend op het gebied van Impulsartikelen voor de retail en<br>
						bieden het breedste assortiment in de markt.<br>
						<br>
						Met meer dan 20 jaar ervaring zijn wij ook thuis op uw winkelvloer.<br>
						Hier kunnen wij uw onderneming voorzien van gereedschap tot wenskaarten en aanstekers tot<br>
						portomonnees of één van onze vele andere producten om uw omzet te verhogen.<br>
						<br>
						Deze impulsartikelen zijn te presenteren met één van onze vele en unieke displays waaronder:<br>
						Molens, draadrekken en standaards voor diverse thema's.<br>
						<br>
						Voor meer informatie kijk snel verder op deze pagina of neem contact met ons op.<br>
					</p>
				</div>

            </div>

			<!-- TOOLS section -->
			<div class="section" id="section1">
				<div class="section-image">

                </div>
			</div>

            <!-- FASHION section -->
            <div class="section"  id="section2">

            </div>

            <!-- ABOUT US section -->
			<div class="section" id="section3">

			</div>

			<!-- CONTACT section -->
            <div class="section"  id="section4">

            </div>

            <!-- FOOTER section -->
            <div class="section fp-auto-height" id="section5">

            </div>

        </div>
    </body>

    <script type="text/javascript" src="{{ URL::asset('js/fullpage.js') }}"></script>
    <script type="text/javascript">
        var fullpage = new fullpage('#fullpage', {
            sectionsColor: 	['#807C7C', 	'#333333', 	'white',	'#333333',	'white',	'#000000'],
            anchors: 		['welcome', 'tools', 	'fashion', 	'about',	'contact',	'footer'],
            menu: '#menu',
			//paddingTop: '129px',
			//height: ;
			verticalCentered: false,
            lazyLoad: true,
			onLeave: function(index, nextIndex, direction){
                  //console.log(nextIndex);
                if(nextIndex.index == 0){
					$('.header-div').css('height', '125px');
					$('.header-image-link').css('height', '130px');
					$('.header-image-link').css('width', '355px');
					$('.header-item-container').css('margin-top', '78px');
                }else{
					$('.header-div').css('height', '75px');
					$('.header-image-link').css('height', '60px');
					$('.header-image-link').css('width', '255px');
					$('.header-item-container').css('margin-top', '40px');
                }
			}
		});
    </script>

</html>
