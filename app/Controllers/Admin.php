<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\ContactModel;
use App\Models\ProjectModel;

class Admin extends BaseController
{
    public function login()
    {
        helper(['form']);

        $method = strtoupper($this->request->getMethod());
        
        if ($method === 'POST') {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            $adminModel = new AdminModel();
            $admin = $adminModel->where('username', $username)->first();

            if ($admin && password_verify($password, $admin['password'])) {
                session()->set('admin_id', $admin['id']);
                session()->set('admin_username', $admin['username']);
                session()->set('isAdmin', true);
                return redirect()->to('/admin/dashboard');
            } else {
                return view('admin/login', ['error' => 'Invalid username or password']);
            }
        }

        return view('admin/login');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }

    public function dashboard()
    {
        $admin_id = session()->get('admin_id');
        
        if (!$admin_id) {
            return redirect()->to('/admin/login');
        }

        $contactModel = new ContactModel();
        $projectModel = new ProjectModel();
        
        $contacts = $contactModel->orderBy('created_at', 'DESC')->findAll();
        $projects = $projectModel->orderBy('display_order', 'ASC')->findAll();

        return view('admin/dashboard', ['contacts' => $contacts, 'projects' => $projects]);
    }

    public function updateContact($id)
    {
        $contactModel = new ContactModel();
        
        $data = [
            'name'       => $this->request->getPost('name'),
            'email'      => $this->request->getPost('email'),
            'subject'    => $this->request->getPost('subject'),
            'message'    => $this->request->getPost('message'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        if ($contactModel->update($id, $data)) {
            session()->setFlashdata('success', 'Contact message updated successfully!');
        } else {
            session()->setFlashdata('error', 'Failed to update contact message.');
        }

        return redirect()->to('/admin/dashboard');
    }

    // Delete contact
    public function deleteContact($id)
    {
        $contactModel = new ContactModel();
        $contactModel->delete($id);

        return redirect()->to('/admin/dashboard');
    }

    // Create project
    public function createProject()
    {
        if ($this->request->getMethod() === 'POST') {
            $projectModel = new ProjectModel();
            
            $data = [
                'title'        => $this->request->getPost('title'),
                'description'  => $this->request->getPost('description'),
                'date_range'   => $this->request->getPost('date_range'),
                'logo_path'    => $this->request->getPost('logo_path'),
                'project_url'  => $this->request->getPost('project_url'),
                'technologies' => $this->request->getPost('technologies'),
                'status'       => $this->request->getPost('status') ?? 'active',
                'display_order' => $this->request->getPost('display_order') ?? 0,
            ];

            if ($projectModel->insert($data)) {
                session()->setFlashdata('success', 'Project created successfully!');
            } else {
                session()->setFlashdata('error', 'Failed to create project.');
            }

            return redirect()->to('/admin/dashboard#projects');
        }
    }

    // Update project
    public function updateProject($id)
    {
        $projectModel = new ProjectModel();
        
        $data = [
            'title'        => $this->request->getPost('title'),
            'description'  => $this->request->getPost('description'),
            'date_range'   => $this->request->getPost('date_range'),
            'logo_path'    => $this->request->getPost('logo_path'),
            'project_url'  => $this->request->getPost('project_url'),
            'technologies' => $this->request->getPost('technologies'),
            'status'       => $this->request->getPost('status'),
            'display_order' => $this->request->getPost('display_order'),
        ];

        if ($projectModel->update($id, $data)) {
            session()->setFlashdata('success', 'Project updated successfully!');
        } else {
            session()->setFlashdata('error', 'Failed to update project.');
        }

        return redirect()->to('/admin/dashboard#projects');
    }

    // Delete project
    public function deleteProject($id)
    {
        $projectModel = new ProjectModel();
        $projectModel->delete($id);
        session()->setFlashdata('success', 'Project deleted successfully!');

        return redirect()->to('/admin/dashboard#projects');
    }

    // Duplicate project
    public function duplicateProject($id)
    {
        $projectModel = new ProjectModel();
        $project = $projectModel->find($id);

        if (!$project) {
            session()->setFlashdata('error', 'Project not found.');
            return redirect()->to('/admin/dashboard#projects');
        }

        // Create a copy with updated title and order
        $data = [
            'title'        => $project['title'] . ' (Copy)',
            'description'  => $project['description'],
            'date_range'   => $project['date_range'],
            'logo_path'    => $project['logo_path'],
            'project_url'  => $project['project_url'],
            'technologies' => $project['technologies'],
            'status'       => $project['status'],
            'display_order' => $project['display_order'] + 1,
        ];

        if ($projectModel->insert($data)) {
            session()->setFlashdata('success', 'Project duplicated successfully!');
        } else {
            session()->setFlashdata('error', 'Failed to duplicate project.');
        }

        return redirect()->to('/admin/dashboard#projects');
    }
}
