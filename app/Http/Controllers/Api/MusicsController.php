<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\MusicsResource;
use App\Models\Musics;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MusicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $musics = Musics::all();
        return response([
            'total' => $musics->count(),
            'messages' => 'Retrieved successfuly',
            'data' => MusicsResource::collection($musics)
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
        $musics = Musics::create($request->all());
        return response(['data' => new MusicsResource($musics), 'message' => 'Musics has been created!'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $musics = Musics::find($id);
        if ($musics != null) {
            return response(['project' => new MusicsResource($musics), 'message' => 'Retrieved successfully'], 200);
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
        $musics = Musics::find($id);
        if ($musics != null) {
            $musics->update($request->all());
            return response(['data' => new MusicsResource($musics), 'message' => 'Musics has been updated!'], 202);
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
        $musics = Musics::find($id);
        if ($musics != null) {
            $musics->delete();
            return response(['message' => 'Musics has been deleted!']);
        } else {
            return response([
                'message' => 'No data found!',
            ], 403);
        }
    }
}