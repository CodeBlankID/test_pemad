<?php

namespace Modules\Repository\Services;

use Illuminate\Http\Request;


interface IProjectRepository
{
    public function getData();
    public function getDataByid($id);
    public function editData($id, Request $req);
    public function deleteData($id);
    public function permanentDeleteData($id);
    public function storeData(Request $req);
    public function getDataUser();
    public function getDataLang();
}