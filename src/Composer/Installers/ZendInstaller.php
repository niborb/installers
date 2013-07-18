<?php
namespace Composer\Installers;

class ZendInstaller extends BaseInstaller
{
    protected $locations = array(
        'module'  => 'application/modules/{$name}',
        'library' => 'library/{$name}/',
        'extra'   => 'extras/library/{$name}/',
    );
}
