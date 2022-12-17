@extends('layouts.app')

@section('content')
    <div class="container">


        <form method="POST" action="/add-new-order/{{ $id }}">
            @csrf



            <div class="card text-center">
                <div class="card-header">
                    Order Confirmation
                </div>
                <div class="card-body">
                    <h5 class="card-title">Please note that after you confirm you order, you have to pay the fee in 24 hours
                    </h5>

                    <button type="submit" class="btn btn-primary">
                        {{ __('Please Click to Confirm Your Order') }}
                    </button>
                </div>

            </div>
        </form>
    </div>
@endsection
