<?php

namespace App\Http\Controllers;

use App\Event;
use App\Jenis;
use App\Image;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    public function showseminar()
    {
        $seminar = $seminar = Event::where('jenis_id', 1)->get();
      //   dd($seminar);
        return view('seminar',compact('seminar'));
    }
    public function showWorkshop()
    {
        $workshop = Event::join('jenis','jenis.id','=','events.jenis_id')
            ->join('images','images.events_id','=','events.id')
            ->select('events.*','jenis.nama as name','image_url as url')
            ->where('jenis.id','=',2)
            ->get();

        return view('workshop',compact('workshop'));
    }
    public function showLomba()
    {
        $lomba = Event::join('jenis','jenis.id','=','events.jenis_id')
            ->join('images','images.events_id','=','events.id')
            ->select('events.*','jenis.nama as name','image_url as url')
            ->where('jenis.id','=',3)
            ->get();

        return view('lomba',compact('lomba'));
    }


    public function front_lomba()
    {
      $userid = Auth::user()->id;
      $cek = DB::table('user_event')
      ->join('users', 'users.id', '=', 'user_event.users_id')
      ->join('events', 'events.id', '=', 'user_event.events_id')
      ->select('user_event.events_id as acara')
      ->where('users.id', $userid)
         ->get();

        $lomba = Event::join('jenis','jenis.id','=','events.jenis_id')
            ->join('images','images.events_id','=','events.id')
            ->select('events.*','jenis.nama as name','image_url as url')
            ->where('jenis.nama','=','Lomba')
            ->get();

      $user = User::find($userid);
      $regist = $user->events()->get();
      $registered = [];

      foreach ($lomba as $e) {
         $valid = 0;
         foreach ($regist as $r) {
            if ($e->id == $r->id) {
               $valid = 1;
            }
         }

         if ($valid == 1) {
            array_push($registered, 1);
         } else {
            array_push($registered, 0);
         }
      }
        return view('peserta.showlomba',compact('lomba','registered'));
    }
    public function front_event()
    {
         $userid = Auth::user()->id;
         $disabled = false;
         $idevent = 0;
         // dd($userid);
         $cek = DB::table('user_event')
               ->join('users', 'users.id','=','user_event.users_id')
               ->join('events', 'events.id','=','user_event.events_id')
               ->select('user_event.events_id as acara')
               ->where('users.id', $userid)
               ->get();
    

        $event = Event::join('jenis','jenis.id','=','events.jenis_id')
                ->join('images','images.events_id','=','events.id')
                ->select('events.*','jenis.nama as name','image_url as url')
                ->where('jenis.nama','=','Seminar')
                ->orWhere('jenis.nama','=','Workshop')->get();


        $user = User::find($userid);
        $regist = $user->events()->get();
        $registered = [];

        foreach($event as $e){
            $valid = 0;
            foreach($regist as $r){
                if($e->id == $r->id){
                    $valid = 1;
                }
            }

            if($valid == 1){
                array_push($registered, 1);
            }
            else{
                array_push($registered, 0);
            }    
        }
        return view('peserta.daftarevents',compact('event','disabled', 'registered'));
    }

    public function cart()
    {
         return view('peserta.tescart');
    }

    public function addToCart($id)
    {
         $e = Event::find($id);
         $cart = session()->get('cart');
         if(!isset($cart[$id])){
            $cart[$id] = [
               "id" => $e->id,
               "nama" => $e->nama,
            ];
         }
         session()->put('cart', $cart);
         return redirect()->back()->with('success','Event berhasil ditambahkan');
    }

    public function checkout()
    {
      // $this->authorize('checkpeserta');

      $cart = session()->get('cart');
      $user = Auth::user();
      foreach($cart as $detail) {
         // dd($detail['id']);
         DB::table('user_event')
         ->updateOrInsert([
            'users_id' => $user->id,
            'events_id' => $detail['id'],
         ]);
      }
      session()->forget('cart');
      return redirect('/peserta/daftarevents')->with('success','Pendaftaran Seminar atau 
                  Workshop berhasil, silahkan join ke Whatsapp Group untuk informasi lebih lanjut');      
    }


    public function historyEvents() 
    {
      $userid = Auth::user()->id;
      $user = User::find($userid); 
      $events = $user->events()->get();
      // dd($events);
      return view('peserta.historyevent',compact('events'));
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
        return redirect('/daftarevent')->with('success', 'Acara berhasil diupdate');
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
