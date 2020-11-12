<html>

    <head>
        <title>W3.CSS Template</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            body,
            h1,
            h2,
            h3,
            h4,
            h5,
            h6 {
                font-family: "Raleway", Arial, Helvetica, sans-serif
            }

            .mySlides {
                display: none
            }

        </style>
    </head>

    <body class="w3-content w3-border-left w3-border-right">

        <!-- Sidebar/menu -->
        {{-- <nav class="w3-sidebar w3-light-grey w3-collapse w3-top" style="z-index:3;width:260px" id="mySidebar">
            <div class="w3-container w3-display-container w3-padding-16">
                <i onclick="w3_close()"
                    class="fa fa-remove w3-hide-large w3-button w3-transparent w3-display-topright"></i>
                <h3>Harga Mulai </h3>
                <h3>{{$unit->harga_jual}}</h3>
                <h6>per night</h6>
                <hr>
                <form action="/action_page.php" target="_blank">
                    <p><label><i class="fa fa-calendar-check-o"></i> Check In</label></p>
                    <input class="w3-input w3-border" type="text" placeholder="DD MM YYYY" name="CheckIn" required="">
                    <p><label><i class="fa fa-calendar-o"></i> Check Out</label></p>
                    <input class="w3-input w3-border" type="text" placeholder="DD MM YYYY" name="CheckOut" required="">
                    <p><label><i class="fa fa-male"></i> Adults</label></p>
                    <input class="w3-input w3-border" type="number" value="1" name="Adults" min="1" max="6">
                    <p><label><i class="fa fa-child"></i> Kids</label></p>
                    <input class="w3-input w3-border" type="number" value="0" name="Kids" min="0" max="6">
                    <p><button class="w3-button w3-block w3-green w3-left-align" type="submit"><i
                                class="fa fa-search w3-margin-right"></i> Search availability</button></p>
                </form>
            </div>
            <div class="w3-bar-block">
                <a href="#apartment" class="w3-bar-item w3-button w3-padding-16"><i class="fa fa-building"></i>
                    Apartment</a>
                <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-16"
                    onclick="document.getElementById('subscribe').style.display='block'"><i class="fa fa-rss"></i>
                    Subscribe</a>
                <a href="#contact" class="w3-bar-item w3-button w3-padding-16"><i class="fa fa-envelope"></i>
                    Contact</a>
            </div>
        </nav> --}}
        <!-- Top menu on small screens -->
        <header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
            <span class="w3-bar-item">Rental</span>
            <a href="javascript:void(0)" class="w3-right w3-bar-item w3-button" onclick="w3_open()"><i
                    class="fa fa-bars"></i></a>
        </header>

        <!-- Overlay effect when opening sidebar on small screens -->
        <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu"
            id="myOverlay"></div>

        <!-- !PAGE CONTENT! -->
        <div class="w3-main w3-white" style="margin-left:260px">

            <!-- Push down content on small screens -->
            <div class="w3-hide-large" style="margin-top:80px"></div>

            <!-- Slideshow Header -->
            <div class="w3-container" id="apartment">
                <h2 class="w3-text-green">The Apartment</h2>
                    <div class="w3-row-padding w3-section">
                        <div class="w3-col s2">
                            <button class="w3-button w3-block w3-green w3-left-align" type="button">
                                Detail
                            </button>
                        </div>
                        <div class="w3-col s2">
                            <button onclick="tiga()" class="w3-button w3-block w3-green w3-left-align" type="button">
                                360
                            </button>
                        </div>
                        <div class="w3-col s2">
                            <button onclick="vr()" class="w3-button w3-block w3-green w3-left-align" type="button">
                                VR
                            </button>
                        </div>
                    </div>
                </div>
                <div class="w3-display-container mySlides" style="display: block;">
                    @foreach ($unit->image as $img)
                    @if ($img->role == 1)
                    <img src="{{ asset('storage/'.$img->path) }}" style="width:80%;margin-bottom:-6px">
                    @endif
                    @endforeach
                </div>
                <div class="w3-row-padding w3-section">
                    @foreach ($unit->image as $img)
                    @if ($img->role == 3)
                    <div class="w3-col s4">
                        <img src="{{ asset('storage/'.$img->path) }}" style="width:80%;margin-bottom:-6px">
                    </div>
                    @endif
                    @endforeach
                </div>

                <div class="w3-container">

                    <h4><strong>Amenities</strong></h4>
                    <div class="w3-row w3-large">
                        @foreach ($unit->rule as $item)
                        <div class="w3-col s6">
                            <p><img src="{{ asset('storage/'.$item->amenity->icon) }}"
                                    style="width:10%;margin-bottom:-6px"></i> {{$item->amenity->nama}}</p>
                        </div>
                        @endforeach
                    </div>
                    <hr>

                    <h4><strong>Extra Info</strong></h4>
                    <p>{{$unit->deskripsi}}</p>
                    <hr>
                </div>
                <hr>

                <footer class="w3-container w3-padding-16" style="margin-top:32px">Powered by <a
                        href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank"
                        class="w3-hover-text-green">w3.css</a></footer>
            </div>

        </div>

    </body>
            <script>
                // Script to open and close sidebar when on tablets and phones
                function w3_open() {
                document.getElementById("mySidebar").style.display = "block";
                document.getElementById("myOverlay").style.display = "block";
                }
                
                function w3_close() {
                document.getElementById("mySidebar").style.display = "none";
                document.getElementById("myOverlay").style.display = "none";
                }

                // Slideshow Apartment Images
                var slideIndex = 1;
                showDivs(slideIndex);

                function plusDivs(n) {
                showDivs(slideIndex += n);
                }

                function currentDiv(n) {
                showDivs(slideIndex = n);
                }

                function showDivs(n) {
                    var i;
                    var x = document.getElementsByClassName("mySlides");
                    var dots = document.getElementsByClassName("demo");
                    if (n > x.length) {slideIndex = 1}
                    if (n < 1) {slideIndex = x.length}
                    for (i = 0; i < x.length; i++) {
                        x[i].style.display = "none";
                    }
                    for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
                    }
                    x[slideIndex-1].style.display = "block";
                    dots[slideIndex-1].className += " w3-opacity-off";
                }

                function tiga() {
                    $('#test').html('<div class="container col-12"><div class="container"><iframe width="600" height="400" allowfullscreen style="border-style:none;" src="https://cdn.pannellum.org/2.5/pannellum.htm#panorama=https://pannellum.org/images/alma.jpg"></iframe></div></div>');
                }
                function vr() {
                    window.location.replace("http://youtube.com");
                }
            </script>

</html>