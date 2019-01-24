<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\SideNav;

class SideNavController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = SideNav::all();
        return view('center.sidenavs.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3|max:20',
            'link' => 'required',
            'icon' => 'sometimes',
            'options' => 'sometimes',
            'order' => 'sometimes|integer'
        ]);

        if ($validator->fails()) {
            return redirect('sidenavs')
                        ->withErrors($validator)
                        ->withInput();
        } else {
            $item = new SideNav();

            $item->name = ucfirst($request->name);
            $item->link = $request->link;
            $item->icon = $request->icon;
            $item->options = $request->options;
            $item->order = $request->order;

            $item->save();

            return redirect()->route('sidenavs.index');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
