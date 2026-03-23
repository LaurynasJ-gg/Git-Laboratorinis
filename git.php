<?php
	class uzduotis {
	// kintamieji
	public $skaicius;
	public $i;
	public $seka;
	public $pskaicius;
	
	// duomenu ivedimas
	
	function ivestis($skaicius) {
		$this->pskaicius = $skaicius;
		$this->skaicius = $skaicius;
	}

	
	// metodas skaiciuoti 3x+1
	function skaiciuoti() {
		$this->seka = "";
		$this->i = 1;
		$this->seka = $this->skaicius;
		
		while($this->skaicius != 1) {
			if ($this->skaicius % 2 == 0) {
				$this->skaicius = $this->skaicius / 2;
			}
			else {
				$this->skaicius = 3 * $this->skaicius + 1;
			}
			$this->seka .= "<br>" . $this->skaicius;
			$this->i++;
		}
	}
	
	// seka,zingsniai ir rezultatai
	function seka() {
		return $this-> seka;
	}
	
	function zingsniai() {
		return $this-> i;
	}
	
	
	function rez() {
		print ("ivestas skaicius = " . $this->pskaicius . "<br>");
		print ("zingsniai = " . $this->i . "<br>");
		print ("seka = " . $this->seka);
	}
}	
?>