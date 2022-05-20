#!/bin/bash



#ZÍskám kód semestru, který už jsem předtím získal jiným scriptem
(
cd courses;
semester_code=$(cat info);
)

#Nyní musíme získat čas a datum, kdy byly předměty uloženy

#time=$(cat jmena_predmetu.log | cut -d">" -f10 | cut -d" " -f2 | grep -E -o '^[[:digit:]]{2}:[[:digit:]]{2}'| uniq)
#date=$(cat jmena_predmetu.log | cut -d">" -f10 | cut -d" " -f1 | grep -E '^[[:digit:]]{4}' | uniq)


time=$(date +"%T");
date=$(date +"%Y-%m-%d");


directory_name=$(echo "$semester_code"@"$date"_$time)

#Teď vytvořím soubor podle kódu semestru a času uložení

mkdir -p archive;
cd archive;
mkdir -p "$directory_name";

ln -sf "$directory_name" "$semester_code" 2>/dev/null;

#Nyní do každého adresáře musíme zkopírovat obsah adresářu z courses

cp -r ../courses/[BMP]* "$directory_name";

# Nyní musím loopnout přes všechny soubory předmětů v $directory_name
(
    cd "$directory_name";

    for f in *
    do
        (
            #zkontroluji jestli se jedná o directory
            if [ -d $f ]
            then
            #změním pouze první řádku
            	cat "$f"/index | awk -v date="$date" '{if(NR == 1){print $0 "Záloha z " date}}' > temp.txt;
            	cat temp.txt > "$f"/index;
     			rm temp.txt; 
            fi
        )
    done
)
#Nyní vytvořím adresáře předmětu v adresáři archive do kterých vložím linky na jejich záznamy
cp -r ../courses/[BMP]* .

for f in [BMP]I-*
do
(
ln -sf "../$directory_name/$f" "$f/"$semester_code"";
ln -sf "../$directory_name/$f" "$f/"$directory_name"";
#echo "$PWD";
)
done 
