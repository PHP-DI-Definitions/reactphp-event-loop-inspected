<?php

declare(strict_types=1);

namespace PHPDIDefinitions\Tests\ReactInspector;

use React\EventLoop\LoopInterface;
use WyriHaximus\TestUtilities\TestCase;

use function dirname;

use const DIRECTORY_SEPARATOR;

/**
 * @internal
 */
final class DiTest extends TestCase
{
    public function testLoop(): void
    {
        $root = dirname(__DIR__);
        $path = $root . DIRECTORY_SEPARATOR . 'etc' . DIRECTORY_SEPARATOR . 'di' . DIRECTORY_SEPARATOR . 'event-loop.php';
        $loop = (require $path)[LoopInterface::class]();

        self::assertInstanceOf(LoopInterface::class, $loop);
    }
}
