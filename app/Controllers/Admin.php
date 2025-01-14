<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\TestimonialModel;

class Admin extends BaseController
{
    public function __construct(){
        helper(['form']);
        $this->TestimonialModel = new TestimonialModel();
    }
    
    public function home(): string
    {
        $data = [
            'title' => 'Home',
            'content' => 'admin/home/index'
        ];
        
        return view('_layout/v_wrapper', $data);
    }

    public function testimonial(): string
    {
        $data = [
            'title' => 'Testimonial',
            'content' => 'admin/testimonial/index',
            'testimonial' =>$this->TestimonialModel->getTestimonial(),
        ];
        
        return view('_layout/v_wrapper', $data);
    }

    public function create(): string
    {
        $data = [
            'title' => 'Testimonial Create',
            'content' => 'admin/testimonial/create'
        ];
        
        return view('_layout/v_wrapper', $data);
    }

    public function store(): string
    {
        $image = $this->request->getFile('image');
        $name = $image->getRandomName();

        $data = [
            'image'     => $name,
            'username'  => $this->request->getPost('username'),
            'deskripsi' => $this->request->getPost('deskripsi'),
        ];

        $image->move(ROOTPATH . 'public/uploads', $name);

        $simpan = $this->TestimonialModel->insertTestimonial($data);
        // return redirect()->to(base_url('admin/testimonial'));

        $data2 = [
            'title' => 'Testimonial Create',
            'content' => 'admin/testimonial/index'
        ];
        return view('_layout/v_wrapper', $data2);
    }
}