<?php

namespace Modules\TutorJobManagement\app\Repositaries;



interface TutorJobInterface
{

    public function index();
    public function showData($data);
    public function store($data);
    public function update($data, $id);
    public function delete($id);
}
