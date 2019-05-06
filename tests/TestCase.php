<?php

namespace Resume\InstallerPlugin\Tests;

use PHPUnit\Framework\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    /**
     * Set up the testing suite.
     */
    public function setUp()
    {
        //
    }

    /**
     * Tear down the testing suite.
     */
    public function tearDown()
    {
        //
    }

    protected function deleteDir($path)
    {
        if (is_file($path)) {
            unlink($path);

            return $this;
        }

        if (is_dir($path)) {
            $files = glob($path.'*', GLOB_MARK);

            foreach ($files as $file) {
                $this->deleteDir($file);
            }

            rmdir($path);
        }
    }
}
