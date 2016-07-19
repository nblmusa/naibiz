<?php

echo 'live';
if ($_POST) {
file_put_contents('./file.txt', json_encode($_POST) . ' ' . time());
} elseif ($_GET) {
file_put_contents('./file.txt', json_encode($_GET) . ' ' . time());
} else {
    file_put_contents('./file.txt', 'nope' . ' ' . time());
}