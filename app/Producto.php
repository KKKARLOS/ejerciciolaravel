<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
 	public $numero;
	public $premio;	
	public $apartir;	

    public function obtenerCuenta2($numero){

        return rand(1,$numero); 
    } 
    public function obtenerCuenta($numero){

        //return rand(1,$numero);
  		$this->numero=$numero;
		$this->premio=rand(1,$numero); 
		$this->unidades=rand(1,20);     
    } 
}
