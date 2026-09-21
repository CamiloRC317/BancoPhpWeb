<?php 
class Retiro{
    private int $id;
    private int $cuenta_id;
    private DateTime $fecha;

    //Getter
    public function getId():int{
        return $this->id;
    }
    public function getCuentaId():int{
        return $this->cuenta_id;
    }
    public function getFecha():DateTime{
        return $this->fecha;
    }

    //setter
    public function setId(int $id){
        $this->id=$id;
    }
    public function setCuentaId(int $cuenta_id){
        $this->cuenta_id=$cuenta_id;
    }
    public function setFecha(DateTime $fecha){
        $this->fecha=$fecha;
    }
}
?>