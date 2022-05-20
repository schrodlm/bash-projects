#!/bin/bash

#využívám gen_students, který mi vygeneruje proměnné, mohl jsem to udělat v jednom scriptu, ale takto
#mi to přišlo přehlednější
name=($(./gen_students.sh | cut -d"-" -f1))
username=($(./gen_students.sh | cut -d"-" -f2))
email=($(./gen_students.sh | cut -d"-" -f3))
grade=($(./gen_students.sh | cut -d"-" -f4))
group=($(./gen_students.sh | cut -d"-" -f5))


#smazu vsechny zaznamy nez je zacnu generovat znovu
rm lists/*/*

#vygeneruju adresáře a soubory do kterých budu vkládat
for i in {a..z}; do 
	mkdir -p lists/$i
	touch lists/$i/$i.list
done


#vkládání do souborů podle prvního písmena username
for (( i=0; i<=${#name[@]}; i++ )); do

	firstCharacter=${username[$i]:0:1}
	 
	#print username:name - podle ukolu - do lists/{a..z}/{a..z}.list
	printf "%s:%s\n" ${username[$i]} ${name[$i]} >> lists/$firstCharacter/$firstCharacter.list

	#vytvířám tabulka USERNAME,EMAIL,REALNAME,GRADE,GROUP studentů
	(
	cd lists/$firstCharacter
	touch "${username[$i]}.class.txt"
	printf "%s\n%s\n%s\n%s\n%s" "USERNAME=${username[$i]}" "EMAIL=${email[$i]}" "REALNAME=${name[$i]}" "GRADE=${grade[$i]}" "GROUP=${group[$i]}">> "${username[$i]}.class.txt"
	)
done
