<?php

namespace Modules\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\Model\User;
use Modules\Repository\Services\IUserRepository;


class UserController extends Controller
{
    private $userrepository;
    public function __construct(IUserRepository $user)
    {
        $this->userrepository = $user;
    }

    public function index()
    {
        $items["result"] = $this->userrepository->getData();
        $data["user_side"] = "side-menu--active";
        $data['breadcrumb'] = "User";
        $data["view"] = view('admin.users', $items)->render();
        return view("admin", $data);
    }
    function addUser()
    {
        $data['breadcrumb'] = "User";
        $data["user_side"] = " side-menu--active ";
        $data["view"] = view('admin.form.user')->render();
        return view("admin", $data);
    }
    function doAddUser(Request $req)
    {
        $this->userrepository->storeData($req);
        return redirect('admins/user');
    }
    function editUser($id)
    {
        $items["result"] = $this->userrepository->getDataByid($id);
        $data['breadcrumb'] = "User";
        $data["user_side"] = " side-menu--active ";
        $data["view"] = view('admin.form.user', $items)->render();
        return view("admin", $data);
    }

    function doEditUser($id, Request $req)
    {
        $this->userrepository->editData($id, $req);
        return redirect('admins/user');
    }
    function deleteUser($id)
    {
        $this->userrepository->deleteData($id);
        return redirect('admins/user');
    }
}