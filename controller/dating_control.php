<?php
/**
 * Created in PhpStorm
 * @author Brian Kiehn
 * @date 2/16/2020
 * @version 1.0
 * dating_control.php
 * GreenRiverDev
 * @link https://github.com/medioxumate/dating3.git
 */

//Require validation functions
require('../model/validation-functions.php');

class dating_control
{
    private $_f3; //Router

    /**
     * dating_control constructor.
     * @param $f3
     */
    public function __construct($f3)
    {
        $this->_f3 = $f3;
    }

    public function form1($f3)
    {
        //check if $POST even exists, then validate
        if (isset($_POST['fn'])&&isset($_POST['ln'])&&isset($_POST['age'])
            &&isset($_POST['ph'])) {

            //check valid strings and numbers
            if (validAge($_POST['age']) && validString($_POST['fn'])
                && validString($_POST['ln'])&& validPhone($_POST['ph'])) {

                if(!isset($_POST['g'])) {
                    if (isset($_POST['pm'])) {
                        $_SESSION ['member'] = new premium_member($_POST['fn'], $_POST['ln'], $_POST['age'], $_POST['ph']);
                    } else {
                        $_SESSION ['member'] = new member($_POST['fn'], $_POST['ln'], $_POST['age'], $_POST['ph']);
                    }
                }
                else {
                    if (isset($_POST['pm'])) {
                        $_SESSION ['member'] = new premium_member($_POST['fn'], $_POST['ln'], $_POST['age'], $_POST['ph'],
                            $_POST['g']);
                    } else {
                        $_SESSION ['member'] = new member($_POST['fn'], $_POST['ln'], $_POST['age'], $_POST['ph'],
                            $_POST['g']);
                    }
                }

                $f3->reroute('/bio');
            }
            else
            {
                //instantiate an error array with message
                if(!validString($_POST['fn'])){
                    $f3->set("errors['fn']", "true");
                }
                if(!validString($_POST['ln'])){
                    $f3->set("errors['ln']", "true");
                }
                if(!validAge($_POST['age'])){
                    $f3->set("errors['age']", "true");
                }
                if(!validPhone($_POST['ph'])){
                    $f3->set("errors['ph']", "true");
                }
                $f3->set('fn', $_POST['fn']);
                $f3->set('ln', $_POST['ln']);
                $f3->set('age', $_POST['age']);
                $f3->set('ph', $_POST['ph']);
                if(isset($_POST['pm'])){
                    $f3->set('pm', $_POST['pm']);
                }
                if(isset($_POST['g'])){
                    $f3->set('g', $_POST['g']);
                }
            }
        }
    }


    public function form2($f3){
        //check if $POST even exists, then validate
        if (isset($_POST['em'])&&isset($_POST['st'])) {
            //check valid strings and numbers
            if (validEmail($_POST['em']) && validState($f3->get('states'), $_POST['st'])) {

                $_SESSION ['member']->setEmail($_POST['em']);
                $_SESSION ['member']->setState($_POST['st']);

                if(!isset($_POST['sk'])){
                    $_SESSION ['member']->setSeeking($f3->get('opt'));
                }
                else{
                    $_SESSION ['member']->setSeeking($_POST['sk']);
                }

                if($_POST['bio'] != '' || $_POST['bio'] != ' '){
                    $_SESSION ['member']->setBio($f3->get('opt'));
                }
                else{
                    $_SESSION ['member']->setBio($_POST['bio']);
                }

                $f3->reroute('/hobbies');
            }
            else
            {
                //instantiate an error array with message
                if(!validEmail($_POST['em'])){
                    $f3->set("errors['em']", "*email field is empty or invalid. ex: someonecool@domain.com");
                }
                if(!validState($f3->get('states'), $_POST['st'])){
                    $f3->set("errors['st']", "*state field is empty or invalid.");
                }
            }
        }
    }

}