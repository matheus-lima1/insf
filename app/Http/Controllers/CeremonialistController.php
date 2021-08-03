<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ceremonialist;

class CeremonialistController extends Controller
{
    
    private $ceremonialist;

    public function __construct(Ceremonialist $ceremonialist){
        $this->ceremonialist = $ceremonialist;
    }

    public function index()
    {
        $ceremonialists = $this->ceremonialist->paginate(15);
        return view('ceremonialists.index', compact('ceremonialists'));
    }

    
    public function create()
    {
        return view('ceremonialists.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $ceremonialist = $this->ceremonialist->create($data);

        return redirect()->route('ceremonialists.index');
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
        $ceremonialist = $this->ceremonialist->find($id);
        return view('ceremonialists.edit', compact('ceremonialist'));
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
        $data = $request->all();
        $ceremonialist = $this->ceremonialist->find($id);
        $ceremonialist->update($data);

        return redirect()->route('ceremonialists.index');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ceremonialist = $this->ceremonialist->find($id);
        $ceremonialist->delete();

        return redirect()->route('ceremonialists.index');
    }
}