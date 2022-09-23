<?php

namespace Singleton\Logs;

use function PHPUnit\Framework\fileExists;

class LogsSingleton
{
    protected static $instance;

    private function __construct()
    {
    }

    private function __clone()
    {
    }

//    private function __wakeup()
//    {
//    }

    public static function getInstance(): LogsSingleton
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function saveLogs(array $data)
    {
        $filename = 'logs.txt';

        $previousLogs = [];
        if (filesize($filename) > 0) {
            $fileContent = file_get_contents($filename);
            $previousLogs = json_decode($fileContent, true);
        }

        $previousLogs[] = $data;


        $file = fopen($filename, 'w');
        fwrite($file, json_encode($previousLogs));
        fclose($file);
    }
}
