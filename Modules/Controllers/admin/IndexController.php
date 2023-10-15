<?php

namespace Modules\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Repository\Services\IKlientRepository;

class IndexController extends Controller
{
    private $klientrepository;
    public function __construct(IKlientRepository $klient)
    {
        $this->klientrepository = $klient;
    }
    protected function index()
    {
        return view("admin.login");
    }
    public function actionlogin(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data) && Auth::user()->level == "admin")
        {

            return redirect('admins/dashboard');
        }
        else
        {
            return redirect('admins');
        }
    }
    public function actionLogout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('admins');
    }
    protected function klient()
    {
        $items["result"] = $this->klientrepository->getData();
        $data["klient_side"] = "side-menu--active";
        $data['breadcrumb'] = "Klien";
        $data["view"] = view('admin.klient', $items)->render();
        return view("admin", $data);
    }
}