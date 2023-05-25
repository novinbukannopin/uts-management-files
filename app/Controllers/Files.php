<?php

namespace App\Controllers;

use App\Models\Categories;
use App\Models\ModelFiles;
use CodeIgniter\RESTful\ResourceController;

class Files extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    // protected $modelName = '\App\Models\ModelFiles';
    protected $helpers = ['custom_helper'];

    public function __construct()
    {
        $this->categories = new Categories();
        $this->files = new ModelFiles();
    }

    public function index()
    {
        $data['files'] = $this->files->getDataAll();
        // dd($data['files']);
        return view("files/index", $data);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        $data['files'] = $this->categories->findAll();
        return view("files/new", $data);
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $data = $this->request->getPost();
        $this->files->insert($data);
        return redirect()->to(site_url('files'))->with('success', 'Your data has been saved succesfullyy');
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        //
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        //
    }
}
