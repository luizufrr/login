<?php
/*
 * esse eh o arquivo do menu global
 */

// namespace para acessar a biblioteca spatie/menu
namespace Spatie\Menu;

// importando o header global
require_once __DIR__ . '/header.php';

$menu = Menu::new()
    ->addClass('list-group')
    ->addClass('list-group-horizontal')
    ->add(Link::to('/', 'Home')
        ->addParentClass('list-group-item')
        ->addClass('list-group-item-action'))
    ->add(Link::to('/login.php', 'Login')
        ->addParentClass('list-group-item')
        ->addClass('list-group-item-action'))
    //->add(Link::to('#','Mais')
    //    ->setAttribute('role', 'navigation')
    //    )
    //->submenu('More', Menu::new()
    //    ->add(Link::to('/login.php', 'Login')
    //        ->addClass('dropdown-item'))
    //    ->addParentClass('dropdown-menu')
    //    //->wrap('div', ['class' => 'dropdown-menu'])
    //    )
    ;
echo $menu;
 ?>