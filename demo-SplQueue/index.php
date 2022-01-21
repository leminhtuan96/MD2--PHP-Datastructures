<?php

$queue = new SplQueue();

$queue->enqueue("12");
$queue->enqueue("23");
$queue->enqueue("123");
$queue->enqueue("124");
$queue->enqueue("127");

$queue->dequeue();
$queue->dequeue();
$queue->dequeue();

print_r($queue);
