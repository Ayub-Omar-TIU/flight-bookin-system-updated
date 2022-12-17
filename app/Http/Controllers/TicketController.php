<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use Illuminate\Support\Facades\DB;

class TicketController extends Controller
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
    public function index()
    {
        $data = Ticket::all();

        return view('listofAvailableTickets', ['ticktes' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addnewticket');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tickets = new Ticket();
        $tickets->from = $request->from;
        $tickets->takeoffAirport = $request->takeoffAirport;
        $tickets->takeoffDate = $request->takeoffDate;
        $tickets->landingAirport = $request->landingAirport;
        $tickets->landingDate = $request->landingDate;
        $tickets->to = $request->to;
        $tickets->stop = $request->stop;
        $tickets->class = $request->class;
        $tickets->price = $request->price;

        $tickets->save();
        return redirect('home');
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
        $ticket = Ticket::find($id);
        $ticket->from = $request->from;
        $ticket->takeoffAirport = $request->takeoffAirport;
        $ticket->takeoffDate = $request->takeoffDate;
        $ticket->landingAirport = $request->landingAirport;
        $ticket->landingDate = $request->landingDate;
        $ticket->to = $request->to;
        $ticket->stop = $request->stop;
        $ticket->class = $request->class;
        $ticket->price = $request->price;
        $ticket->save();


        return redirect('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ticket = Ticket::find($id)->delete();

        return redirect('home');
    }
    public function getTicket($id)
    {
        $ticket = Ticket::find($id);

        return view('updateticket', ['id' => $id, "ticket" => $ticket]);
    }
}
