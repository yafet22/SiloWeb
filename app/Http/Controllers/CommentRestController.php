<?php

namespace App\Http\Controllers;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Transformers\CommentTransformer;

class CommentRestController extends RestController
{
    protected $transformer = CommentTransformer::class;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::all();
        $response = $this->generateCollection($comments);
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
            'content' => 'required',
            'id_user' => 'required',
            'id_posting' => 'required',
        ]);   

        try {

                $comment = new Comment;

                $comment->content=$request->get('content');
                $comment->id_user=$request->get('id_user');
                $comment->id_posting=$request->get('id_posting');
                $comment->save();

                $response = $this->generateItem($comment);

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
            $comment=Comment::find($id);
            $response = $this->generateItem($comment);
            return $this->sendResponse($response);
        } catch (ModelNotFoundException $e) {
            return $this->sendNotFoundResponse('comment_not_found');
        } catch (\Exception $e) {
            return $this->sendIseResponse($e->getMessage());
        }
    }

    public function showbyPost($id)
    {
        try {
            $comments=Comment::where('id_posting','=',
            $id)->get();
            $response = $this->generateCollection($comments);
            return $this->sendResponse($response); 
        } catch (ModelNotFoundException $e) {
            return $this->sendNotFoundResponse('comment_not_found');
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

            $comment = Comment::find($id);
            
            $comment->content=$request->get('content');
            $comment->id_user=$request->get('id_user');
            $comment->id_posting=$request->get('id_posting');
            $comment->save();

            $response = $this->generateItem($comment);

            return $this->sendResponse($response, 201);

        }catch (ModelNotFoundException $e) {
            return $this->sendNotFoundResponse('comment_not_found');
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
            $comment=Comment::find($id);
            $comment->delete();
            return response()->json('Success',200);
        } catch (ModelNotFoundException $e) {
            return $this->sendNotFoundResponse('comment_not_found');
        } catch (\Exception $e) {
            return $this->sendIseResponse($e->getMessage());
        }
    }
}
