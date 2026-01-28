<?php

namespace App\Models;

use CodeIgniter\Model;

class ProjectModel extends Model
{
    protected $table            = 'projects';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['title', 'description', 'date_range', 'logo_path', 'project_url', 'technologies', 'status', 'display_order'];

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    protected $validationRules = [
        'title'       => 'required|min_length[3]|max_length[255]',
        'description' => 'required|min_length[10]',
        'date_range'  => 'required|min_length[3]|max_length[100]',
        'logo_path'   => 'permit_empty|max_length[255]',
        'project_url' => 'permit_empty|max_length[500]',
        'technologies' => 'permit_empty',
        'status'      => 'required|in_list[active,inactive]',
    ];

    protected $validationMessages = [
        'title' => [
            'required'   => 'Project title is required',
            'min_length' => 'Project title must be at least 3 characters long',
        ],
        'description' => [
            'required'   => 'Project description is required',
            'min_length' => 'Project description must be at least 10 characters long',
        ],
        'date_range' => [
            'required' => 'Date range is required',
        ],
    ];

    protected $skipValidation = false;
}
