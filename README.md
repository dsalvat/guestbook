# Guestbook - Symfony 5 test
##### How-to README file

##### Creating new project
    symfony new guestbook --version=5.0
    cd guestbook

##### Starting server
    symfony server:start -d
    symfony open:local
    

#### Installing Packages

##### Logger
    symfony composer req logger

###### Tracking logs
    symfony server:log
    
##### Debugger (only for development env)
    symfony composer req debug --dev

##### Annotations 
    symfony composer req annotations

##### ORM (Object Relational Mapping)
    symfony composer req orm

##### Easy Admin
    symfony composer req admin
    
##### Twig Extra
    symfony composer require twig/intl-extra

#### Interacting with Data
 
##### Creating Entities
    symfony console make:entity Conference
    
##### Creating Migration
    symfony console make:migration
##### Migrating
    symfony console doctrine:migrations:migrate




#### PostgreSQL and Redis Docker containers

##### Run Docker compose
    docker-compose up -d
    
##### Accessing the DB
    docker exect -it guestbook_database_1 psql -U main -W main    
or (if you have the psql binary installed in your local machine)

    symfony run psql 



    
