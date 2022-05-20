#!/bin/sed -Enf

#Vypise prostor mezi Platnost pro ---- </table>
#--> tedy tu cast html, kterou chceme
/Platnost pro/,/<\/table>/{
	#{} --> Podmíněné spuštění příkazu(ů) (if-then)
    /<p>/{            #tady tedy hledame v prostoru predtim jeste vice specificky prostor a to <p>
    s/.*Platnost pro //
    s/, pořadí:/ #/
    s/<.*//
    p
}
 #tady dalsi vetev, tato jiz jen formatuje text do podoby, které chceme
 #vyuziva primitivní loop -> :a (set label) ba(go to label if left side = true)
/<t[dh][ >]/ {
    :a
    N
    /<\/tr>/! ba
    s,(.*)\n.*,\1,
    s,^ +,,g
    s, +, ,g
    s,\n,|,g
    s,<[^>]*>,,g
    p
    }
}
