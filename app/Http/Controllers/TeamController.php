<?php

namespace App\Http\Controllers;

use App\Team;
use App\TeamDetail;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function showTimHackaton()
    {
        $result = Team::where('teams.events_id','=',5)->get();
        // dd($result);
        return view('admin.daftarpeserta.lomba.lombaHackaton',['data' => $result]);
    }
    public function showTimMlbb()
    {
        $result = Team::where('teams.events_id','=',6)->get();
        // dd($result);
        return view('admin.daftarpeserta.lomba.lombaMlbb',['data' => $result]);
    }
    public function showTimComic()
    {
        $result = Team::where('teams.events_id','=',8)->get();
        // dd($result);
        return view('admin.daftarpeserta.lomba.lombaComic',['data' => $result]);
    }

    public function confirmation(Request $request, Team $team)
    {
        $team->status = $request->get('status');
        $team->save();
        return redirect()->back()->with('success', 'Verifikasi Accepted');
    }

    public function rejectConfirmation(Request $request, Team $team)
    {
        $team->status = $request->get('status');
        $team->keterangan = $request->get('keterangan');
        $team->save();
        return redirect()->back()->with('success', 'Verifikasi Rejected');
    }

    public function showPesertaLomba($id)
    {
        $result = Team::find($id);
        // dd($result);
        $nama = $result->nama_tim;
        $teamdetail = $result->teamDetail;
        // dd($teamdetail);
        return View('admin.daftarpeserta.lomba.detailPesertaLomba', compact('nama','teamdetail'));
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
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        //
    }
}
