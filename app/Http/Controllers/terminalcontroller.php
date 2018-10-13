<?php

namespace App\Http\Controllers;

use App\terminal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class terminalcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $terminals = terminal::all();
        return view('terminal.terminal',compact('terminals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $orginazer =Auth::user()->name ;
        return view('terminal.addTerminal',compact('orginazer'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'mac_address'=>'required',
            'modem_type' =>'required',
            'transceivers_information' =>'required',
            'service_type' =>'required',
            'service_profile' =>'required',
            'service_start_date' =>'required',
            'service_due_date' =>'required',
            'monthly_rate' =>'required',
            'organizer' =>'required'
        ]);
        terminal::create($request->all());
        return redirect()->route('terminal.index');
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
        $terminal = terminal::find($id);
        $mac_address=$terminal->mac_address;
        $modem_type = $terminal->modem_type;
        $transceivers_information = $terminal->transceivers_information;
        $service_type = $terminal->service_type;
        $service_profile = $terminal->service_profile;
        $service_start_date = $terminal->service_start_date;
        $service_due_date = $terminal->service_due_date;
        $monthly_rate = $terminal->monthly_rate;
        $organizer = $terminal->organizer;
        return view('terminal.editTerminal',compact('terminal','mac_address','modem_type','transceivers_information',
        'service_type','service_profile','service_start_date','service_due_date','monthly_rate','organizer'));
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
        terminal::find($id)->update($request->all());
        return redirect()->route('terminal.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        terminal::destroy($id);
        return back();
    }
}
