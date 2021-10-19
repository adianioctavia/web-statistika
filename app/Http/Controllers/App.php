<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\VarDumper;

class App extends Controller
{
    public function index()
    {
        $datas = Data::paginate(5);
        $data = [
            'title' => 'Beranda',
            'datas' => $datas,
        ];
        return view('statistika.index', $data);
    }

    public function tambah()
    {
        return view('statistika.tambahData', [
            'title' => 'Tambah Data'
        ]);
    }

    public function tabelFrek()
    {
        return view('statistika.tabelFrekuensi', [
            'title' => 'Tabel Frekuensi',
            'tabel_frekuensi' => Data::getFreqTable(),
            'min' => Data::min(),
            'max' => Data::max(),
            'avg' => Data::avg()
        ]);
    }

    public function dataBergolong()
    {
        return view('statistika.dataBergolong', [
            'title' => 'Data Bergolong',
            'bergolong' => Data::getDataBergolong(),
            'min' => Data::min(),
            'max' => Data::max(),
            'avg' => Data::avg()
        ]);
    }

    public function deleteData($id)
    {
        Data::destroy($id);
        return redirect()->back();
    }

    public function editData($id)
    {
        $datas = Data::find($id);
        return view('statistika.editData', [
            'title' => 'Edit Data',
            'id' => $datas['id'],
            'skor' => $datas['skor'],
        ]);
    }

    public function updateData(Request $req)
    {
        $skor = $req->skor;
        $data = Data::find($req->id);
        $data->skor = $skor;
        $data->save();
        return redirect('/');
    }
}
