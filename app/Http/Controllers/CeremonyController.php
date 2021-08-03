<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ceremony;
use App\Http\Controllers\DateTime;

class CeremonyController extends Controller
{
    private $ceremony;

    public function __construct(Ceremony $ceremony){
        $this->ceremony = $ceremony;
    }
    public function index()
    {
        $ceremonies = $this->ceremony->paginate(15);
        return view('ceremonies.index', compact('ceremonies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ceremonialists = \App\Ceremonialist::all();
        $priests = \App\Priest::all();
        return view('ceremonies.create', compact('ceremonialists','priests'));
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
        $ceremony = $this->ceremony->create($data);
        $ceremony->ceremonialists()->sync($data['ceremonialists']);

        return redirect()->route('ceremonies.index');
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
        $ceremony = $this->ceremony->find($id);
        $priests = \App\Priest::all();
        $ceremonialists = \App\Ceremonialist::all();

        return view('ceremonies.edit', compact('ceremony','priests','ceremonialists'));
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
        $ceremonialists = $request->get('ceremonialists',null);
        $ceremony = $this->ceremony->find($id);
        $ceremony->update($data);

        if(!is_null($ceremonialists)){
            $ceremony->ceremonialists()->sync($data['ceremonialists']);
        }

        return redirect()->route('ceremonies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ceremony = $this->ceremony->find($id);
        $ceremony->delete();

        return redirect()->route('ceremonies.index');
    }

    public function tithe(){
        $loyals = \App\Loyal::all();
        $tithe_loyals = 0;
        $tithe_ceremonies = 0;
        foreach($loyals as $loyal){
            $tithe_loyals = $tithe_loyals+$loyal->tithe;
        }

        $ceremonies = $this->ceremony->all();
        foreach($ceremonies as $ceremony){
            $date = $ceremony->date;
            $date = new \DateTime($date);
            $validation = $date->diff(new \DateTime(date('Y-m-d')));

            if($validation->y <=0 && $validation->m <= 1){
                $tithe_ceremonies = $tithe_ceremonies + $ceremony->tithe;
            }
        }

        $total = $tithe_ceremonies+$tithe_loyals;

        return view('tithe', compact('total','tithe_ceremonies','tithe_loyals'));
        
    }

    public function reportView(){
        $ceremonies = $this->ceremony->paginate(15);
        return view('ceremonies.reportView', compact('ceremonies'));
    }

    public function report($id){
        $ceremony = $this->ceremony->find($id);
        $loyals = \App\Loyal::all();
        $priest = \App\Priest::find($ceremony->priest_id);
        $ceremonialists = $ceremony->ceremonialists;

        return view('ceremonies.report', compact('ceremony','loyals','priest','ceremonialists'));
    }
}