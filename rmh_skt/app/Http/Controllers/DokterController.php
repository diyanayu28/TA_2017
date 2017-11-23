<?php

namespace App\Http\Controllers;
use App\Dokter;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
     {
         $this->middleware('auth:admin');
     }

    public function index()
    {
        $dokter = Dokter::all();
        return View('dokter.index',compact('dokter'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dokters.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
    'number' => 'required',
    'date' => 'required',
    'nama' => 'required',
    'bagian' => 'required',
  ]);
  $input = $request->all();
  $admin = Dokter::create($input);
  return redirect()->route('dokters.index')
  ->with('success','Dokter successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($number)
    {
      //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($number)
    {
      $dokter = Dokter::find($number);
      return view('dokters.edit',compact('dokter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $number)
    {
      $this->validate($request, [
        'number' => 'required',
        'date' => 'required',
        'nama' => 'required',
        'bagian' => 'required',
      ]);
        $input = $request->all();
          $dokter = Dokter::find($number);
          $dokter->update($input);
            return redirect()->route('dokters.index')
            ->with('success','Dokter successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($number)
    {
      Dokter::find($number)->delete();
        return redirect()->route('dokters.index')
          ->with('success','Dokter successfully deleted');
    }
}
