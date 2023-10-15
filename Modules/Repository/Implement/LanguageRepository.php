<?php

namespace Modules\Repository\Implement;

use Modules\Model\Language;
use Illuminate\Http\Request;
use Modules\Repository\Services\ILanguageRepository;

class LanguageRepository implements ILanguageRepository
{
    private $langmodel;
    function __construct(Language $langmodel)
    {
        $this->langmodel = $langmodel;
    }
    function getData()
    {
        return $this->langmodel->where("is_deleted", "=", "0")->get();

    }
    function getDataByid($id)
    {
        return $this->langmodel->where("id", $id)->first();
    }
    function storeData(Request $req)
    {
        $result = $this->langmodel->create([
            'name' => $req["nama"],
            'code' => $req["code"]
        ]);
        return $result;
    }
    function editData($id, Request $req)
    {
        $user = $this->langmodel->findOrFail($id);
        if (empty($req["password"]))
        {
            $resultEdit = $user->update([
                'name' => $req["nama"],
                'code' => $req["code"]
            ]);
        }
        else
        {
            $resultEdit = $user->update([
                'name' => $req["nama"],
                'code' => $req["code"]
            ]);
        }
        return $resultEdit;
    }
    function deleteData($id)
    {
        $datadelete = $this->langmodel->findOrFail($id);
        $resultDelete = $datadelete->update([
            'is_deleted' => 1
        ]);
        return $resultDelete;
    }
    function permanentDeleteData($id)
    {
        $datadeletePermanent = $this->langmodel->findOrFail($id);
        $datadeletePermanent->delete();
        return $datadeletePermanent;
    }
}