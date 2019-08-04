<?php

namespace App\Http\Controllers;
use App\Posting;
use Illuminate\Http\Request;

class postingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Posting::all();
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(request $request)
    {
        try {
            $posting = new Posting;
            if($request->hasfile('photo'))
                {
                    $file = $request->file('photo');
                    $name=time().$file->getClientOriginalName();
                    $file->move(public_path().'/images/', $name);
                    $posting->photo = $name;
                }
                else{
                    $posting->photo=NULL;
                }

                    $posting->title = $request->title;
                    $posting->photo = $request->photo;
                    $posting->description = $request->description;
                    $posting->category = $request->category;
                    $posting->save();

                    return "data berhasil diinputkan";
        } catch (\Exception $e) {
            return $this->sendIseResponse($e->getMessage());
        }


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
            $posting=Posting::find($id);

            if($request->hasfile('photo'))
            {
                $file = $request->file('photo');
                $name=time().$file->getClientOriginalName();
                $file->move(public_path().'/images/', $name);
                $posting->photo=$name;
            }
                $title = $request->title;
                $photo = $request->photo;
                $description = $request->description;
                $category = $request->category;

                $posting = Posting::find($id);
                $posting->title = $title;
                $posting->photo = $photo;
                $posting->description = $description;
                $posting->description = $description;

                $posting->save();

                return "data Updated";

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
        $posting = Posting::find($id);
        $posting->delete();

        return "data deleted";
    }
}
