#INSTALLATION AND RUN

First of all, install all the dependencies:

    composer install

Afterwards, set up your localhost with the correct url in your /etc/hosts:    
    
    127.0.0.1	manriBot
    
Then, build the docker to enable the server:

    docker-compose up --build -d manriBot
    
And enter via browser to [Main page]('http://manribot:980/index.php')     

    
#DOCKER INSTRUCCIONS     
    
Build and initialize the containers:
    
    docker-compose up --build -d manriBot

Start and stop the services

    docker-compose -f docker-compose.yml start
    docker-compose -f docker-compose.yml stop

Enter via bash to a container

    docker exec -it manribot_nginx_1 bash

