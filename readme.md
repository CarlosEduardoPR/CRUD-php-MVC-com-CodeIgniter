## 📝 Descrição do Projeto

Projeto CRUD Implementado com Padrão MVC, Podendo se Criar, Ver, Editar e Excluir Usuários, e com Acesso Somente com Cadastro no Banco de Dados Realizado por meio da Pagina Inicial para Acesso aos Serviços

![alt text](/assets/images/site2.png)
![alt text](/assets/images/site.png)

## 📁 Usar Localmente esse Repositório

Os programas **git** e servidor de banco de dados **MySQL 8** já deverão estar instalados e configurados na máquina local. O usuário também deverá já estar cadastrado no Gitea.

### Instalar Projeto em Windows:

```
cd C:\wamp\www
```

### Após isso Faça:

```
git clone http://10.6.43.209:3000/Estagiarios/Projeto_MVC_PHP_Carlos
```

## 🎲 Criar a Base de Dados Local

### No seu Localhost Faça:

```sql
username: root
pass:
```

```sql
CREATE DATABASE cadastro;
USE cadastro;
CREATE TABLE usuarios(
id int(4) AUTO_INCREMENT,
nome varchar(255) NOT NULL,
email varchar(255) NOT NULL,
senha varchar(255) NOT NULL,
data_nasc date NOT NULL,
PRIMARY KEY (id)
);
```

## 🛠️ Construído com

* HTML
* CSS com Bootstrap
* PHP com Framework CodeIgniter3

## ✒️ Autor

* **Carlos Eduardo** - *Desenvolvimento* - [Perfil](https://github.com/CarlosEduardoPR)




