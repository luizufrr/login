# login
# Como iniciar / Get Started
Siga esses passos e aplique os comandos
## Docker
* Instale o Docker e o Docker-Compose
* Clone esse repositorio em algum lugar do sistema
* Va para o repositorio clonado
* Inicie o terminal
* `docker-compose up --build -d`
* Edite os arquivos que se refletiram automaticamente no servidor criado do Docker
* Abra localhost:8080 no browser
## Linux
### Debian
* Abra o terminal (http://wiki.nosdigitais.teia.org.br/Terminal_de_Comandos_-_Shell_Linux)
* `sudo apt update`
* `sudo apt install -y git php unzip`
* `mkdir ~/github`
* `mkdir ~/github/luizufrr`
* `cd ~/github/luizufrr`
* `git clone https://github.com/luizufrr/login.git`
* `php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"`
* `php composer-setup.php --install-dir=/usr/bin --filename=composer`
* `cd login`
* `compose install`
* `php -S 127.0.0.1:8181`
* Abra localhost:8181 no browser
### Windows
* Abra o Power Shell no modo administrador
  * Abra o Power Shell (https://pt.wikihow.com/Executar-o-Powershell)
  * `Start-Process powershell -Verb runAs` (https://www.it-swarm.dev/pt/powershell/powershell-executando-um-comando-como-administrador/939774586/)
* `Set-ExecutionPolicy Bypass -Scope Process`
* Instale Chocolatey para instalar git, php, composer
  * `Set-ExecutionPolicy Bypass -Scope Process -Force; [System.Net.ServicePointManager]::SecurityProtocol = [System.Net.ServicePointManager]::SecurityProtocol -bor 3072; iex ((New-Object System.Net.WebClient).DownloadString('https://chocolatey.org/install.ps1'))` (https://chocolatey.org/install)
* Instale o git (https://git-scm.com/downloads)
  * `choco install git`
* Instale o php
* `cd C:`
* `mkdir github`
* `cd github`
* `mkdir luizufrr`
* `cd luizufrr`
* `git clone https://github.com/luizufrr/login.git`
* `cd login`
* `php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"`
* `php composer-setup.php --install-dir=/usr/bin --filename=composer`
* `compose install`
* `php -S 127.0.0.1:8181`
* Abra localhost:8181 no browser
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
* https://docs.spatie.be/menu/v2/examples/bootstrap-menu/ (Spatie e Bootstrap)
## doctrine/orm
Usada para facilitar a criacao das tabelas no banco de dados .

Pode ser usada para encapsular as query de banco de dados sem a necessidade de lembrar da syntax dos comandos sql (veja o codigo abaixo). Para mais veja : https://www.doctrine-project.org/projects/doctrine-orm/en/2.7/tutorials/getting-started.html#starting-with-the-product-entity . Foi usado somente a criacao das tabelas no banco de dados (criacao de schema) para manter compatibilidade com o php 4 pois havia no codigo referencia a funcoes do mesmo como a funcao `mysql_query` ao invez de `mysqli_query` e tambem `mysql_connect` , `mysql_error` e `mysql_select_db` ao invez de respectivamente `mysqli_connect` , `mysqli_error` e `mysqli_select_db` .
```php
$produto = new Produto();
$produto->campo1 = $value1;
$produto->campo2 = $value2;
$produto->campo3 = $value3;

//usado somente na primeira vez que grava a informacao
$entityManager->persist($produto);

//usado para gravar no banco de dados
$entityManager->flush();

echo "Produto com id " . $produto->id . "atualizado<br>";
```
* Use o comando a seguir para criar no banco de dados as tabelas conforme documentacao e classes da pasta /src/
`vendor/bin/doctrine orm:schema-tool:create`
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
