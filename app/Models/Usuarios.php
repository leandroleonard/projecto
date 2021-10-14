<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class Usuarios extends Model
    {
        protected $table      = 'usuarios';
        protected $primaryKey = 'id';

        protected $returnType     = 'array';

        protected $allowedFields = ['usuario', 'email', 'senha'];
    }