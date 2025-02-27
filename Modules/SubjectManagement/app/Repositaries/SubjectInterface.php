<?php

namespace Modules\SubjectManagement\app\Repositaries;



interface SubjectInterface
{
     public function index();
     public function store($data);
     public function update($data, $id);
     public function delete($id);

}
