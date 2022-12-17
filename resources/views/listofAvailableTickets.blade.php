    @extends('layouts.app')

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    @section('content')
        <div class="container">

            @if (!is_null($ticktes))
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">
                                <div class="p-3 border bg-light" style="font-weight:bold"> <img
                                        src="https://cdn-icons-png.flaticon.com/512/870/870143.png" style="max-width:50px"
                                        class="img-thumbnail" alt="...">Take off</div>
        </div>

        </th>
        <th scope="col">
            <div class="p-3 border bg-light" style="font-weight:bold"><img
                    src="https://img.icons8.com/color/154/airplane-landing--v1.png" style="max-width:50px; min-width:50px"
                    class="img-thumbnail" alt="...">Landing
            </div>
        </th>
        <th scope="col">
            <div class="p-3 border bg-light" style="font-weight:bold"><img src="https://img.icons8.com/office/512/clock.png"
                    style="max-width:50px; min-width:50px" class="img-thumbnail" alt="...">Total Time
            </div>
        </th>
        <th scope="col">
            <div class="p-3 border bg-light" style="font-weight:bold"><img
                    src="https://img.icons8.com/fluency/512/price-tag-usd.png" style="max-width:50px; min-width:50px"
                    class="img-thumbnail" alt="...">Price
            </div>
        </th>
        @if (!is_null(Auth::user()->userType) && Auth::user()->userType == 'admin')
            <th scope="col">
                <div class="p-3 border bg-light" style="font-weight:bold"><img
                        src="https://cdn-icons-png.flaticon.com/512/1828/1828270.png" style="max-width:50px; min-width:50px"
                        class="img-thumbnail" alt="...">Action
                </div>
            </th>
        @endif
        </tr>
        </thead>
        <tbody>


            @foreach ($ticktes as $key => $t)
                <tr>
                    <td>
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">{{ $t->from }}</h3>
                                <h5 class="card-title">{{ $t->takeoffAirport }} International Airport</h5>
                                <p class="card-text">{{ $t->takeoffDate }}</p>

                            </div>
                        </div>


                    </td>
                    <td>
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">{{ $t->to }}</h3>
                                <h5 class="card-title">{{ $t->landingAirport }} International Airport</h5>
                                <p class="card-text">{{ $t->landingDate }}</p>

                            </div>
                        </div>


                    </td>
                    <td>
                        <div class="card" style="min-height:123px">
                            <div class="card-body">
                                <h3 class="card-title">Total Stop: {{ $t->stop }}</h3>
                                <h5 class="card-title">8hours and 33 minutes</h5>


                            </div>
                        </div>


                    </td>
                    <td>
                        <div class="card" style="min-height:123px">
                            <div class="card-body">
                                <h3 class="card-title">${{ $t->price }}</h3>
                                @if (!(!is_null(Auth::user()->userType) && Auth::user()->userType == 'admin'))
                                    <a href="/add-new-order/{{ $t->id }}">

                                        <button type="button" class="btn btn-primary" id={{ $t->id }}>Book
                                            Now</button>
                                    </a>
                                @endif

                            </div>
                        </div>
                    </td>
                    @if (!is_null(Auth::user()->userType) && Auth::user()->userType == 'admin')
                        <td>
                            <div class="card" style="min-height:123px; justify-content:center;align-items:center; ">
                                <div class="card-body">

                                    <a href="/tickets/{{ $t->id }}">

                                        <button type="button" class="btn btn-dark">Edit</button>
                                    </a>

                                </div>
                            </div>
                        </td>
                    @endif
            @endforeach


        </tbody>
        </table>
    @else
        <h1>No Tickets Avalilable!</h1>
        @endif
        </div>
    @endsection
