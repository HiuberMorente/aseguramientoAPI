<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PatientController extends Controller
{
    public function index(){
        return Patient::all();
    }

    public function show(Patient $patient){
        return $patient;
    }

    public function store(Request $request){
        $patient = Patient::create($request->all());
        return response()->json($patient, Response::HTTP_CREATED);
    }

    public function update(Request $request, Patient $patient){

        $patient->update($request->all());

        return response()->json($patient, Response::HTTP_OK);
    }

    public function delete(Request $request, Patient $patient){

        $patient->delete();

        return response()->json(null, Response::HTTP_NO_CONTENT);
    }

}
