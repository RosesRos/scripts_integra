#!/bin/bash

read -p "enter your domain: " domain

echo "Translate WP"
unzip $domain.zip -d ./
mv $domain/* ./
rm -rf $domain/
rm -rf $domain.zip
rm -rf domains.sh