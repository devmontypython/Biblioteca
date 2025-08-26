<?

namespace App\DAO;

use App\Model\Aluno;

class AlunoDAO {
    public function save(Aluno $model) : Aluno {

        if($model -> id == null) {
            return $this -> insert($model);
        } else {
            return $this -> update($model);
        }

        // OPERADOR TERNÁRIO        
    }

    public function insert(Aluno $model) {

    }

    public function update(Aluno $model) {

    }

    public function selectById(int $id) {

    }

    public function select() {

    }

    public function delete(int $id) {

    }
}