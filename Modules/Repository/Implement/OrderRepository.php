<?php

namespace Modules\Repository\Implement;

use Illuminate\Http\Request;
use Modules\Model\Order;
use Illuminate\Support\Facades\DB;
use Modules\Repository\Services\IOrderRepository;

class OrderRepository implements IOrderRepository
{
    private $ordermodel;
    function __construct(Order $ordermodel)
    {
        $this->ordermodel = $ordermodel;
    }
    function getData()
    {
        $result = $this->ordermodel
        ->join('klien as b', 'a.klient_id', '=', 'b.id')
        ->join('users as c', 'b.member_id', '=', 'c.id')
        ->select("a.*", "c.name as klien_name")
        ->where("a.is_deleted", "=", "0")
        ->get();
        return $result;
    }

    function statusUpdate(Request $req)
    {
        $result = $this->ordermodel->where('id', $req["id_order"])->update(['status' => $req["status"]]);
        return $result;
    }
}