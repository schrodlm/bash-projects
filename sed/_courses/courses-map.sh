#!/bin/sed -rnf

#Vyberu pouze cast, s kterou pracuji, tedy od vsechny <td class="stplan.bunka">

/<td class="stplan.bunka">/,/<\/td>/ {
	
#Tady vybírám kódy předmětu
 	
	/[A-Z]*-[A-Z0-9]{3}[^<]*<\/td>/{

#Tady bych mazu zbytecne casti	
	s/^[^>]*>//g
	s/<\/td>//g
	
#Tady kopiruju kod předmětu s dvojteckou a rovnou menim prefix -> BIE-KOD:BI-KOD
	s,(.*)$,\1:\1,
	s,(:)([A-Z]*)-,\1BI-,
	p
	}
	
}
