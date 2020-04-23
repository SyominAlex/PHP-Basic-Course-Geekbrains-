<?php
const DIR_LOGS = 'logs' . DIRECTORY_SEPARATOR;
function logging()
{
    $today = date('G:i:s d.m.Y');
    file_put_contents(DIR_LOGS . 'log.txt', $today . "\r\n", FILE_APPEND);
    $logs = count(explode("\r\n", file_get_contents(DIR_LOGS . 'log.txt')));
    if ($logs > 10) {
        $count = count(scandir(DIR_LOGS)) - 2;
        rename(DIR_LOGS . 'log.txt', DIR_LOGS . 'log' . $count . '.txt');
    }
}
logging();
