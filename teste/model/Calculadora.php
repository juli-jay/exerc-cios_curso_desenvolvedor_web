<?php

class Calculadora{
	private $numero1;
	private $numero2;

	public function setNumero1($numero1)
	{
		if (isset($numero1)&&$numero1!=""){
			if(is_numeric($numero1)){
				$this->numero1=$numero1;
			}else{
				throw new Exception("O caractere digitado no campo1 não é um número!");
			}
		}else{
			throw new Exception("O campo1 não pode ser nulo!");
		}
	}
	public function getNumero1()
	{
		return $this->numero1;
	}
	public function setNumero2($numero2)
	{
		if (isset($numero2)&&$numero2!="") {
			if(is_numeric($numero2)){
			$this->numero2=$numero2;	
		}else{
			throw new Exception("O caractere digitado no campo2 não é um número!");
		}
		}else{
			throw new Exception("O campo2 não pode ser nulo!");
		}
	}
	public function getNumero2()
	{
		return $this->numero2;
	}
	public function somar($a,$b)
	{
		return $a+$b;
	}
}
?>