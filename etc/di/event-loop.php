<?php

use function EventLoop\setLoop;use React\EventLoop\Factory;
use WyriHaximus\React\Inspector\EventLoop\LoopDecorator;

setLoop(new LoopDecorator(Factory::create()));
