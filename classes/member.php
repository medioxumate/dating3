<?php
/**
 * Created in PhpStorm
 * @author Brian Kiehn
 * @date 2/13/2020
 * @version 1.0
 * member.php
 * GreenRiverDev
 * @link https://github.com/medioxumate/dating3.git
 */

class member
{
    private $_fname;
    private $_lname;
    private $_age;
    private $_gender;
    private $_phone;
    private $_email;
    private $_state;
    private $_seeking;
    private $_bio;

    /**
     * member constructor.
     * @param $_fname - first name
     * @param $_lname - last name
     * @param $_age - age
     * @param $_gender - gender
     * @param $_phone - phone number
     */
    public function __construct($_fname, $_lname, $_age, $_phone, $_gender = "Not Given"){
        $this->_fname = $_fname;
        $this->_lname = $_lname;
        $this->_age = $_age;
        $this->_gender = $_gender;
        $this->_phone = $_phone;
    }


    //getters
    /**
     * @return string
     */
    public function getFname(){
        return $this->_fname;
    }

    /**
     * @return string
     */
    public function getLname(){
        return $this->_lname;
    }

    /**
     * @return int
     */
    public function getAge(){
        return $this->_age;
    }

    /**
     * @return string
     */
    public function getGender(){
        return $this->_gender;
    }

    /**
     * @return string
     */
    public function getPhone(){
        return $this->_phone;
    }

    /**
     * @return string
     */
    public function getEmail(){
        return $this->_email;
    }

    /**
     * @return string
     */
    public function getState(){
        return $this->_state;
    }

    /**
     * @return string
     */
    public function getSeeking(){
        return $this->_seeking;
    }

    /**
     * @return string
     */
    public function getBio(){
        return $this->_bio;
    }

    //setters
    /**
     * @param string $fname
     */
    public function setFname($fname){
        $this->_fname = $fname;
    }

    /**
     * @param string $lname
     */
    public function setLname($lname){
        $this->_lname = $lname;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age){
        $this->_age = $age;
    }

    /**
     * @param string $gender
     */
    public function setGender($gender){
        $this->_gender = $gender;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone){
        $this->_phone = $phone;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email){
        $this->_email = $email;
    }

    /**
     * @param string $state
     */
    public function setState($state){
        $this->_state = $state;
    }

    /**
     * @param string $seeking
     */
    public function setSeeking($seeking){
        $this->_seeking = $seeking;
    }

    /**
     * @param string $bio
     */
    public function setBio($bio){
        $this->_bio = $bio;
    }

}