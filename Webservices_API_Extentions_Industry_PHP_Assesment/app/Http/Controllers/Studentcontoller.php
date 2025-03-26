<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class Studentcontoller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public $apidemo;
    public function __construct()
    {
        $this->apidemo = new student();
    }
    public function index()
    {
        return $this->apidemo->all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return $this->apidemo->create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return $this->apidemo->find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       $apiupdate=  $this->apidemo->find($id);
       $apiupdate->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $apidelete =$this->apidemo->find($id);
        $apidelete->delete();
    }
}
