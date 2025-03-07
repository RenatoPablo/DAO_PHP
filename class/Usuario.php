<?php

class Usuario{
    private $idusuario;
    private $deslogin;
    private $dessenha;
    private $dtCadastro;

    //Idusuario
    public function getIdusuario(){
        return $this->idusuario;
    }

    public function setIdusuario($value){
        $this->idusuario = $value;
    }

    //deslogin
    public function getDeslogin(){
        return $this->deslogin;
    }

    public function setDeslogin($value){
        $this->deslogin = $value;
    }

    //dessenha
    public function getDessenha(){
        return $this->dessenha;
    }

    public function setDessenha($value){
        $this->dessenha = $value;
    }

    //dtCadastro
    public function getDtCadastro(){
        return $this->dtCadastro;
    }

    public function setDtCadastro($value){
        $this->dtCadastro = $value;
    }

    public function loadById($id) {
        $sql = new Sql();   

        $results = $sql->select("SELECT * FROM tb_usuarios WHERE :ID", array(
            ":ID"=>$id
        ));

        if(count($results) > 0) {
            $row = $results[0];

            $this->setIdusuario($row['idusuario']);
            $this->setDeslogin($row['deslogin']);
            $this->setDessenha($row['dessenha']);
            $this->setDtCadastro(new DateTime($row['dtcadastro']));
        }
    }

    public function __toString()
    {
        return json_encode(array(
            "idusuario"=>$this->getIdusuario(),
            "deslogin"=>$this->getDeslogin(),
            "dessenha"=>$this->getDessenha(),
            "datacadastro"=>$this->getDtCadastro()->format("d/m/y H:i:s")
        ));
    }

}

?>