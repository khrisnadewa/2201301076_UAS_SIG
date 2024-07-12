<?php
namespace App\Controllers;

use App\Models\RumahSakitModel;

class Admin extends BaseController
{
    public function index()
    {
        $model = new RumahSakitModel();
        $data['rumah_sakit'] = $model->findAll();
        return view('admin_dashboard', $data);
    }

    public function create()
    {
        return view('admin_create');
    }

    public function store()
    {
        $model = new RumahSakitModel();
        $model->save([
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'latitude' => $this->request->getPost('latitude'),
            'longitude' => $this->request->getPost('longitude')
        ]);
        return redirect()->to('/admin');
    }

    public function edit($id)
    {
        $model = new RumahSakitModel();
        $data['rumah_sakit'] = $model->find($id);
        return view('admin_edit', $data);
    }

    public function update($id)
    {
        $model = new RumahSakitModel();
        $model->update($id, [
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'latitude' => $this->request->getPost('latitude'),
            'longitude' => $this->request->getPost('longitude')
        ]);
        return redirect()->to('/admin');
    }

    public function delete($id)
    {
        $model = new RumahSakitModel();
        $model->delete($id);
        return redirect()->to('/admin');
    }
}
