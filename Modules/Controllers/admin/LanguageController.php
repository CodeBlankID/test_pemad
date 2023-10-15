<?php

namespace Modules\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\Repository\Services\ILanguageRepository;

class LanguageController extends Controller
{
    private $langmodel;
    public function __construct(ILanguageRepository $lang)
    {
        $this->langmodel = $lang;
    }
    public function index()
    {

        $items["result"] = $this->langmodel->getData();
        $data["language_side"] = "side-menu--active";
        $data['breadcrumb'] = "Language";
        $data["view"] = view('admin.language', $items)->render();
        return view("admin", $data);
    }
    function addLang()
    {
        $data['breadcrumb'] = "Language";
        $data["language_side"] = "side-menu--active";
        $data["view"] = view('admin.form.language')->render();
        return view("admin", $data);
    }
    function doAddLang(Request $req)
    {
        $this->langmodel->storeData($req);
        return redirect('admins/lang');
    }
    function editLang($id)
    {
        $items["result"] = $this->langmodel->getDataByid($id);
        $data['breadcrumb'] = "Language";
        $data["language_side"] = "side-menu--active";
        $data["view"] = view('admin.form.language', $items)->render();
        return view("admin", $data);
    }
    function doEditLang($id, Request $req)
    {
        $this->langmodel->editData($id, $req);
        return redirect('admins/lang');
    }
    function deleteLang($id)
    {
        $this->langmodel->deleteData($id);
        return redirect('admins/lang');
    }
}