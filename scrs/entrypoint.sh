#!bin/bash

service mysql start && mysql < createdb.sql
service php7.3-fpm start
service nginx start

bash