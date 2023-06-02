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
        $keyword = $this->request->getGet('keyword');
        $data = $this->files->getPaginated(5, $keyword);
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


    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $files = $this->files->find($id);
        if (is_array($files)) {
            $data['files'] = $files;
            $data['categories'] = $this->categories->findAll();
            return view('files/edit', $data);
            // dd($data);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $oldFiles = $this->files->where('id_files', $id)->first();
        unlink('uploads/files/' . $oldFiles['file']);
        $data = $this->request->getPost(['id_categories', 'name_files', 'detail_files', 'created_at', 'updated_at', 'file']);
        $file = $this->request->getFile('file');

        $fileName = $file->getRandomName();
        $file->move('uploads/files/', $fileName);
        $data['file'] = $fileName;

        $this->files->update($id, $data);
        return redirect()->to(site_url('files'))->with('success', 'Your data has been update succesfullyy');
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        //
        // add delete
        // files delete
        $oldFiles = $this->files->where('id_files', $id)->first();
        unlink('uploads/files/' . $oldFiles['file']);
        $this->files->delete($id);
        return redirect()->to(site_url('files'))->with('success', 'Data has been success deleted');
    }

    public function create()
    {
        if (!$this->validate([
            'file' => [
                'rules' => 'uploaded[file]|mime_in[file,image/jpg,image/jpeg,image/gif,image/png]|max_size[file,2048]',
                'errors' => [
                    'uploaded' => 'Harus Ada File yang diupload',
                    'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png',
                    'max_size' => 'Ukuran File Maksimal 2 MB'
                ]
            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $data = $this->request->getPost(['id_categories', 'name_files', 'detail_files', 'created_at', 'updated_at']);
        $file = $this->request->getFile('file');
        // dd($data);
        $fileName = $file->getRandomName();
        $file->move('uploads/files/', $fileName);
        $data['file'] = $fileName;
        // dd($data);
        $this->files->insert($data);
        return redirect()->to(site_url('files'))->with('success', 'Your data has been saved succesfullyy');
    }
}
