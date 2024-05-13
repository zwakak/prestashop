<?php
if (!defined('_PS_VERSION_')) {
    exit;
}

class Kanguro extends Module
{


    public function __construct()
    {
        $this->name = 'kanguro';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Yazan Aakel';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = [
            'min' => '1.7.0.0',
            'max' => '8.99.99',
        ];
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->trans('Kanguro', [], 'Modules.Kanguro.Admin');
        $this->description = $this->trans('This is a Test for displaying kanguro points', [], 'Modules.Kanguro.Admin');

        $this->confirmUninstall = $this->trans('Are you sure you want to uninstall?', [], 'Modules.Kanguro.Admin');

        if (!Configuration::get('MYMODULE_NAME')) {
            $this->warning = $this->trans('No name provided', [], 'Modules.Kanguro.Admin');
        }
    }

    public function install()
    {
        return parent::install() &&
            $this->registerHook('displayHeader');
    }

    public function uninstall()
    {
        return parent::uninstall();
    }

    public function hookDisplayHeader()
    {
        $this->context->controller->addJS($this->_path . 'views/js/map.js');
        $this->context->controller->addCSS($this->_path . 'views/css/map.css');

        $this->context->smarty->assign(array(
            'map_modal_id' => 'map-modal',
        ));

        return $this->display(__FILE__, 'views/templates/hook/displayheader.tpl');
    }



}
