#!/bin/bash

cat tabulka.html | grep '^<html><head><meta http-equiv="Content-Type".*FIT ČVUT v Praze</a></div></div></div></body></html>$' | tr "<>" "\n" | grep "Junek"
