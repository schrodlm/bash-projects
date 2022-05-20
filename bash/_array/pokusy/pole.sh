#!/bin/bash

typeset -a pole;


#dummy items for array_cp testing
NEW[1]="item1";
NEW[2]="item2";
NEW[3]="item3";

#number of items in $PATH variable
number_of_iterations=$(echo $PATH | grep -o ":" | wc -l);

#the number of ":" before is one less that number of items
((number_of_iterations++)) ;

#for loop through $PATH to get each individual item
for (( i=1; i <= $number_of_iterations; i++))
do
    item=$(echo $PATH | cut -d ":" -f"$i");
    POLE[i]=$item;
done

echo -e "Array POLE:\n${POLE[@]}\n";

#===============================================================
#function array_cp --> copy items from array NEW to array POLE


function array_cp() {
    items_in_new=$(echo "${#NEW[@]}"); # --> numbers of items in new
    for (( i=1; i <= $items_in_new; i++ ))
    do
       item_new=$(echo "${NEW[@]}"| cut -d" " -f$i);
       POLE[(( ${#POLE[@]} + 1 )) ]=$item_new;
    done
}

array_cp;

echo -e "Array POLE + copy of NEW:\n${POLE[@]}\n";




