#!/bin/bash

#pouzivam ho ke generaci informaci o studentech z tabulky

cat tabulka.html | grep '^<html><head><meta http-equiv="Content-Type".*FIT ČVUT v Praze</a></div></div></div></body></html>$' | tr "<>" "\n" |  awk '
BEGIN{
jmeno="";
username="";
email="";
grade="";
skupina"";
}

{	
	# v emailech studentu se muzou vyskytovat cisla
	if($0 ~ /^[a-z0-9]+@fit.cvut.cz/)
	{
		email = $0;
		username = $0;
	}
	if($0 ~ /^[[:digit:]]+\/[[:digit:]]+$/)
	{
		grade=$0;
		skupina=$0
	}
	if($0 ~ /^[[:upper:]][^ ]* [[:upper:]][[:lower:]]+$/)
	{
	 jmeno=$0;
	}
		


}

{
	
	
	if ( jmeno != "" && username != "" && email != "" && grade != "" && skupina != "")
	{
		skupina = gensub(/([[:digit:]])+\/([[:digit:]]+)/,"\\2", "g", skupina);
		grade = gensub(/([[:digit:]])+\/([[:digit:]]+)/,"\\1", "g", grade);
		jmeno = gensub(/([^ ]+) (.*)/,"\\2_\\1", "g", jmeno);
		username = gensub(/([a-z0-9]+)@fit.cvut.cz/,"\\1", "g", username);
		
		print jmeno "-" username "-" email "-" grade "-" skupina;
		
		
	username = "";
	jmeno = "";
	email = "";
	grade = "";
	skupina = "";

		
	}
}
END{
		#nastavim zmenim pozici jmena a prijmeni u kazdeho prvku pole
        for( i in a ) {
			k = gensub(/([^ ]+) (.*)/,"\\2_\\1", "g", i);
			d[k]++
        }
        #nastavim sort podle jmena a printnu
        PROCINFO["sorted_in"]="@ind_str_asc"
        for (i in d){
        print i
        }     
        for(i in b)
        {
        	print i;
        }   
	
 }'





#${#MAPFILE[@]}
