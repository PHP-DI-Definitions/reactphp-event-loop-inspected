<?php declare(strict_types=1);

use function EventLoop\getLoop;
use function EventLoop\setLoop;
use React\EventLoop\Factory;
use ReactInspector\EventLoop\LoopDecorator;

setLoop(new LoopDecorator(Factory::create()));
getLoop()->run();
