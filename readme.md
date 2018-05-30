## INSTALLATION AND RUN

First of all, install all the dependencies:

    composer install

Afterwards, set up your localhost with the correct url in your /etc/hosts:    
    
    127.0.0.1	manriBot
    
Then, build the docker to enable the server: 

    docker-compose up --build -d manriBot
    
And enter via browser to [Main page]('http://manribot:980/index.php'). 

**Note that the unique open web port is 980**.

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
    
If you are working in this local machine, the only way Telegram server has to access our site, 
is opening the port via ngrok

    ngrok http 8443
    
Then, you should use the forwarding url presented:

    **https://c7ac9684.ngrok.io** -> localhost:8443        
    
## WEBHOOK URL ORDERS

There are 2 basic instructions to manipulate the assigned webhook of a bot:

- Set a webhook

    https://api.telegram.org/bot*<bot_id>*/setWebhook?url=https://www.example.com/manribot
    
- Get information about the assigned webhook: 

    https://api.telegram.org/bot*<bot_id>*/getWebhookInfo 

