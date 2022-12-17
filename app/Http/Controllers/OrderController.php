<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use DateTime;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index($userid)
    {




        if (Auth::user()->userType == 'admin') {

            $results = DB::table('users')
                ->join('orders', 'users.id', '=', 'orders.userid')
                ->join('ticktes', 'orders.tickteid', '=', 'ticktes.id')
                ->select('users.name', 'orders.*', "orders.id as orderid", "ticktes.*")
                ->get();



            return view('listoforders', compact('results'));
        }

        //End of if statment

        $orders = Order::all()->where('userid', $userid);
        $tickteids = [];
        $users = User::all();
        foreach ($orders as $items) {

            array_push($tickteids, $items->tickteid);
        }



        $results = DB::table('users')
            ->join('orders', 'users.id', '=', 'orders.userid')
            ->join('ticktes', 'orders.tickteid', '=', 'ticktes.id')
            ->select('users.name', 'orders.*', "orders.id as orderid", "ticktes.*")
            ->where('users.id', $userid)
            ->get();



        return view('listoforders', compact('results'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $newOrder = new Order;
        $newOrder->userid = Auth::user()->id;
        $newOrder->tickteid = $id;
        $newOrder->approved = 'No';
        $newOrder->date = new DateTime('today');
        $newOrder->save();
        return redirect('home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function aproveTicket($id,)
    {
        $order = Order::find($id);

        $order->approved = "Approved";
        $order->save();

        return redirect('home');
    }

    public function cancelTicket($id)
    {
        $order = Order::find($id);

        $order->approved = "Canceled";
        $order->save();

        return redirect('home');
    }
}
