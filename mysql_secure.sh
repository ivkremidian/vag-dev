#!/bin/bash

mysql -e "GRANT ALL ON wordpress.* TO 'wordpressuser'@'localhost' IDENTIFIED BY 'try_2_guessMe';"
mysql -e "CREATE DATABASE IF NOT EXISTS wordpress;"
mysql -e "FLUSH PRIVILEGES;"
#You now have a database and user account, each made specifically for WordPress. We need to flush the privileges so that the current instance of MySQL knows about the recent changes we've made:

