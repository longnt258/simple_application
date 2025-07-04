# BUILD THE "HELLO WORLD" APPLICATION (2 DAY)

## DESCRIPTION
- Run application on Docker.
- Push the source code to Github repo.
- Migrate MySQL to application.
- Migrate Jenkins to support building and deployment.
- Jenkins automatic build and deploy when pushing a new code.

## TECHNOLOGY
- Git
- Docker
- PHP
- MySQL
- Jenkins

## STEP BY STEP
- Create and deploy PHP project.

- Run application with Apache2 server:
  + Build a Docker container running Apache2 (docker-compose.yml).
  + Migrate the PHP to apache2 (php:8.4.8-apache docker image).

- Seperate to Dockerfile to build php application with apache server:
  + Add Dockerfile to .application/src.

- Install MySQL with Docker:
  + Create an initial file to create the first data.
  + No expose the mysql port to internet (No use "ports" definition).

- Run PHP application with MySQL:
  + Get the information of MySQL db by environment (no hard code) -> use .env file and declare variable in app service in docker-compose.yml.

- Set the static IP for application and DB :
  + Set the range of the IPs.
  + Set each servers with a specific IP.
  + Private IP:
    . Application: 10.10.0.20  -->  expose 127.0.0.1:8080
    . DB: 10.10.0.10
    . Docker: 10.10.0.0/16
  
- Setup the port forwarding to external internet (8080)



