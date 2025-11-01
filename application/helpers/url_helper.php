<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('generate_code'))
{
    function generate_code($length = 6)
    {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        $random = '';
        for ($i = 0; $i < $length; $i++) {
            $random .= $characters[random_int(0, strlen($characters) - 1)];
        }
        return $random;
    }
}
