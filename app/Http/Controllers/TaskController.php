<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userName = Auth::user()->name;
        return view('list', ['userName'=>$userName]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add_task');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['required', 'min:3', 'max:60'],
            'description' => 'required',
            'priority' => 'required',
            'image'=>['image', 'nullable'],
            'start_date'=>['required', 'date'],
            'end_date'=>['required', 'date'],
        ]);

        if ($request->image) {
            $pathOrigine = public_path()."/image/";
            if (!file_exists($pathOrigine)) {
                mkdir($pathOrigine, 666, true);
            }
            $data['image'] = Storage::disk('public')->put('image', $request->image);
        }

        $data['reference'] = Str::random(10);
        $data['checked_or_not'] = 0;
        $data['user_id'] = Auth::user()->id;
        Task::create($data);

        return redirect()->route('list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $reference
     * @return \Illuminate\Http\Response
     */
    public function show($reference)
    {
        $task=Task::where('reference',$reference)->get()->first();

        return view('task', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $reference
     * @return \Illuminate\Http\Response
     */
    public function edit($reference)
    {
        $task=Task::where('reference',$reference)->get()->first();

        return view('edit_task', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $reference
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $reference)
    {

        $data = $request->validate([
            'title' => ['required', 'min:3', 'max:60'],
            'checked_or_not'=>'required',
            'description' => 'required',
            'priority' => 'required',
            'image'=>['image', 'nullable'],
            'start_date'=>['required', 'date'],
            'end_date'=>['required', 'date'],
        ]);

        if ($request->image) {
            $pathOrigine = public_path()."/image/";
            if (!file_exists($pathOrigine)) {
                mkdir($pathOrigine, 666, true);
            }
            $data['image'] = Storage::disk('public')->put('image', $request->image);
        }

        Task::where('reference',$reference)->get()->first()->update($data);

        return redirect()->route('list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $reference
     * @return \Illuminate\Http\Response
     */
    public function destroy($reference)
    {
        $task=Task::where('reference',$reference)->get()->first();
        $task->delete();
        
        return redirect()->route('list');
    }
}
