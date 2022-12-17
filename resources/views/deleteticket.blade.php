@extends('layouts.app')

@section('content')
    <div class="container">


        <form action="/tickets/{{ $id }}" method="POST">
            @csrf



            <div class="card text-center">
                <div class="card-header">
                    Deletion Confirmation
                </div>
                <div class="card-body">


                    <button type="submit" class="btn btn-primary">
                        {{ __('Please Click to Delete The Ticket') }}
                    </button>
                </div>

            </div>
        </form>
    </div>
@endsection
