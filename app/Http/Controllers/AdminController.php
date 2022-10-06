<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function showPesertaSeminarBigData()
    {
        $pesertaBigData = DB::table('user_event')
                        ->join('users','user_event.users_id','=','users.id')
                        ->join('events','user_event.events_id','=','events.id')
                        ->select('users.nama','users.email','users.no_hp')
                        ->where('user_event.events_id','=',1)
                        ->orderBy('users.id','asc')
                        ->get();
        // dd($pesertaBigData);
        return view('admin.daftarpeserta.seminar.seminarBigData', ['data' => $pesertaBigData]);
    }

    public function showPesertaSeminarMultiverse()
    {
        $pesertaMultiverse = DB::table('user_event')
                        ->join('users','user_event.users_id','=','users.id')
                        ->join('events','user_event.events_id','=','events.id')
                        ->select('users.nama','users.email','users.no_hp')
                        ->where('user_event.events_id','=',2)
                        ->orderBy('users.id','asc')
                        ->get();
        // dd($pesertaMultiverse);
        return view('admin.daftarpeserta.seminar.seminarMultiverse', ['data' => $pesertaMultiverse]);
    }
    public function showPesertaWorkshopHCI()
    {
        $pesertaMultiverse = DB::table('user_event')
                        ->join('users','user_event.users_id','=','users.id')
                        ->join('events','user_event.events_id','=','events.id')
                        ->select('users.nama','users.email','users.no_hp')
                        ->where('user_event.events_id','=',3)
                        ->orderBy('users.id','asc')
                        ->get();
        // dd($pesertaMultiverse);
        return view('admin.daftarpeserta.seminar.seminarMultiverse', ['data' => $pesertaMultiverse]);
    }
    public function showPesertaWorkshopUI()
    {
        $pesertaMultiverse = DB::table('user_event')
                        ->join('users','user_event.users_id','=','users.id')
                        ->join('events','user_event.events_id','=','events.id')
                        ->select('users.nama','users.email','users.no_hp')
                        ->where('user_event.events_id','=',4)
                        ->orderBy('users.id','asc')
                        ->get();
        // dd($pesertaMultiverse);
        return view('admin.daftarpeserta.seminar.seminarMultiverse', ['data' => $pesertaMultiverse]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
}
