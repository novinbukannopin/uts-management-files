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
    protected $helpers = ['custom_helper'];

    public function index()
    {
        $keyword = $this->request->getGet('keyword');
        $data = $this->model->getPaginated(5, $keyword);
        $data['keyword'] = $keyword;
        // dd($data);
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
        // dd($data);
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
        return redirect()->to(site_url('categories'))->with('success', 'Your data has been update succesfullyy');
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
        $this->model->delete($id);
        return redirect()->to(site_url('categories'))->with('success', 'Data has been success deleted');
    }

    public function trash()
    {
        $data['categories'] = $this->model->onlyDeleted()->findAll();
        return view('categories/trash', $data);
    }

    public function force($id = null)
    {
        if ($id != null) {
            $this->model->delete($id, true);
            return redirect()->to(site_url('categories/trash'))->with('success', 'Data berhasil di hapus permanen');
        } else {
            $this->model->purgeDeleted();
            return redirect()->to(site_url('categories/trash'))->with('success', 'Data Trash berhasil di hapus permanen');
        }
    }

    public function restore($id = null)
    {
        $this->db = \Config\Database::connect();
        if ($id != null) {
            $this->db->table('categories')
                ->set('deleted_at', null, true)
                ->where(['id_categories' => $id])
                ->update();
        } else {
            // restore all
            $this->db->table('categories')
                ->set('deleted_at', null, true)
                ->where('deleted_at IS NOT NULL', null, false)
                ->update();
        }
        if ($this->db->affectedRows() > 0) {
            return redirect()->to(site_url('categories'))->with('success', 'Data berhasil di restore');
        }
    }
}
