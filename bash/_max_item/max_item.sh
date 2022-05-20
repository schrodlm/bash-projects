#!/bin/bash

#$1 --> prefix názvu souborů, které chceme porovnávat
#$2 --> oddělovač, který je použit u daných souborů
#$3 --> v jakém sloupci se nacházejí čísla k porovnání

#defaultni => 	delimeter = "_"
#				column = "3"	


usage() {                                 # Function: Print a help message.
  echo "Usage: $0 mandatory:[ FILE_PATERN ] .. [ -d DELIMETER] [-n COLUMNS TO COMPARE] .. [ -h HELP ]" 1>&2 
}

exit_abnormal() {                         # Function: Exit with error.
  usage
  exit 1
}

exit_prefix(){
	echo "No file pattern argument was given"
	usage
	exit 1
}

DELIMETER="_";


#check options
while getopts "h" options; do
	
	case "${options}" in
    
     
    h)
      echo "To compare names of files you have to tell program which files do you want to compare, na -hme or prefixes of given files, delimter of columns and which column do you want to compare"
      exit 0
      ;;
        
    
    :)                                    # If expected argument omitted:
      echo "Error: -${OPTARG} requires an argument."
      exit_abnormal                       # Exit abnormally.
      ;;
      
    *)                                    # If unknown (any other) option:
      exit_abnormal                       # Exit abnormally.
      ;;
  esac
done

#This is to set options after flags (-n -h -d) to be $1 and so on - otherwise PREFIX would be $3 if -n and -d was used

shift $(($OPTIND - 1))
PREFIX=$1

#no arguments were given
if [[ $PREFIX == "" ]]; then
    exit_prefix
fi


#===============================================================

find -maxdepth 1 -regextype posix-extended -regex "\.\/${PREFIX}_[0-9]+" | awk -F_ '{print $NF}' | sort -nr | head -1


