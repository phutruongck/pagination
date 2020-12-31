<?php

namespace App\Http\Controllers;

use App\Models\User;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $currentPage = isset($_GET['page']) ? intval($_GET['page']) : 1;
        $all = User::paginate(10, ['*'], 'page', $currentPage);

        return view('home', ['data' => $all, 'totalPage' => 10, 'currentPage' => $currentPage]);
    }
}
