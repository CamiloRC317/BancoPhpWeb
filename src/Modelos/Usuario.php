<?php 
class Usuario{
    private int $id;
    private int $cuenta_id;

    //getter
    public function getId():int{
        return $this->id;
    }
    public function getCuentaId():int{
        return $this->cuenta_id;
    }
    //setter
    public function setId(int $id){
        $this->id=$id;
    }
    public function setCuentaId(int $cuenta_id){
        $this->cuenta_id=$cuenta_id;
    }

}
?> 