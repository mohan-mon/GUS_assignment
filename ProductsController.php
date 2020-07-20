<?php

namespace Arden;

class ProductsController extends BaseController
{
    public function __construct()
    {
        $model = new ProductsModel();
        $this->modelData = $model->getData();
    }

    public function getModelData() {
        return $this->modelData;
    }
}