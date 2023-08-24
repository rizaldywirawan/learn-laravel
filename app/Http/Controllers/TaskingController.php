<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tasking;

class TaskingController extends Controller
{
    public function index(){
        $list_tasking = Tasking::all();
        return view ('tasking.index',compact('list_tasking'));
    }

    public function create(){
        return view('tasking.create');
    }

    public function store(request $request){
        $new_tasking = new Tasking;
        $new_tasking->tugas = $request->tugas;
        $new_tasking->tanggal = $request->tanggal;
        $new_tasking->pic = $request->pic;
        $new_tasking->status = $request->status;
        $new_tasking->save() ;
        return redirect('/');
    }


    public function search(request $request){
        $search_tasking = $request ->word;
        $file_taskings = Tasking::where('tugas','like',"%".$search_tasking."%");
        return view('tasking.search');
    }


}
