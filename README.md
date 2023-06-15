# ⚡ Aplicativo Plan - API e DB #

### Stack utilizada

- PHP (Laravel)
- PostgreSQL
- PgAdmin

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
| General > Name | cs-postgresql | 
| Connection > Host name/address | cs-postgresql |
| Connection > Port | 5432 |
| Connection > Maintenance database | db_cs |
| Connection > Username | localdev |
| Connection > Password | localdev@123 |

### Portas
| Serviço  | Porta |
| --- | --- |
| PostgreSQL | 5432 |
| PgAdmin | 3400 |

## 🚀 Sobre o desenvolvedor

Este projeto é desenvolvido e mantido por Paulo Teixeira.
