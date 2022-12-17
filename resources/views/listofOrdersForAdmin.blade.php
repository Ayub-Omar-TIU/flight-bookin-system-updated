@vite(['resources/sass/app.scss', 'resources/js/app.js'])

@section('admin')
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
        <div class="p-3 border bg-light" style="font-weight:bold">User Name</div>
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
                        <div class="card-body"
                            style="min-height:125px; justify-content:center;align-items:center;text-align:center">
                            <h3 class="card-title">{{ $result->name }}</h3>


                        </div>
                    </div>


                </td>

                <td>
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">{{ $result->from }}</h3>
                            <h5 class="card-title">{{ $result->takeoffAirport }} International Airport</h5>
                            <p class="card-text">{{ $result->takeoffDate }}</p>

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
                            <h3 class="card-title">${{ $result->price }}</h3>


                        </div>
                    </div>


                </td>
                <td>
                    <div class="card">

                        <div class="card-body"
                            style="min-height:125px; justify-content:center;align-items:center;text-align:center">


                            @if ($result->approved == 'NO' || $result->approved == 'No')
                                <h3 class="card-title">
                                    <a href="/update-ticket-status/{{ $result->orderid }}">Pending... Click to
                                        Approve </a>
                                </h3>
                            @elseif ($result->approved == 'Approved')
                                <h3 class="card-title">
                                    Approved
                                    <a href="/cancel-ticket/{{ $result->orderid }}"> Click to Cancel
                                    </a>

                                </h3>
                            @elseif ($result->approved == 'Canceled')
                                <h3 class="card-title">
                                    Canceled...
                                    <a href="/update-ticket-status/{{ $result->orderid }}"> Click to Approve Again
                                    </a>

                                </h3>
                            @endif
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
