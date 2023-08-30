<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tasking;

class TaskSearchController extends Controller
{
    public function index(request $request){
        // $list_tasking = Tasking::all();
        $keyword = $request->search;
        $list_tasking = Tasking::where('tugas', 'like', '%' . $keyword . '%')
                            ->orWhere('pic', 'like', '%' . $keyword . '%')
                            ->get();
        return view('tasking.search',compact('list_tasking'));
    }
}
