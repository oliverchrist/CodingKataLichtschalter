<?php
 
class Raum {
    public $schalterArray = Array();
	private $anzahlMenschen;
	private $anzahlSchalter;
	public function __construct($anzahlLichtschalter){
		$this->anzahlMenschen = $anzahlLichtschalter;
		$this->anzahlSchalter = $anzahlLichtschalter;
		
        for ($i = 0; $i < $anzahlLichtschalter; $i++) {
            $this->schalterArray[] = new Lichtschalter();    
        } 
    }
	
    public function countAngeschalteteLichter() {
		$anzahlSchalter = 0;
		foreach($this->schalterArray as $schalter){
			if($schalter->getZustand()){
				$anzahlSchalter++;
			}
		}
        return $anzahlSchalter;
    }
	
	public function schaltenDurchMenschen(){
		for($durchlauf = 0; $durchlauf < $this->anzahlMenschen; $durchlauf++){
			$step = $durchlauf + 1;
			for($schalterIndex = 0; $schalterindex < $this->anzahlSchalter; $schalterindex+=$durchlauf){
				$this->schalterArray[$schalterIndex]->toggleZustand();
			}
		}
	}
}
?>