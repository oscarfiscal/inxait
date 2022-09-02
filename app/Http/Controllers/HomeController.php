<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\User as UserRequests;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $user;

    public function __construct(User $user)


    {
         $this->middleware('auth');
        $this->user = $user;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    /*     public function index()
    {
        return view('home');
    } */
    public function store(UserRequests $request)
    {
        $this->user->create($request->all());
       
        return view('welcome');
    }

    public function index()
    {
      
        $users = User::all();

        $userWin = $users->random();

        return view('welcome', compact('users', 'userWin'));
    }
    /* funcion para escoger un ganador  */

    public function export()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
}
