#!/bin/bash
rsync -vr Config Console Vendor Controller View Model webroot root@169.45.234.104:/var/www/consumervent/app/
ssh root@169.45.234.104 "chown www-data:www-data /var/www/consumervent/app -R;"
