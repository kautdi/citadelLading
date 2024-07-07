<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/conf.php';
require_once __DIR__ . '/funcs.php';

$body = "<h1>Письмо с сайта</h1>\n
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab culpa doloribus eius illo in ipsam nisi, nulla odio quam quibusdam, repellat reprehenderit sapiente sit suscipit temporibus tenetur unde vel voluptate.";

var_dump(send_mail($mail_settings_prod, ['matroskin978@gmail.com'], 'Письмо с сайта', $body));
