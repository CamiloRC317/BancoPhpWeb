<?php 
namespace App\Modelos;
class Cliente{
    private int $id;
    private string $nombre;

    //getter
    public function getId():int{
        return $this->id;
    }
    public function getNombre():string{
        return $this->nombre;
    }

    //setter
    public function setId(int $id){
        $this->id=$id;
    }
    public function setNombre(string $nombre){
        $this->nombre=$nombre;
    }
}

?>