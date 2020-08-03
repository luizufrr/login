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
    ->add(Link::to('/cadastrouser.php', 'Cadastrar')
        ->addParentClass('list-group-item')
        ->addClass('list-group-item-action'))
    ->submenu(
		Link::to('#','Mais')
			->addClass('dropdown-toggle list-group-item list-group-item-action')
   		    ->setAttributes(['data-toggle' => 'dropdown',
	    		'aria-haspopup' => 'true',
		    	'aria-expanded' => 'false',
				'role' => 'button']
				)
			,
		Menu::new()
	        ->addClass('dropdown-menu')
        	->add(Link::to('/login.php', 'Login')
            	->addClass('dropdown-item')
			)
	    )
    ;
echo $menu;
 ?>
