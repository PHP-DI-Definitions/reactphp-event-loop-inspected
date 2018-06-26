<?php

use React\EventLoop\Factory;
use React\EventLoop\LoopInterface;
use WyriHaximus\React\Inspector\EventLoop\InfoProvider;
use WyriHaximus\React\Inspector\EventLoop\LoopDecorator;

return [
    LoopInterface::class => function () {
        return new LoopDecorator(Factory::create());
    },
];
