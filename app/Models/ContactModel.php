<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactModel extends Model
{
    protected $table            = 'contacts';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['name', 'email', 'subject', 'message'];


    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';


    protected $validationRules = [
        'name'    => 'required|min_length[3]|max_length[255]',
        'email'   => 'required|valid_email|max_length[255]',
        'subject' => 'required|min_length[3]|max_length[255]',
        'message' => 'required|min_length[10]',
    ];

    protected $validationMessages = [
        'name' => [
            'required'   => 'Name is required',
            'min_length' => 'Name must be at least 3 characters long',
        ],
        'email' => [
            'required'    => 'Email is required',
            'valid_email' => 'Please provide a valid email address',
        ],
        'subject' => [
            'required'   => 'Subject is required',
            'min_length' => 'Subject must be at least 3 characters long',
        ],
        'message' => [
            'required'   => 'Message is required',
            'min_length' => 'Message must be at least 10 characters long',
        ],
    ];

    protected $skipValidation = false;
}