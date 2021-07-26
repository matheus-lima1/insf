<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Priest;

class PriestController extends Controller
{

    private $priest;

    public function __construct(Priest $priest){
        $this->priest = $priest;
    }
    
    public function index()
    {
        $priests = $this->priest->paginate(15);
        return view('priests.index', compact('priests'));
    }

    
    public function create()
    {
        return view('priests.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $year = explode('-',$data['graduationYear']);
        $data['graduationYear'] = $year[0];

        $priest = $this->priest->create($data);

        return redirect()->route('priests.index');
    
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $priest = $this->priest->find($id);
        return view('priests.edit',compact('priest'));
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
        
        $priest = $this->priest->find($id);
        $year = explode('-',$data['graduationYear']);
        $data['graduationYear'] = $year[0];

        $priest->update($data);

        return redirect()->route('priests.index');
    }

    public function destroy($id)
    {
        $priest = $this->priest->find($id);
        $priest->delete();

        return redirect()->route('priests.index');
    }
}
