<?php

namespace App\Models;

use CodeIgniter\Model;

class Categories extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'categories';
    protected $primaryKey       = 'id_categories';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = false;
    protected $allowedFields    = ['name_categories', 'detail_categories'];

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

    public function import_data($categories)
    {
        $jumlah = count($categories);
        dd($categories);
        // die;
        // if ($jumlah > 0) {
        // $this->insertBatch($categories);
        // }
        // var_dump($categories);
        // die;
    }

    function getPaginated($num, $keyword = null)
    {
        $builder =  $this->builder();
        if ($keyword != '') {
            $builder->like('name_categories', $keyword);
            $builder->orLike('detail_categories', $keyword);
        }
        return [
            'categories' => $this->paginate($num),
            'pager' => $this->pager
        ];
    }
}
