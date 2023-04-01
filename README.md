# Products API

### To get products use `/api/products`.

#### Steps to start project:
1. `cp .env.example .env`
2. `cp docker/.env.example docker/.env`
3. `cd docker/`
4. `docker-compose up -d`
5. `docker-compose exec -u www-data php-fpm composer i`