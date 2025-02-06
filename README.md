<p align="center" style="background-color: white"><a href="https://www.exata.it" target="_blank"><img src="https://www.exata.it/wp-content/uploads/2023/07/logo-exata-data-intelligence.png" width="300" alt="Exata it"></a></p>

# Onfly - Teste Técnico PHP

Esse é um teste técnico para a vaga de **Desenvolvedor Sênior PHP** para a empresa **Onfly**.

## Requisitos

### Requisitos

O prazo para entrega é de 4 dias seguidos.

### Requisitos Técnicos:

- [ ] Usar o framework [Laravel](https://laravel.com/) (preferencialmente versão 11).
- [ ] Utilizar migrações para criação de tabelas no banco de dados.
- [ ] Utilizar Seeders para popular o banco com dados de teste.
- [ ] Organizar o código em controllers, models e views conforme a estrutura do Laravel.
- [ ] Adicionar `testes unitários` e de `feature` (opcional, mas será um diferencial).

## Instalação

A partir de um ambiente de desenvolvimento composto pelo PHP na versão 8.3 ou superior e com o Composer instalado execute o comando dentro da pasta do projeto.

Este projeto utiliza o [Docker](https://www.docker.com/) e o [Docker Compose](https://docs.docker.com/compose/) para o desenvolvimento e deploy local.

### Deploy local

Execute os passos abaixo para iniciar (subir) o projeto:

1. Acesse a pasta do projeto [./api](./api);

2. Execute o comando para construir (build) as imagens do projeto:

```sh
docker-compose build --no-cache
```

3. Execute o seguinte comando para iniciar (subir) o projeto:

```sh
docker-compose up -d
```

4. Execute o seguinte comando para gerar uma chave para a aplicação:

```sh
docker-compose exec -it app php artisan key:generate
```

5. Execute as `migrations` da aplicação: 

```sh
docker-compose exec -it app php artisan migrate
```

6. Execute as `seeders` da aplicação: 

```sh
docker-compose exec -it app php artisan db:seed
```


## Documentação

- [PHP](https://www.php.net/manual/pt_BR/index.php)
- [Laravel](https://laravel.com/docs)
- [Composer](https://getcomposer.org/)

## Stack utilizada

- **Back-end:** Laravel 11.x, PHP

## Autores

- [Github - @danilo-righetto](https://github.com/danilo-righetto)
- [Linkedin - @danilo-righetto](https://www.linkedin.com/in/danilo-righetto/)

## Licença

Esta aplicação é um software de código aberto licenciado pelo [MIT license](https://opensource.org/licenses/MIT).