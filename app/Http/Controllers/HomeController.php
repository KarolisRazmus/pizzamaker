<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allRolesArray = auth()->user()->rolesConnections->pluck('roles_id')->toArray();

        $rolesList = '';

        foreach($allRolesArray as $key=> $value) {

            $rolesList = $rolesList . ' ' . $value . ',';
        }

        $rolesList = substr($rolesList, 1, -1);

        $configuration['rolesList'] = $rolesList;

        return view('home', $configuration);
    }
}
