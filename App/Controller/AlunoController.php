<?

namespace App\Controller;

use App\Model\Aluno;

class AlunoController {
    
    public static function cadastro() {
        echo "vou mostrar o formulário a depender...";
    }

    public static function listar() {
        echo "listagem de alunos";
        $aluno = new Aluno();
        $aluno -> getAllRows();
    }
}