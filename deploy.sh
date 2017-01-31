#!/bin/sh
#------- JobSeeker Code Config --------#
rm -rf /var/www/html/nextstep/app/tmp
mkdir -p  /var/www/html/nextstep/app/tmp/cache/persistent
mkdir -p  /var/www/html/nextstep/app/tmp/cache/models
mkdir -p  /var/www/html/nextstep/app/tmp/cache/masters
mkdir -p  /var/www/html/nextstep/app/tmp/logs
chmod -R 777  /var/www/html/nextstep/app/tmp
# rm -rf  /var/www/html/nextstep/app/Config/core.php
# ln -s  /var/www/html/nextstep/app/Config/core.php  /var/www/html/nextstep/app/Config/core.php
# rm -rf  /var/www/html/nextstep/app/Config/database.php
# ln -s  /var/www/html/nextstep/app/Config/database.php  /var/www/html/nextstep/app/Config/database.php
# rm -rf  /var/www/html/nextstep/app/Config/mycore.php
# ln -s  /var/www/html/nextstep/app/Config/mycore.php  /var/www/html/nextstep/app/Config/mycore.php
# rm -rf  /var/www/html/nextstep/app/Config/email.php
# ln -s  /var/www/html/nextstep/app/Config/email.php  /var/www/html/nextstep/app/Config/email.php





chown ec2-user:www -R /var/www/html/nextstep



#------- Balle Balle Deployment ho gayi -------#

echo "Balle Balle Deployment ho gayi"> /tmp/deployed.txt
