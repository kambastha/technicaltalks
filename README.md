# Docker-Compose Hands-on Lab

## LAB --> 1

-open https://labs.play-with-docker.com and Add new instance:

```
vim docker-compose.yml
```

Copy Below content in the file


version: '3.0'

services:
  webserver:
    image: nginx
    ports:
      - 80:80
  webapplication:
    image: php
  database:
    image: mysql
    environment:
      MYSQL_ROOT_PASSWORD: password


Execute following commands:

```
docker-compose up 

```




-------------------------------------------------------------------------------

# LAB SESSION 2


## Follow The Insrtuction Below :


## 1 Clone The Project :
-open https://labs.play-with-docker.com and Add new instance:

```
git clone https://github.com/anandbhagwat/meetupdockercompose.git
```

- This project contains 1 Standard PHP Application which fetches data from mysql Database.
- Projects includes:
   -Docker file for Installation of PHP on nginx Image
   -Docker file 2nd for Initaliazing the Mysql database and pre-iniatliazed database



## 2 Navigate to projetc repository:

```
ls
cd meetupdockercompose/
ls
cat Dockerfile
cat Dockerfile.1
cat docker-compose.yml
```

Execute following commands:

```
docker-compose up 
```

## 3 Click on port number : 8990
Your application is deployed
