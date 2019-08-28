<?php

namespace App\Http\Controllers;
use App\LandMark;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Transformers\LandMarkTransformer;

class LandMarkRestController extends RestController
{
    protected $transformer = LandMarkTransformer::class;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $landmarks = LandMark::all();
        $response = $this->generateCollection($landmarks);
        return $this->sendResponse($response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'photo' => 'required',
            'name' => 'required',
            'description' => 'required',
            'category' => 'required',

        ]);

        try {
            $landmark = new LandMark;

            if($request->hasfile('photo'))
            {
                $file = $request->file('photo');
                $name=time().$file->getClientOriginalName();
                $file->move(public_path().'/images/', $name);
                $landmark->photo = $name;
            }
            else{
                $landmark->photo=NULL;
            }

            $landmark->name = $request->name;
            $landmark->description = $request->description;
            $landmark->category = $request->category;
            $landmark->save();

            $response = $this->generateItem($landmark);
            return $this->sendResponse($response, 201);
        } catch (\Exception $e) {
            return $this->sendIseResponse($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $landmark=LandMark::find($id);
            $response = $this->generateItem($landmark);
            return $this->sendResponse($response);
        } catch (ModelNotFoundException $e) {
            return $this->sendNotFoundResponse('landmark_not_found');
        } catch (\Exception $e) {
            return $this->sendIseResponse($e->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        try {
            $landmark =LandMark::find($id);

            if($request->hasfile('photo'))
            {
                $file = $request->file('photo');
                $name=time().$file->getClientOriginalName();
                $file->move(public_path().'/images/', $name);
                $landmark->photo = $name;
            }
            else{
                $landmark->photo=NULL;
            }

            $landmark->name = $request->name;
            $landmark->description = $request->description;
            $landmark->category = $request->category;
            $landmark->save();

            $response = $this->generateItem($landmark);
            return $this->sendResponse($response, 201);
        } catch (\Exception $e) {
            return $this->sendIseResponse($e->getMessage());
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
        try {
            $landmark = LandMark::find($id);
            $landmark->delete();
            return response()->json('Success',200);
    
        } catch (ModelNotFoundException $e) {
            return $this->sendNotFoundResponse('landmark_not_found');
        } catch (\Exception $e) {
            return $this->sendIseResponse($e->getMessage());
        }
    }
}
