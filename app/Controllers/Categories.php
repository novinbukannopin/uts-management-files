<?php

namespace App\Controllers;

use App\Models\Categories as ModelsCategories;
use CodeIgniter\RESTful\ResourcePresenter;

class Categories extends ResourcePresenter
{
    /**
     * Present a view of resource objects
     *
     * @return mixed
     */
    // public function __construct()
    // {
    //     $this->categories = new ModelsCategories();
    // }

    protected $modelName = '\App\Models\Categories';

    public function index()
    {
        $data['categories'] = $this->model->findAll();
        return view('categories/index', $data);
    }

    /**
     * Present a view to present a specific resource object
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Present a view to present a new single resource object
     *
     * @return mixed
     */
    public function new()
    {
        return view('categories/new');
    }

    /**
     * Process the creation/insertion of a new resource object.
     * This should be a POST.
     *
     * @return mixed
     */
    public function create()
    {
        $data = $this->request->getPost();
        $this->model->insert($data);
        return redirect()->to(site_url('categories'))->with('success', 'Your data has been saved succesfullyy');
    }

    /**
     * Present a view to edit the properties of a specific resource object
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $categories = $this->model->where('id_categories', $id)->first();
        if (is_array($categories)) {
            $data['categories'] = $categories;
            return view('categories/edit', $data);
            // dd($data);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    /**
     * Process the updating, full or partial, of a specific resource object.
     * This should be a POST.
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $data = $this->request->getPost();
        $this->model->update($id, $data);
        // dd($data);
        return redirect()->to(site_url('categories'));
    }

    /**
     * Present a view to confirm the deletion of a specific resource object
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function remove($id = null)
    {
        //
    }

    /**
     * Process the deletion of a specific resource object
     *
     * @param mixed $id
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        //
    }
}
