# DBSeminario2
Trabalho 2 de DB. Estamos fazendo apenas seeders neste projeto.

## Tecnologias utilizadas

- Puramente e simplesmente: Laravel.

## Requisitos

- Você deve ter (obviamente) laravel instalado na sua máquina, logo, deve ter o composer também.

- Caso você utilize o MongoDB deverá instalar no seu projeto o plugin laravel-mongodb via composer.

```
$ composer require jenssegers/mongodb
```

## Em caso de problemas com mongodb-php talvez isso seja útil...

https://github.com/jenssegers/laravel-mongodb/issues/797

## Clonando o projeto

### Ao clonar o projeto você deve ir a pasta do projeto (DBSeminario2) e rodar os seguintes comandos.

Você deverá rodar este comando para instalar as dependências do laravel/composer.

```
$ composer install
```

Copie o .env-example para um arquivo com o nome de .env.
Nele você deverá setar o caminho para seu banco de dados assim como suas credenciais.
Recomendamos que crie um banco com o nome de XadrezDB, para seguir o padrão.

```
$ cp .env-example .env
```

Gere a chave do php artisan.

```
$ php artisan key:generate
```

## Configurando o banco

### TUDO DEVE SER CONFIGURADO NO .ENV!!!!!!!!!!!!!!!!!!!

### SQL

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=

```

### MONGODB

```
DB_CONNECTION=mongodb

MONGO_DB_HOST=127.0.0.1
MONGO_DB_PORT=27017
MONGO_DB_DATABASE=mongocrud
MONGO_DB_USERNAME=
MONGO_DB_PASSWORD=

```

Você deve alterar a classe Account para herdar de eloquent da seguinte forma:

```

class Account extends Eloquent

```

## Rodando o seeder

```
$ php artisan db:seed
```


## Observacoes

Tem um pequeno erro na factory de PostsLikes, mas nada que interfira no funcionamento da seeder. Conforme o banco cresce o erro tende a não aparecer mais.

