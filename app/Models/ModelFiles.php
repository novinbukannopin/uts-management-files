<?php

namespace App\Models;

use CodeIgniter\Model;
use PDO;

class ModelFiles extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'files';
    protected $primaryKey       = 'id_files';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ["name_files", "detail_files", "img_files", 'id_categories', 'file'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    function getDataAll()
    {
        $builder = $this->db->table('files');
        $builder->join('categories', 'categories.id_categories = files.id_categories');
        $query = $builder->get();
        return $query->getResultArray();
    }

    function getCategories()
    {
        $builder = $this->db->table('categories')->where('deleted_at', null, false);
        $query = $builder->get();
        return $query->getResultArray();
    }

    function getPaginated($num, $keyword = null)
    {
        $builder =  $this->builder();
        $builder->join('categories', 'categories.id_categories = files.id_categories');
        if ($keyword != '') {
            $builder->like('name_categories', $keyword);
            $builder->orLike('name_files', $keyword);
            $builder->orLike('detail_files', $keyword);
        }
        return [
            'files' => $this->paginate($num),
            'categories' => $this->getCategories('categories'),
            'pager' => $this->pager
        ];
    }
}
