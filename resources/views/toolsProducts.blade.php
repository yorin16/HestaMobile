<!DOCTYPE html>

<html>
    <head>
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/fullpage.css') }}" />
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style-index.css') }}" />    <!-- Main style CSS -->
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.min.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/styles.css') }}" />         <!-- Gallery style CSS -->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/reset.css') }}" />

        <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous">
        </script>
        <script type="text/javascript" src="{{ URL::asset('js/DiagonalSlider.js') }}"></script>     <!-- Product slider -->
    </head>

    <body style="background-color: #807C7C">
        <!-- HEADER -->
        <div id="header" class="header">
            <div class="header-div">
                <a class="header-image-link"> <img src="{{ asset('/Image/Hesta logo website 2020.png') }}" class="header-image"> </a>
                <div class="header-item-container">
                    <a class="header-item" href="/#welcome">Welkom</a>
                    <a class="header-item" href="/#tools">Gereedschap</a>
                    <a class="header-item" href="/#fashion">Fashion</a>
                    <a class="header-item" href="/#about">Over ons</a>
                    <a class="header-item" href="/#contact">Contact</a>
                </div>
            </div>
            <div class="header-line">

            </div>
        </div>

        <!-- CONTENT -->
        <div class="toolsProducts-pageContainer">
            <!--<div class="gallery_content">
                <div class="gallery_item">
                    <img src="{{ asset('/Image/ProductSlider-Tools/1.jpg') }}" data-title="Image 1"/>
                </div>
                <div class="gallery_item">
                    <img src="{{ asset('/Image/ProductSlider-Tools/2.jpg') }}" data-title="Image 2"/>
                </div>
                <div class="gallery_item">
                    <img src="{{ asset('/Image/ProductSlider-Tools/3.jpg') }}" data-title="Image 3"/>
                </div>
                <div class="gallery_item">
                    <img src="{{ asset('/Image/ProductSlider-Tools/2.jpg') }}" data-title="Image 4"/>
                </div>
            </div>-->
            <div class="productGallery-container">
                <div class="productGalleryItem-first">
                    <img src="{{ asset('/Image/ProductSlider-Tools/1.jpg') }}"/>
                </div>
                <div class="productGalleryItem-second">
                    <img src="{{ asset('/Image/ProductSlider-Tools/2.jpg') }}"/>
                </div>
                <div class="productGalleryItem-third">
                    <img src="{{ asset('/Image/ProductSlider-Tools/3.jpg') }}"/>
                </div>
                <div class="productGalleryItem-fourth">
                    <img src="{{ asset('/Image/ProductSlider-Tools/2.jpg') }}"/>
                </div>
            </div>

            <div class="toolsProducts-container">
                <div class="toolsProducts-content">
                    <h1 class="productGalleryContent" id="draadmanden-h">Draadmanden</h1>
                    <p class="productGalleryContent" id="draadmanden-p">
                        Lorem ipsum draadmanden dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et<br>
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip<br>
                        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum<br>
                        dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa<br>
                        qui officia deserunt mollit anim id est laborum.
                    </p>

                    <h1 class="productGalleryContent" id="molens-h">Molens</h1>
                    <p class="productGalleryContent" id="molens-p">
                        Lorem ipsum molens dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et<br>
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip<br>
                        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum<br>
                        dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa<br>
                        qui officia deserunt mollit anim id est laborum.
                    </p>

                    <h1 class="productGalleryContent" id="optie3-h">Optie 3</h1>
                    <p class="productGalleryContent" id="optie3-p">
                        Lorem ipsum optie3 dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et<br>
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip<br>
                        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum<br>
                        dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa<br>
                        qui officia deserunt mollit anim id est laborum.
                    </p>

                    <h1 class="productGalleryContent" id="optie4-h">Optie 4</h1>
                    <p class="productGalleryContent" id="optie4-p">
                        Lorem ipsum optie4 dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et<br>
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip<br>
                        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum<br>
                        dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa<br>
                        qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
                <div class="toolsProducts-downloads">
                    <h1>Downloads</h1>
                    <a href="{{ asset('/Downloads/Folder hesta in de maak.pdf') }}" class="downloadLink" target="_blank">
                        <div class="downloadItem">
                            <img src="{{ asset('/Image/pdf.svg') }}"/>
                            <h4>Folder draadmanden</h4>
                        </div>
                    </a>
                    <a href="{{ asset('/Downloads/Folder hesta in de maak.pdf') }}" class="downloadLink" target="_blank">
                        <div class="downloadItem">
                            <img src="{{ asset('/Image/pdf.svg') }}"/>
                            <h4>Folder molens</h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>


    </body>

    <script type="text/javascript" src="{{ URL::asset('js/script.js') }}"></script>             <!-- Product slider -->

    <script type="text/javascript">
        // Buttons
        $("#header").click(function(){
            window.location.replace("/#welcome");
        });

        // Image Gallery
        $(".productGalleryItem-first").on( "mouseover",function(){
            $('.productGalleryItem-first').css('width', '40%');

            $('.productGalleryItem-second').css('width', '20%');

            $('.productGalleryItem-third').css('width', '20%');

            $('.productGalleryItem-fourth').css('width', '20%');

            $("#draadmanden-h").show();
            $("#draadmanden-p").show();
            $("#molens-h").hide();
            $("#molens-p").hide();
            $("#optie3-h").hide();
            $("#optie3-p").hide();
            $("#optie4-h").hide();
            $("#optie4-p").hide();
        });

        $(".productGalleryItem-second").on( "mouseover",function(){
            $('.productGalleryItem-first').css('width', '20%');

            $('.productGalleryItem-second').css('width', '40%');

            $('.productGalleryItem-third').css('width', '20%');

            $('.productGalleryItem-fourth').css('width', '20%');

            $("#draadmanden-h").hide();
            $("#draadmanden-p").hide();
            $("#molens-h").show();
            $("#molens-p").show();
            $("#optie3-h").hide();
            $("#optie3-p").hide();
            $("#optie4-h").hide();
            $("#optie4-p").hide();
        });

        $(".productGalleryItem-third").on( "mouseover",function(){
            $('.productGalleryItem-first').css('width', '20%');

            $('.productGalleryItem-second').css('width', '20%');

            $('.productGalleryItem-third').css('width', '40%');

            $('.productGalleryItem-fourth').css('width', '20%');

            $("#draadmanden-h").hide();
            $("#draadmanden-p").hide();
            $("#molens-h").hide();
            $("#molens-p").hide();
            $("#optie3-h").show();
            $("#optie3-p").show();
            $("#optie4-h").hide();
            $("#optie4-p").hide();
        });

        $(".productGalleryItem-fourth").on( "mouseover",function(){
            $('.productGalleryItem-first').css('width', '20%');

            $('.productGalleryItem-second').css('width', '20%');

            $('.productGalleryItem-third').css('width', '20%');

            $('.productGalleryItem-fourth').css('width', '40%');

            $("#draadmanden-h").hide();
            $("#draadmanden-p").hide();
            $("#molens-h").hide();
            $("#molens-p").hide();
            $("#optie3-h").hide();
            $("#optie3-p").hide();
            $("#optie4-h").show();
            $("#optie4-p").show();
        });

        $('.header-div').css('height', '75px');
        $('.header-image-link').css('height', '60px');
        $('.header-image-link').css('width', '255px');
        $('.header-item-container').css('margin-top', '40px');
    </script>
</html>
