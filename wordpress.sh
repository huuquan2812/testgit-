#!/bin/bash
set -e
#cai dat apache2 
sudo apt update 
sudo apt install -y apache2 
sudo systemctl status 

#cai dat mysql 
 
sudo apt install -y mysql-server
#tao database wordpress 
echo "create database quan_test_wordpress" | mysql -u root -p"Luonghuuquan1!"| true
#cai dat php7 
sudo  apt install -y php libapache2-mod-php
sudo apt install -y  php-curl php-gd php-mbstring php-xml php-xmlrpc php-soap php-intl php-zip
 

