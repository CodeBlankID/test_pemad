<?php

namespace Modules\Repository\Implement;

use Modules\Model\User;
use Illuminate\Http\Request;
use Modules\Repository\Services\IUserRepository;


class UserRepository implements IUserRepository
{
    private $usermodel;
    function __construct(User $modeluser)
    {
        $this->usermodel = $modeluser;
    }
    function getData()
    {
        return $this->usermodel->where("is_deleted", "=", "0")->get();

    }
    function getDataByid($id)
    {
        return $this->usermodel->where("id", $id)->first();

    }
    function storeData(Request $req)
    {
        $result = $this->usermodel->create([
            'name' => $req["nama"],
            'email' => $req["email"],
            'password' => $req["password"],
            'address' => $req["address"],
            'no_hp' => $req["no_hp"],
            'level' => $req["level"]

        ]);
        return $result;
    }
    function editData($id, Request $req)
    {
        $user = $this->usermodel->findOrFail($id);
        if (empty($req["password"]))
        {
            $resultEdit = $user->update([
                'name' => $req["nama"],
                'email' => $req["email"],
                'address' => $req["address"],
                'no_hp' => $req["no_hp"],
                'level' => $req["level"]

            ]);
        }
        else
        {
            $resultEdit = $user->update([
                'name' => $req["nama"],
                'email' => $req["email"],
                'password' => $req["password"],
                'address' => $req["address"],
                'no_hp' => $req["no_hp"],
                'level' => $req["level"]
            ]);
        }
        return $resultEdit;
    }
    function deleteData($id)
    {
        $datadelete = $this->usermodel->findOrFail($id);
        $resultDelete = $datadelete->update([
            'is_deleted' => "1"
        ]);
        return $resultDelete;
    }
    function permanentDeleteData($id)
    {
        $datadelete = $this->usermodel->findOrFail($id);
        $datadelete->delete();
        return $datadelete;
    }
}