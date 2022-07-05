<?php

namespace App\Http\Controllers\Admin;

    use App\Http\Controllers\Controller;
    use App\Http\Requests\UserRequest;
    use App\Mail\User\PasswordMail;
    use App\Models\Category;
    use App\Models\User;
    use GrahamCampbell\ResultType\Success;
    use Illuminate\Auth\Events\Registered;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Support\Facades\Mail;
    use Illuminate\Support\Str;

    class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {

        $users=User::OrderbyDesc('id')->get();

        return view('admin.user.index',[
            'users'=>$users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $roles=User::getRoles();

        return  view('admin.user.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
//        $users=$request->validate([
//        'name'=>'required|unique:users,name',
//            'email'=>'required',
//            'password'=>'required'
//    ]);

        $data=$request->validated();
        $password=Str::random(10);
            $data['password']=Hash::make($password);

           $user= User::firstOrCreate(['email'=>$data['email']],$data);
        Mail::to($data['email'])->send(new PasswordMail($password));
        event(new Registered($user));




        return  redirect()->back()->withSuccess('User saqlandi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $users
     * @return \Illuminate\Http\Response
     */
    public function show(User $users)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User $user
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(User $user)
    {
        $roles=User::getRoles();

        return  view('admin.user.edit',[
            'users'=>$user,
            'roles'=>$roles
        ]);
    }

    /**
     * Update the specified resource in storage.


     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request,User $user)
    {
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->password=Hash::make($request->input('password'));
        $user->role=$request->role;
        $user->save();
        $user=$request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]);
        return  redirect()->back()->withSuccess('Ma\'lumot tahrirlandi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return  redirect()->back()->withSuccess('user ategoriya ochirildi');
    }
}
