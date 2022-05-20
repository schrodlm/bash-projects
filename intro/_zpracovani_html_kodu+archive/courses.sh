#! /bin/zsh

mkdir courses 2>/dev/null;

#Tento příkaz získá všechny kódy semestru z logu, který jsem dostal, vytvoří souboru podle názvu těchto předmětů a do nich
#vloží soubor, který obsahuje === kod_predmetu ===, jeste errorový výstup posílám na /dev/null za případu, že soubory už jsou vytvořené
curl https://gitlab.fit.cvut.cz/barinkl/bi-ps2-public/raw/master/edux/index.html | grep -E '^<.*alt="\[DIR\]".*$'| grep -E -o "[BMP]I-..." | sort | uniq |
awk ' {system("mkdir courses/"$1""); system("touch courses/"$1"/index"); print "===== "$1" =====" > "courses/"$1"/index"}' 2>/dev/null;

#Proměnná rok je rok, v který tento semestr probíhal
year=$(cat jmena_predmetu.log | grep -E '^<tr>.*right">[[:digit:]]{4}.*$'| cut -d">" -f10 | cut -d"<" -f1| grep -E -o '^[[:digit:]]{4}'| sort | uniq);

#Jelikož chci získat kód semestru, který se skládá z posledních 2 čísel roku semestru, musím získat poslední 2 čísla
year_end=${year:2:4};

#Nyni získám měsíc
month=$(cat jmena_predmetu.log | grep -E '^<tr>.*right">[[:digit:]]{4}.*$'| cut -d">" -f10 | cut -d"<" -f1| cut -d"-" -f2 | sort | uniq);

#Nyní potřebuju určit semestr (první nebo druhý) -> ten určím podle měsíce, kdy byl log přidán, pokud byl přidán od února
# do června tak se jedná o druhý semestr, jinak o první


if (( $month > 1  && $month < 8 ))
then
    semester=2;


else
    semester=1;

fi

semester_code=$year_end$semester;

#Přídám jeste do sloužky courses soubor info, který obsahuje kód semestru
touch "courses/info" && echo B$semester_code > "courses/info";
