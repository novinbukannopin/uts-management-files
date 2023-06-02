<?php
function userLogin()
{
    $db = \Config\Database::connect();
    return $db->table('users')->where('id_user', session('id_user'))->get()->getRow();
}

function countData($table)
{
    $db = \Config\Database::connect();
    return $db->table($table)->countAllResults();
}
function categoryFiles($table)
{
    $db = \Config\Database::connect();
    $data =  $db->table($table)->select('name_categories')->where('deleted_at', null)->get()->getResultArray();
    return $data;
}
