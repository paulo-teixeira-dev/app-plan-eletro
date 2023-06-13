<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use App\Helpers\Api as ApiHelper;
use App\Interfaces\EletroRepositoryInterface;
use App\Models\Eletro;

class EletroRepository implements EletroRepositoryInterface
{
    private $apiHelper;
    private $eletroModel;

    public function __construct(ApiHelper $apiHelper, Eletro $eletroModel)
    {
        $this->apiHelper = $apiHelper;
        $this->eletroModel = $eletroModel;
    }

    public function listing()
    {
        try {
            $eletro = $this->eletroModel->all();
            return $this->apiHelper->response($eletro);
        } catch (\Exception $e) {
            return $this->apiHelper->response(null, 'er', null, 500);
        }
    }

    public function store($eletro)
    {
        DB::beginTransaction();
        try {
            /** criação **/
            $this->eletroModel->create($eletro);
            DB::commit();
            return $this->apiHelper->response();
        } catch (\Exception $e) {
            DB::rollBack();
            return $this->apiHelper->response(null, 'er', null, 500);
        }
    }
}
