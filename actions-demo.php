<?php
/**
 * @package camedia-support
 */
/*
Plugin Name: GitHub Actions Test
Plugin URI: github.com/camediaonline
Description: DUMMY Plugin for Github Action Testing
Version: 1.0.0
Author: CAMEDIA GmbH
Author URI: https://camedia.de
License: MIT
*/

// If this file is called directly, abort!!!
defined('ABSPATH') or die('No access in here! Why did you even try?');

function dummy()
{
    return 0;
}

function dummy2()
{
    echo "dummy func";
}

function dummy3()
{
    return 1;
}


function lastTest()
{
    return true;
}

function newTest()
{
    return false;
}

function release()
{
    echo "release version";
}