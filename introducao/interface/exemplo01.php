<?php

//Define o padrão da classe veiculo e os metodos que toda classe que extende a ela deve ter
interface Veiculo{
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
}


class Civic implements Veiculo{

    public function acelerar($velocidade){
        echo "O veiculo acelerou ate " . $velocidade ." km/h";
    }
    public function frenar($velocidade){
        echo "O veiculo frebou até " . $velocidade ." km/h";
    }
    public function trocarMarcha($marcha){
        echo "O veiculo engatou a marcha " . $marcha;
    }

}

$carro = new Civic();
$carro->trocarMarcha(3);

var_dump($carro);

?>