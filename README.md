# Mini Framework PHP - Projeto MVC

Este é um projeto desenvolvido com PHP puro utilizando a arquitetura MVC (Model-View-Controller). O projeto conta com um **mini framework**, organizado com o auxílio do **Composer** e autoload via **PSR-4**, foi criado como projeto no curso de desenvolvimento web completo na Udemy, pelo instrutor Jorge Sant Ana e Jamilton Damasceno.

---

## Para que serve este framework?

Este mini framework foi criado para **facilitar o desenvolvimento de aplicações web organizadas com PHP**, aplicando o padrão **MVC** de forma clara, leve e funcional. Ele automatiza tarefas comuns como:

- Roteamento de URLs para controladores
- Separação entre lógica e interface
- Carregamento automático de classes
- Acesso centralizado ao banco de dados
- Reutilização de layouts com templates `.phtml`

### 📌 Exemplos de possiveis projetos utilizando esse framework:

- Twitter clone
- Lista de tarefas com banco de dados
- Loja virtual simples
- Sistema de blog com painel administrativo
- Aplicações CRUD (ex: cadastro de clientes, produtos, etc.)

---

## 📁 Estrutura do Projeto

├── App/  
│ ├── Controllers/ # Controladores (lógica do sistema)  
│ ├── Models/ # Modelos (regras de negócio / banco de dados)  
│ └── Views/ # Visões (templates .phtml)  
│  
├── public/ # Pasta pública acessível pelo navegador (index.php aqui)  
│  
├── vendor/  
│ └── MF/ # Framework  
│ ├── Action.php  
│ ├── Bootstrap.php  
│ ├── Container.php  
│ └── Model.php  
│ └── Autoload   
│
├── composer.json # Configuração do Composer  
├── composer.lock # Travamento das dependências  
├── .gitignore # Arquivos ignorados  
  
**OBS.:** A pasta vendor/composer não precisa ser enviada ao repositório, pois pode ser reconstruída com composer install.



## ⚙️ Requisitos
PHP >= 7.0

Composer

Servidor web local (Apache, Nginx ou o embutido do PHP)
