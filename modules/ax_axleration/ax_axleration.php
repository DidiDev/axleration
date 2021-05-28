<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

class Ax_Axleration extends Module
{
    public function __construct()
    {
        $this->name = 'ax_axleration';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'SANS Elodie';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = [
            'min' => '1.7',
            'max' => _PS_VERSION_
        ];
        $this->bootstrap = true;
        parent::__construct();
        $this->displayName = $this->l('Module Rick et Morty');
        $this->description = $this->l('On récupere API REST');
        $this->confirmUninstall = $this->l('Êtes-vous sûr de vouloir désinstaller ce module ?');

        if (!Configuration::get('AX_AXLERATION_PAGENAME')) {
            $this->warning = $this->l('Aucun nom fourni');
        }
    }
    
    public function install() {
        if (Shop::isFeatureActive()) {
            Shop::setContext(Shop::CONTEXT_ALL);
        }
     
        if (!parent::install() ||
            !$this->registerHook('displayFooterProduct') ||
            !$this->registerHook('header') ||
            !Configuration::updateValue('AX_AXLERATION_PAGENAME', 'Mentions légales')
        ) {
            return false;
        }
     
        return true;
    }

    public function uninstall() {
        if (!parent::uninstall() ||
            !Configuration::deleteByName('AX_AXLERATION_PAGENAME')
        ) {
            return false;
        }
        return true;
    }

    public function hookDisplayFooterProduct($params) {
        $this->loadFOAssets();
        return $this->display(__FILE__, 'ax_axleration.tpl');
    }

    /**
    * loadFOAssets
    *
    * @return void
    */
    public function loadFOAssets() {
        /**
        * Front assests
        */
        $this->context->controller->registerStylesheet(
            'front',
            'modules/' . $this->name . '/css/style.css',
            array('media' => 'all', 'priority' => 150)
        );
    }

}

?>