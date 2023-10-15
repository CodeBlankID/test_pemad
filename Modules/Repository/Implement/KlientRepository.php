<?php

namespace Modules\Repository\Implement;

use Modules\Model\Klient;
use Illuminate\Support\Facades\DB;
use Modules\Repository\Services\IKlientRepository;

class KlientRepository implements IKlientRepository
{
    private $klientmodel;
    function __construct(Klient $modelklient)
    {
        $this->klientmodel = $modelklient;
    }
    function getData()
    {
        $result = $this->klientmodel
        ->join('users as b', 'b.id', '=', 'a.member_id')
        ->join('project as c', 'c.id', '=', 'a.project_id')
        ->join('users as d', 'd.id', '=', 'c.user_id')
        ->join('lang as e', 'c.lang_id', '=', 'e.id')
        ->join('order as f', 'a.id', '=', 'f.klient_id')
        ->select('c.*', 'b.name as klient_name', "d.name as owner_project", "e.name as bahasa")
        ->where("a.is_deleted", "=", "0")
        ->where("f.status", "=", "accept")
        ->get();
        return $result;
    }
}