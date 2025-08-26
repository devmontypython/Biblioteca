<?php

namespace App\Model;

class Aluno {
    
    public $id, $nome, $ra, $curso;

    function save() {
        return new Aluno();
    }

    function getById(int $id): ?Aluno {
        return new Aluno();
    }

    function getAllRows():array {
        return [];
    }

    function delete(int $id):bool {
        return false;
    }
}