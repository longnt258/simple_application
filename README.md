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
  + Get the information of MySQL db by environment (no hard code) -> use .env file and declare variable in app service in docker-compose.yml. (add the .gitignore file to avoid to push the .env to github)

- Set the static IP for application and DB :
  + Set the range of the IPs.
  + Set each servers with a specific IP.
  + Private IP:
    . Application: 10.10.0.20  -->  expose 127.0.0.1:8080
    . DB: 10.10.0.10
    . Docker: 10.10.0.0/16
  
- Setup the port forwarding to external internet on the router (8080).

- Setup the reverse proxy (nginx):
  + Create a folder with nginx configuration
  + Setup configuration in docker-compose

- Security:
  + Application (PHP + Apache): 
    . Limit permissions
    . php.ini
    . Custom apache configuration
  + Database (MySQL):
    . No configure port in docker-compose
    . Set a strong password
    . No use the root user (create an user with the limited permissions to use in application)
    . Mount volumes to keep data and track the logs
    . Custom the configuration with my.conf file
  + Reverse proxy (Nginx):
    . Delete the default configuration and add the custom configuration (nginx.conf)
    . Configure in docker-compose




