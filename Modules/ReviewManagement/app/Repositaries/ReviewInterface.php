<?php

namespace Modules\ReviewManagement\app\Repositaries;



interface ReviewInterface
{
    public function index();
    public function store($data);
    public function update($data, $id);
    public function delete($id);

}
