<?php

use Fatkulnurk\Cookie\Cookie;

require_once './src/Cookie.php';

Cookie::setcookie('hai', 'hai ...');
echo Cookie::get('hai');


$cookies = (new Cookie('name'))

    // string|null the domain that the cookie will be valid for (including subdomains) or `null` for the current host (excluding subdomains)
    ->setDomain('example.com')

    //  bool indicates that the cookie should be accessible through the HTTP protocol only and not through scripting languages
    ->setHttpOnly(true)

    //int the Unix timestamp indicating the time that the cookie will expire at, i.e. usually `time() + $seconds`
    ->setExpiryTime(time() + 360000) // or ->setMaxAge(36000) without time()

    // @var string the path on the server that the cookie will be valid for (including all sub-directories), e.g. an empty string for the current directory or `/` for the root directory */
    ->setPath('/')

    // bool indicates that the cookie should be sent back by the client over secure HTTPS connections only
    ->setSecureOnly(false)

    // mixed|null the value of the cookie that will be stored on the client's machine
    ->setValue('fatkul nur koirudin')

    // save
    ->save();

// echo $cookies;

echo Cookie::get('name');