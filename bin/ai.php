<?php
echo 'Ask anthing to AI' . PHP_EOL;

while (TRUE) {
    $input = readline('> ');
    if ($input === 'exit' || $input === '') {
        break;
    }
    echo 'Thinking...' . PHP_EOL;
    sleep(2);
    echo 'AI: ' . $input . PHP_EOL;
}
