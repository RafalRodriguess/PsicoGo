
# QUART'S


## Requisitos

Certifique-se de ter as seguintes ferramentas instaladas em seu ambiente de desenvolvimento:

- [Git](https://git-scm.com/)
- [PHP](https://www.php.net/) (8.2 ou superior)
- [Composer](https://getcomposer.org/)
- [Node.js](https://nodejs.org/) e [npm](https://www.npmjs.com/)
- [MySQL](https://www.mysql.com/) ou outro sistema de gerenciamento de banco de dados de sua escolha

## Configuração Inicial

1. **Clonar o Repositório:**

   ```bash
   git clone https://seu-repositorio.git

   1. **Instalar dependencias:**

   ```bash
   composer install
Instalar Dependências do Composer:

composer install

Copiar o Arquivo de Configuração:

bash
Copy code
cp .env.example .env
Gerar Chave de Aplicativo:

bash
Copy code
php artisan key:generate
Configurar o Banco de Dados:

Abra o arquivo .env e configure as informações do banco de dados.

Executar as Migrações:

bash
Copy code
php artisan migrate
Instalar Dependências NPM e Compilar Ativos:

bash
Copy code
npm install
npm run dev
Iniciar o Servidor de Desenvolvimento
bash
Copy code
php artisan serve
A aplicação estará disponível em http://localhost:8000 por padrão.
