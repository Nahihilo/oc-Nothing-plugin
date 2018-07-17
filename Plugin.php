<?php namespace ChVuagniaux\Nothing;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Nothing',
            'description' => 'A test plugin that do nothing',
            'author'      => 'inetis',
            'icon'        => 'icon-smile-o',
            'homepage'    => 'https://github.com/ChVuagniaux/oc-Nothing-plugin'
        ];
    }
}
