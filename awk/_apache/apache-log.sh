#!/bin/bash


cat apache.log | awk '
BEGIN{

#pripravim si promenne, pocet dotazu - to bude pocet radek - takze muzu kazdou radku pricist +1
celkem_dotazu=0
#celkem dat - pocet dat je zobrazen ve sloupci $9
celkem_dat=0
}

{
#pridavam do indexovaného $7(IP) + 1 - tedy dotaz se pricte k dané IP  
a[$7]++ 
# k dané IP přidávám osedlaná data
b[$7] += $9
celkem_dotazu++
celkem_dat += $9 
}
END{

#printing
	for (i in a)
	{
	        printf "%s\t%d\t%d\t%0.1f\t%0.1f\n", i,a[i],b[i],((a[i] / celkem_dotazu) * 100), ((b[i] / celkem_dat) * 100)
    }  
     
}

' |  sort -t$'\t' -k2 -nr 



