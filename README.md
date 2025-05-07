# Symfony DDD Skeleton

## Descripción
Este proyecto es un skeleton de Symfony dockerizado que implementa una arquitectura hexagonal (Domain-Driven Design). Proporciona una base sólida para desarrollar aplicaciones siguiendo los principios de DDD y las mejores prácticas de desarrollo.

## Tecnologías
- PHP 8.2
- Symfony 7.2
- Docker
- Doctrine ORM 3.3
- PostgreSQL
- Redis
- RabbitMQ
- PHPStan
- PHPUnit
- PHP-CS-Fixer
## Getting Started

### Requisitos Previos
- Docker
- Docker Compose
- Git

### Instalación
### Instalación
1. Clonar el repositorio:
```bash
git clone https://github.com/tu-usuario/symfony-ddd-skeleton.git
cd symfony-ddd-skeleton
```

2. Configurar git hooks:
```bash
git config --local core.hooksPath .githooks/
```

3. Iniciar los contenedores:
```bash
docker-compose up -d
```

4. Instalar dependencias:
```bash
docker-compose exec php composer install
```

5. Ejecutar migraciones:
```bash
docker-compose exec php bin/console doctrine:migrations:migrate
```

## Controladores Disponibles

### Health Check
- **Endpoint**: `/check`
- **Método**: GET
- **Descripción**: Verifica el estado de salud de la aplicación
- **Respuesta**: `{"status": "ok"}`

### Libros
- **Listar Libros**
    - Endpoint: `/api/v1/books`
    - Método: GET
    - Descripción: Obtiene la lista de libros disponibles
    - Respuesta: Colección de libros con id, título, autor y páginas

- **Crear Libro**
    - Endpoint: `/api/v1/books`
    - Método: POST
    - Descripción: Crea un nuevo libro
    - Payload:
      ```json
      {
        "title": "string",
        "author": "string",
        "pages": "integer"
      }
      ```
    - Respuesta: `{"id": "string"}`

## Contacto
- [@PortilloDev](https://github.com/PortilloDev)
- [Email de contacto](ipp_198@hotmail.com)
- [Perfil de linkedin](https://www.linkedin.com/mynetwork/discovery-see-all/?usecase=PEOPLE_FOLLOWS&followMember=ivan-portillo-perez)

## Licencia
Este proyecto está bajo licencia propietaria.