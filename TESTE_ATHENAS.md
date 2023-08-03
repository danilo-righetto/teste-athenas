<img src='https://app.athenas.online/img/logo_athenasonline.png' border='0'>
<br>

O desafio é criar um crud simples (criar, recuperar, listar e remover) em PHP e que salve os dados no banco de dados (Firebird, MySQL, Mongo, PostgreSQL, sqLite) através de uma API REST.
Imprescindível separar a camada visual da camada de API em Actions ou Controllers diferentes.

**Tabela Pessoas**

<table>
<tr>
  <td>Codigo</td>
  <td>Nome</td>
  <td>CPF</td>
  <td>E-mail</td>
  <td>Categoria</td>
  <td>Classificação</td>
</tr>
<tr>
  <td>1</td>
  <td>Jorge da Silva</td>
  <td>111.111.111-11</td>
  <td>jorge@terra.com.br</td>
  <td>1</td>
  <td>Ouro</td>
</tr>
<tr>
  <td>2</td>
  <td>Flavia Monteiro</td>
  <td>111.111.111-11</td>
  <td>flavia@globo.com</td>
  <td>2</td>
  <td>Ouro</td>
</tr>
<tr>
  <td>3</td>
  <td>Marcos Frota Ribeiro</td>
  <td>111.111.111-11</td>
  <td>ribeiro@gmail.com</td>
  <td>2</td>
  <td>Ouro</td>
</tr>
<tr>
  <td>4</td>
  <td>Raphael Souza Santos</td>
  <td>111.111.111-11</td>
  <td>rsantos@gmail.com</td>
  <td>1</td>
  <td>Ouro</td>
</tr>
<tr>
  <td>5</td>
  <td>Pedro Paulo Mota</td>
  <td>111.111.111-11</td>
  <td>ppmota@gmail.com</td>
  <td>1</td>
  <td>Ouro</td>
</tr>
<tr>
  <td>6</td>
  <td>Winder Carvalho da Silva</td>
  <td>111.111.111-11</td>
  <td>winder@hotmail.com</td>
  <td>3</td>
  <td>Prata</td>
</tr>
<tr>
  <td>7</td>
  <td>Maria da Penha Albuquerque</td>
  <td>111.111.111-11</td>
  <td>mpa@hotmail.com</td>
  <td>3</td>
  <td>Prata</td>
</tr>
<tr>
  <td>8</td>
  <td>Rafael Garcia Souza</td>
  <td>111.111.111-11</td>
  <td>rgsouza@hotmail.com</td>
  <td>3</td>
  <td>Prata</td>
</tr>
<tr>
  <td>9</td>
  <td>Tabata Costa</td>
  <td>111.111.111-11</td>
  <td>tabata_costa@gmail.com</td>
  <td>2</td>
  <td>Ouro</td>
</tr>
<tr>
  <td>10</td>
  <td>Ronil Camarote</td>
  <td>111.111.111-11</td>
  <td>camarote@terra.com.br</td>
  <td>1</td>
  <td>Ouro</td>
</tr>
<tr>
  <td>11</td>
  <td>Joaquim Barbosa</td>
  <td>111.111.111-11</td>
  <td>barbosa@globo.com</td>
  <td>1</td>
  <td>Ouro</td>
</tr>
<tr>
  <td>12</td>
  <td>Eveline Maria Alcantra</td>
  <td>111.111.111-11</td>
  <td>ev_alcantra@gmail.com</td>
  <td>2</td>
  <td>Ouro</td>
</tr>
<tr>
  <td>13</td>
  <td>João Paulo Vieira</td>
  <td>111.111.111-11</td>
  <td>jpvieria@gmail.com</td>
  <td>1</td>
  <td>Ouro</td>
</tr>
<tr>
  <td>14</td>
  <td>Carla Zamborlini</td>
  <td>111.111.111-11</td>
  <td>zamborlini@terra.com.br</td>
  <td>3</td>
  <td>Prata</td>
</tr>
</table>

**Tabela Categoria**

<table>
<tr>
  <td>Codigo</td>
  <td>Nome</td>
</tr>
<tr>
  <td>1</td>
  <td>Admin</td>
</tr>
<tr>
  <td>2</td>
  <td>Gerente</td>
</tr>
<tr>
  <td>3</td>
  <td>Normal</td>
</tr>
</table>

**Backend:**
Você pode ou não utilizar um framework PHP.

**Frontend:**
Pode ser de sua prefência: jquery, react, vueJS... ou até mesmo em html puro realizando os requests direto php.

-   Validar os campos obrigatórios para edição e inclusão: Código, Nome
-   Categoria pardão = 3
-   Mascarar o campo CPF para digitação de dados;
-   o campo classificação não deve ser armazenado em tabela, porém, deve ser apresentado em interface com a seguinte regra:
    -- para valores de categooria 1 ou 2, deve-se apresentar Ouro
    -- para valor de categoria 3, deve-se apresentar Prata

**Requisitos:**

-   Faça paginação no grid de listagem inicial de 5 elementos; Pode usar JGrid, PrimeVue, qualquer outro.
-   Crie os seeders para popular as tabelas sugeridas acima;
-   Publicar em um repositório github;
-   Criar um README.md com instruções;

O objetivo do teste é avaliar a forma e organização como o problema será resolvido.

**Diferenciais opcionais**

-   VueJS2 ou VueJS3;
-   Testes unitários da API RestFull usando phpUnit, Pest, Codeception;
-   Utilize Docker; Publicar no DockerHub.
-   Utilizar Firebird;

Ao finalizar o teste envie a url do repositório para: team@werecruiter.tech
