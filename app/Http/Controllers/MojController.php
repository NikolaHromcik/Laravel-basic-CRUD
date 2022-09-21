<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prijava;
use App\Models\Smer;


class MojController extends Controller
{
    public function pocetna(){
        return view('pocetna')->with('prijave', Prijava::all());
    }
    public function prijava(){
        return view('prijava')->with('smerovi', Smer::all());
    }
    public function obradaPrijave(Request $request){
        $p = new Prijava();
        $p->ime = $request->ime;
        $p->prezime = $request->prezime;
        $p->status = -1;
        $p->smer_id = $request->smer_id;
        $p->save();
        return redirect('');
    }

    public function admin(){
        return view('admin.admin')->with('prijave', Prijava::all());
    }

    public function adminPrijave($id){
        return view('admin.prijave')->with('prijava', Prijava::find($id));
    }

    public function promeniStatus($id, Request $request){
        $prijava = Prijava::find($id);
        $prijava->status = $request->status;
        $prijava->save();
        return redirect('/admin');
    }
    public function brisanje($id){
        return view('admin.obrisi')->with('prijava', Prijava::find($id));
    }
    public function obrisi($id, Request $request){
        $prijava = $request->id;
        $brisac = Prijava::find($prijava);
        $brisac->delete();
        return redirect('/admin');
    }
}
