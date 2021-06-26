<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CodingsResource;
use App\Models\Codings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CodingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $codings = Codings::all();
        return response([
            'total' => $codings->count(),
            'messages' => 'Retrieved successfuly',
            'data' => CodingsResource::collection($codings)
        ], 200);
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
            'name' => 'required|max:100',
            'telp' => 'required|min:6|digits_between:6,15|numeric',
            'email' => 'required|max:50',
            'problem' => 'required|max:1000'
        ]);
        if ($validator->fails()) {
            return response([
                'error' => $validator->errors(),
                'status' => 'Validation Error'
            ]);
        }
        $codings = Codings::create($request->all());
        return response(['data' => new CodingsResource($codings), 'message' => 'Codings has been created!'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $codings = Codings::find($id);
        if ($codings != null) {
            return response(['project' => new CodingsResource($codings), 'message' => 'Retrieved successfully'], 200);
        } else {
            return response([
                'message' => 'No data found!',
            ], 403);
        }
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
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:100',
            'telp' => 'required|min:6|digits_between:6,15|numeric',
            'email' => 'required|max:50',
            'problem' => 'required|max:1000'
        ]);
        if ($validator->fails()) {
            return response([
                'error' => $validator->errors(),
                'status' => 'Validation Error'
            ]);
        }
        $codings = Codings::find($id);
        if ($codings != null) {
            $codings->update($request->all());
            return response(['data' => new CodingsResource($codings), 'message' => 'Codings has been updated!'], 202);
        } else {
            return response([
                'message' => 'No data found!',
            ], 403);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $codings = Codings::find($id);
        if ($codings != null) {
            $codings->delete();
            return response(['message' => 'Codings has been deleted!']);
        } else {
            return response([
                'message' => 'No data found!',
            ], 403);
        }
    }
}