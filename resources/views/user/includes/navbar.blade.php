<div class="container">
    <div class="row">
        <div class="col-xl-12">
            <nav class="main-menu mobile-menu">
                <ul>
                    <li><a href="{{ route('user.index') }}">Home</a></li>
                    <li><a href="{{ route('user.about-us') }}">About</a></li>
                    <li><a href="{{ route('user.rooms') }}">Facilities</a></li>
                    <li><a href="#">Rooms</a>
                        <ul class="drop-menu">
                            <li><a href="{{ route('user.deluxe') }}">Deluxe Room</a></li>
                            <li><a href="{{ route('user.premiere') }}">Premiere Room</a></li>
                            <li><a href="{{ route('user.superior') }}">Superior Room</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('user.news') }}">News</a></li>
                    <li><a href="{{ route('user.contact') }}">Contact</a></li>
                </ul>
            </nav>
            <div class="top-info">
                <img src="{{ asset('img/placeholder.png') }}" alt="">
                <span>Jl. Atang Sanjaya No.89, Benda, Kota Tangerang</span>
            </div>
        </div>
    </div>
</div>