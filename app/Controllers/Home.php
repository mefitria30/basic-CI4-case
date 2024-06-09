<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\TestimonialModel;

class Home extends BaseController
{
    public function __construct()
    {
        $this->TestimonialModel = new TestimonialModel();
    }

    public function index(): string
    {
        $data = [
            'title' => 'Dashboard',
            'testimonial' =>$this->TestimonialModel->getTestimonial(),
        ];
        
        return view('welcome_message', $data);
    }
}