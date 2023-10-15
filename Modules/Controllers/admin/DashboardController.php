<?php

namespace Modules\Controllers\admin;

use App\Http\Controllers\Controller;
use Modules\Repository\Services\IKlientRepository;
use Modules\Repository\Services\IOrderRepository;
use Modules\Repository\Services\IProjectRepository;
use Modules\Repository\Services\IUserRepository;

class DashboardController extends Controller
{
    public function __construct()
    {
    }
    protected function index(IKlientRepository $klient, IOrderRepository $order, IProjectRepository $project, IUserRepository $user)
    {
        $data["client"] = Count($klient->getData());
        $data["order"] = Count($order->getData());
        $data["project"] = Count($project->getData());
        $data["user"] = Count($user->getData());
        $data["view"] = view('admin.index', $data)->render();
        $data['breadcrumb'] = "Dashboard";
        $data["dashboard_side"] = "side-menu--active";
        return view("admin", $data);
    }
}