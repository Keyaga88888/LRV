#!/bin/bash 
docker exec -i hrm_mysql \ 
mysql -uroot -p${DB_PASSWORD} ${DB_DATABASE} \ < backup.sql
 