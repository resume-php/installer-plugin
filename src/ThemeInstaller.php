<?php

namespace Resume\InstallerPlugin;

use Composer\Installer\LibraryInstaller;
use Composer\Package\PackageInterface;

class ThemeInstaller extends LibraryInstaller
{
    /**
     * {@inheritdoc}
     */
    public function supports($packageType)
    {
        return strtolower($packageType) === 'resume-theme';
    }

    /**
     * {@inheritdoc}
     */
    public function getInstallPath(PackageInterface $package)
    {
        return '';
    }
}
