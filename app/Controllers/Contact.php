<?php

namespace App\Controllers;

use App\Models\ContactModel;

class Contact extends BaseController
{
    public function submit()
    {
        $model = new ContactModel();

        $data = [
            'name'    => $this->request->getPost('name'),
            'email'   => $this->request->getPost('email'),
            'subject' => $this->request->getPost('subject'),
            'message' => $this->request->getPost('message'),
        ];

        if ($model->save($data)) {
            return redirect()->to('/#contact')->with('success', 'Thank you for your message! I will get back to you soon.');
        } else {
            $errors = $model->errors();
            $errorMessage = implode(', ', $errors);
            return redirect()->to('/#contact')->with('error', 'Error: ' . $errorMessage);
        }
    }
}