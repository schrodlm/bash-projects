#!/bin/bash

#SUPPORT SCRIPT
#fast script that will print only recevived and transmitted bytes from eth0 interface

#find an eth0 line in proc.dev.net
eth=$(cat proc.net.dev | tr -s " " | awk  -F" " '{if($1 ~ /.*eth0.*/)  print $0}');

#print it out to terminal
echo $eth | cut -d":" -f2 | awk -F" " '{print $1" "$9}' 

