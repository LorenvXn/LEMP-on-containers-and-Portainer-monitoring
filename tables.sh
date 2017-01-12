#!/bin/bash


 docker exec portainerdockerphpmysql_mysql_1  mysql -uAlex  -pAlex -e "use Alex;  CREATE TABLE genre ( \
				genreID INT UNSIGNED  NOT NULL AUTO_INCREMENT,\
			        genrename     VARCHAR(30),\
				PRIMARY KEY (genreID)\
				 );"


docker exec portainerdockerphpmysql_mysql_1 mysql -uAlex  -pAlex -e "use Alex;  CREATE TABLE fantasy(\
	       productID    INT UNSIGNED  NOT NULL AUTO_INCREMENT, \
        	namebook      VARCHAR(30)   NOT NULL DEFAULT '', \
		author	      VARCHAR(30)   NOT NULL DEFAULT '', \
         	quantity     INT UNSIGNED  NOT NULL DEFAULT 0, \
         	price        DECIMAL(7,2)  NOT NULL DEFAULT 99999.99, \
         	PRIMARY KEY  (productID)\
				 );"

docker exec portainerdockerphpmysql_mysql_1 mysql -uAlex  -pAlex -e "use Alex;  CREATE TABLE sciencefiction (\
	       productID    INT UNSIGNED  NOT NULL AUTO_INCREMENT, \
        	namebook      VARCHAR(30)   NOT NULL DEFAULT '', \
		author	      VARCHAR(30)   NOT NULL DEFAULT '', \
         	quantity     INT UNSIGNED  NOT NULL DEFAULT 0, \
         	price        DECIMAL(7,2)  NOT NULL DEFAULT 99999.99, \
         	PRIMARY KEY  (productID)\
				 );"

				 docker exec portainerdockerphpmysql_mysql_1 mysql -uAlex  -pAlex -e "use Alex;  CREATE TABLE horror (\
	       productID    INT UNSIGNED  NOT NULL AUTO_INCREMENT, \
        	namebook      VARCHAR(30)   NOT NULL DEFAULT '', \
		author	      VARCHAR(30)   NOT NULL DEFAULT '', \
         	quantity     INT UNSIGNED  NOT NULL DEFAULT 0, \
         	price        DECIMAL(7,2)  NOT NULL DEFAULT 99999.99, \
         	PRIMARY KEY  (productID)\
				 );"

docker exec portainerdockerphpmysql_mysql_1 mysql -uAlex  -pAlex -e "use Alex;  CREATE TABLE adventure (\
	       productID    INT UNSIGNED  NOT NULL AUTO_INCREMENT, \
        	namebook      VARCHAR(30)   NOT NULL DEFAULT '', \
		author	      VARCHAR(30)   NOT NULL DEFAULT '', \
         	quantity     INT UNSIGNED  NOT NULL DEFAULT 0, \
         	price        DECIMAL(7,2)  NOT NULL DEFAULT 99999.99, \
         	PRIMARY KEY  (productID)\
				 );"



docker exec portainerdockerphpmysql_mysql_1  mysql -uAlex  -pAlex -e "use Alex;   INSERT INTO genre VALUE     \
	      (501, 'Science Fiction'), \
          (502, 'Fantasy'),  \
          (503, 'Horror'), \
	      (504, 'Adventure'); "

		  

docker exec portainerdockerphpmysql_mysql_1 mysql -uAlex  -pAlex -e "use Alex;  CREATE TABLE results ( \
	        productID    INT UNSIGNED  NOT NULL AUTO_INCREMENT, \
        	namebook      VARCHAR(30)   NOT NULL DEFAULT '', \
		    author	      VARCHAR(30)   NOT NULL DEFAULT '', \
            link	      VARCHAR(90)   NOT NULL DEFAULT '', \
         	PRIMARY KEY  (productID)\
				 );"


#####################populate fantasy############################

docker exec portainerdockerphpmysql_mysql_1  mysql -uAlex  -pAlex -e "use Alex;   INSERT INTO fantasy VALUE     \
(1001, 'The Hobbit', 'J.R.R. Tolkien', '200', '3.4');"

docker exec portainerdockerphpmysql_mysql_1  mysql -uAlex  -pAlex -e "use Alex;   INSERT INTO fantasy VALUE     \
(1002, 'The Silmarillion', 'J.R.R. Tolkien', '100', '2.4');"

docker exec portainerdockerphpmysql_mysql_1  mysql -uAlex  -pAlex -e "use Alex;   INSERT INTO fantasy VALUE     \
(1004, 'Day Watch', 'Vladimir Vasilyev', '23', '3.70');"


#####################populate sciencefiction#######################

docker exec portainerdockerphpmysql_mysql_1  mysql -uAlex  -pAlex -e "use Alex;   INSERT INTO sciencefiction VALUE     \
   (2001, 'Solaris', 'Stanislaw Lem', '20', '6.4'); "


docker exec portainerdockerphpmysql_mysql_1  mysql -uAlex  -pAlex -e "use Alex;   INSERT INTO sciencefiction VALUE     \
   (2002, 'Dune', 'Frank Herbert', '60', '2.4'); "


docker exec portainerdockerphpmysql_mysql_1  mysql -uAlex  -pAlex -e "use Alex;   INSERT INTO sciencefiction VALUE     \
   (2004, 'Nightfall', 'Isaac Asimov', '20', '6.4'); "


############populate horror#################



docker exec portainerdockerphpmysql_mysql_1  mysql -uAlex  -pAlex -e "use Alex;   INSERT INTO horror VALUE     \
   (3001, 'Silver Bullet', 'Steven King', '10', '7.2'); "

docker exec portainerdockerphpmysql_mysql_1  mysql -uAlex  -pAlex -e "use Alex;   INSERT INTO horror VALUE     \
   (3002, 'Dracula', 'Bram Stocker', '2', '4'); "


docker exec portainerdockerphpmysql_mysql_1  mysql -uAlex  -pAlex -e "use Alex;   INSERT INTO horror VALUE     \
   (3003, 'Frankenstein', 'Marry Shelley', '22', '3'); "




##########populate adventure##################


docker exec portainerdockerphpmysql_mysql_1  mysql -uAlex  -pAlex -e "use Alex;   INSERT INTO adventure VALUE     \
   (4001, 'Moby Dick', 'Herman Melville', '10', '7.4'); "


docker exec portainerdockerphpmysql_mysql_1  mysql -uAlex  -pAlex -e "use Alex;   INSERT INTO adventure VALUE     \
   (4002, 'Into Thin Air', 'John Krakauer', '20', '7.6'); "

docker exec portainerdockerphpmysql_mysql_1  mysql -uAlex  -pAlex -e "use Alex;   INSERT INTO adventure VALUE     \
   (4003, 'Life of Pi', 'Yann Martel', '10', '3.5'); "



##########populate results tablespace#######################

docker exec portainerdockerphpmysql_mysql_1  mysql -uAlex  -pAlex -e "use Alex;   INSERT INTO results VALUE     \
   (1001, 'The Hobbit', 'J.R.R. Tolkien', 'http://localhost/details.php');"

docker exec portainerdockerphpmysql_mysql_1  mysql -uAlex  -pAlex -e "use Alex;   INSERT INTO results VALUE     \
   (1002, ' Silmarillion', 'J.R.R. Tolkien', 'http://localhost/details1.php'); "


docker exec portainerdockerphpmysql_mysql_1  mysql -uAlex  -pAlex -e "use Alex;   INSERT INTO results VALUE     \
   (1004, 'Day Watch', 'Vladimir Vasilyev', 'http://localhost/details2.php'); "


docker exec portainerdockerphpmysql_mysql_1  mysql -uAlex  -pAlex -e "use Alex;   INSERT INTO results VALUE     \
   (2001,  'Solaris', 'Stanislav Lem', 'http://localhost/SFdetails.php');"

docker exec portainerdockerphpmysql_mysql_1  mysql -uAlex  -pAlex -e "use Alex;   INSERT INTO results VALUE     \
   (2002, 'Dune', 'Frank Herbert', 'http://localhost/SFdetails1.php');"



docker exec portainerdockerphpmysql_mysql_1  mysql -uAlex  -pAlex -e "use Alex;   INSERT INTO results VALUE     \
   (2004, 'Nightfall', 'Isaac Asimov', 'http://localhost/SFdetails2.php');"

docker exec portainerdockerphpmysql_mysql_1  mysql -uAlex  -pAlex -e "use Alex;   INSERT INTO results VALUE     \
(3001, 'Silver Bullet', 'Steven King', 'http://localhost/Hdetails.php');"


docker exec portainerdockerphpmysql_mysql_1  mysql -uAlex  -pAlex -e "use Alex;   INSERT INTO results VALUE     \
(3002, 'Dracula', 'Bram Stocker', 'http://localhost/Hdetails1.php');"

docker exec portainerdockerphpmysql_mysql_1  mysql -uAlex  -pAlex -e "use Alex;   INSERT INTO results VALUE     \
(3003, 'Frankenstein', 'Marry Shelley', 'http://localhost/Hdetails2.php');"


docker exec portainerdockerphpmysql_mysql_1  mysql -uAlex  -pAlex -e "use Alex;   INSERT INTO results VALUE     \
(4001, 'Moby Dick', 'Herman Melville', 'http://localhost/Advdetails.php');"

docker exec portainerdockerphpmysql_mysql_1  mysql -uAlex  -pAlex -e "use Alex;   INSERT INTO results VALUE     \
(4002, 'Into Thin Air', 'John Krakauer', 'http://localhost/Advdetails1.php');"

docker exec portainerdockerphpmysql_mysql_1  mysql -uAlex  -pAlex -e "use Alex;   INSERT INTO results VALUE     \
(4003, 'Life of Pi', 'Yann Martel', 'http://localhost/Advdetails2.php');"



