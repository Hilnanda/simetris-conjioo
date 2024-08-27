<div class="logo">
    <a href="./index.html"><img src="{{ asset('img/logo.png') }}" alt=""></a>
</div>
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
                {{-- <a href="#" class="btn btn-secondary" id="book-now-btn" >Book Now</a> --}}
                
            </div>
            
        </div>
        <div class="col-xl-12" >
            <form id="booking-form" class="hidden-form">
                <hr style="background-color: #c4c2c2">
                <table style="border-collapse: collapse; width: 100%; color: #c4c2c2">
                    <tr>
                        <td style="width: 20%; text-align: center" colspan="2">SELECT TRAVEL DATES</td>
                        {{-- <td style="width: 20%">SELECT TRAVEL DATES</td> --}}
                        <td style="width: 30%; text-align: center">GUESTS</td>
                        <td style="width: 30%; text-align: center">ROOM</td>
                    </tr>
                    <tr>
                        <td style="width: 20%; text-align: center">From<input type="date" class="form-control"></td>
                        <td style="width: 20%; text-align: center">To<input type="date" class="form-control"></td>
                        <td style="width: 30%; text-align: center">
                            <table style="border-collapse: collapse; width: 100%; color: #c4c2c2;">
                                <tr>
                                    <td style="padding-left: 20px">Rooms</td>
                                    <td style="padding-left: 20px"><input type="number" name="room" id="room" class="form-control" value="0" ></td>
                                </tr>
                                <tr>
                                    <td style="padding-left: 20px">Adult</td>
                                    <td style="padding-left: 20px"><input type="number" name="adult" id="adult" class="form-control" value="0" ></td>
                                </tr>
                                <tr>
                                    <td style="padding-left: 20px">Child</td>
                                    <td style="padding-left: 20px"><input type="number" name="child" id="child" class="form-control" value="0" ></td>
                                </tr>
                            </table>
                            
                        </td>
                        <td style="width: 30%; text-align: center;padding-left: 50px">
                            <select class="form-control" style="width: 200px;">
                                <option>Eg. Superior room</option>
                                <option value="1">Deluxe Room</option>
                                <option value="2">Premiere Room</option>
                                <option value="3">Superior Room</option>
                            </select>
                        </td>
                    </tr>
                </table>
                <button class="btn btn-secondary" style="margin-top: 10px" type="submit">CHECK AVAILABILITY</button>
            </form>
        </div>
    </div>
</div>
