<?php

function tablero(){
    $FICHAS = ["T","C","A","RY","RA","A","C","T",
               "P","P","P","P","P","P","P","P",
               "","","","","","","","",
               "","","","","","","","",
               "","","","","","","","",
               "","","","","","","","",
               "P","P","P","P","P","P","P","P",
               "T","C","A","RY","RA","A","C","T"]; 
    echo "<table>\n";
    $C=0;
for ($i=0; $i<8; $i++){
    echo "<tr>\n";
    for ($j=0; $j<8; $j++){
        $clase=$j%2==0?"claro":"obscuro";
    echo "\t<td class=' celda $clase'>$FICHAS[$C]</td>\n";
    $C++;
}
    echo "</tr>\n";
}
echo "</table>\n";
}

?>
<!DOCTYPE html>
<html>
    <head>
        <style>
            .celda{
                width:32px;
                height:32px;
            }
            .claro{
                background-color:green;
            }
            .obscuro{
                background-color:blue;
            }
            </style>
            </head>
            <body>
                <?php tablero();?>
            </body>
            </html>