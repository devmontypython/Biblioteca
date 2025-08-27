<?

namespace App\Controller;

use App\Model\Aluno;

class AlunoController {
    
    public static function cadastro() {
        //echo "vou mostrar o formulário a depender...";

        $model = new Aluno();
        $model -> id = 8;
        $model -> nome = "Leandro";
        $model -> curso = "Desenvolvimento de Sistema";
        $model -> save();
    }

    public static function listar() {
        echo "listagem de alunos";
        $aluno = new Aluno();
        $aluno -> getAllRows();
    }
}