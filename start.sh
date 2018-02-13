#!/bin/sh

# Redirect logs to stdout and stderr for docker reasons.
ln -sf /dev/stdout /var/log/apache2/access_log
ln -sf /dev/stderr /var/log/apache2/error_log

# apache and virtual host secrets
ln -sf /secrets/apache2/apache2.conf /etc/apache2/apache2.conf
ln -sf /secrets/apache2/default-ssl.conf /etc/apache2/sites-available/default-ssl.conf
ln -sf /secrets/apache2/cosign.conf /etc/apache2/mods-available/cosign.conf

# app secrets
ln -sf /secrets/app/settings.php /var/www/html/sites/default/settings.php

# SSL secrets
ln -sf /secrets/ssl/USERTrustRSACertificationAuthority.pem /etc/ssl/certs/USERTrustRSACertificationAuthority.pem
ln -sf /secrets/ssl/AddTrustExternalCARoot.pem /etc/ssl/certs/AddTrustExternalCARoot.pem
ln -sf /secrets/ssl/sha384-Intermediate-cert.pem /etc/ssl/certs/sha384-Intermediate-cert.pem

# If it exists, include local.start.sh
#[ -f /secrets/start/local.start.sh ] && /secrets/start/local.start.sh

if [ -f /secrets/start/local.start.sh ] 
then 
  /bin/sh /secrets/start/local.start.sh
fi

# These lines would need to be in a site-specific local.start.sh
##### begin local.start.sh
#ln -sf /secrets/ssl/its-mobileapps.openshift.dsc.umich.edu.cert /etc/ssl/certs/its-mobileapps.openshift.dsc.umich.edu.cert
#ln -sf /secrets/ssl/its-mobileapps.openshift.dsc.umich.edu.key /etc/ssl/private/its-mobileapps.openshift.dsc.umich.edu.key

#mkdir /var/www/html/sites/documentation.its.openshift.dsc.umich.edu
#mkdir /var/www/html/sites/its-announce.openshift.dsc.umich.edu
#mkdir /var/www/html/sites/its-content.openshift.dsc.umich.edu
#mkdir /var/www/html/sites/itservices-drupal-dev.it.openshift.dsc.umich.edu
#mkdir /var/www/html/sites/wolvaccessannounce-drupal.openshift.dsc.umich.edu

#ln -sf /secrets/app/documentation.its.openshift.dsc.umich.edu.settings.php /var/www/html/sites/documentation.its.openshift.dsc.umich.edu/settings.php
#ln -sf /secrets/app/its-announce.openshift.dsc.umich.edu.settings.php /var/www/html/sites/its-announce.openshift.dsc.umich.edu/settings.php
#ln -sf /secrets/app/its-content.openshift.dsc.umich.edu.settings.php /var/www/html/sites/its-content.openshift.dsc.umich.edu/settings.php
#ln -sf /secrets/app/itservices-drupal-dev.it.openshift.dsc.umich.edu.settings.php /var/www/html/sites/itservices-drupal-dev.it.openshift.dsc.umich.edu/settings.php
#ln -sf /secrets/app/wolvaccessannounce-drupal.openshift.dsc.umich.edu/settings.php /var/www/html/sites/wolvaccessannounce-drupal.openshift.dsc.umich.edu/settings.php
##### end local.start.sh

## Rehash command needs to be run before starting apache.
c_rehash /etc/ssl/certs

a2enmod ssl
a2enmod include
a2ensite default-ssl 

## set SGID for www-data 
chown -R www-data.www-data /var/www/html /var/cosign
chmod -R 2775 /var/www/html /var/cosign

/usr/local/bin/apache2-foreground
