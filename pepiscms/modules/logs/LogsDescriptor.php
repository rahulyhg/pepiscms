<?php

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

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Class LogsDescriptor
 */
class LogsDescriptor extends ModuleDescriptor
{
    /**
     * Cached variable
     *
     * @var String
     */
    private $module_name;

    /**
     * LogsDescriptor constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->module_name = strtolower(str_replace('Descriptor', '', __CLASS__));
        $this->load->moduleLanguage($this->module_name);
    }

    /**
     * {@inheritdoc}
     */
    public function getName($language)
    {
        $this->load->moduleLanguage($this->module_name);
        return $this->lang->line($this->module_name . '_module_name');
    }

    /**
     * {@inheritdoc}
     */
    public function getDescription($language)
    {
        $this->load->moduleLanguage($this->module_name);
        $description_label = $this->module_name . '_module_description';
        $description = $this->lang->line($this->module_name . '_module_description');
        if ($description == $description_label) {
            return '';
        }

        return $description;
    }

    /**
     * {@inheritdoc}
     */
    public function onInstall()
    {
        $path = $this->load->resolveModuleDirectory($this->module_name, false) . '/resources/install.sql';
        if (!file_exists($path)) {
            return false;
        }
        $this->db->query(file_get_contents($path));
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function onUninstall()
    {
        $path = $this->load->resolveModuleDirectory($this->module_name, false) . '/resources/uninstall.sql';
        if (!file_exists($path)) {
            return false;
        }
        $this->db->query(file_get_contents($path));
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function getAdminSubmenuElements($language)
    {
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function getAdminDashboardElements($language)
    {
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function isDisplayedInUtilities()
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function getAdminDashboardWidgetsMap($language)
    {
        return ModuleWidgetMapBuilder::create()
            ->addItem()
                ->withLabel($this->lang->line($this->module_name . '_errors_and_warnings_in_last_30_days'))
                ->withLabelIcon(module_resources_url($this->module_name) . 'icon_errors_16.png')
                ->withModuleName('logs')
                ->withWidgetName('warnings')
                ->withWidgetParameters(30)
                ->withCacheTtl(30)
                ->withCacheKey($this->auth->getUserId())
            ->end()
            ->build();
    }


}
