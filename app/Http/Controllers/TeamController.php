<?php

namespace App\Http\Controllers;

use App\Event;
use App\Team;
use App\TeamDetail;
use App\User;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
      $result = Team::where('teams.events_id', '=', 5)->get();
      // dd($result);
      return view('admin.daftarpeserta.lomba.lombaHackaton', ['data' => $result]);
   }

   // public function showFileJawaban($id) 
   // {
   //    $result = Team::find($id);
   //    $file_jawaban = $result->file_jawaban;
   //    return view('admin.daftarpeserta.lomba.lombaHackaton', ['file_jawaban' => $file_jawaban]);
   // }
   public function showTimMlbb()
   {
      $result = Team::where('teams.events_id', '=', 6)->get();
      // dd($result);
      return view('admin.daftarpeserta.lomba.lombaMlbb', ['data' => $result]);
   }
   public function showTimComic()
   {
      $result = Team::where('teams.events_id', '=', 8)->get();
      // dd($result);
      return view('admin.daftarpeserta.lomba.lombaComic', ['data' => $result]);
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
      return View('admin.daftarpeserta.lomba.detailPesertaLomba', compact('nama', 'teamdetail'));
   }

   public function showPesertaTiktok()
   {
      $pesertaLombaTiktok = DB::table('user_event')
         ->join('users', 'user_event.users_id', '=', 'users.id')
         ->join('events', 'user_event.events_id', '=', 'events.id')
         ->select('users.nama', 'users.email', 'users.no_hp', 'users.akun_tiktok', 'users.image')
         ->where('user_event.events_id', '=', 7)
         ->orderBy('users.id', 'asc')
         ->get();

      return view('admin.daftarpeserta.lomba.pesertaLombaTiktok', ['data' => $pesertaLombaTiktok]);
   }

   public function TeamDisplay($iduser, $idevent)
   {
      if (Auth::user()->id != $iduser) {
         $event = Event::find($idevent);
         $team = Team::where('users_id', Auth::user()->id)
            ->where('events_id', $idevent)
            ->first();
         // dd($team);
         return view('peserta.detailteam', compact('team', 'event'));
      } else {
         $event = Event::find($idevent);
         $team = Team::where('users_id', $iduser)
            ->where('events_id', $idevent)
            ->first();
         // dd($event);
         return view('peserta.detailteam', compact('team', 'event'));
      }
   }

   public function updateKartuPeserta(Request $request, Team $team)
   {
      $imgFolder = "files";

      try {
         if ($request->hasFile('imgAnggota0')) {
            if ($request->file('imgAnggota0')->getSize() > 1000000) {
               session()->flash("error", "File gagal di upload, pastikan ukuran file kurang dari 1 mb");
               return redirect()->back();
            } else {
               //ImageMember0
               $idMember0 = $request->get('idAnggota0');
               $member0 = TeamDetail::find($idMember0);
               unlink('files/' . $member0->image);

               $imgFile = 'ICF2022' . "_" . $request->file('imgAnggota0')->getClientOriginalName();
               $request->file('imgAnggota0')->move($imgFolder, $imgFile);
               $member0->image = $imgFile;

               $member0->save();
            }
         }

         if ($request->hasFile('imgAnggota1')) {
            if ($request->file('imgAnggota1')->getSize() > 1000000) {
               session()->flash("error", "File gagal di upload, pastikan ukuran file kurang dari 1 mb");
               return redirect()->back();
            } else {
               //ImageMember1
               $idMember1 = $request->get('idAnggota1');
               $member1 = TeamDetail::find($idMember1);
               unlink('files/' . $member1->image);

               $imgFile = 'ICF2022' . "_" . $request->file('imgAnggota1')->getClientOriginalName();
               $request->file('imgAnggota1')->move($imgFolder, $imgFile);
               $member1->image = $imgFile;

               $member1->save();
            }
         }

         if ($request->hasFile('imgAnggota2')) {
            if ($request->file('imgAnggota2')->getSize() > 1000000) {
               session()->flash("error", "File gagal di upload, pastikan ukuran file kurang dari 1 mb");
               return redirect()->back();
            } else {
               //ImageMember2
               $idMember2 = $request->get('idAnggota2');
               $member2 = TeamDetail::find($idMember2);
               unlink('files/' . $member2->image);

               $imgFile = 'ICF2022FOTO_' . "_" . $request->file('imgAnggota2')->getClientOriginalName();
               $request->file('imgAnggota2')->move($imgFolder, $imgFile);
               $member2->image = $imgFile;

               $member2->save();
            }
         }
         if ($request->hasFile('imgAnggota3')) {
            if ($request->file('imgAnggota3')->getSize() > 1000000) {
               session()->flash("error", "File gagal di upload, pastikan ukuran file kurang dari 1 mb");
               return redirect()->back();
            } else {
               //ImageMember2
               $idMember3 = $request->get('idAnggota3');
               $member3 = TeamDetail::find($idMember3);
               unlink('files/' . $member3->image);

               $imgFile = 'ICF2022FOTO_' . "_" . $request->file('imgAnggota3')->getClientOriginalName();
               $request->file('imgAnggota3')->move($imgFolder, $imgFile);
               $member3->image = $imgFile;

               $member3->save();
            }
         }
         if ($request->hasFile('imgAnggota4')) {
            if ($request->file('imgAnggota4')->getSize() > 1000000) {
               session()->flash("error", "File gagal di upload, pastikan ukuran file kurang dari 1 mb");
               return redirect()->back();
            } else {
               //ImageMember2
               $idMember4 = $request->get('idAnggota4');
               $member4 = TeamDetail::find($idMember4);
               unlink('files/' . $member4->image);

               $imgFile = 'ICF2022FOTO_' . "_" . $request->file('imgAnggota4')->getClientOriginalName();
               $request->file('imgAnggota4')->move($imgFolder, $imgFile);
               $member4->image = $imgFile;

               $member4->save();
            }
         }
         if ($request->hasFile('imgAnggota5')) {
            if ($request->file('imgAnggota5')->getSize() > 1000000) {
               session()->flash("error", "File gagal di upload, pastikan ukuran file kurang dari 1 mb");
               return redirect()->back();
            } else {
               //ImageMember2
               $idMember5 = $request->get('idAnggota5');
               $member5 = TeamDetail::find($idMember5);
               unlink('files/' . $member5->image);

               $imgFile = 'ICF2022FOTO_' . "_" . $request->file('imgAnggota5')->getClientOriginalName();
               $request->file('imgAnggota5')->move($imgFolder, $imgFile);
               $member5->image = $imgFile;

               $member5->save();
            }
         }
         $team['status'] = "pending";
         $team['keterangan'] = "";
         $team->save();
         //kasih pesan berhasil
         session()->flash("success", "File Gambar atau PDF Kartu Pelajar berhasil di ubah. Silahkan tunggu hingga panitia memvalidasi ulang data Anda");
         return redirect()->back();
      } catch (\Exception $e) {
         //pesan gagal karena format file tidak sesuai
         $message = 'Terjadi kesalahan saat upload file Gambar atau PDF.
                     Pastikan format file dalam bentuk PDF, JPG, PNG, dan JPEG dengan maksimal ukuran file adalah 1 MB. 
                     Pastikan format nama file adalah NamaTim_Nama';
         session()->flash("error", $message);
         return redirect()->back();
      }
   }


   public function uploadJawaban(Request $request, Team $team)
   {
      $imgFolder = "files";
      $request->validate([
         'file_jawaban' => ['mimes:pdf,jpg,png,jpeg', 'max:3072']
      ]);

      try {
         if ($request->hasFile('file_jawaban')) {

            $idteam = $request->get('idteam');
            $team = Team::find($idteam);
            $file = 'ICF2022COMPROGANSWER_' . "_" . $request->file('file_jawaban')->getClientOriginalName();
            $request->file('file_jawaban')->move($imgFolder, $file);

            $team->file_jawaban = $file;
            $team->save();

            // session()->flash();
            return redirect()->back()->with("success", "File Jawaban berhasil diupload");
         }
      } catch (\Exception $e) {
         //pesan gagal karena format file tidak sesuai
         $message = 'Terjadi kesalahan saat upload file jawaban.
                     Pastikan format file dalam bentuk PDF dengan maksimal ukuran file adalah 3 MB. 
                     Pastikan format nama file adalah NamaTim_Nama';
         // session()->flash("error", $message);
         return redirect()->back()->with("error", $message);
      }
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
