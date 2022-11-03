<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\TeamDetail;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RegistrationController extends Controller
{
   public function storeHackaton(Request $request)
   {
      $currentTime = Carbon::now();
      date_default_timezone_set("Asia/Jakarta");
      $endDate = "02 November 2022";
      $endDateTimestamp = strtotime($endDate);
      if (time() >= $endDateTimestamp) {
         session()->flash('registerClosed', 'Pendaftaran Lomba Competitive Programming telah ditutup, silahkan pilih event seminar yang masih tersedia');
         return redirect('/peserta/daftarevents');
      }

      $request->validate([
         'nama_tim' => ['required', 'max:45'],
         'instansi' => ['required', 'max:45'],
         'nama' => ['required', 'max:45'],
         'no_hp' => ['required', 'max:45'],
         'email' => ['required', 'max:45'],
         'image' => ['required', 'mimes:pdf,jpg,png,jpeg', 'max:1024'],
         'nama1' => ['required', 'max:45'],
         'no_hp1' => ['required', 'max:45'],
         'email1' => ['required', 'max:45'],
         'image1' => ['required', 'mimes:pdf,jpg,png,jpeg', 'max:1024'],
         'nama2' => ['max:45'],
         'no_hp2' => ['max:45'],
         'email2' => ['max:45'],
         'image2' => ['mimes:pdf,jpg,png,jpeg', 'max:1024']
      ]);

      $comprog_id = $request->get('comprogId');
      $user_id = $request->get('userId');

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
      $imgFile = "ICF2022Foto_" . $request->file('image')->getClientOriginalName();
      $request->file('image')->move($imgFolder, $imgFile);
      $dataMember1->image = $imgFile;

      $dataMember1->save();

      $nama1 = $request->get('nama1');
      $no_hp1 = $request->get('no_hp1');
      $email1 = $request->get('email1');
      $image1 = $request->file('image1');

      // if ($nama1 != null && $no_hp1 != null && $email1 != null && $image1 != null) 
      // {
      $dataMember2 = new TeamDetail();
      $dataMember2->teams_id = $newIdTeam;
      $dataMember2->nama = $nama1;
      $dataMember2->role = "anggota";
      $dataMember2->no_hp = $no_hp1;
      $dataMember2->email = $email1;

      //Image
      $imgFolder = "files";
      $imgFile = "ICF2022Foto_" . $image1->getClientOriginalName();
      $image1->move($imgFolder, $imgFile);
      $dataMember2->image = $imgFile;

      $dataMember2->save();
      // }

      $nama2 = $request->get('nama2');
      $no_hp2 = $request->get('no_hp2');
      $email2 = $request->get('email2');
      $image2 = $request->file('image2');

      if ($nama2 != null && $no_hp2 != null && $email2 != null && $image2 != null) {
         $dataMember3 = new TeamDetail();
         $dataMember3->teams_id = $newIdTeam;
         $dataMember3->nama = $nama2;
         $dataMember3->role = "anggota";
         $dataMember3->no_hp = $no_hp2;
         $dataMember3->email = $email2;

         //Image
         $imgFolder = "files";
         $imgFile = "ICF2022Foto_" . $image2->getClientOriginalName();
         $image2->move($imgFolder, $imgFile);
         $dataMember3->image = $imgFile;

         $dataMember3->save();
      }

      DB::table('user_event')->updateOrInsert(['users_id' => $user_id, 'events_id' => $comprog_id]);

      return redirect('daftarlomba')->with('status', 'Registrasi Tim Lomba Competitive Programming berhasil, mohon menunggu untuk dikonfirmasi oleh panitia, terima kasih.');
   }

   public function storeMlbb(Request $request)
   {
      $currentTime = Carbon::now();
      date_default_timezone_set("Asia/Jakarta");
      $endDate = "02 November 2022";
      $endDateTimestamp = strtotime($endDate);
      if (time() >= $endDateTimestamp) {
         session()->flash('registerClosed', 'Pendaftaran Lomba MLBB telah ditutup, silahkan pilih event seminar yang masih tersedia');
         return redirect('/peserta/daftarevents');
      }
      $request->validate([
         'nama_tim' => ['required', 'max:45'],
         'instansi' => ['required', 'max:45'],
         'name' => ['required', 'max:45'],
         'no_hp' => ['required', 'max:45'],
         'email' => ['required', 'max:45', 'email:dns'],
         'image' => ['required', 'mimes:pdf,jpg,png,jpeg', 'max:1024'],
         'idgame' => ['required'],
         'name1' => ['required', 'max:45'],
         'no_hp1' => ['required', 'max:45'],
         'email1' => ['required', 'max:45'],
         'image1' => ['required', 'mimes:pdf,jpg,png,jpeg', 'max:1024'],
         'idgame1' => ['required'],
         'name2' => ['required', 'max:45'],
         'no_hp2' => ['required', 'max:45'],
         'email2' => ['required', 'max:45'],
         'image2' => ['required', 'mimes:pdf,jpg,png,jpeg', 'max:1024'],
         'idgame2' => ['required'],
         'name3' => ['required', 'max:45'],
         'no_hp3' => ['required', 'max:45'],
         'email3' => ['required', 'max:45'],
         'image3' => ['required', 'mimes:pdf,jpg,png,jpeg', 'max:1024'],
         'idgame3' => ['required'],
         'name4' => ['required', 'max:45'],
         'no_hp4' => ['required', 'max:45'],
         'email4' => ['required', 'max:45'],
         'image4' => ['required', 'mimes:pdf,jpg,png,jpeg', 'max:1024'],
         'idgame4' => ['required'],
         'namacadangan' => ['max:45'],
         'no_hpcadangan' => ['max:45'],
         'emailcadangan' => ['max:45'],
         'imagecadangan' => ['mimes:pdf,jpg,png,jpeg', 'max:1024'],
         'idgamecadangan' => ['max:45'],
      ]);

      $idmlbb = $request->get('idmlbb');
      $user_id = $request->get('userId');

      $dataTeam = new Team();

      $dataTeam->users_id = Auth::id();
      $dataTeam->events_id = 6;
      $dataTeam->nama_tim = $request->get('nama_tim');
      $dataTeam->instansi = $request->get('instansi');
      $dataTeam->status = 'pending';
      $dataTeam->tanggal_daftar = $currentTime->toDateTimeString();
      $dataTeam->save();
      $newIdTeam = $dataTeam->id;

      $dataMember1 = new TeamDetail();
      $dataMember1->teams_id = $newIdTeam;
      $dataMember1->nama = $request->get('name');
      $dataMember1->role = "ketua";
      $dataMember1->no_hp = $request->get('no_hp');
      $dataMember1->email = $request->get('email');
      $dataMember1->idgame = $request->get('idgame');
      //Image
      $imgFolder = "files";
      $imgFile = "ICF2022Foto_" . $request->file('image')->getClientOriginalName();
      $request->file('image')->move($imgFolder, $imgFile);
      $dataMember1->image = $imgFile;

      $dataMember1->save();

      $dataMember2 = new TeamDetail();
      $dataMember2->teams_id = $newIdTeam;
      $dataMember2->nama = $request->get('name1');
      $dataMember2->role = "pemain 1";
      $dataMember2->no_hp = $request->get('no_hp1');
      $dataMember2->email = $request->get('email1');
      $dataMember2->idgame = $request->get('idgame1');
      //Image
      $imgFolder = "files";
      $imgFile = "ICF2022Foto_" . $request->file('image1')->getClientOriginalName();
      $request->file('image1')->move($imgFolder, $imgFile);
      $dataMember2->image = $imgFile;

      $dataMember2->save();

      $dataMember3 = new TeamDetail();
      $dataMember3->teams_id = $newIdTeam;
      $dataMember3->nama = $request->get('name2');
      $dataMember3->role = "pemain 2";
      $dataMember3->no_hp = $request->get('no_hp2');
      $dataMember3->email = $request->get('email2');
      $dataMember3->idgame = $request->get('idgame2');
      //Image
      $imgFolder = "files";
      $imgFile = "ICF2022Foto_" . $request->file('image2')->getClientOriginalName();
      $request->file('image2')->move($imgFolder, $imgFile);
      $dataMember3->image = $imgFile;

      $dataMember3->save();

      $dataMember4 = new TeamDetail();
      $dataMember4->teams_id = $newIdTeam;
      $dataMember4->nama = $request->get('name3');
      $dataMember4->role = "pemain 3";
      $dataMember4->no_hp = $request->get('no_hp3');
      $dataMember4->email = $request->get('email3');
      $dataMember4->idgame = $request->get('idgame3');
      //Image
      $imgFolder = "files";
      $imgFile = "ICF2022Foto_" . $request->file('image3')->getClientOriginalName();
      $request->file('image3')->move($imgFolder, $imgFile);
      $dataMember4->image = $imgFile;

      $dataMember4->save();

      $dataMember5 = new TeamDetail();
      $dataMember5->teams_id = $newIdTeam;
      $dataMember5->nama = $request->get('name4');
      $dataMember5->role = "pemain 4";
      $dataMember5->no_hp = $request->get('no_hp4');
      $dataMember5->email = $request->get('email4');
      $dataMember5->idgame = $request->get('idgame4');
      //Image
      $imgFolder = "files";
      $imgFile = "ICF2022Foto_" . $request->file('image4')->getClientOriginalName();
      $request->file('image4')->move($imgFolder, $imgFile);
      $dataMember5->image = $imgFile;

      $dataMember5->save();

      $namacadangan = $request->get('namacadangan');
      $no_hpcadangan = $request->get('no_hpcadangan');
      $emailcadangan = $request->get('emailcadangan');
      $imagecadangan = $request->get('imagecadangan');
      $idgamecadangan  = $request->file('idgamecadangan');

      if ($namacadangan != null && $no_hpcadangan != null && $emailcadangan != null && $imagecadangan != null && $idgamecadangan != null) {
         $dataMember6 = new TeamDetail();
         $dataMember6->teams_id = $newIdTeam;
         $dataMember6->nama = $namacadangan;
         $dataMember6->role = "pemain cadangan";
         $dataMember6->no_hp = $no_hpcadangan;
         $dataMember6->email = $emailcadangan;
         $dataMember6->idgame = $idgamecadangan;
         //Image
         $imgFolder = "files";
         $imgFile = "ICF2022Foto_" . $imagecadangan->getClientOriginalName();
         $imagecadangan->move($imgFolder, $imgFile);
         $dataMember6->image = $imgFile;

         $dataMember6->save();
      }

      DB::table('user_event')->updateOrInsert(['users_id' => $user_id, 'events_id' => $idmlbb]);

      return redirect('daftarlomba')->with('status', 'Registrasi Tim Lomba MLBB berhasil, mohon menunggu untuk dikonfirmasi oleh panitia, terima kasih.');
   }

   public function storeComic(Request $request)
   {
      $currentTime = Carbon::now();
      date_default_timezone_set("Asia/Jakarta");
      $endDate = "02 November 2022";
      $endDateTimestamp = strtotime($endDate);
      if (time() >= $endDateTimestamp) {
         session()->flash('registerClosed', 'Pendaftaran Lomba Comic telah ditutup, silahkan pilih event seminar yang masih tersedia');
         return redirect('/peserta/daftarevents');
      }

      $request->validate([
         'nama_tim' => ['required', 'max:45'],
         'instansi' => ['required', 'max:45'],
         'name' => ['required', 'max:45'],
         'phone_number' => ['required', 'max:45'],
         'email' => ['required', 'max:45'],
         'image' => ['required', 'mimes:pdf,jpg,png,jpeg', 'max:1024'],
         'name1' => ['max:45'],
         'phone_number1' => ['max:45'],
         'email1' => ['max:45'],
         'image1' => ['mimes:pdf,jpg,png,jpeg', 'max:1024'],
      ]);

      $comic_id = $request->get('comicId');
      $user_id = $request->get('userId');

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
      $dataMember1->nama = $request->get('name');
      $dataMember1->role = "ketua";
      $dataMember1->no_hp = $request->get('phone_number');
      $dataMember1->email = $request->get('email');

      //Image
      $imgFolder = "files";
      $imgFile = "ICF2022Foto_" . $request->file('image')->getClientOriginalName();
      $request->file('image')->move($imgFolder, $imgFile);
      $dataMember1->image = $imgFile;

      $dataMember1->save();

      $nama1 = $request->get('name1');
      $no_hp1 = $request->get('phone_number1');
      $email1 = $request->get('email1');
      $image1 = $request->file('image1');

      if ($nama1 != null && $no_hp1 != null && $email1 != null && $image1 != null) {
         $dataMember2 = new TeamDetail();
         $dataMember2->teams_id = $newIdTeam;
         $dataMember2->nama = $nama1;
         $dataMember2->role = "anggota";
         $dataMember2->no_hp = $no_hp1;
         $dataMember2->email = $email1;

         //Image
         $imgFolder = "files";
         $imgFile = "ICF2022Foto_" . $image1->getClientOriginalName();
         $image1->move($imgFolder, $imgFile);
         $dataMember2->image = $imgFile;
         $dataMember2->save();
      }

      DB::table('user_event')->updateOrInsert(['users_id' => $user_id, 'events_id' => $comic_id]);

      return redirect('daftarlomba')->with('status', 'Registrasi Tim Lomba Comic Strip berhasil, mohon menunggu untuk dikonfirmasi oleh panitia, terima kasih.');
   }

   public function storeTiktok(Request $request)
   {
      $currentTime = Carbon::now();
      date_default_timezone_set("Asia/Jakarta");
      $endDate = "02 November 2022";
      $endDateTimestamp = strtotime($endDate);
      if (time() >= $endDateTimestamp) {
         session()->flash('registerClosed', 'Pendaftaran Lomba Tiktok telah ditutup, silahkan pilih event seminar yang masih tersedia');
         return redirect('/peserta/daftarevents');
      }
      $request->validate([
         'akuntiktok' => ['required', 'max:45'],
      ]);

      $tiktok_id = $request->get('tiktokId');
      $user_id = $request->get('userId');
      $akuntiktok = $request->get('akuntiktok');
      DB::table('user_event')->updateOrInsert(['users_id' => $user_id, 'events_id' => $tiktok_id]);
      DB::table('users')->where('id', '=', $user_id)->update(['akun_tiktok' => $akuntiktok]);

      return redirect('daftarlomba')->with('status', 'Registrasi Tim Lomba Tiktok berhasil, mohon menunggu untuk dikonfirmasi oleh panitia, terima kasih.');
   }
}
