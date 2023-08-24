
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

5. Execute os seeders para popular o banco de dados com dados de teste:

   ```
   php artisan db:seed
   ```

6. Inicie o servidor local:

   ```
   php artisan serve
   ```

7. Acesse a API através de `http://localhost:8000`.

### Frontend

...

### Deploy

Para realizar o deploy da aplicação Laravel em um ambiente de produção, siga as etapas abaixo:

1. Configuração do Ambiente de Produção

   Certifique-se de que o servidor de produção atenda aos requisitos técnicos mencionados anteriormente, como a versão do PHP e outras dependências.

2. Configuração do Ambiente

   - Configure o arquivo `.env` no servidor de produção com as informações de conexão com o banco de dados e outras configurações específicas.
   - Certifique-se de definir a variável `APP_ENV` como `production` no `.env`.

3. Publicação da Aplicação

   - Faça o upload dos arquivos da aplicação Laravel para o servidor de produção, geralmente usando `git` ou um método seguro de transferência de arquivos.
   - Configure o servidor da web (por exemplo, Apache, Nginx) para apontar para o diretório `public` do projeto Laravel.

4. Atualização de Dependências

   - Acesse o diretório da aplicação no servidor e execute `composer install --optimize-autoloader --no-dev` para instalar as dependências e otimizar o autoloader.

5. Geração de Chave de Criptografia

   - Execute `php artisan key:generate` no servidor para gerar uma nova chave de criptografia para a aplicação.

6. Cache e Otimizações

   - Execute `php artisan config:cache` e `php artisan route:cache` para otimizar a configuração e cache de rotas.
   - Execute `php artisan optimize` para outras otimizações.

7. Configuração do Servidor Web

   - Configure o servidor web para direcionar as solicitações para o aplicativo Laravel. Certifique-se de configurar as regras de reescrita (por exemplo, `.htaccess` no Apache) corretamente.

8. SSL (Opcional, mas recomendado)

   - Configure o SSL no servidor de produção para garantir a segurança das comunicações.

9. Acesse a Aplicação

   - Acesse a aplicação através do domínio ou endereço IP do servidor.
