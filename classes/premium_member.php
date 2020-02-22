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
    private $_indoorInterests;
    private $_outdoorInterests;

    /**
     * premium_member constructor.
     * @param $fname - first name
     * @param $lname - last name
     * @param $age - age
     * @param $phone - phone number
     * @param string $gender - gender
     * @param array $_indoorInterests - array of indoor interests
     * @param array $_outdoorInterests - array of outdoor interests
     */
    public function __construct($fname, $lname, $age, $phone, $gender  = "Not Given", $_indoorInterests = array(),
                                $_outdoorInterests = array())
    {
        parent::__construct($fname, $lname, $age, $phone, $gender);
        $this->_indoorInterests = $_indoorInterests;
        $this->_outdoorInterests = $_outdoorInterests;
    }

    //getters
    /**
     * @return string
     */
    public function getFname(){
        return parent::getFname();
    }

    /**
     * @return string
     */
    public function getLname(){
        return parent::getLname();
    }

    /**
     * @return int
     */
    public function getAge(){
        return parent::getAge();
    }

    /**
     * @return string
     */
    public function getGender(){
        return parent::getGender();
    }

    /**
     * @return string
     */
    public function getPhone(){
        return parent::getPhone();
    }

    /**
     * @return string
     */
    public function getEmail(){
        return parent::getEmail();
    }

    /**
     * @return string
     */
    public function getState(){
        return parent::getState();
    }

    /**
     * @return string
     */
    public function getSeeking(){
        return parent::getSeeking();
    }

    /**
     * @return string
     */
    public function getBio(){
        return parent::getBio();
    }

    /**
     * @return array
     */
    public function getIndoorInterests(){
        return $this->_indoorInterests;
    }

    /**
     * @return array
     */
    public function getOutdoorInterests(){
        return $this->_outdoorInterests;
    }

    //setters
    /**
     * @param string $fname
     */
    public function setFname($fname){
        parent::setFname($fname);
    }

    /**
     * @param string $lname
     */
    public function setLname($lname){
        parent::setLname($lname);
    }

    /**
     * @param int $age
     */
    public function setAge($age){
        parent::setAge($age);
    }

    /**
     * @param string $gender
     */
    public function setGender($gender){
        parent::setGender($gender);
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone){
        parent::setPhone($phone);
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email){
        parent::setEmail($email);
    }

    /**
     * @param string $state
     */
    public function setState($state){
        parent::setState($state);
    }

    /**
     * @param string $seeking
     */
    public function setSeeking($seeking){
        parent::setSeeking($seeking);
    }

    /**
     * @param string $bio
     */
    public function setBio($bio){
        parent::setBio($bio);
    }

    /**
     * @param array $indoorInterests
     */
    public function setIndoorInterests($indoorInterests){
        $this->_indoorInterests = array_replace($this->getIndoorInterests(), $indoorInterests);
    }

    /**
     * @param array $outdoorInterests
     */
    public function setOutdoorInterests($outdoorInterests){
        $this->_outdoorInterests = $outdoorInterests;
    }


    //Helper methods
    public function hobbyToString(array $interests){
        $string ='';

        foreach ($interests as $hobby){
            $string .= $hobby;
            $string .= ', ';
        }

        $length = strlen($string);
        $string = substr($string, 0, $length-2);

        return $string;
    }

    public function addInElement($element){
        $indoor = $this->getIndoorInterests();
        array_push($indoor, $element);
        $this->setIndoorInterests($indoor);
    }

    public function addOutElement($element){
        $outdoor = $this->getOutdoorInterests();
        array_push($outdoor, $element);
        $this->setOutdoorInterests($outdoor);
    }
}