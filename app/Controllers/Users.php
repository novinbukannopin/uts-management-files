<?php

namespace App\Controllers;

use App\Models\ModelUser;
use CodeIgniter\RESTful\ResourceController;

class Users extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    protected $helpers = ['custom_helper'];

    public function __construct()
    {
        $this->users = new ModelUser();
    }
    public function index()
    {
        $keyword = $this->request->getGet('keyword');
        $data = $this->users->getPaginated(5, $keyword);
        // dd($data);
        return view('users/index', $data);
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
        return view('users/new');
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $data = $this->request->getPost();
        $password = password_hash($data['password_user'], PASSWORD_BCRYPT);
        $data['password_user'] = $password;
        $this->users->insert($data);
        return redirect()->to(site_url('users'))->with('success', 'Your data has been saved succesfullyy');
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
