<?php

namespace Modules\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Repository\Services\IOrderRepository;

class OrderController extends Controller
{
    private $orderrepository;
    public function __construct(IOrderRepository $order)
    {
        $this->orderrepository = $order;
    }
    protected function index()
    {
        $items["result"] = $this->orderrepository->getData();
        $data["order_side"] = "side-menu--active";
        $data['breadcrumb'] = "Order";
        $data["view"] = view('admin.order', $items)->render();
        return view("admin", $data);
    }

    function editOrderStatus(Request $req)
    {
        $this->orderrepository->statusUpdate($req);
        return redirect("admins/order");
    }
}