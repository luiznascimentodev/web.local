# Sistema de Login e Registro - CodeIgniter 4

Este projeto é uma aplicação web simples contendo páginas de **login** e **registro de usuários**, desenvolvida em **PHP** utilizando o framework **CodeIgniter 4**. 

Foi criado com fins acadêmicos e funciona localmente em ambiente de desenvolvimento como o **XAMPP**.

## Funcionalidades

- Cadastro de novos usuários com validação de dados.
- Autenticação segura com verificação de senha.
- Redirecionamento após login.
- Estrutura organizada seguindo o padrão MVC do CodeIgniter.

## Requisitos

- PHP 7.4 ou superior
- MySQL
- Composer
- XAMPP ou similar (Apache + MySQL)
- CodeIgniter 4 (já incluído no projeto)

## Instalação e Execução

1. Clone este repositório:
   ```bash
   git clone https://github.com/luiznascimentodev/web.local.git
   ```

2. Mova o projeto para a pasta `htdocs` do XAMPP:
   ```bash
   mv web.local /caminho/para/xampp/htdocs/web.local
   ```

3. Inicie o Apache e o MySQL pelo painel do XAMPP.

4. Crie um banco de dados no phpMyAdmin com o nome `login_ci` (ou o nome definido em `.env`).

5. Importe o arquivo `login_ci.sql` (caso exista no projeto) para criar as tabelas necessárias.

6. Configure o arquivo `.env` com suas credenciais do banco de dados:
   ```
   database.default.hostname = localhost
   database.default.database = login_ci
   database.default.username = root
   database.default.password =
   database.default.DBDriver = MySQLi
   ```

7. Acesse o projeto no navegador:
   ```
   http://localhost/web.local/public
   ```

## Tecnologias Utilizadas

- **PHP 7.4+**
- **CodeIgniter 4**
- **MySQL**
- **HTML5 + CSS3**
- **Bootstrap (opcional)**

## Estrutura de Diretórios (principais)

- `app/Controllers`: Controladores da aplicação
- `app/Models`: Modelos de acesso ao banco de dados
- `app/Views`: Arquivos de visualização (HTML + PHP)
- `public/`: Pasta pública acessível via navegador

## Observações

Este projeto **não está hospedado no GitHub Pages**, pois depende de um servidor backend (PHP). Utilize XAMPP ou ambiente semelhante para rodá-lo corretamente.

## Contato

- **Autor**: Luiz Nascimento  
- **LinkedIn**: [linkedin.com/in/luiz-felippe-nascimento](https://www.linkedin.com/in/luiz-felippe-nascimento/)
