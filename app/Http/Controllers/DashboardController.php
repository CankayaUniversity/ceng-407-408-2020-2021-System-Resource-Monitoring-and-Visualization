<?php

namespace App\Http\Controllers;

use App\Models\Server;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // home
    public function home()
    {
        $breadcrumbs = [
            ['link' => "home", 'name' => "Home"], ['name' => "Servers"]
        ];

        $servers = Server::get();

        return view('/content/home', [
            'breadcrumbs' => $breadcrumbs,
            'servers'     => $servers,
        ]);
    }
}
