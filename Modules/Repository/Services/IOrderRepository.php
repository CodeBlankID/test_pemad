<?php

namespace Modules\Repository\Services;

use Illuminate\Http\Request;


interface IOrderRepository
{
    public function getData();
    public function statusUpdate(Request $req);
}