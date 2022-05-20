#!/bin/bash

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
