#!/bin/bash


#============================================================================================
#									GETOPS
#============================================================================================

usage(){
  printf "USAGE: $0 [-vd] conf_file...\n parse_conf.sh -h \n \n -v \t verbose \n -d \t debug \n -h\t help" 1>&2 
}

exit_abnormal() {                         # Function: Exit with error.
  usage
  exit 2
}

exit_file(){
  echo "Configuration file was not provided" 1>&2
  exit 2

}

debug=0;
verbose=0;

#GETOPS
while getopts ":dvh" options; do
	
	case "${options}" in
    d)                       
		debug=1;
      ;;
     
    v) 
    	verbose=1;
    	;;
     
    h)
      echo "Scripts, that loads configuration from provided files (arguments) and exports them to variables"
      exit 0
      ;;
        
    
    :)                                    # If expected argument omitted:
      echo "Error: -${OPTARG} requires an argument." 1>&2
      exit_abnormal                       # Exit abnormally.
      ;;
      
    *)                                    #Kdyz neznama moznost - exit
      exit_abnormal                      
      ;;
  esac
done

#This is to set options after flags (-n -h -d) to be $1 and so on - otherwise PREFIX would be $3 if -n and -d was used

shift $(($OPTIND - 1))

read_file="$1"

#no arguments were given
if [[  "$read_file" == "" ]]; then
    exit_file
fi

#readable file check
if [ ! -r "$read_file" ]; then
	echo "$read_file" is not a readable file.
	exit 1
fi



#============================================================================================
#									CTENI PROMENNYCH
#============================================================================================

#zapnout debug mode - pokud je nastavena flag
if [ "$debug" == 1 ]; then
	set -x
fi

touch temp.txt

#zpracování textu - zbavim se prazdnych radku, komentaru, "=" transform na " " - kvuli tomu jak mam udelane read, a "\t" na " " 
cat "$read_file" | sed "/^\s*#/d;s/\s*#[^\"']*$//" | sed '/^[[:space:]]*$/d' | tr "\t" " " | tr -s " " | tr "=" " "> temp.txt

#loop prirazujici hodnoty k promennym
while read var value
do
    export "$var"="$value"
    if [ "$verbose" == "1" ]; then
    	echo ""$var" = "$value""
    fi
    	
done < temp.txt
rm temp.txt
if [ $debug == 1 ]; then
	set +x
fi


