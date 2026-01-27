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
            // If projects table doesn't exist, return empty array
            $projects = [];
        }
        
        return view('welcome_message', ['projects' => $projects]);
    }

    // ADD THIS METHOD:
    public function hobbies(): string
{
    return view('pages/hobbies');
}
}