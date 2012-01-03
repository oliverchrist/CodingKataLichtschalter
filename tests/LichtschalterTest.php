<?php
require_once dirname(__FILE__) . '/../Lichtschalter.php';

class LichtschalterTest extends PHPUnit_Framework_TestCase {

    protected $object;

    protected function setUp() {
        $this->object = new Lichtschalter;
    }

    protected function tearDown() {
        
    }
    
    public function testStatePropertyExists() {
        $this->assertClassHasAttribute('zustand', 'Lichtschalter');
    }
    
    public function testZustandIstInitialFalse(){
        $this->assertFalse($this->object->getZustand());
    }
    
    public function testToggleZustand(){
        $this->object->toggleZustand();
        $this->assertTrue($this->object->getZustand());
    }
    
    public function testToggleZustandZweiMal(){
        $this->object->toggleZustand();
        $this->object->toggleZustand();
        $this->assertFalse($this->object->getZustand());
    }
    
    
}
?>
