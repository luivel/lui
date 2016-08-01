<?php namespace Luivel\Lui\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Luivel\Lui\Demo;

class LuiController extends Controller
{
    public function __construct()
    {
        $this->middleware('luiAuth', ['except' => ['login']]);
        $this->middleware('luiGuest', ['only' => ['login']]);
    }

    public function index(Request $request)
    {
        $routes = Demo::all();

        return view("lui::index", compact('routes'));
    }

    public function login(Request $request)
    {
        return view("lui::login");
    }

    public function loginProcess(Request $request)
    {
        if ($request->get('username') == env('LUI_USER') && $request->get('password') == env('LUI_PASS')) {
            session()->put('lui', true);
        }

        return redirect()->route('lui-dashboard');
    }

    public function create(Request $request)
    {
        Demo::create(['name' => 'test']);

        return back();
    }
}
