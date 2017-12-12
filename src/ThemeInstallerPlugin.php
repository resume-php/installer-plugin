<?php

namespace Sven\ResumeCliInstallerPlugin;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class ThemeInstallerPlugin implements PluginInterface
{
    /**
     * Apply plugin modifications to Composer
     *
     * @param \Composer\Composer       $composer
     * @param \Composer\IO\IOInterface $io
     */
    public function activate(Composer $composer, IOInterface $io): void
    {
        $installer = new ThemeInstaller($io, $composer);

        $composer->getInstallationManager()->addInstaller($installer);
    }
}
