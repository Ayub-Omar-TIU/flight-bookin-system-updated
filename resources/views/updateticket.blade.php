@extends('layouts.app')

@section('content')
    <div class="container">



        <div class="row justify-content-center">
            @if (!is_null(Auth::user()->userType) && Auth::user()->userType == 'admin')
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Update Ticket') }}</div>

                        <div class="card-body">
                            <form method="POST" action="/tickets/{{ $id }}">
                                @csrf

                                <div class="row mb-3">
                                    <label for="from"
                                        class="col-md-4 col-form-label text-md-end">{{ __('From') }}</label>

                                    <div class="col-md-6">
                                        <input id="from" type="text"
                                            class="form-control @error('from') is-invalid @enderror" name="from"
                                            value="{{ $ticket->from }}" required autocomplete="from" autofocus>

                                        @error('from')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="takeoffAirport"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Take off Airport') }}</label>

                                    <div class="col-md-6">
                                        <input id="takeoffAirport" type="text"
                                            class="form-control @error('takeoffAirport') is-invalid @enderror"
                                            name="takeoffAirport" value="{{ $ticket->takeoffAirport }}" required
                                            autocomplete="takeoffAirport" autofocus>

                                        @error('takeoffAirport')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="takeoffDate"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Take off Date') }}</label>

                                    <div class="col-md-6">
                                        <input id="takeoffDate" type="datetime-local"
                                            class="form-control @error('takeoffDate') is-invalid @enderror"
                                            name="takeoffDate" value="{{ $ticket->takeoffDate }}" required
                                            autocomplete="takeoffDate" autofocus>

                                        @error('takeoffDate')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="to"
                                        class="col-md-4 col-form-label text-md-end">{{ __('To') }}</label>

                                    <div class="col-md-6">
                                        <input id="to" type="text"
                                            class="form-control @error('to') is-invalid @enderror" name="to"
                                            value="{{ $ticket->to }}" required autocomplete="to" autofocus>

                                        @error('to')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="landingAirport"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Landing Airport') }}</label>

                                    <div class="col-md-6">
                                        <input id="landingAirport" type="text"
                                            class="form-control @error('landingAirport') is-invalid @enderror"
                                            name="landingAirport" value="{{ $ticket->landingAirport }}" required
                                            autocomplete="landingAirport" autofocus>

                                        @error('landingAirport')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="landingDate"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Landing Date') }}</label>

                                    <div class="col-md-6">
                                        <input id="landingDate" type="datetime-local"
                                            class="form-control @error('landingDate') is-invalid @enderror"
                                            name="landingDate" value="{{ $ticket->landingDate }}" required
                                            autocomplete="landingDate" autofocus>

                                        @error('landingDate')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>



                                <div class="row mb-3">
                                    <label for="to"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Stop') }}</label>

                                    <div class="col-md-6">
                                        <input id="stop" type="number" max="5"
                                            class="form-control @error('to') is-invalid @enderror" name="stop"
                                            value="{{ $ticket->stop }}" required autocomplete="stop" autofocus>

                                        @error('stop')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                {{-- class --}}
                                <div class="row mb-3">
                                    <label for="class"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Class') }}</label>

                                    <div class="col-md-6">
                                        <input id="class" type="text" placeholder="Business Class or Economy Class"
                                            class="form-control @error('to') is-invalid @enderror" name="class"
                                            value="{{ $ticket->class }}" required autocomplete="class" autofocus>



                                        @error('class')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- class --}}



                                <div class="row mb-3">
                                    <label for="price"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Price') }}</label>

                                    <div class="col-md-6">
                                        <input id="price" type="text"
                                            class="form-control @error('to') is-invalid @enderror" name="price"
                                            value="{{ $ticket->price }}" required autocomplete="price" autofocus>

                                        @error('price')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Update Ticket') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @else
                <h2>Sorry You Are Not Allowed to Use This Page.</h2>
            @endif
        </div>
    </div>
@endsection
