<?php

echo 'live';
if ($_POST) {
file_put_contents('./file.txt', json_encode($_POST) . ' ' . time());
} else {
    file_put_contents('./file.txt', 'not post' . ' ' . time());
}