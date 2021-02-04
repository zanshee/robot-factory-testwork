<?php

/**
 * Class Output
 */
class Output
{
    /**
     * Output constructor.
     */
    public function __construct()
    {
        if (http_response_code()) {
            echo "<pre>";
        }
        echo "Started!" . PHP_EOL . PHP_EOL;
    }

    /**
     * @param string $message
     */
    public function out(string $message)
    {
        echo $message . PHP_EOL;
    }

    /**
     * @param $data
     */
    public function dump($data)
    {
        var_dump($data);
        echo PHP_EOL;
    }

}
