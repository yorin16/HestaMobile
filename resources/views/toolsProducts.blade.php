<!DOCTYPE html>

<html>
    <head>
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/fullpage.css') }}" />
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style-index.css') }}" />    <!-- Main style CSS -->
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.min.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}" />         <!-- Gallery style CSS -->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/reset.css') }}" />

        <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous">
        </script>
        <script type="text/javascript" src="{{ URL::asset('js/DiagonalSlider.js') }}"></script>     <!-- Product slider -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    </head>

    <body class="product-body">
        <!-- HEADER -->
        <div class="product-header" id="header">

        </div>

        <!-- CONTENT -->
        <div class="product-title">
            <h1>Gereedschap<br>Assortiment</h1>
        </div>

        <div class="product-image-container">
            <div class="product-image" id="product-image-left">
                <img src="{{ URL::asset('Image/ProductSlider-Tools/1.jpg') }}">
            </div>
            <h2 style="float: right">Draadmanden</h2>
        </div>

        <div class="product-image-container" style="background-color: #575757">
            <div class="product-image" id="product-image-right">
                <img src="{{ URL::asset('Image/ProductSlider-Tools/2.jpg') }}">
            </div>
            <h2 style="float: left">Molens</h2>
        </div>



        <div class="product-image-container">
            <div class="product-image" id="product-image-left">
                <img src="{{ URL::asset('Image/ProductSlider-Tools/3.jpg') }}">
            </div>
            <h2 style="float: right">Draadmanden</h2>
        </div>

        <div class="product-image-container" style="background-color: #575757">
            <div class="product-image" id="product-image-right">
                <img src="{{ URL::asset('Image/ProductSlider-Tools/2.jpg') }}">
            </div>
            <h2 style="float: left">Draadmanden</h2>
        </div>



    </body>

    <script type="text/javascript" src="{{ URL::asset('js/script.js') }}"></script>             <!-- Product slider -->

    <script type="text/javascript">
        // Buttons
        $("#header").click(function(){
            window.location.replace("/#welcome");
        });
    </script>
</html>
