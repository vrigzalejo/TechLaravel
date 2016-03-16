<?php
/**
 * Created by PhpStorm.
 * User: brigido.alejo
 * Date: 3/16/2016
 * Time: 5:12 AM
 */

namespace TechTest\Repositories\Contracts;


interface TechTestInterface
{
    public function all($columns = array('*'));

    public function paginate($perPage = 15, $columns = array('*'));

    public function create(array $data);

    public function update(array $data, $id);

    public function delete($id);

    public function find($id, $columns = array('*'));

    public function findBy($field, $value, $columns = array('*'));
}