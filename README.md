# Docker-PHP-MySQL
Some easy stuff on dockerZ & PHP web development 



1) Copy all files from docker_file (preferably, on physical machine create a folder with same name)

2) install docker and docker-compose:

[docker]
Check link: https://docs.docker.com/engine/installation/linux/ubuntulinux/ 

[docker-compose]
sudo apt-get -y install python-pip
sudo pip install docker-compose


more details: https://www.docker.com/products/docker-compose



3) Run commands: 

  docker-compose up -d   && docker-compose start  

Check to see if all dockers are up and running, with a `docker ps`



4) Check docker's ip on physical machine.

ifconfig docker0 |  awk '$1 == "inet" {gsub(/\/.*$/, "", $2); print $2}'
addr:172.17.0.1



5) Let's check if our website is running on this IP & port, by using command curl


root@tron:~# curl http://172.17.0.1:80
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Shoppish~~</title>
    </head>
    <body>
        <img src="http://cdn. birthdayinabox. com/images/product /large/TY8457SW.jpg" alt="Shoppish!!" height="342" width="242" />
        <dt>Price: </dt><dd>1.23 </dd>  <p><a href = "details.php"> Click for more details</a></p>
    </body>
</html>
root@tron:~#




Kewl! So basically a photo and  details on pricing will appear on our page. 

6) In case you want to stop all dockers (and hence, your applications), just use "docker-compose stop"



...and that’s it. :) 














----------------------
PHP PDO & mysql sources:


http://stackoverflow.com/questions/17902483/show-values-from-a-mysql-database-table-inside-a-html-table-in-a-page
http://html.net/tutorials/php/lesson20.php
https://www.phpro.org/tutorials/Introduction-to-PHP-PDO.html


http://php.net/manual/ro/pdo.connections.php


