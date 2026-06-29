<?php

function signalHandler($signo, $siginfo)
{
    print "Recieved signal: " . $signo . "\n";
}

pcntl_async_signals(true);
pcntl_signal(SIGTERM, 'signalHandler');
pcntl_signal(SIGINT, 'signalHandler');

while(true) {}
