<?php declare(strict_types=1);

use React\EventLoop\Factory;
use WyriHaximus\React\Inspector\EventLoop\LoopDecorator;
use function EventLoop\getLoop;
use function EventLoop\setLoop;

setLoop(new LoopDecorator(Factory::create()));
getLoop()->run();
