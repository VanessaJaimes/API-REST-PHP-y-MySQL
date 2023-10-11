<?php

class Env 
{
    public static function getEnvData()
    {
        return parse_ini_file('../.env');
    }
}