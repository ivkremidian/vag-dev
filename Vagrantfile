# -*- mode: ruby -*-
# vi: set ft=ruby :

# All Vagrant configuration is done below. The "2" in Vagrant.configure
# configures the configuration version (we support older styles for
# backwards compatibility). Please don't change it unless you know what
# you're doing.
Vagrant.configure("2") do |config|
  # The most common configuration options are documented and commented below.
  # For a complete reference, please see the online documentation at
  # https://docs.vagrantup.com.

  # Every Vagrant development environment requires a box. You can search for
  # boxes at https://vagrantcloud.com/search.
  config.vm.box = "ubuntu/bionic64"
  # config.ssh.insert_key = true
  # Disable automatic box update checking. If you disable this, then
  # boxes will only be checked for updates when the user runs
  # `vagrant box outdated`. This is not recommended.
  # config.vm.box_check_update = false

  # Create a forwarded port mapping which allows access to a specific port
  # within the machine from a port on the host machine. In the example below,
  # accessing "localhost:8080" will access port 80 on the guest machine.
  # NOTE: This will enable public access to the opened port
  # config.vm.network "forwarded_port", guest: 80, host: 8080

  # Create a forwarded port mapping which allows access to a specific port
  # within the machine from a port on the host machine and only allow access
  # via 127.0.0.1 to disable public access
  # config.vm.network "forwarded_port", guest: 80, host: 8080, host_ip: "127.0.0.1"

  # Create a private network, which allows host-only access to the machine
  # using a specific IP.
   config.vm.network "private_network", ip: "192.168.33.10"

  # Create a public network, which generally matched to bridged network.
  # Bridged networks make the machine appear as another physical device on
  # your network.
   config.vm.network "public_network", ip: "192.168.10.200"

  # Share an additional folder to the guest VM. The first argument is
  # the path on the host to the actual folder. The second argument is
  # the path on the guest to mount the folder. And the optional third
  # argument is a set of non-required options.
  # config.vm.synced_folder "../data", "/vagrant_data"

  # Provider-specific configuration so you can fine-tune various
  # backing providers for Vagrant. These expose provider-specific options.
  # Example for VirtualBox:
  #
   config.vm.provider "virtualbox" do |vb|
  #   # Display the VirtualBox GUI when booting the machine
  #   vb.gui = true
  #
  #   # Customize the amount of memory on the VM:
     vb.memory = "512"
     vb.cpus = 1
   end
  #
  # View the documentation for the provider you are using for more
  # information on available options.

  # Enable provisioning with a shell script. Additional provisioners such as
  # Puppet, Chef, Ansible, Salt, and Docker are also available. Please see the
  # documentation for more information about their specific syntax and use.
   config.vm.provision "shell", inline: <<-SHELL
   echo `date; whoami` >> ~/testfile.txt
     apt-get update
     apt-get install -y apache2
     ufw allow in "Apache"
     apt-get install -y curl mysql-server 
     /bin/sh /vagrant/mysql_secure.sh
#     mysqladmin stat 
     apt-get install -y php libapache2-mod-php php-mysql
     apt-get install -y php-curl php-gd php-mbstring php-xml php-xmlrpc php-soap php-intl php-zip
     mkdir -p /var/www/wordpress
     cp /vagrant/wordpress.conf /etc/apache2/sites-available/wordpress.conf
     ln -s /etc/apache2/sites-available/wordpress.conf /etc/apache2/sites-enabled/
     cd /tmp; cp /vagrant/latest.tar.gz /tmp/latest.tar.gz; tar -xzvf latest.tar.gz; touch /tmp/wordpress/.htaccess
     cp /vagrant/wp-config.php /tmp/wordpress/wp-config.php
     mkdir -p /tmp/wordpress/wp-content/upgrade
     cp -a /tmp/wordpress/. /var/www/wordpress; chown -R ubuntu:ubuntu /var/www/wordpress     
     /usr/bin/find /var/www/wordpress/. -type d | xargs -n5 chmod 755 
     /usr/bin/find /var/www/wordpress/. -type f | xargs -n5 chmod 644 
     service apache2 reload    
   SHELL
end
