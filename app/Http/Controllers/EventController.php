<?php

namespace App\Http\Controllers;

use App\Event;
use App\Jenis;
use App\Image;
use App\User;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function front_event()
    {
        $event = Event::join('jenis','jenis.id','=','events.jenis_id')
                ->join('images','images.events_id','=','events.id')
                ->select('events.*','jenis.nama as name','image_url as url')
                ->where('jenis.id','=',1)
                ->orWhere('jenis.id','=',2)->get();
        // dd($event);
        return view('peserta.daftar',compact('event'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = Event::all();

      //   dd($query);
      return view('admin.daftarevent.index',compact('query'));
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
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $user = \App\User::class();
        // $this->authorize('admin-permission',$user);
        $event = Event::find($id);
        // dd($event);
        // $event = Event::find($id);
        $jenis = Jenis::all();
        // dd($jenis);
        return view('admin.daftarevent.edit',compact('event','jenis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function updateEvent(Request $request, Event $event)
    {
        $event->jenis_id  = $request->get('jenis_id');
        $event->nama = $request->get('nama');
        $event->tanggal_start = $request->get('tanggal_start');
        $event->tanggal_end = $request->get('tanggal_end');
        $event->deskripsi = $request->get('deskripsi');
        $event->lokasi = $request->get('lokasi');
        $event->link_wa = $request->get('link_wa');
        $event->author = $request->get('author');
        $event->term_condition = $request->get('term_condition');
        $event->save();

        // DB::update('update users set votes = 100 where name = ?', ['John']);
        return redirect('/daftarevent')->with('status', 'Acara berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }
}
