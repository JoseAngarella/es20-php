<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!-- Creare un array associativo che rappresenta una singola casa.
L'array deve avere i seguenti elementi:
- indirizzo: una stringa
- metri quadri: un float
- prezzo al metro quadro: un float
- prezzo totale: un float che è dato dal prodotto di metri quadri * prezzo al metro quadro

Stampare una tabella html (<table>) con le informazioni della casa.
La tabella è fatta in questo modo:
- la prima riga è la riga di intestazione e contiene le seguenti voci: "Indirizzo", "Metri quadri", "Prezzo al metro quadro",
 "Prezzo totale"
- la seconda riga contiene i valori. Per semplicità, stampare ogni cella di questa seconda riga con un apposito echo.

Suggerimento: Le parti "statiche" della tabella possono essere fatte direttamente in HTML.


MODIFICHE DA FARE
Migliorare l'esercizio precedente, facendo in modo che le celle della seconda riga siano generate tramite 
un foreach che scorre sull'array associativo. -->
    <table style="border-collapse:collapse">
        <tr >
            <th>Indirizzo</th>
            <th>Metri quadri</th>
            <th>Prezzo al metro quadro</th>
            <th>Prezzo totale</th>
        </tr>
        <?php
            $casa=array("indirizzo" => "via torna 40", "metriQuadri" => 55.3, "prezzoAlMetroQuadro" => 5000.0);
            $casa["prezzoTotale"]=$casa["metriQuadri"]*$casa["prezzoAlMetroQuadro"];
            $row="<tr>";
            foreach($casa as $valore){
                 $row=$row."<td>$valore</td>";
            }
            $row=$row."</tr>";
            echo $row;


        ?>
    </table>
</body>
</html>