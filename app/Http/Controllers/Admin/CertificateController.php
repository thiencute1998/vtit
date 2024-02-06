<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Admin\CertificateRepository;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    //
    private $repository;
    public function __construct(CertificateRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index(Request $request) {
        return $this->repository->index();
    }
    public function create() {
        return view('admin.pages.certificate.create');
    }

    public function store(Request $request) {
        $params = $request->all();
        $this->repository->store($params, $request);
        return redirect()->back()->with('add-success', 'Added certificate success !!!');
    }

    public function delete($id) {
        $this->repository->delete($id);
        return redirect()->back()->with('delete-success', 'Deleted certificate successfully !!!');
    }
}
