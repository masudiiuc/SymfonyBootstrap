SimplySend BD
=============

The remittance portal for sending money to Bangladesh. Please follow the below steps to install it on your machine:

1. Install composer:

    curl -s http://getcomposer.org/installer | php

2. Install the vendor libraries by running composer:

    php composer.phar --verbose install

3. Setup a VirtualHost with the following configuration (modify as needed):
 <VirtualHost *:80>

 ServerName project.simfony.local
 DocumentRoot "/Users/masud/Sites/personal/SymfonyBootstrap/web"

 <Directory "/Users/masud/Sites/personal/SymfonyBootstrap/web">
     Options Indexes FollowSymLinks MultiViews
     AllowOverride All
     Allow from All
 </Directory>
</VirtualHost>

4. Create a copy of app/config/parameter.yml.dist to app/config/parameter.yml

5. Update all the required configs.

6. Run the following commands:

    php app/console doctrine:database:create
    php app/console doctrine:database:create --connection=prod
    php app/console doctrine:database:create --connection=sandbox

    php app/console doctrine:schema:update --force
    php app/console doctrine:schema:update --force --em=prod
    php app/console doctrine:schema:update --force --em=sandbox

    chmod -R 0777 app/cache

6. Enjoy!