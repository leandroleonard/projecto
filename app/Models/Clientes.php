<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class Clientes extends Model
    {
        protected $table      = 'clientes';
        protected $primaryKey = 'id';

        protected $returnType     = 'array';

        protected $allowedFields = ['nome_cliente', 'email', 'cpnj'];

        protected $useTimestamps = true;
        protected $createdField  = 'created_at';
        protected $updatedField  = 'updated_at';
        protected $deletedField  = 'deleted_at';

        protected $validationRules    = [
            'nome_cliente'  => 'required|max_length[75]',
            'email'         => 'valid_email|is_unique[clientes.email,id,{id}]',
            'cpnj'          => 'max_length[14]|is_unique[clientes.cpnj,id,{id}]'
        ];
        protected $validationMessages = [
            'nome_cliente'  => [
                'required'  => 'Nome inválido',
                'max_length'=> 'Excedeu o número de caracteres para o nome'
            ],

            'email'         => [
                'valid_email'   => 'Email inválido',
                'is_unique'     => 'Email duplicado'
            ],

            'cpnj'          => [
                'max_length'=> 'Excedeu o número de caracteres para o cpnj',
                'is_unique' => 'CPNJ duplicado'
            ]
        ];
    }