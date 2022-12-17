@vite(['resources/sass/app.scss', 'resources/js/app.js'])

@section('customer')
    <div class="container">
        @if (!is_null($results))
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">
                            <div class="p-3 border bg-light" style="font-weight:bold">#</div>
    </div>

    </th>


    <th scope="col">
        <div class="p-3 border bg-light" style="font-weight:bold">From</div>
        </div>

    </th>
    <th scope="col">
        <div class="p-3 border bg-light" style="font-weight:bold">To</div>
        </div>

    </th>
    <th scope="col">
        <div class="p-3 border bg-light" style="font-weight:bold">Price</div>
        </div>

    </th>
    <th scope="col">
        <div class="p-3 border bg-light" style="font-weight:bold">Status</div>
        </div>

    </th>
    </tr>
    </thead>
    <tbody>


        @foreach ($results as $key => $result)
            <tr>
                <td>
                    <div class="card">
                        <div class="card-body"
                            style="min-height:125px; justify-content:center;align-items:center;text-align:center">
                            <h3 class="card-title">{{ $key + 1 }}</h3>


                        </div>
                    </div>


                </td>
                <td>
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">{{ $result?->from }}</h3>
                            <h5 class="card-title">{{ $result?->takeoffAirport }} International Airport</h5>
                            <p class="card-text">{{ $result?->takeoffDate }}</p>

                        </div>
                    </div>


                </td>
                <td>
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">{{ $result->to }}</h3>
                            <h5 class="card-title">{{ $result->landingAirport }} International Airport</h5>
                            <p class="card-text">{{ $result->landingDate }}</p>

                        </div>
                    </div>


                </td>
                <td>
                    <div class="card">
                        <div class="card-body"
                            style="min-height:125px; justify-content:center;align-items:center;text-align:center">
                            <h3 class="card-title">{{ $result->price }}</h3>


                        </div>
                    </div>


                </td>
                <td>
                    <div class="card">

                        <div class="card-body"
                            style="min-height:125px; justify-content:center;align-items:center;text-align:center">
                            <h3 class="card-title">{{ $result?->approved == 'No' ? 'Pending...' : $result?->approved }}
                            </h3>


                        </div>
                    </div>


                </td>


                </div>
                </div>
                </td>
        @endforeach


    </tbody>
    </table>
@else
    <h1>No Tickets Avalilable!</h1>
    @endif
    </div>
@endsection
