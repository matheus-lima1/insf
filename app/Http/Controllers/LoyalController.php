<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Loyal;
use App\Http\Controllers\DateTime;

class LoyalController extends Controller
{
    private $loyal;

    public function __construct(Loyal $loyal){
        $this->loyal = $loyal;
    }
    public function index()
    {
        $loyals = $this->loyal->paginate(15);

        return view('loyals.index',compact('loyals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('loyals.create');
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

        $birth = $data['birth_date'];
        $date_birth = new \DateTime($birth);
        $age = $date_birth->diff(new \DateTime(date('Y-m-d')));

        if($age->y >=18){
            $data['major'] = true;
        } else {
            $data['major'] = false;
        }

        $loyal = $this->loyal->create($data);

        return redirect()->route('loyals.index');
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
        $loyal = $this->loyal->find($id);
        return view('loyals.edit',compact('loyal'));
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
        $loyal = $this->loyal->find($id);

        $birth = $data['birth_date'];
        $date_birth = new \DateTime($birth);
        $age = $date_birth->diff(new \DateTime(date('Y-m-d')));

        if($age->y >=18){
            $data['major'] = true;
        } else {
            $data['major'] = false;
        }

        $loyal->update($data);
        return redirect()->route('loyals.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $loyal = $this->loyal->find($id);
        $loyal->delete();

        return redirect()->route('loyals.index');
    }

    public function statistic(){
        $m = 0;
        $f = 0;

        $jovens = 0;
        $adultos = 0;
        $idosos = 0;

        $dizimoJovens = 0;
        $dizimoAdultos = 0;
        $dizimoIdosos = 0;

        $sex = array();
        $age = array();
        $tithe = array();
        $loyals = $this->loyal->all();

        foreach($loyals as $loyal){
            if($loyal->sex == 'm'){
                $m = $m + 1;
            } else {
                $f = $f + 1;
            }

            $date = $loyal->birth_date;
            $date = new \DateTime($date);
            $idade = $date->diff(new \DateTime(date('Y-m-d')));
            if($idade->y <= 19){
                $jovens = $jovens + 1;
                $dizimoJovens = $dizimoJovens + $loyal->tithe;
            } elseif ($idade->y <=59){
                $adultos = $adultos + 1;
                $dizimoAdultos = $dizimoAdultos + $loyal->tithe;
            } else {
                $idosos = $idosos + 1;
                $dizimoIdosos = $dizimoIdosos + $loyal->tithe;
            }
        }
        $sex['mas'] = $m;
        $sex['fem'] = $f;

        $age['jov'] = $jovens;
        $age['adu'] = $adultos;
        $age['ido'] = $idosos;

        if($jovens != 0){
            $tithe['jov'] = $dizimoJovens/$jovens;
        } else {
            $tithe['jov'] = $dizimoJovens;
        }

        if($adultos != 0){
            $tithe['adu'] = $dizimoAdultos/$adultos;
        } else {
            $tithe['adu'] = $dizimoAdultos;
        }

        if($idosos != 0){
            $tithe['ido'] = $dizimoIdosos/$idosos;
        } else {
            $tithe['ido'] = $dizimoIdosos;
        }
        
        
        


        return view('statistic', compact('sex','age','tithe'));
    }
}
