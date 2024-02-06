<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Admin\SlideRepository;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    //
    private $repository;
    public function __construct(SlideRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index(Request $request) {
        return $this->repository->index();
    }
    public function create() {
        return view('admin.pages.slide.create');
    }

    public function store(Request $request) {
        $params = $request->all();
        $this->repository->store($params, $request);
        return redirect()->back()->with('add-success', 'Added slide success !!!');
    }

    public function delete($id) {
        $this->repository->delete($id);
        return redirect()->back()->with('delete-success', 'Deleted slide successfully !!!');
    }
}
