# login
# Como iniciar / Get Started
`compose install`
# Bibliotecas
As bibliotecas importadas pelo composer ficam em /vendor/ .

Novas bibliotecas que podem ser instaladas pelo composer
para facilitar a codificacao podem ser encontradas em :
* https://packagist.org/explore/

E geralmente podem ser instaldas como :
```
composer require autor/biblioteca
```
## bootstrap
A documentacao do Bootstrap pode ser encontrada em :
* https://getbootstrap.com/docs/4.5/getting-started/introduction/
## spatie/menu
O namespace que deve ser colocado no inicio de um arquivo
php dentro da tag <?php para utilizar a biblioteca Spatie é :
```php
namespace Spatie\Menu;
```
A documentacao para utilizar o Spatie pode ser encontrada em :
* https://packagist.org/packages/spatie/menu
* https://docs.spatie.be/menu/v2/introduction/
# Menu
O menu foi criado usando a biblioteca spatie/menu que
cria o menu como se fosse uma lista utilizando as tags
html para esse fim que sao as tags `ul` que indicam o
inicio de uma nova lista e as tags `li` que indicam um elemento
de uma lista.

Para editar o menu edite o arquivo /menu.php.

Para adcionar ou retirar items do menu exclua ou duplique
um aninhamento de `->add()`.

O `->addParentClass()` atribui uma classe a tag html pai ,
por exemplo `Spatie\Menu` gera um codigo html como a seguir :
```html
<ul>
    <li><a href="/">Home</a></li>
    <li><a href="/about">About</a></li>
    <li><a href="/contact">Contact</a></li>
</ul>
```
Na criacao do link `Link::` gerara a tag html `<a></a>`
e adicionar `->addParentClass()` atribuira uma classe a
tag `<li>`

Semelhantemente `addClass()` adiciona uma classe html ao
elemento html atual. Assim se usada em `Link::` atribuira
uma classe ao elemento link.

Semelhantemente `addClass()` em `Menu::new()->addClass()`
adiciona uma classe ao elemento raiz do menu que eh o elemento
`<ul>`.
