<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$autoload['packages'] = array();

$autoload['libraries'] = array('session','database');

$autoload['drivers'] = array();


$autoload['helper'] = array('url','custom_helper');

$autoload['config'] = array();


$autoload['language'] = array();


$autoload['model'] = array('admins','crud','webmail');
