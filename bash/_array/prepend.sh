#!/bin/bash

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
