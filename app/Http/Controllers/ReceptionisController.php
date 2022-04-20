<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\LogActivities;
use Illuminate\Support\Facades\Auth;

class ReceptionisController extends Controller
{
    public function index()
    {
        return view('receptionis.home');
    }

    public function transaction()
    {
        $data = Transaction::all();
        return view('receptionis.list', compact('data'));
    }

    public function ditolak($id)
    {
        $data = Transaction::find($id);
        $data->update(['status' => 'ditolak']);

        $log = date('YmdHis').'_customer_rejected_order';
        LogActivities::create([
            'transaction_id' => $data->id,
            'log' => $log,
            'executor_id' => Auth::user()->id,
        ]);

        return redirect()->back();
    }

    public function diverifikasi($id)
    {
        $data = Transaction::find($id);
        $data->update(['status' => 'diverifikasi']);

        $log = date('YmdHis').'_customer_verify_order';
        LogActivities::create([
            'transaction_id' => $data->id,
            'log' => $log,
            'executor_id' => Auth::user()->id,
        ]);

        return redirect()->back();
    }

    public function checkedIn($id)
    {
        $data = Transaction::find($id);
        $data->update(['status'=>'checked_in']);

        $idKamar = explode(', ',$data->id_kamar);
        $dataKamar = Kamar::whereIn('id', $idKamar)->get();
        foreach ($dataKamar as $val) {
            Kamar::find($val->id)->update(['status' => 'o']);
        }

        $log = date('YmdHis').'_customer_checked_in';
        LogActivities::create([
            'transaction_id'=>$data->id,
            'log'=>$log,
            'executor_id'=>Auth::user()->id,
        ]);
        return redirect()->back();
    }

    public function checkedOut($id)
    {
        $data = Transaction::find($id);
        $data->update(['status'=>'checked_out']);

        $idKamar = explode(', ',$data->id_kamar);
        $dataKamar = Kamar::whereIn('id', $idKamar)->get();
        foreach ($dataKamar as $val) {
            Kamar::find($val->id)->update(['status' => 'a']);
        }

        $log = date('YmdHis').'_customer_checked_out';
        LogActivities::create([
            'transaction_id'=>$data->id,
            'log'=>$log,
            'executor_id'=>Auth::user()->id,
        ]);
        return redirect()->back();
    }

    public function logs()
    {
        $log = LogActivities::all();
        return view('receptionis.log', compact('log'));
    }
}
