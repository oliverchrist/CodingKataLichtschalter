<?php
class Lichtschalter {
    public $zustand = false;
    
    public function getZustand() {
        return $this->zustand;
    }
    
    public function toggleZustand(){
        $this->zustand = !$this->zustand;
    }
}
?>
