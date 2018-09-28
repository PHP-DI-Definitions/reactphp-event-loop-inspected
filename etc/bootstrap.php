<?php

use React\EventLoop\Factory;
use WyriHaximus\React\Inspector\EventLoop\LoopDecorator;
use function EventLoop\setLoop;

setLoop(new LoopDecorator(Factory::create()));
