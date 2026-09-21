<?php 
class Transferencia{
    private int $id;
    private int $cuenta_origen;
    private int $cuenta_destino;
    private DateTime $fecha;

    //getter
    public function getId():int{
        return $this->id;
    }
    public function getCuentaOrigen():int{
        return $this->cuenta_origen;
    }
    public function getCuentaDestino():int{
        return $this->cuenta_destino;
    }
    public function getFecha():DateTime{
        return $this->fecha;
    }

    //setter
    public function setId(int $id){
        $this->id=$id;
    }
    public function setCuentaOrigen(int $cuenta_origen){
        $this->cuenta_origen=$cuenta_origen;
    }
    public function setCuentaDestino(int $cuenta_destino){
        $this->cuenta_destino=$cuenta_destino;
    }
    public function setFecha(DateTime $fecha){
        $this->fecha=$fecha;
    }
}
?>