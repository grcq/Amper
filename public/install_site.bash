#!/bin/bash

path=$1
domain=$2

echo "Checking for required packages..."
install_packages=()
required_packages=(certbot python3-certbot-nginx curl nginx)
for pkg in ${required_packages[@]}
do
    PKG_OK=$(dpkg-query -W --showformat='${Status}\n' $pkg|grep "install ok installed")
    if [ "" = "$PKG_OK" ]; then
        install_packages+=($pkg)
    fi
done

len=${#install_packages[@]}
if [ ! $len -eq 0 ]; then
    echo "You are missing ${len} dependencies, want to install them? (y/n)"
    read
    if [ "$REPLY" != "y" ]; then
        echo "Exiting."
        exit 1
    else
        apt install --yes $( IFS=$' '; echo "${install_packages[*]//,/}" )
    fi
else
    echo "Amazing! All required packages are installed."
fi

echo "Copying Nginx configuration..."
content=`cat $PWD/nginx.example.conf`

cd "/etc/nginx/sites-available"
content=${content//<path>/$path}
content=${content//<domain>/$domain}

echo "${content}" > "${domain//./_}.conf"
echo "Moving configuration file..."

filePath="/etc/nginx/sites-available/${domain//./_}.conf"
enabledFilePath="/etc/nginx/sites-available/${domain//./_}.conf"

if [ -f $enabledFilePath ]; then
    rm -f $enabledFilePath
fi
ln -s $filePath $enabledFilePath

sudo systemctl stop nginx

certbot certonly --standalone -d $domain

sudo systemctl start nginx

echo "Done!"