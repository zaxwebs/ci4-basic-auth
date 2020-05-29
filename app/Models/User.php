<?php namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';

    protected $returnType = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['email', 'password'];

    protected $useTimestamps = true;

    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    protected $validationRules = [
        'email' => 'required|valid_email|is_unique[users.email]',
        'password' => 'required|min_length[8]',
    ];

    protected $validationMessages = [
        'email' => [
            'required' => 'Please enter an email.',
            'valid_email' => 'Please enter a valid email.',
            'is_unique' => 'That email has already been taken. Please enter another.',
        ],
        'password' => [
            'required' => 'Please enter a password.',
            'min_length' => 'Please enter a password with at least {param} characters.',
        ],
    ];

    protected $skipValidation = false;
}
