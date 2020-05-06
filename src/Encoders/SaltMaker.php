<?php

namespace App\Encoders;


class SaltMaker
{
    public function makeSalt()
    {
        $chars = "234567890abcdefghijkmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $chars .= '!@#$%^&*(){}":>?<,./;~`|_-*+[]';
        $digits=rand(12,32);
        $i = 0;
        $password = "";
        $max_len = strlen($chars) - 1;
        while ($i < $digits) {
            $password .= $chars{mt_rand(0,$max_len)};
            $i++;
        }
        return $password;
    }
}