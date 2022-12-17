@extends('layouts.app')



@vite(['resources/sass/app.scss', 'resources/js/app.js'])

@section('content')
    <div class="container">

        @if (!is_null($orders) || !is_null($tickets))
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">
                            <div class="p-3 border bg-light" style="font-weight:bold">From

                            </div>
    </div>

    </th>
    </th>
    <th scope="col">
        <div class="p-3 border bg-light" style="font-weight:bold">Name

        </div>
        </div>

    </th>
    Order Id <th scope="col">
        <div class="p-3 border bg-light" style="font-weight:bold">Name

        </div>
        </div>

    </th> Action <th scope="col">
        <div class="p-3 border bg-light" style="font-weight:bold">Name

        </div>
        </div>

    </th>




    </tr>
    </thead>
    <tbody>
        {{--     @foreach ($tickets as $key => $t)
            <tr>
                <td>
                    <div class="card" style="min-height:72px">
                        <div class="card-body">

                            <h5 class="card-title">{{ $t->takeoffAirport }}</h5>



                        </div>
                    </div>


                </td>
                <td>
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">{{ $t->to }}</h3>


                        </div>
                    </div>


                </td>
                <td>
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">{{ $t->takeoffDate }}</h3>


                        </div>
                    </div>


                </td>
                <td>
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">{{ $t->landingDate }}</h3>


                        </div>
                    </div>


                </td>

                <td>
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">{{ $filteredOrders[$key]->date }}</h3>


                        </div>
                    </div>


                </td>
                <td>
                    <div class="card" style="min-height:72px">
                        <div class="card-body">


                            @if ($filteredOrders[$key]->status == '0')
                                <h5 class="card-title">Pending</h5>
                            @else
                                <h5 class="card-title">Approved</h5>
                            @endif


                        </div>
                    </div>


                </td>

            </tr>
        @endforeach --}}

    </tbody>
    </table>
@else
    <h1>No Orders</h1>
    @endif
    </div>
@endsection
