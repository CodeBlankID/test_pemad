<?php

namespace Modules\Repository\Implement;

use Modules\Model\User;
use Modules\Model\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Modules\Repository\Services\IUserRepository;
use Modules\Repository\Services\IProjectRepository;

class ProjectRepository implements IProjectRepository
{
    private $projectModel;
    function __construct(Project $modelProject)
    {
        $this->projectModel = $modelProject;
    }
    function getData()
    {
        $result = $this->projectModel
        ->join('users as b', 'project.user_id', '=', 'b.id')
        ->join('lang as c', 'project.lang_id', '=', 'c.id')
        ->select("project.*", "b.name as author_project", "c.name as language")
        ->where("project.is_deleted", "=", "0")
        ->get();
        return $result;

    }
    function getDataUser()
    {
        $result = DB::table('users')->where("is_deleted", "=", "0")->get();
        return $result;
    }
    function getDataLang()
    {
        $result = DB::table('lang')->where("is_deleted", "=", "0")->get();
        return $result;
    }
    function getDataByid($id)
    {
        return $this->projectModel->join('users as b', 'project.user_id', '=', 'b.id')
        ->select("project.*", "b.name as author_project")
        ->where("project.id", $id)->first();
    }
    function storeData(Request $req)
    {
        $result = $this->projectModel->create([
            'user_id' => $req["user_id"],
            'nama' => $req["nama"],
            'tipe' => $req["tipe"],
            'field' => $req["field"],
            'kategori' => $req["kategori"],
            'description' => $req["description"],
            'lang_id' => $req["lang_id"]

        ]);
        return $result;
    }
    function editData($id, Request $req)
    {
        $user = $this->projectModel->findOrFail($id);
        if (empty($req["password"]))
        {
            $resultEdit = $user->update([
                'user_id' => $req["user_id"],
                'nama' => $req["nama"],
                'tipe' => $req["tipe"],
                'field' => $req["field"],
                'kategori' => $req["kategori"],
                'description' => $req["description"],
                'lang_id' => $req["lang_id"]


            ]);
        }
        else
        {
            $resultEdit = $user->update([
                'user_id' => $req["user_id"],
                'nama' => $req["nama"],
                'tipe' => $req["tipe"],
                'field' => $req["field"],
                'kategori' => $req["kategori"],
                'description' => $req["description"],
                'lang_id' => $req["lang_id"]


            ]);
        }
        return $resultEdit;
    }
    function deleteData($id)
    {
        $datadelete = $this->projectModel->findOrFail($id);
        $resultDelete = $datadelete->update([
            'is_deleted' => 1
        ]);
        return $resultDelete;
    }
    function permanentDeleteData($id)
    {
        $datadelete = $this->projectModel->findOrFail($id);
        $datadelete->delete();
        return $datadelete;
    }
}