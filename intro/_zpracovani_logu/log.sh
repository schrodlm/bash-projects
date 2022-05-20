#!/bin/zsh



LINE=$(cat data.log | grep -E '^.*: status>.*$' | tail -1);


DATE=$(echo $LINE | cut -d "[" -f2 | cut -d "]" -f1 | cut -d"-" -f1);
TIME=$(echo $LINE | cut -d "[" -f2 | cut -d "]" -f1 | cut -d"-" -f2);
SEMESTER=$(echo $LINE | cut -d"|" -f1 | cut -d"=" -f2);
AKTSEM=$(echo $LINE | cut -d"|" -f2 | cut -d"=" -f2);
STAVZAP=$(echo $LINE | cut -d"|" -f3 | cut -d"=" -f2);
CAC_STAT=$(echo $LINE | cut -d"|" -f4 | cut -d"=" -f2);
CAD_STAT=$(echo $LINE | cut -d"|" -f5 | cut -d"=" -f2);


printf "%s\t\t%s\n%s\t\t%s\n%s\t%s\n%s\t\t%s\n%s\t\t%s\n%s\t%s\n%s\t%s\n" "DATE" $DATE "TIME" "$TIME" "SEMESTER" "$SEMESTER" "AKTSEM" "$AKTSEM" "STAVZAP" "$STAVZAP" "CAC_STATUS" "$CAC_STAT" "CAD_STATUS" "$CAD_STAT";
