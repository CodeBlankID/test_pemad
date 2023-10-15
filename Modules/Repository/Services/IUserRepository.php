<?php

namespace Modules\Repository\Services;

use Modules\Model\User;
use Illuminate\Http\Request;


interface IUserRepository
{
    public function getData();
    public function getDataByid($id);
    public function editData($id, Request $req);
    public function deleteData($id);
    public function permanentDeleteData($id);
    public function storeData(Request $req);
}