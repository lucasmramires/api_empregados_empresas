# Projeto api_empregados_empresas
API com o intuito de listar, buscar, adicionar, editar e remover empresas e empregados. Também possível de buscar os empregados de uma determinada empresa.

## Clonar repositório
Você pode clonar o repositório através do comando git clone:
```bash
git clone https://https://github.com/lucasmramires/api_empregados_empresas.git
```
Ou caso seja da sua preferência, podes fazer o download diretamente pelo github e colocar os arquivos na sua pasta local.

## Instalação
Crie uma tabela no seu banco de dados MySQL com o nome teste_simsave ou qualquer outro nome que desejar.

Configure o arquivo .env com os dados de conexão do seu banco de dados MySQL local.

Instale as dependencias do projeto com o comando composer install.

Rode o comando php artisan migrate para criar as tabelas iniciais no seu bd.

Rode o comando php artisan db:seed --class=CompanySeeder para popular a tabela companies.

Sirva sua API com o comando php artisan serve.

## Stacks
Utilizado o framework Laravel 5.7.29 para o desenvolvimento do sistema.

## Requisitos
Laravel 5.7.29 
10.4.14-MariaDB
