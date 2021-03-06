<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Transformers\UserTransformer;

use App\Exceptions\InvalidTokenException;
use App\Exceptions\InvalidCredentialException;

class UserRestController extends RestController
{
    protected $transformer = UserTransformer::class;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $response = $this->generateCollection($users);
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
            'name' => 'required',
            'password' => 'required',
            'phone_number' => 'required',
        ]);   

        try {

                $users = new User;

                $users->name=$request->get('name');
                $users->password=$request->get('password');
                $users->phone_number=$request->get('phone_number');
                $users->status="pending";
                $users->code=rand(1000, 9999);
                $users->save();

                $response = $this->generateItem($users);

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
            $users=User::find($id);
            $response = $this->generateItem($users);
            return $this->sendResponse($response);
        } catch (ModelNotFoundException $e) {
            return $this->sendNotFoundResponse('user_not_found');
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

            $users = User::find($id);
            
            $users->name=$request->get('name');
            $users->password=$request->get('password');
            $users->phone_number=$request->get('phone_number');
            $users->status=$request->get('status');
            $users->save();

            $response = $this->generateItem($users);

            return $this->sendResponse($response, 201);

        }catch (ModelNotFoundException $e) {
            return $this->sendNotFoundResponse('user_not_found');
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
            $users=User::find($id);
            $users->delete();
            return response()->json('Success',200);
        } catch (ModelNotFoundException $e) {
            return $this->sendNotFoundResponse('user_not_found');
        } catch (\Exception $e) {
            return $this->sendIseResponse($e->getMessage());
        }
    }

    public function mobileauthenticate(Request $request)
    {
        try {
            $user = $this->validateUser($request->get('phone_number'), $request->get('password'));

            $response = $this->generateItem($user,UserTransformer::class);

            return $this->sendResponse($response, 201);

        } catch (InvalidCredentialExcpetion $e) {
            return $this->sendNotAuthorizeResponse($e->getMessage());
        } catch (\Exception $e) {
            throw $e;
        }
    }

    public function validateUser($phone_number,$password)
    {
        try{
            $user = User::where('phone_number',$phone_number)->firstOrFail();

            if($user->password!=$password){
                throw new InvalidCredentialException();
            }

            return $user;
        } catch(ModelNotFoundException $e) {
            return $this->sendIseResponse($e->getMessage());
        }
    }
}
