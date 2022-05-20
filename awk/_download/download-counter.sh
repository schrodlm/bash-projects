#!/bin/bash


#pomocí awk budu zjistovat jestli se mi nahodou neresetnul pocitac (popsano v zadání)
cat download.log | awk -F" " '

BEGIN{
 max_send = 0;
 max_recv = 0;
 prev_value_recv = 0;
 prev_value_send = 0;
 curr_value =0;
 }

{
curr_value = $1;
#porovnam jestli je predesla hodnota vetsi nez soucasna - pokud ano --> doslo k rebootu a ulozim si data
if(prev_value_recv > curr_value){
max_recv += prev_value_recv;
 }
prev_value_recv = curr_value;
}

{
curr_value = $2;

if(prev_value_send > curr_value){
max_send += prev_value_send;
 }

prev_value_send = curr_value;

}


END{
 #scitam poslendi radku k max_recv, max_send - to je ta pridana z etho0
 max_recv += $1
 max_send += $2
 print "Received\t: " max_recv "\nSend\t\t: "  max_send
}



'


