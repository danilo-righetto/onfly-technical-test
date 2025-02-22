<p align="center" style="background-color: white"><a href="https://www.onfly.com.br" target="_blank"><img src="https://www.onfly.com.br/wp-content/uploads/2024/07/onfly-logo-azul-01-768x307-1.webp" width="300" alt="Onfly"></a></p>

# Onfly - Teste Técnico PHP

Esse é um teste técnico para a vaga de **Desenvolvedor Sênior PHP** para a empresa **Onfly**.

## Requisitos

O prazo para entrega é de 4 dias seguidos.

### Você precisa desenvolver um microsserviço em Laravel para gerenciar pedidos de viagem corporativa. O microsserviço deve expor uma API REST para as seguintes operações:

- [ ] Criar um pedido de viagem: Um pedido deve incluir o ID do pedido, o nome do solicitante, o destino, a data de ida, a data de volta e o status (solicitado, aprovado, cancelado).

- [ ] Atualizar o status de um pedido de viagem: Possibilitar a atualização do status para "aprovado" ou "cancelado". (nota: o usuário que fez o pedido não pode alterar o status do mesmo)

- [ ] Consultar um pedido de viagem: Retornar as informações detalhadas de um pedido de viagem com base no ID fornecido.

- [ ] Listar todos os pedidos de viagem: Retornar todos os pedidos de viagem cadastrados, com a opção de filtrar por status.

- [ ] Cancelar pedido de viagem após aprovação: Implementar uma lógica de negócios que verifique se é possível cancelar um pedido já aprovado 

- [ ] Filtragem por período e destino: Adicionar filtros para listar pedidos de viagem por período de tempo (ex: pedidos feitos ou com datas de viagem dentro de uma faixa de datas) e/ou por destino.

- [ ] Notificação de aprovação ou cancelamento: Sempre que um pedido for aprovado ou cancelado, uma notificação deve ser enviada para o usuário que solicitou o pedido.

### Requisitos Técnicos:

- [X] Utilize o framework Laravel (versão mais recente possível).
- [ ] A API deve seguir as boas práticas de arquitetura de microsserviços.
- [X] Utilize um banco de dados relacional (MySQL) e forneça uma migração para a estrutura das tabelas necessárias.
- [ ] Implemente validação de dados no backend e tratamento de erros apropriado.
- [ ] Escreva testes automatizados (preferencialmente com PHPUnit) para as principais funcionalidades.
- [X] Utilize Docker para facilitar a execução do serviço. A aplicação deve poder ser executada via Docker.
- [ ] Implemente autenticação simples usando tokens (como JWT) para proteger a API.
- [ ] Crie um relacionamento entre as ordens de viagem e o usuário autenticado e faça com que cada usuário possa ver, editar e cadastrar apenas as suas próprias ordens.

## Critérios de Avaliação

- [ ] Organização e Qualidade do Código: Como você estrutura e organiza seu código, aplicando boas práticas de desenvolvimento.
- [ ] Uso de Boas Práticas do Laravel: Queremos ver como você utiliza os recursos do framework, como Eloquent, Middlewares, Requests e Resources.
- [ ] Eficiência da Solução: Avaliação da performance geral e da eficiência da sua solução.
- [ ] Testes e Confiabilidade: Como você garante a confiabilidade da aplicação com testes automatizados.
- [X] Documentação: A clareza das instruções fornecidas no README.md para configurar e executar o projeto.

## Instalação

A partir de um ambiente de desenvolvimento composto pelo PHP na versão 8.3 ou superior e com o Composer instalado execute o comando dentro da pasta do projeto.

Este projeto utiliza o [Docker](https://www.docker.com/) e o [Docker Compose](https://docs.docker.com/compose/) para o desenvolvimento e deploy local.

### Deploy local

Execute os passos abaixo para iniciar (subir) o projeto:

1. Acesse a pasta do projeto [./api](./api).

2. Execute o comando para criar o arquivo `.env`:

```sh
cp .env.example .env
```

3. Execute o comando para construir (build) as imagens do projeto:

```sh
docker-compose build --no-cache
```

4. Execute o seguinte comando para iniciar (subir) o projeto:

```sh
docker-compose up -d
```

5. Execute o seguinte comando para gerar uma chave para a aplicação:

```sh
docker-compose exec -it app php artisan key:generate
```

6. Execute as `migrations` da aplicação: 

```sh
docker-compose exec -it app php artisan migrate
```

7. Execute as `seeders` da aplicação: 

```sh
docker-compose exec -it app php artisan db:seed
```


## Documentação

Documentação da API implementada nesse projeto.

### Auth

> Cadastro de Usuário

**REQUEST**
```sh
curl --request POST \
  --url http://localhost/api/register \
  --header 'Content-Type: application/json' \
  --data '{
	"name": "",
	"email": "",
	"password": "",
	"password_confirmation": ""
}'
```

**RESPONSE**
```json
{
	"user": {
		"name": "",
		"email": "",
		"updated_at": "",
		"created_at": "",
		"id": 1
	},
	"token": ""
}
```

> Login

**REQUEST**
```sh
curl --request POST \
  --url http://localhost/api/login \
  --header 'Content-Type: application/json' \
  --data '{
	"email": "",
	"password": ""
}'
```

**RESPONSE**
```json
{
	"token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vbG9jYWxob3N0L2FwaS9sb2dpbiIsImlhdCI6MTczOTA3MTc4MCwiZXhwIjoxNzM5MDc1MzgwLCJuYmYiOjE3MzkwNzE3ODAsImp0aSI6InRvTUlzeElhdjNaTVhCdXAiLCJzdWIiOiIxIiwicHJ2IjoiMjNiZDVjODk0OWY2MDBhZGIzOWU3MDFjNDAwODcyZGI3YTU5NzZmNyIsInJvbGUiOm51bGx9.l8PMnX_taHHvrdWOmkCMDxY7imrYpnQ5zZ1tkZhCK_w"
}
```

## Stack utilizada

- [PHP](https://www.php.net/manual/pt_BR/index.php)
- [Laravel](https://laravel.com/docs) - 11x
- [Composer](https://getcomposer.org/)

## Autores

- [Github - @danilo-righetto](https://github.com/danilo-righetto)
- [Linkedin - @danilo-righetto](https://www.linkedin.com/in/danilo-righetto/)

## Licença

Esta aplicação é um software de código aberto licenciado pelo [MIT license](https://opensource.org/licenses/MIT).