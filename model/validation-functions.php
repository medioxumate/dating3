<?php
/**
 * Created in PhpStorm
 * @author Brian Kiehn
 * @date 2/13/2020
 * @version 2.0
 * validation-functions.php
 * GreenRiverDev
 * @link https://github.com/medioxumate/dating3.git
 */

//functions
/**
 * @param $String
 * @return bool
 */
function validString($String){
    return ctype_alpha($String) AND ($String !="");
}

/**
 * @param $age
 * @return bool
 */
function validAge($age){
    return is_Numeric($age) AND 18 < $age AND  $age < 118;
}

/**
 * @param $phone
 * @return bool
 */
function validPhone($phone){
    return preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/", $phone)||
        preg_match("/^[0-9]{3}[0-9]{3}[0-9]{4}$/", $phone);
}

/**
 * @param $email
 * @return mixed
 */
function validEmail($email){
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

/**
 * @param $states
 * @param $query
 * @return bool
 */
function validState(array $states, $query){
    $valid = false;

    if(in_array($query, $states)){
        $valid = true;
    }

    return $valid;
}

/**
 * @param array $input
 * @param array $array
 * @return bool
 */
function validHobby(array $input, array $array){
    $valid = true;
    foreach ($input as $value){
        if(!in_array($value, $array)){
            $valid = false;
        }
    }

    return $valid;
}