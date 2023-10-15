<?php

namespace Modules\Controllers\front;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Repository\Services\IUserRepository;
use Modules\Repository\Services\IProjectRepository;

class IndexController extends Controller
{
    private $projectrepository;
    private $userrepository;
    public function __construct(IProjectRepository $project, IUserRepository $user)
    {
        $this->projectrepository = $project;
        $this->userrepository = $user;

    }
    protected function index()
    {
        $result["dataProject"] = $this->projectrepository->getData();
        return view("front.index", $result);
    }
    function login()
    {
        return view("front.login");
    }
    function ActionLogin(Request $req)
    {
        $data = [
            'email' => $req->input('email'),
            'password' => $req->input('password'),
        ];

        if (Auth::Attempt($data) && Auth::user()->level == "member")
        {
            return redirect('profile');
        }
        else
        {
            return redirect('login');
        }
    }
    function registration()
    {
        return view("front.registration");
    }
    function submitregistration(Request $req)
    {
        $this->userrepository->storeData($req);
        return redirect("login");
    }
    function profile()
    {
        $data["dataHistoryOrder"] = DB::table("klien as a")
        ->join('users as b', 'b.id', '=', 'a.member_id')
        ->join('project as c', 'c.id', '=', 'a.project_id')
        ->join('users as d', 'd.id', '=', 'c.user_id')
        ->join('lang as e', 'c.lang_id', '=', 'e.id')
        ->join('order as f', 'a.id', '=', 'f.klient_id')
        ->select('c.*', 'b.name as klient_name', "d.name as owner_project", "e.name as bahasa")
        ->where("a.is_deleted", "=", "0")
        ->where("a.member_id", "=", Auth::user()->id)
        ->get();

        return view("front.profile", $data);
    }
    function checkout($id)
    {
        if (!Auth::check())
        {
            return redirect("login");
        }
        $data["dataproject"] = DB::table("project")->where("id", "=", $id)->first();
        return view("front.checkout", $data);
    }
    function ordersubmit(Request $req)
    {
        $resultId = DB::table("klien")->insertGetId([
            'member_id' => Auth::user()->id,
            'project_id' => $req["project_id"]
        ]);
        if ($resultId)
        {
            DB::table("order")->insert([
                'klient_id' => $resultId,
                'tagihan' => $req["field"],
                'payment' => $req["field"],
                'shipping' => $req["shipping"],
                'status' => "pending",
            ]);
        }
        return redirect("confirmation");
    }
    function confirmation()
    {
        return view("front.confirmation");
    }
    function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}