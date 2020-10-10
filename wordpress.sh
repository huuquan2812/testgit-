#!/bin/bash
set -e
#cai dat apache2 
sudo apt update 
sudo apt install -y apache2 
sudo systemctl status 

#cai dat mysql 
 
sudo apt install -y mysql-server
#tao database wordpress 
echo "create database wordpress" | mysql -u root -p"Luonghuuquan1!"| true
#tao wordpressuser 
echo "CREATE USER 'wordpressuser'@'%' IDENTIFIED WITH mysql_native_password BY 'Luonghuuquan1!';" | mysql -u root  -p"Luonghuuquan1!"
echo "GRANT ALL ON wordpress.* TO 'wordpressuser'@'%';" | mysql -u root -p"Luonghuuquan1!"
echo "FLUSH PRIVILEGES;"|mysql -u root -p"Luonghuuquan1!"
#cai dat php7 
sudo  apt install -y php libapache2-mod-php
sudo apt install -y  php-curl php-gd php-mbstring php-xml php-xmlrpc php-soap php-intl php-zip
sudo systemctl restart apache2 

 

