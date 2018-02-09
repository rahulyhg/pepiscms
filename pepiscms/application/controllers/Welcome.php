<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * PepisCMS
 *
 * Simple content management system
 *
 * @package             PepisCMS
 * @author              Piotr Polak
 * @copyright           Copyright (c) 2007-2018, Piotr Polak
 * @license             See license.txt
 * @link                http://www.polak.ro/
 */

/**
 * Welcome default redirect controller
 */
class Welcome extends CI_Controller
{
    public function index()
    {
        // What did you expect it to be?
        header('Location: ' . base_url());
        exit;
    }
}
