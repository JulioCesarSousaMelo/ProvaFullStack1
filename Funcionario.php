<?php 

class Funcionario{

    //ATRIBUTOS 
    private $nome;
    private $cargo;
    private $carreira;
    private $salario;

    //MÉTODO CONSTRUTOR
    public function Funcionario($nome, $cargo, $carreira){
        $this->$nome = $nome;
        $this->$cargo = $cargo;
        $this->$carreira = $carreira;
    }

    //MÉTODOS GETTERS E SETTERS 
    
    private function getNome()
    {
        return $this->nome;
    }

    private function setNome($nome)
    {
        $this->nome = $nome;
    }

    private function getCargo()
    {
        return $this->cargo;
    }

    private function setCargo($cargo)
    {
        $this->cargo = $cargo;
    }

    private function getCarreira()
    {
        return $this->carreira;
    }

    private function setCarreira($carreira)
    {
        $this->carreira = $carreira;
    }

    public function getSalario()
    {
        return $this->salario;
    }

    public function setSalario($salario)
    {
        $this->salario = $salario;
    }

    //MÉTODOS 

    //Função que calcula o salario do Funcionario (obs: permite adição de cargos e carreiras)
    //A forma mais eficiênte seria consultar de uma tabela
    public function calcularSalario(){
        switch($this->getCargo()){
            case "desenvolvedor":
                switch($this->getCarreira()){
                    case "fullstack1":
                        $this->setSalario(2000);
                        break;
                    case "fullstack2":
                        $this->setSalario(3000);
                        break;
                    case "fullstack3":
                        $this->setSalario(4000);
                        break;
                    default: 
                        $this->setSalario(NULL);
                        break;
                }
                break;
            case "gerente":
                $this->setSalario(6000);
                break;
            default: 
                $this->setSalario(NULL);
                break;
        }
    }
}