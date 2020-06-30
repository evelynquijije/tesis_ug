<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Periodo;

class PeriodoController extends Controller
{
    
    public function index()
    {
        $periodo = Periodo::All();
        return view('/admin/periodo.index', ['periodo' => $periodo]);

    }


    public function create()
    {
        
    }


    public function store(Request $request)
    {
        $periodo = new Periodo();
        $periodo->nombre= request('period_name');
        $periodo->save();
        return redirect ('periodo');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        return view('/admin/periodo.edit',['periodo'=>Periodo::findOrFail($id)]);
    }


    public function update(Request $request, $id)
    {
        $periodo=Periodo::findOrFail($id);
        $periodo->nombre= $request->get('period_name');
        $periodo->update();
        return redirect('/admin/periodo');
    }

    public function destroy($id)
    {
        //
    }
}
