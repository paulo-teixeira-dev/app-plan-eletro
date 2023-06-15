# ⚡ Aplicativo Plan - API e DB #

### Stack utilizada

- PHP (Laravel)
- PostgreSQL
- PgAdmin
- nginx

### Ambiente de desenvolvimento

- Instale o docker no WSL(Windows Subsystem for Linux) com Ubuntu LTS 

### Configurando ambiente e construindo containers

Criando o diretório de volumes do PostgreSQL.

```
mkdir database database/postgre-sql
```

Criando containers

```
sudo docker compose up -d
```

Executando migrações do Laravel

Acesse o diretório

```
cd src/
```

Copie o arquivo Env

```
cp .env.example .env
```

Crie uma nova chave para a aplicação

```
sudo docker compose exec php php artisan key:generate
```
obs: 
- logo após deverá preencher o arquivo env com as configurações do banco de dados conforme descrito no final deste arquivo.
- No arquivo env, em configurações do banco de dados, o DB_CONNECTION deverá ser "pgsql".

Execute a migração

```
sudo docker compose exec php php artisan migrate --seed
```

### Visualizar Base de dados com pgAdmin
#### Registrando o servidor da base de dados

Após criado os containers do postgreSQL e pgAdmin, navegue até `http://localhost:3400/` e efetue o login com usuário `localdev@example.com`e senha `localdev`

Navege até Servers > Register > Server para preecher os campos necessarios de conexão.

| Campo  | Valor |
| --- | --- |
| General > Name | plan | 
| Connection > Host name/address | pgsql |
| Connection > Port | 5432 |
| Connection > Maintenance database | db_plan_eletro |
| Connection > Username | localdev |
| Connection > Password | localdev@123 |

### Portas
| Serviço  | Porta |
| --- | --- |
| PostgreSQL | 5432 |
| PgAdmin | 3400 |

## 🚀 Sobre o desenvolvedor

Este projeto é desenvolvido e mantido por Paulo Teixeira.
