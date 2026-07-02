#!/bin/bash 

docker exec hrm_mysql \ 
mysqldump -uroot -p${DB_PASSWORD} ${DB_DATABASE} \ > backup.sql
