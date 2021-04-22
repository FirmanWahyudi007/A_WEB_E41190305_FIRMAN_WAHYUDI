<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PendidikanController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index()
  {
    $pendidikan = DB::table('pendidikan')->get();
    return view('backend/pendidikan.index', compact('pendidikan'));
  }

  public function create()
  {
    $pendidikan = null;
    $admin_lecturer = "Menambahkan";
    return view('backend/pendidikan.create', compact('pendidikan','admin_lecturer'));
  }

  public function store(Request $request)
  {
    DB::table('pendidikan')->insert([
      'pendidikan' => $request->pendidikan,
      'gelar' => $request->gelar,
      'tahun_masuk' => $request->tahun_masuk,
      'tahun_lulus' => $request->tahun_lulus
    ]);
    return redirect()->route('pendidikan.index')
                    ->with('success','Data Pendidikan berhasil ditambahkan.');
  }

  public function edit($id)
  {
    $pendidikan = DB::table('pendidikan')->where('id',$id)->first();
    $admin_lecturer = "Mengubah";
    return view('backend/pendidikan.create', compact('pendidikan','admin_lecturer'));
  }

  public function update(Request $request)
  {
    DB::table('pendidikan')->where('id',$request->id)->update([
      'pendidikan' => $request->pendidikan,
      'gelar' => $request->gelar,
      'tahun_masuk' => $request->tahun_masuk,
      'tahun_lulus' => $request->tahun_lulus
    ]);
    return redirect()->route('pendidikan.index')
                    ->with('success','Data Pendidikan berhasil diperbaharui.');
  }

  public function destroy($id)
  {
    DB::table('pendidikan')->where('id',$id)->delete();
    return redirect()->route('pendidikan.index')
                    ->with('success','Data Pendidikan berhasil dihapus.');
  }
}
