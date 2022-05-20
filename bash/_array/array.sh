#!/bin/bash

typeset -a new;



#number of items in $PATH variable
number_of_iterations=$(echo $PATH | grep -o ":" | wc -l);

#the number of ":" before is one less that number of items
((number_of_iterations++)) ;

#for loop through $PATH to get each individual item
for (( i=1; i <= $number_of_iterations; i++))
do
    item=$(echo $PATH | cut -d ":" -f"$i");
    NEW[i]=$item;
done

#zkouska pro případ, že je tam více stejných prvků - pro debug
(( number_of_iterations++));
NEW[$number_of_iterations]="HELLO";
(( number_of_iterations++));
NEW[$number_of_iterations]="HELLO";


echo -e "Array NEW:\n${NEW[@]}\n";

#===============================================================
#function array_cp --> copy items from array CESTA to array NEW


function array_cp() {
    for i in "${NEW[@]}"
    do
       CESTA[(( ${#CESTA[@]} + 1 )) ]=$i;
    done
}

function append(){
	count=0;

	 for (( i=0; i<${#CESTA[@]}; i++ )); do
		if [[ " ${CESTA[i]} " =~ " ${1} " ]]; then
		CESTA[(( ${#CESTA[@]} + 1 )) ]=${1};
		unset 'CESTA[$count]';
    	#breaks after first occurence of keyword
    	return;
		fi
		
		(( count++ ));
	done
    CESTA[(( ${#CESTA[@]} + 1 )) ]=${1};
    
    

}

function prepend(){
	count=0;

	 for (( i=0; i<${#CESTA[@]}; i++ )); do
		if [[ " ${CESTA[i]} " =~ " ${1} " ]]; then
		unset 'CESTA[$count]';
    	CESTA=("$1" "${CESTA[@]}");
    	#breaks after first occurence of keyword
    	return;
		fi
		
		(( count++ ));
	done
    CESTA=("$1" "${CESTA[@]}");

}

array_cp;
echo "==========="
append 'END';
append '/usr/bin/site_perl'
prepend '/usr/bin';
prepend 'START';
prepend 'HELLO';
append 'END';
echo -e "copy of NEW:\n${CESTA[@]}\n";




