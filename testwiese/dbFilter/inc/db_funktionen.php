<?php
// Fehlermeldung zu Entwicklungszwecke einschalten
error_reporting(E_ALL);

// Datenbankobjekt erzeugen und mit Datenbank dbkcs verbinden
$db = new mysqli('localhost', 'root', '', 'dbkcs');

// Datenbankobjekt auf UTF8 einstimmen
$db->set_charset('utf8');

// Bei Fehlern die festgelegte Fehlermeldung ausgeben
print_r ($db->connect_error);

// Bei Fehlern eine Fehlermeldung erzeugen (catch)
if ($db->connect_errno) {
  die('Datenbankverbindung kann nicht hergestellt werden!');
}


// Aktuelle Uhrzeit ausgeben
echo "Aktuelle Uhrzeit: ";
echo date("H:i:s");

?>