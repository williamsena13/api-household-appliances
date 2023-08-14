## Teste Desenvolvedor Fullstack (PHP) - Projeto EletroAPI

Este é um projeto desenvolvido por **[Williamsena13](https://williamsena13.github.io)** que consiste em uma aplicação Fullstack utilizando o framework Laravel 10 para o Backend e VueJS para o Frontend. O objetivo é criar uma pequena API para cadastro de eletrodomésticos, permitindo a criação, listagem, edição e remoção de registros, além de uma aplicação frontend para interagir com essa API.

### Backend

#### Requisitos Técnicos
- Linguagem de programação: PHP 8.1 ou superior
- Framework: Laravel 10
- Banco de dados: Relacional (a escolha )

#### Funcionalidades

A API deve oferecer as seguintes funcionalidades:

- Criação de um novo eletrodoméstico com os seguintes campos:
  - Nome
  - Descrição
  - Tensão
  - Marca
- Listagem de eletrodomésticos cadastrados.
- Edição de um eletrodoméstico existente.
- Remoção de um eletrodoméstico.

#### Configuração e Uso

1. Clone o repositório do projeto:

   ```
   git clone https://github.com/williamsena13/api-household-appliances
   ```

2. Instale as dependências do Laravel:

   ```
   composer install
   ```

3. Configure as informações do banco de dados no arquivo `.env`.

4. Execute as migrações para criar as tabelas no banco de dados:

   ```
   php artisan migrate
   ```

5. Inicie o servidor local:

   ```
   php artisan serve
   ```

6. Acesse a API através de `http://localhost:8000`.

#### Exemplos de Requisições

- Criar um novo eletrodoméstico:
  ```
  POST /api/eletrodomesticos
  {
    "nome": "Geladeira Frost Free",
    "descricao": "Este produto é totalmente versátil...",
    "tensao": "220v",
    "marca": "Electrolux"
  }
  ```

- Listar todos os eletrodomésticos:
  ```
  GET /api/eletrodomesticos
  ```

- Editar um eletrodoméstico existente:
  ```
  PUT /api/eletrodomesticos/{id}
  {
    "nome": "Nova Geladeira Frost Free",
    "descricao": "Descrição atualizada...",
    "tensao": "110v",
    "marca": "Brastemp"
  }
  ```

- Remover um eletrodoméstico:
  ```
  DELETE /api/eletrodomesticos/{id}
  ```

### Frontend

#### Requisitos Técnicos

- Framework JavaScript: VueJS (ou outro framework de sua escolha)

#### Funcionalidades

- Interface que permite ao usuário interagir com a API Backend.
- Exibir mensagens de erro, aviso e alerta para orientar o usuário.

#### Configuração e Uso

1. Acesse o diretório do projeto frontend:

   ```
   cd nome-do-diretorio-frontend
   ```

2. Instale as dependências do VueJS:

   ```
   npm install
   ```

3. Inicie o servidor de desenvolvimento:

   ```
   npm run serve
   ```

4. Acesse a aplicação através de `http://localhost:8080`.

### Diferenciais Técnicos

O desenvolvedor pode implementar os seguintes diferenciais técnicos:

- VueX para gerenciamento de estado.
- VueRouter para navegação.
- Testes unitários e de integração.
- Implementação de GraphQL.
- Uso de Docker para facilitar a implantação.

### Contato

Em caso de dúvidas ou problemas com o projeto, entre em contato com o desenvolvedor **williamsena13** através do email: william@bassena.com.br

**Observação:** A autenticação da API não é avaliada neste teste. Certifique-se de que o código esteja organizado, siga os padrões e atenda aos requisitos descritos para ter uma avaliação positiva. Boa sorte!