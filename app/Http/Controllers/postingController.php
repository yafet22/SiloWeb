<?php

namespace App\Http\Controllers;
use App\Posting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Transformers\PostingTransformer;

class postingController extends RestController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posting = Posting::all();
        $response = $this->generateCollection($posting);
        return $this->sendResponse($response);       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


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
            'title' => 'required',
            'description' => 'required',
            'category' => 'required',

        ]);

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
            $posting->description = $request->description;
            $posting->category = $request->category;
            $posting->save();

            $response = $this->generateItem($posting);
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
            $posting=Posting::find($id);
            $response = $this->generateItem($posting);
            return $this->sendResponse($response);
        } catch (ModelNotFoundException $e) {
            return $this->sendNotFoundResponse('posting_not_found');
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
            $posting=Posting::find($id);

            if($request->hasfile('photo'))
            {
                $file = $request->file('photo');
                $name=time().$file->getClientOriginalName();
                $file->move(public_path().'/images/', $name);
                $posting->photo=$name;
            }
                
                $posting->title=$request->get('title');
                $posting->description=$request->get('description');
                $posting->category=$request->get('category');
                $posting->save();

                $response = $this->generateItem($posting);

            return $this->sendResponse($response, 201);

        } catch (ModelNotFoundException $e) {
            return $this->sendNotFoundResponse('posting_not_found');
        }
        catch (\Exception $e) {
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
            $posting = Posting::find($id);
            $posting->delete();
            return response()->json('Success',200);
    
        } catch (ModelNotFoundException $e) {
            return $this->sendNotFoundResponse('posting_not_found');
        } catch (\Exception $e) {
            return $this->sendIseResponse($e->getMessage());
        }

    }
}
