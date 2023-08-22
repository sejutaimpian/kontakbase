<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use App\Models\KontakRoom;
use Illuminate\Http\Request;

class DevController extends Controller
{
    public function index()
    {
        $kontak = Kontak::find(1);
        dd($kontak->kontakRoom);
    }
    public function post(Request $request)
    {
        $list = [
            [
                'kode_kontak' => 'kode 1',
                'judul' => 'judul 1',
                'keterangan' => 'keterangan 1'
            ],
            [
                'kode_kontak' => 'kode 2',
                'judul' => 'judul 2',
                'keterangan' => 'keterangan 2'
            ],
            [
                'kode_kontak' => 'kode 3',
                'judul' => 'judul 3',
                'keterangan' => 'keterangan 3'
            ]
        ];
        foreach ($list as $item) {
            KontakRoom::create($item);
        };
        return 'Sukses';
    }
    public function request(Request $request)
    {
        dd($request->all());
        foreach ($request->kontak as $item) {
            Kontak::create(['kontak_room_id' => 1, ...$item]);
        };
        return 'Sukses';
    }
}
