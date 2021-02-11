# sae-laravel

A Laravel 8 demo project for teaching purposes. 

## 1. Setup your tools

### Git Client:

- Sourcetree: [https://www.sourcetreeapp.com](https://www.sourcetreeapp.com)

### PHP IDE:

- PhpStorm: [https://www.jetbrains.com/phpstorm](https://www.jetbrains.com/phpstorm/) 

### MySQL Client:

- __Querious__ (Mac only): [https://www.araelium.com/querious](https://www.araelium.com/querious)
- __Sequel Pro__ (Mac only / MySQL <= 7): [https://www.sequelpro.com](https://www.sequelpro.com/)
- __MySQL Workbench__ (All platforms): [https://www.mysql.com/products/workbench](https://www.mysql.com/products/workbench)

## 2. Download & Install

- git and __Git BASH__ (Windows only): [https://gitforwindows.org](https://gitforwindows.org)
- __VirtualBox__: [https://www.virtualbox.org/wiki/Downloads](https://www.virtualbox.org/wiki/Downloads)
- __Vagrant__: [http://www.vagrantup.com/downloads.html](http://www.vagrantup.com/downloads.html)

Download __Homestead VM__:

	vagrant box add laravel/homestead

Clone the __sae-laravel repo__

Use Sourcetree or via command line:
	
	git clone https://github.com/passioncoder/sae-laravel.git sae-laravel
	
Clone the __Homestead repo__

Use Sourcetree or via command line:

	git clone https://github.com/laravel/homestead.git homestead


## 3. Setup & Configure

Check if you already have a ssh key on your machine:

    ls ~/.ssh/id_rsa

If this file **doesn't exist**, generate a new key pair:

    ssh-keygen -t rsa -b 4096 -C "your@email.com"

Init your __Homestead__ installation:

	cd homestead

	// Mac/Linux
	bash init.sh

	// Windows
	init.bat

Edit the `Homestead.yaml` file and __ensure that the given paths are matching the ones on your system__:

	authorize: ~/.ssh/id_rsa.pub

	keys:
	    - ~/.ssh/id_rsa

	folders:
	    - map: ~/sae-laravel
	      to: /home/vagrant/code/sae-laravel

	sites:
	    - map: sae-laravel.local
	      to: /home/vagrant/code/sae-laravel/public

Open your host file:

	// Mac/Linux
	sudo nano /etc/hosts

	// Windows
	C:\Windows\System32\Drivers\etc

and add the dns entry for your site:

	192.168.10.10   sae-laravel.local

Start your virtual machine:
	
	cd homestead
	vagrant up

Login to your virtual machine:

	vagrant ssh
	cd code/sae-laravel

Copy the environment config example file:
	
	cp .env.example .env

Install composer dependencies:
	
	composer install

Generate Laravel app key:

	php artisan key:generate

__Visit [http://sae-laravel.local](http://sae-laravel.local) in your browser.__


## Further learning:

- __RTFM__: [http://laravel.com/docs](http://laravel.com/docs)
- Read the __code__: [https://github.com/laravel/framework](https://github.com/laravel/framework)
- Watch __Laracasts__: [https://laracasts.com](https://laracasts.com)
- Find 3rd-party __packages__: [https://packagist.org](https://packagist.org)
- Ask your __questions__: [http://stackoverflow.com/questions/tagged/laravel](http://stackoverflow.com/questions/tagged/laravel)

## Usefull commands

### Vagrant

Get your vm ready:

    cd homestead
    vagrant up
    vagrant ssh
    cd code/sae-laravel 
    
Stop your vm:

    exit
    vagrant halt
    
Provision your vm (after updating your `Homestead.yml`):

    vagrant up --provision

### Laravel

	php artisan help
    
Database:

    php artisan migrate
    php artisan migrate:refresh
    php artisan db:seed

Link storage files:

    php artisan storage:link
