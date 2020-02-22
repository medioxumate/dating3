<?php
/**
 * Created in PhpStorm
 * @author Brian Kiehn
 * @date 2/13/2020
 * @version 3.0
 * index.php
 * GreenRiverDev
 * @link https://github.com/medioxumate/dating2b.git
 */

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require autoload file
require_once('vendor/autoload.php');
//Require controller
require('controller/dating_control.php');

//Session
session_start();


//Create an instance of the Base class
$f3 = Base::instance();

//Interests arrays
$f3->set('in', array('tv', 'puzzles', 'movies', 'reading', 'cooking',
    'playing cards', 'globe making', 'video games'));
$f3->set('out', array('swimming', 'running', 'hiking', 'metal detecting',
    'collecting', 'horseback riding', 'pokemon go', 'bird watching'));

//State array
$f3->set('states', array('Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California', 'Colorado',
    'Connecticut', 'Delaware', 'Florida', 'Georgia', 'Hawaii', 'Idaho', 'Illinois',
    'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana', 'Maine', 'Maryland',
    'Massachusetts', 'Michigan', 'Minnesota', 'Mississippi', 'Missouri', 'Montana',
    'Nebraska', 'Nevada', 'New Hampshire', 'New Jersey', 'New Mexico', 'New York',
    'North Carolina', 'North Dakota', 'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania',
    'Rhode Island', 'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah',
    'Vermont', 'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming',
    'American Samoa', 'District of Columbia', 'Guam', 'Marshall Islands', 'Northern Mariana Islands',
    'Palau', 'Puerto Rico', 'Virgin Islands'));

//Error array
$f3->set('errors', array('fn'=>'', 'ln'=>'', 'age'=>'', 'ph'=>'','em'=>'', 'st'=>'', 'in'=>'', 'out'=>''));

//sticky
$f3->set('fn', '');
$f3->set('ln', '');
$f3->set('age', '');
$f3->set('ph', '');
$f3->set('g', '');
$f3->set('em', '');

//if missing an optional field
$f3->set('opt', 'Not Given');

$controller = new dating_control($f3);

//Define a default route
$f3->route('GET /', function($f3){
    $f3->set('title', 'Round Earth Society');

    $view = new Template();
    echo $view-> render('views/home.html');

});

//Form routes

//First form 'Sign-up'
$f3->route('GET|POST /Sign-up', function($f3) {
    $f3->set('title', 'Sign up');

    //display a views
    $view = new Template();

    $GLOBALS['controller']->form1($f3);

    echo $view->render('views/form1.html');
});

$f3->route('GET|POST /bio', function($f3) {

    $f3->set('title', 'Biography');

    $view = new Template();

    $GLOBALS['controller']->form2($f3);

    echo $view->render('views/form2.html');
});

$f3->route('GET|POST /hobbies', function($f3) {

    $f3->set('title', 'hobbies');

    $GLOBALS['controller']->form3($f3);

    $view = new Template();
    echo $view->render('views/form3.html');
});

$f3->route('GET|POST /profile', function($f3) {

    $f3->set('title', 'profile');

    $GLOBALS['controller']->profile($f3);

    $view = new Template();
    echo $view->render('views/profile.html');
});

//Run Fat-free
$f3->run();