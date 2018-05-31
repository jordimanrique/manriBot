## INSTALLATION AND RUN

First of all, install all the dependencies:

    composer install

Afterwards, set up your localhost with the correct url in your /etc/hosts:    
    
    127.0.0.1	manriBot
    
Then, build the docker to enable the server: 

    docker-compose up --build -d manriBot
    
Now, the server is up but it needs to be tunneled to the Internet, so:

    ngrok http 8443
             
And copy the https forwarding that it's presented. It should be something like *https://8891551c.ngrok.io* 

Use the url to set up the webhook:

    http://manribot:8443/index.php?_ngrok_https_forwarding
    
From now on you can send the command /guapo and it'll answer you politely :-)

### IMPORTANT

In order to run the secure server it has been generated a fake certificate with a private key.
It's located in docker/nginx as server.crt and server.key 

## DOCKER INSTRUCCIONS     
    
Build and initialize the containers:
    
    docker-compose up --build -d manriBot

Start and stop the services

    docker-compose -f docker-compose.yml start
    docker-compose -f docker-compose.yml stop

Enter via bash to a container

    docker exec -it manribot_nginx_1 bash
    
         
## WEBHOOK URL ORDERS

There are 2 basic instructions to manipulate the assigned webhook of a bot:

- Set a webhook

    https://api.telegram.org/bot580636020:AAHvYhE3kljSpU53frr5aLVivZVbsWhl9hY/setWebhook?url=https://www.example.com/manribot
    
- Get information about the assigned webhook: 

    https://api.telegram.org/bot580636020:AAHvYhE3kljSpU53frr5aLVivZVbsWhl9hY/getWebhookInfo 

