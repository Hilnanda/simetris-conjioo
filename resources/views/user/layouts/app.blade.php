<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Hotel Template">
    <meta name="keywords" content="Hotel, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <title>@yield('title')</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Taviraj:300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/linearicons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">


    <style>
        .wa-widget {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 9999;
        }

        .wa-button img {
            width: 50px;
            /* Sesuaikan ukuran ikon WhatsApp sesuai kebutuhan */
        }

        .video-background {
            position: relative;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .video-background video {
            position: absolute;
            top: 0;
            left: 0;
            min-width: 100%;
            min-height: 100%;
            z-index: -1;
            /* Memastikan video berada di belakang konten */
        }

        .container {
            position: relative;
            /* Perlu ditambahkan agar konten tetap terlihat */
            z-index: 1;
            /* Pastikan konten tetap di depan video */
        }
        .hidden-form {
            
            opacity: 0;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease, opacity 0.3s ease;
        }

        .visible-form {
            
            margin-top: 20px;
            opacity: 1;
            max-height: 1000px; /* Sesuaikan dengan nilai maksimum yang sesuai */
        }
        
    </style>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="inner-header">
                
                @include('user.includes.navbar')
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!--========== HEADER ==========-->
    
    <!--========== END HEADER ==========-->
    

    <!--========== PAGE CONTENT ==========-->
    @yield('content-user')

    <!--========== FOOTER ==========-->
    @include('user.includes.footer')
    <!--========== END FOOTER ==========-->
<!-- Js Plugins -->
<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('js/jquery.slicknav.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
    var bookNowBtn = document.getElementById('book-now-btn');
    var bookingForm = document.getElementById('booking-form');
    
    if (bookNowBtn && bookingForm) {
        bookNowBtn.addEventListener('click', function(event) {
            event.preventDefault(); 
            bookingForm.classList.toggle('visible-form');
        });
    }
});

document.addEventListener('DOMContentLoaded', function() {
            var roomGuestDropdown = document.getElementById('room-guest-dropdown');
            var numRoomsInput = document.getElementById('num-rooms');
            var numAdultsInput = document.getElementById('num-adults');
            var numChildrenInput = document.getElementById('num-children');
            var applyChangesBtn = document.getElementById('apply-changes-btn');

            if (roomGuestDropdown && numRoomsInput && numAdultsInput && numChildrenInput && applyChangesBtn) {
                applyChangesBtn.addEventListener('click', function(event) {
                    event.preventDefault();
                    var rooms = numRoomsInput.value;
                    var adults = numAdultsInput.value;
                    var children = numChildrenInput.value;
                    roomGuestDropdown.textContent = rooms + ' Rooms, ' + adults + ' Adult, ' + children + ' Child';
                    // Tutup dropdown setelah mengklik "Apply Changes"
                    roomGuestDropdown.classList.remove('show');
                });
            }
        });
</script>
</body>
<!-- END BODY -->

</html>
