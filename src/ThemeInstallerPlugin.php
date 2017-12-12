<?php

namespace Sven\ResumeInstallerPlugin;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class ThemeInstallerPlugin implements PluginInterface
{
    /**
     * Apply plugin modifications to Composer
     *
     * @param Composer    $composer
     * @param IOInterface $io
     */
    public function activate(Composer $composer, IOInterface $io)
    {
        $installer = new ThemeInstaller($io, $composer);

        $composer->getInstallationManager()->addInstaller($installer);
        // TODO: Implement activate() method.
    }
}
