<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\SubmitBiodata;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $data = User::find($user_id);

        if($data->tanggal_lahir != null){
            $set_tanggal_lahir = date_parse_from_format("Y-m-d", $data->tanggal_lahir);
            $tanggal_lahir = $set_tanggal_lahir['day'] . "/" . $set_tanggal_lahir['month'] ."/". $set_tanggal_lahir['year'];
        }else{
            $tanggal_lahir = ' ';
        }

        if($data->tanggal_lahir_1 != null){
            $set_tanggal_lahir_1 = date_parse_from_format("Y-m-d", $data->tanggal_lahir_1);
            $tanggal_lahir_1 = $set_tanggal_lahir_1['day'] . "/" . $set_tanggal_lahir_1['month'] ."/". $set_tanggal_lahir_1['year'];
        }else{
            $tanggal_lahir_1 = ' ';
        }

        if($data->tanggal_lahir_2 != null){
            $set_tanggal_lahir_2 = date_parse_from_format("Y-m-d", $data->tanggal_lahir_2);
            $tanggal_lahir_2 = $set_tanggal_lahir_2['day'] . "/" . $set_tanggal_lahir_2['month'] ."/". $set_tanggal_lahir_2['year'];
        }else{
            $tanggal_lahir_2 = ' ';
        }
        
        return view('dashboard.dashboard', compact('data'))->with('tanggal_lahir', $tanggal_lahir)->with('tanggal_lahir_1', $tanggal_lahir_1)->with('tanggal_lahir_2', $tanggal_lahir_2);
    }
    public function store(SubmitBiodata $request)
    {
        if(request('tanggal_lahir') == !null){
            $get_tanggal_lahir = str_ireplace('/', '-', request('tanggal_lahir'));
            $set_tanggal_lahir = date_parse_from_format("d-m-Y", $get_tanggal_lahir);
            $tanggal_lahir = $set_tanggal_lahir['year'] . "/" . $set_tanggal_lahir['month'] . "/". $set_tanggal_lahir['day'];
        }else{
            $tanggal_lahir = null;
        }
        if (request('tanggal_lahir_1') == !null) {
            $get_tanggal_lahir_1 = str_ireplace('/', '-', request('tanggal_lahir_1'));
            $set_tanggal_lahir_1 = date_parse_from_format("d-m-Y", $get_tanggal_lahir_1);
            $tanggal_lahir_1 = $set_tanggal_lahir_1['year'] . "/" . $set_tanggal_lahir_1['month'] . "/". $set_tanggal_lahir_1['day'];
            
        }else{
            $tanggal_lahir_1 = null;
        }
        if (request('tanggal_lahir_2') == !null) {
            $get_tanggal_lahir_2 = str_ireplace('/', '-', request('tanggal_lahir_2'));
            $set_tanggal_lahir_2 = date_parse_from_format("d-m-Y", $get_tanggal_lahir_2);
            $tanggal_lahir_2 = $set_tanggal_lahir_2['year'] . "/" . $set_tanggal_lahir_2['month'] . "/". $set_tanggal_lahir_2['day'];
        }else{
            $tanggal_lahir_2 = null;
        }


        $user_id = auth()->user()->id;
        $data = User::find($user_id);
        $data->nama_tim = request('nama_tim');
        $data->asal_sekolah = request('asal_sekolah');
        $data->pendamping = request('pendamping');
        $data->ketua_tim = request('ketua_tim');
        $data->tanggal_lahir = $tanggal_lahir;
        $data->anggota_1 = request('anggota_1');
        $data->tanggal_lahir_1 = $tanggal_lahir_1;
        $data->anggota_2 = request('anggota_2');
        $data->tanggal_lahir_2 = $tanggal_lahir_2;
        $data->kategori = auth()->user()->kategori;
        $data->status = auth()->user()->status;
        $data->email = request('email');
        $data->save();

        return redirect()->route('dashboard');

    }
}
