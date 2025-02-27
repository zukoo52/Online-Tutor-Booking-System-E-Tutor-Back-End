<?php

namespace Modules\BidProposalManagement\app\Repositaries;



interface BidProposalInterface
{
    public function index();
    public function store($data);
    public function update($data, $id);
    public function delete($id);

}
