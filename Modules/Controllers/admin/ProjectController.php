<?php

namespace Modules\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\Repository\Services\IProjectRepository;

class ProjectController extends Controller
{
    private $projectRepository;
    public function __construct(IProjectRepository $project)
    {
        $this->projectRepository = $project;
    }
    public function index()
    {
        $items["result"] = $this->projectRepository->getData();
        $data["project_side"] = "side-menu--active";
        $data['breadcrumb'] = "Project";
        $data["view"] = view('admin.project', $items)->render();
        return view("admin", $data);
    }
    function addProject()
    {
        $items["userData"] = $this->projectRepository->getDataUser();
        $items["langData"] = $this->projectRepository->getDataLang();
        $data['breadcrumb'] = "Project";
        $data["project_side"] = " side-menu--active ";
        $data["view"] = view('admin.form.project', $items)->render();
        return view("admin", $data);
    }
    function doAddProject(Request $req)
    {
        $this->projectRepository->storeData($req);
        return redirect('admins/project');
    }
    function editProject($id)
    {
        $items["result"] = $this->projectRepository->getDataByid($id);
        $items["langData"] = $this->projectRepository->getDataLang();
        $data['breadcrumb'] = "Project";
        $data["project_side"] = " side-menu--active ";
        $data["view"] = view('admin.form.project', $items)->render();
        return view("admin", $data);
    }
    function doEditProject($id, Request $req)
    {
        $this->projectRepository->editData($id, $req);
        return redirect('admins/project');
    }
    function deleteProject($id)
    {
        $this->projectRepository->deleteData($id);
        return redirect('admins/project');
    }
}