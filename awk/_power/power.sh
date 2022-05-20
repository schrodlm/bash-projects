#!/bin/bash

cat power | awk -e '
BEGIN{

date = "";
O = "";
I = "";
U = "";
T = "";
H = "";
} 

{
#switch case - ktery resi vsechny situace, pri kterych si chceme ulozit hodnotu radky - hodnota se nachazi na $4

	switch($3){
	case "O:": 
		O = $4;
		break;
		
	case "I:":
		I = $4;
		break;
	
	case "U:":
		U = $4;
		break;
		
	case "T:":
		T = $4;
		break;
	
	case "heat":
		if($4 = "off")
			H="0";
		else
			H="1";
		break;
	}
}


{
	
#kdyz jsou vsechny tyto hodnoty nastavene - nejsou prazdne, tak jsme nasli vsechny pozadovane hodnoty a muzeme printovat	
	if ( O != "" && I != "" && U != "" && T != "" && H != "")
	{
		a =  $1;
		# zmena formatu %d/%m/%Y na %Y/%m/%d
		date = gensub(/.*([0-9][0-9])\/([0-9][0-9])\/([0-9][0-9][0-9][0-9])(.*)/,"[\\3/\\2/\\1\\4", "g", a);
		print date " " O " " I " " U " " T " " H;
		
	#resetuji hodnoty na nenastavene
	date = "";
	O = "";
	I = "";
	U = "";
	T = "";
	H = "";
		
	}
}

END{

	

}
'
