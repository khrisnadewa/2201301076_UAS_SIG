<?php

namespace App\Controllers;

use App\Models\RumahSakitModel;
use CodeIgniter\Controller;

class RumahSakit extends Controller
{
    public function index()
    {
        $model = new RumahSakitModel();
        $data['rumahsakit'] = $model->getRumahSakit();
        $data['title'] = "Data Rumah Sakit";

        echo view('templates/header', $data);
        echo view('rumahsakit/index', $data);
        echo view('templates/footer');
    }

    public function create()
    {
        $data['title'] = "Tambah Rumah Sakit";

        echo view('templates/header', $data);
        echo view('rumahsakit/create');
        echo view('templates/footer');
    }

    public function store()
    {
        $model = new RumahSakitModel();

        $data = [
            'nama' => $this->request->getPost('nama'),
            'lat' => $this->request->getPost('lat'),
            'long' => $this->request->getPost('long')
        ];

        $model->save($data);
        return redirect()->to('/rumahsakit');
    }

    public function edit($id_rs)
    {
        $model = new RumahSakitModel();
        $data['rumahsakit'] = $model->getRumahSakit($id_rs);
        $data['title'] = "Edit Rumah Sakit";

        echo view('templates/header', $data);
        echo view('rumahsakit/edit', $data);
        echo view('templates/footer');
    }

    public function update($id_rs)
    {
        $model = new RumahSakitModel();

        $data = [
            'nama' => $this->request->getPost('nama'),
            'lat' => $this->request->getPost('lat'),
            'long' => $this->request->getPost('long')
        ];

        $model->update($id_rs, $data);
        return redirect()->to('/rumahsakit');
    }

    public function delete($id_rs)
    {
        $model = new RumahSakitModel();
        $model->delete($id_rs);
        return redirect()->to('/rumahsakit');
    }
}
