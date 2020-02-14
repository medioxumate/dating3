<?php
/**
 * Created in PhpStorm
 * @author Brian Kiehn
 * @date 2/14/2020
 * @version 1.0
 * premium_member.php
 * GreenRiverDev
 * @link https://github.com/medioxumate/dating3.git
 */

class premium_member extends member
{
    private $_inDoorInterests;
    private $_outDoorInterests;

    //getters
    /**
     * @return array
     */
    public function getInDoorInterests(){
        return $this->_inDoorInterests;
    }

    /**
     * @return array
     */
    public function getOutDoorInterests(){
        return $this->_outDoorInterests;
    }

    //setters
    /**
     * @param array $inDoorInterests
     */
    public function setInDoorInterests($inDoorInterests){
        $this->_inDoorInterests = $inDoorInterests;
    }

    /**
     * @param array $outDoorInterests
     */
    public function setOutDoorInterests($outDoorInterests){
        $this->_outDoorInterests = $outDoorInterests;
    }

}