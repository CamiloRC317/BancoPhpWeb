<?php 
class Cuenta{
    private int $id;
    private int $cliente_id;
    private string $numero_cuenta;
    private float $saldo;
    //getter
    public function getId():int{
        return $this->id;
    }
    public function getClienteId():int{
        return $this->cliente_id;
    }
    public function getNumeroCuenta():string{
        return $this->numero_cuenta;
    }
    public function getSaldo():float{
        return $this->saldo;
    }

    //setter
    public function setId(int $id){
         $this->id=$id;
    }
    public function setClienteId(int $cliente_id){
         $this->cliente_id=$cliente_id;
    }
    public function setNumeroCuenta(string $numero){
         $this->numero_cuenta=$numero;
    }
    public function setSaldo(float $saldo){
         $this->saldo=$saldo;
    }
}
?>