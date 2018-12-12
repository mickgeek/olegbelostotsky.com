<?php

namespace App;

use PHPUnit\Framework\TestCase;

class KernelTest extends TestCase
{
    private function getRootDir(): string
    {
        return realpath(__DIR__ . '/../..');
    }

    public function testGetTemplateDir()
    {
        $templateDir = $this->getRootDir() . '/templates';
        $this->assertEquals($templateDir, (new Kernel())->getTemplateDir());
    }

    public function testGetPublicDir()
    {
        $publicDir = $this->getRootDir() . '/public';
        $this->assertEquals($publicDir, (new Kernel())->getPublicDir());
    }
}
