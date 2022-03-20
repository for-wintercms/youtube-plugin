<?php

namespace DS\YouTube;

use Backend;
use Backend\Models\UserRole;
use System\Classes\PluginBase;

/**
 * YouTube Plugin Information File
 */
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
            'name'        => 'YouTube API',
            'description' => 'Plugin for the Youtube Data API v3 ( Non-OAuth )',
            'author'      => 'DS',
            'icon'        => 'youtube'
        ];
    }
}
