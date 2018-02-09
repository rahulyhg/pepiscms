<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * PepisCMS
 *
 * Simple content management system
 *
 * @package             PepisCMS
 * @author              Piotr Polak
 * @copyright           Copyright (c) 2007-2018, Piotr Polak
 * @license             See LICENSE.txt
 * @link                http://www.polak.ro/
 */

/**
 * Class DmesgDescriptor
 */
class DmesgDescriptor extends ModuleDescriptor
{
    /**
     * {@inheritdoc}
     */
    public function getName($language)
    {
        return 'Dmesg';
    }

    /**
     * {@inheritdoc}
     */
    public function getDescription($language)
    {
        return 'Dmesg output preview';
    }

}
