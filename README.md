# Docker-PHP-MySQL
Some easy stuff on dockerZ & PHP web development 




1)  install docker and docker-compose:

[docker]
Check link: https://docs.docker.com/engine/installation/linux/ubuntulinux/ 

[docker-compose]
sudo apt-get -y install python-pip
sudo pip install docker-compose


more details: https://www.docker.com/products/docker-compose



2)  Run commands: 

  docker-compose up -d   && docker-compose start  

Check to see if all dockers are up and running, with a `docker ps`



3) Check docker's ip on physical machine.

ifconfig docker0 |  awk '$1 == "inet" {gsub(/\/.*$/, "", $2); print $2}'
addr:172.17.0.1



4) Let's check if our website is running on this IP & port, by using command curl

 curl http://172.17.0.1:80



Kewl! So basically a photo and  details on pricing will appear on our page. 


5) In case you want to stop all dockers (and hence, your applications), just use "docker-compose stop"



...and that’s it. :) 














----------------------
PHP PDO & mysql sources:


http://stackoverflow.com/questions/17902483/show-values-from-a-mysql-database-table-inside-a-html-table-in-a-page
http://html.net/tutorials/php/lesson20.php
https://www.phpro.org/tutorials/Introduction-to-PHP-PDO.html


http://php.net/manual/ro/pdo.connections.php


