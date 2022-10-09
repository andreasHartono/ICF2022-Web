<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\TeamDetail;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
   public function storeHackaton(Request $request)
   {
        $currentTime = Carbon::now();
      date_default_timezone_set("Asia/Jakarta");
      $endDate = "3 November 2022";
      $endDateTimestamp = strtotime($endDate);
      if (time() >= $endDateTimestamp) {
          session()->flash('registerClosed', 'Pendaftaran telah ditutup, sampai jumpa di ICF 2023');
          return redirect('/login');
      }

      $request->validate([
         'nama_tim' => ['required','max:45'],
         'instansi' => ['required','max:45'],
         'nama' => ['required','max:45'],
         'no_hp' => ['required','max:45'],
         'email' => ['required','max:45','email:dns'],
         'image' => ['required','max:1024'],
         'nama1' => ['required','max:45'],
         'no_hp1' => ['required','max:45'],
         'email1' => ['required','max:45','email:dns'],
         'image1' => ['required','max:1024'],
         'nama2' => ['required','max:45'],
         'no_hp2' => ['required','max:45'],
         'email2' => ['required','max:45','email:dns'],
         'image2' => ['required','max:1024']
      ]);


      $dataTeam = new Team();

      $dataTeam->users_id = Auth::id();
      $dataTeam->events_id = 5;
      $dataTeam->nama_tim = $request->get('nama_tim');
      $dataTeam->instansi = $request->get('instansi');
      $dataTeam->status = 'pending';
      $dataTeam->tanggal_daftar = $currentTime->toDateTimeString();
      $dataTeam->save();
      $newIdTeam = $dataTeam->id;

      $dataMember1 = new TeamDetail();
      $dataMember1->teams_id = $newIdTeam;
      $dataMember1->nama = $request->get('nama');
      $dataMember1->role = "ketua";
      $dataMember1->no_hp = $request->get('no_hp');
      $dataMember1->email = $request->get('email');

      //Image
      $imgFolder = "files";
      $imgFile = time() . "_" . $request->file('image')->getClientOriginalName();
      $request->file('image')->move($imgFolder, $imgFile);
      $dataMember1->image = $imgFile;

      $dataMember1->save();

      $dataMember2 = new TeamDetail();
      $dataMember2->team_id = $newIdTeam;
      $dataMember2->nama = $request->get('nama1');
      $dataMember2->role = "anggota";
      $dataMember2->no_hp = $request->get('no_hp1');
      $dataMember2->email = $request->get('email1');

      //Image
      $imgFolder = "files";
      $imgFile = time() . "_" . $request->file('image1')->getClientOriginalName();
      $request->file('image1')->move($imgFolder, $imgFile);
      $dataMember2->image = $imgFile;

      $dataMember2->save();

      $dataMember3 = new TeamDetail();
      $dataMember3->team_id = $newIdTeam;
      $dataMember3->nama = $request->get('nama2');
      $dataMember3->role = "anggota";
      $dataMember3->no_hp = $request->get('no_hp2');
      $dataMember3->email = $request->get('email2');

      //Image
      $imgFolder = "files";
      $imgFile = time() . "_" . $request->file('image2')->getClientOriginalName();
      $request->file('image2')->move($imgFolder, $imgFile);
      $dataMember3->image = $imgFile;

      $dataMember3->save();

      return redirect('/');
   }

   public function storeMlbb(Request $request)
   {
        
   }

   public function storeComic(Request $request)
   {
        $currentTime = Carbon::now();
        date_default_timezone_set("Asia/Jakarta");
        $endDate = "3 November 2022";
        $endDateTimestamp = strtotime($endDate);
        if (time() >= $endDateTimestamp) {
            session()->flash('registerClosed', 'Pendaftaran telah ditutup, sampai jumpa di ICF 2023');
            return redirect('/login');
        }

        $request->validate([
            'nama_tim' => ['required','max:45'],
            'instansi' => ['required','max:45'],
            'nama' => ['required','max:45'],
            'no_hp' => ['required','max:45'],
            'email' => ['required','max:45','email:dns'],
            'image' => ['required','max:1024'],
            'nama1' => ['required','max:45'],
            'no_hp1' => ['required','max:45'],
            'email1' => ['required','max:45','email:dns'],
            'image1' => ['required','max:1024'],
        ]);

        $dataTeam = new Team();

        $dataTeam->users_id = Auth::id();
        $dataTeam->events_id = 8;
        $dataTeam->nama_tim = $request->get('nama_tim');
        $dataTeam->instansi = $request->get('instansi');
        $dataTeam->status = 'pending';
        $dataTeam->tanggal_daftar = $currentTime->toDateTimeString();
        $dataTeam->save();
        $newIdTeam = $dataTeam->id;

        $dataMember1 = new TeamDetail();
        $dataMember1->teams_id = $newIdTeam;
        $dataMember1->nama = $request->get('nama');
        $dataMember1->role = "ketua";
        $dataMember1->no_hp = $request->get('phone_number');
        $dataMember1->email = $request->get('email');

        //Image
        $imgFolder = "files";
        $imgFile = time() . "_" . $request->file('image')->getClientOriginalName();
        $request->file('image')->move($imgFolder, $imgFile);
        $dataMember1->image = $imgFile;

        $dataMember1->save();

        $dataMember2 = new TeamDetail();
        $dataMember2->team_id = $newIdTeam;
        $dataMember2->nama = $request->get('name1');
        $dataMember2->role = "anggota";
        $dataMember2->no_hp = $request->get('phone_number1');
        $dataMember2->email = $request->get('email1');

         //Image
        $imgFolder = "files";
        $imgFile = time() . "_" . $request->file('image1')->getClientOriginalName();
        $request->file('image1')->move($imgFolder, $imgFile);
        $dataMember2->image = $imgFile;

        return redirect('/');
   }

   public function storeTiktok(Request $request)
   {

   }
}
