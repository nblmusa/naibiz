<?php

echo 'live';
file_put_contents('./file.txt', var_export($_POST, true) . ' \n\npost:' . time());