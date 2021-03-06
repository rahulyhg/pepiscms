<?php

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

namespace PiotrPolak\PepisCMS\Filemanager\Command;

defined('BASEPATH') or exit('No direct script access allowed');

interface CommandInterface
{
    /**
     * @return String
     */
    public function getName();

    /**
     * @param String $baseDir
     * @param String $currentRelativePath
     * @param \PEPISCMS_Input $input
     * @throws CommandException
     */
    public function execute($baseDir, $currentRelativePath, $input);

}