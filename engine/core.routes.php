<?php
/**
 * User: Arris
 * Date: 01.02.2018, time: 0:02
 */

use \Pecee\SimpleRouter\SimpleRouter;


SimpleRouter::get('/', function() {
    return 'Hello world';
});

SimpleRouter::get('/user/{id}', function ($userId) {
    return 'User with id: ' . $userId;
});




