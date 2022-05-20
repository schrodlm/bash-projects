#!/bin/bash

curl https://bilakniha.cvut.cz/cs/f8-predmety.html -o courses.txt
#Ziskám prvně kody originálních předmětů ze sed skriptu
predmety=($(./courses-map.sh courses.txt | cut -d":" -f1 | tr "\n" " "));

#Ziskám prvně kody skutečných předmětů ze sed skriptu
array_code=($(./courses-map.sh courses.txt | cut -d":" -f2 | tr "\n" " "));

#V tomto adresáři budu vytvářet podadrešáře předmětů
mkdir -p predmety;
cd predmety;


#Pro indexaci pole
i=0;

#For loop, který vytvoří adresáře originálních předmětů do kterých vloží index.txt s kodem skutečného predmetu
for d in ${predmety[@]}; 
do 
	(mkdir -p "$d"; cd "$d" && touch index.txt; echo ${array_code[i]} > index.txt );
	((i++));
done

echo "Creating files was successful";

