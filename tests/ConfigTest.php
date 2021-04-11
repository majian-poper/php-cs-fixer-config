<?php

declare(strict_types=1);

namespace Tests;

use PhpCsFixer\ConfigInterface;
use PHPUnit\Framework\TestCase;
use Poper\PhpCsFixer\Config;

class ConfigTest extends TestCase
{
    /** @test */
    public function it_implements_interface(): void
    {
        $config = new Config();

        $this->assertInstanceOf(ConfigInterface::class, $config);
    }

    /** @test */
    public function it_returns_correct_values(): void
    {
        $config = new Config();

        $this->assertSame('POPER', $config->getName());
        $this->assertTrue($config->getUsingCache());
        $this->assertTrue($config->getRiskyAllowed());
    }

    /** @test */
    public function it_has_rules(): void
    {
        $config = new Config();

        $this->assertNotEmpty($config->getRules());
    }

    /** @test */
    public function it_does_not_have_header_comment_fixer_by_default(): void
    {
        $config = new Config();

        $rules = $config->getRules();
        $this->assertFalse($rules['header_comment'] ?? false);
    }
}
