<?php

namespace App\Http\Controllers;

use App\Models\Shortcut;
use Illuminate\Http\Request;

class ShortcutController extends Controller
{

    public function showCategory($category)
    {
        //ddd($category);

        //$records = Shortcut::where('category', $category)->get();
        $records = Shortcut::whereHas('category', function($q) use ($category){
            $q->where('name', $category);
        })->get();
        //return ddd($records);

        if( count($records)===0){
            //throw new ModelNotFoundExeption();
            abort(404);
        }
        return view('shortcuts.index', [
                    'shortcuts' => $records,
                    'category' => $category
            ]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('shortcuts.index', [ 
            'shortcuts' => Shortcut::all()
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('shortcuts.new', [ 
        //     'shortcuts' => Shortcut::all()
        //     ]);
        return view('shortcuts.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //https://www.positronx.io/laravel-contact-form-example-tutorial/
        // Form validation
        $this->validate($request, [
            'name' => 'required',
            'url' => 'required|url',
            'category_id' => 'required|numeric',
            //'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            // 'subject'=>'required',
            // 'message' => 'required'
         ]);
        
        // Store data in database
        //ddd($request)
        Shortcut::create($request->all());
        
        // message
        return back()->with('success', 'Shortcut added succesfully');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shortcut  $shortcut
     * @return \Illuminate\Http\Response
     */
    public function show(Shortcut $shortcut)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shortcut  $shortcut
     * @return \Illuminate\Http\Response
     */
    public function edit(Shortcut $shortcut)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Shortcut  $shortcut
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shortcut $shortcut)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shortcut  $shortcut
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shortcut $shortcut)
    {
        //
    }
}
