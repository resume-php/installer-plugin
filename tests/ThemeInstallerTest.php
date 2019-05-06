<?php

namespace Resume\InstallerPlugin\Tests;

use Composer\Package\Package;

class ThemeInstallerTest extends TestCase
{
    /** @test */
    function it_registers_themes_in_the_config_file()
    {
        $package = new Package('acme/resume-theme-test', '1.0', 'Version 1.0');
        $package->setType('resume-theme');
        $package->setExtra([
            'resume' => [
                'theme' => 'Namespace\\ThemeClass',
            ],
        ]);

        $extra = $package->getExtra();

        var_dump($extra);die;
    }
}
