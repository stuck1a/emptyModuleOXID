<?php
// Diese Klasse enthält alle Funktionen, die für das Arbeiten mit der Datenbank in diesem Kontext nötig ist

// Einbinden der Funktionssammlung
require 'inc/db_funktionen.php';


// Abrufen der Datenbanktabelle
$ErhalteneListe = $db->query("SELECT * FROM kcscouponseries"); 

// Ausgeben der Ergebnistabelle als Objekt
// print_r($ErhalteneListe);

// Kopieren der Daten in ein Key-Array (Keys=Lfd.Nr. // Sub-Keys=Spaltennamen)
$AngepassteListe = $ErhalteneListe->fetch_all(MYSQLI_ASSOC);

// Aufgeschönte Ausgabe der Daten
echo "<pre>";
print_r($AngepassteListe);
echo "</pre>";


// Oder gleich DB-optimiert per while          FUNZT NOCH NICHT
while ($zeile = $ErhalteneListe->fetch_assoc()) {
    echo '<br>' . $zeile['OXACTIVE'] . $zeile['OXTITLE'] .' '. $zeile['OXID'];
}


// Aufräumen und Verbindung schließen
$ErhalteneListe->free();
$db->close();

?>