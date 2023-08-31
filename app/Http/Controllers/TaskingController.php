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

    // public function search(request $request){
    //     $keyword = $request->search;
    //     $list_tasking = Tasking::where('tugas', 'like', '%' . $keyword . '%')
    //                         ->orWhere('pic', 'like', '%' . $keyword . '%')
    //                         ->get();
    //     return view('tasking.search',compact('list_tasking'));
    // }

    public function destroy($id){
        $tasking = Tasking::find($id);
        $tasking->delete();
        return redirect('/');
    }

    public function edit($id){
        $tasking = Tasking::find($id);
        return view ('tasking.edit',compact('tasking'));
    }

    public function update(request $request, $id){
        $tasking = Tasking::find($id);
        $tasking->tugas = $request->tugas;
        $tasking->tanggal = $request->tanggal;
        $tasking->pic = $request->pic;
        $tasking->status = $request->status;
        $tasking->update();
        return redirect('/');

    }

}
