<h1 align="center">
  <img src="https://app.athenas.online/img/logo_athenasonline.png" alt="Athenas Teste - Danilo Righetto">
</h1>

## Introduction/Introdução

As [regras do teste](https://gist.github.com/lucmarcio/b5d67c48391f04876fa0d3103db80dec) podem ser encontradas aqui.

## Installation/Instalação

1. Verifique se o Docker e o Docker Composer estão instalados na sua maquina.
2. Execute o comando `docker-compose build` para gerar os containers.
3. Execute o comando `docker-compose up -d` para subir a estrutura da aplicação.
4. Execute o comando `docker exec athenas-laravel php artisan key:generate` para gerar a chave da aplicação.
5. Execute o comando `php artisan migrate:fresh --seed` para criar as tabelas necessárias e popular os dados do banco de dados.
6. Acesse: [localhost:80](http://localhost/).

Para acessar o container principal do projeto utilize o comando: `docker exec -it athenas-laravel bash`.

## Versioning/Versionamento

This project does not have a versioning system.

## Contributing/Contribuir

Want to contribute to the project? [Check it step by step](./CONTRIBUTING.md)

## Code of Conduct/Código de Conduta

Working on it

## License/Licença do Projeto

[PROPRIETARY SOFTWARE](./LICENSE.md) © Danilo Righetto.
