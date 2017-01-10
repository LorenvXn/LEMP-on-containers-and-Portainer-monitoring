#!/bin/bash

docker exec portainerdockerphpmysql_mysql_1 mysql -uAlex  -pAlex -e "use Alex; CREATE TABLE IF NOT EXISTS whoaaa ( \
            productID    INT UNSIGNED  NOT NULL AUTO_INCREMENT,\
            productCode  CHAR(3)       NOT NULL DEFAULT '',\
            name         VARCHAR(30)   NOT NULL DEFAULT '',\
            quantity     INT UNSIGNED  NOT NULL DEFAULT 0,\
            price        DECIMAL(7,2)  NOT NULL DEFAULT 99999.99,\
            PRIMARY KEY  (productID) )";

docker  exec portainerdockerphpmysql_mysql_1 mysql -uAlex  -pAlex -e "use Alex; \
INSERT INTO whoaaa VALUES (1001, 'PEN', 'Pen Red', 5000, 1.23);"
