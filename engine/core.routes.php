<?php
/**
 * User: Arris
 * Date: 01.02.2018, time: 0:02
 */

// https://packagist.org/packages/pecee/simple-router

use \Pecee\SimpleRouter\SimpleRouter;


SimpleRouter::get('/', function() {
    return 'Hello world';
})->name('frontpage');

SimpleRouter::get('/edit/region/{id}', function($id_region) {
    return 'Edit region id: ' . $id_region;
})->name('edit_region');

SimpleRouter::get('/edit/map/{alias}', function($alias_map) {
    return 'Edit map, alias: ' . $alias_map;
})->name('edit_map');

// /edit/project ?

SimpleRouter::get('/edit/profile', function(){
    return 'Edit user profile';
});

SimpleRouter::get('/view/profile', function(){
    return 'View current user profile';
});

SimpleRouter::get('/view/profile/{name}', function($name) {
    return "View {$name}'s user profile";
});

SimpleRouter::get('/view/region/{id_region}', function($id_region) {
    return "View content of region {$id_region}";
});

SimpleRouter::get('/view/map/{alias}', function($alias_map){
    return "View map, alias: {$alias_map}";
});

SimpleRouter::get('/auth/{action?}', function($action){
    return "Called Auth controller with action " . ($action ?? 'loginform');
});

SimpleRouter::get('/js/map/{alias}', function($alias_map){
    return "Generated {$alias_map}.js";
});

SimpleRouter::get('/api/get/{action}/{subaction}', function($action, $subaction) {
    return "API/GET => {$action} / {$subaction}";
});

SimpleRouter::post('/api/get/{action}/{subaction}', function($action, $subaction) {
    return "API/POST => {$action} / {$subaction}";
});






