<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use Socialite;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('welcomepage.welcomepage');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }



    public  function redirectToFaceBookProvider()
    {
            return Socialite::driver('facebook')->redirect();
            
    }

    public function HandelFaceBookProviderCallback()
    {
      $user=Socialite::driver('facebook')->user();
      dd($user);
      // $userInfo=['name'=>$user->name,
      //                  'email'=>$user->email,
      //                  'password'=>$user->token,
      //                  'first_name'=>$user->user['first_name'],
      //                   'last_name'=>$user->user['last_name'],                        
      //                 ];
      //       $userDB=User::where('email',$user->email)->first();
      //       if(!is_null($userDB))
      //       {
      //           Auth::login($userDB);
      //       }
      //       else{
      //         $newUser=User::create($userInfo);
      //         Auth::login($newUser);
      //       }
      //       return redirect('/');
            
            
    }


    public function redirectToGoogleProvider()
  {
        return Socialite::driver('google')->redirect();

    
  }
  public function HandelGoogleProviderCallback()
  {
    $user=Socialite::driver('google')->user();
    $userInfo=['name'=>$user->name,
               'email'=>$user->email,
               'password'=>$user->token,
               'first_name'=>' ',
                'last_name'=>' ',
               
              ];
    $userDB=User::where('email',$user->email)->first();
    if(!is_null($userDB))
    {
        Auth::login($userDB);
    }
    else{
      $newUser=User::create($userInfo);
      Auth::login($newUser);
    }
    return redirect('/');
  }


    public function redirectToLinkedinProvider()
  {
        return Socialite::driver('linkedin')->redirect();

    
  }
  public function HandelLinkedinProviderCallback()
  {
    $user=Socialite::driver('linkedin')->user();
    $userInfo=['name'=>$user->name,
               'email'=>$user->email,
               'password'=>$user->token,
               'first_name'=>' ',
                'last_name'=>' ',
               
              ];
    $userDB=User::where('email',$user->email)->first();
    if(!is_null($userDB))
    {
        Auth::login($userDB);
    }
    else{
      $newUser=User::create($userInfo);
      Auth::login($newUser);
    }
    return redirect('/');
  }


      public function redirectToTwitterinProvider()
  {
        return Socialite::driver('twitter')->redirect();

    
  }
  public function HandelTwitterProviderCallback()
  {
    $user=Socialite::driver('twitter')->user();
    $userInfo=['name'=>$user->name,
               'email'=>$user->email,
               'password'=>$user->token,
               'first_name'=>' ',
                'last_name'=>' ',
               
              ];
    $userDB=User::where('email',$user->email)->first();
    if(!is_null($userDB))
    {
        Auth::login($userDB);
    }
    else{
      $newUser=User::create($userInfo);
      Auth::login($newUser);
    }
    return redirect('/');
  }




}
