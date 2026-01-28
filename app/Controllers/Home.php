<?php

namespace App\Controllers;

use App\Models\ProjectModel;

class Home extends BaseController
{
    public function index(): string
    {
        try {
            $projectModel = new ProjectModel();
            $projects = $projectModel->where('status', 'active')->orderBy('display_order', 'ASC')->findAll();
        } catch (\Exception $e) {
            
            $projects = [];
        }
        
        return view('welcome_message', ['projects' => $projects]);
    }

    public function hobbies(): string
{
    return view('pages/hobbies');
}
}