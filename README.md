# Reserva de quartos de hotel

<b>Ideia: </b> Criar um sistema para reserva de quartos de hotel, checkin e checkout, pagamento... Contendo uma área administrativa e para clientes.

<em>Projeto sendo desenvolvido como estudo</em>


## Ambientes:

- <strong>Administrativo:</strong> Apenas o administrador do sistema terá acesso. Nesse ambiente terá o cadastro de quartos, andares, categorias de quartos com valores e algumas parametrizações e funções específicas.

- <strong>Clientes:</strong> Área específica para os clientes acessarem e fazer suas reservas, checar quartos disponíveis, etc.

## Detalhes técnicos:

Sistema sendo desenvolvido em PHP 7.4+, usando a arquitetura MVC (POO), CoffeeCode DataLayer como ORM, banco de dados MySQL, seguindo as melhores práticas de programação (separação de camadas, separação de responsabilidades, nomes de variáveis e métodos com coerência).

Para rodar esse sistema localmente, é necessário: PHP 7.4+, MySQL, Composer, GIT (para clonar o repositório, caso queira). <em>Futuramente pretendo criar um docker-compose para ser utilizado em contêineres de forma mais 
prática.</em>

## Procedimentos para instalação local:

- Baixe o projeto em uma pasta
  - Com o GIT instalado, use o comando <code>git clone https://github.com/rotognin/reserva.git</code>
  - Será criada a pasta <code>reserva</code>
- Acesse a pasta via linha de comando
- Execute o comando: <code>composer update</code> para baixar as dependências do projeto
- No MySQL crie um banco com o nome <code>reserva_db</code>
- Rode o script <code>docs/tabelas.sql</code> no banco para criar as tabelas do sistema
  - Será criado o usuário "admin" no banco, senha "123", com acesso ao ambiente administrativo.
- Ajuste as configurações de acesso ao banco de dados no arquivo <code>src/config.php</code>

### Considerações

O projeto está em constante atualização, sendo adicionadas funcionalidades e melhorias. Sugestões serão muito bem vindas.