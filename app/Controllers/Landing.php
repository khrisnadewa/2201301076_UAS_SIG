<?php
namespace App\Controllers;
use App\Models\RumahSakitModel;

class Landing extends BaseController
{
    public function index()
    {
        $model = new RumahSakitModel();
        $data['rumah_sakit'] = $model->findAll();
        return view('landing_view', $data);
    }
}
