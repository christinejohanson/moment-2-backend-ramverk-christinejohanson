# moment-2-backend-ramverk-christinejohanson

## Syfte/mål med uppgiften:

* Använda Laravel för backend-utveckling
* skapa REST-baserade webbtjänster med CRUD-funktionalitet (Create, Read, Update och Delete)
* skapa dokumentation för webbtjänst i en README.md-fil (Den du nu läser)
* publicera till lämplig webbhost som inte är FTP-baserad. 

### Beskrivning:

En webbtjänst har skapats med data om olika snowboards i form av namn, längd och kön (som den passar till).

### Tabeller för databas:

- name (varchar (64))
- length (integer(3))
- gender. 1 för herr, 0 för dam (boolean)

Övriga tabeller i databas skapade av ramverket
- id (primary key)
- created_at (timestamp)
- updated_at (timestamp)

En route har skapats för tabellerna och tillhörande controller.

**api.php**

I controllern finns funktioner för att:

- hämta ut all data från tabeller
- hämta ut en rad från tabellen med ett givet id
- lägga till data till tabellen 
- uppdatera data för en rad med ett givet id.
- radera en rad i tabellen med ett givet id.

**SnowController.php**

Via den här REST-webbtjänsten kan data hanteras med full CRUD-funktionalitet. Som användare är det möjligt att hämta data, lägga till data, uppdatera data samt radera data. 

Hur man når APIet på olika sätt:

GET Hämtar alla tillgängliga snowboards.

GET /id Hämtar snowboard med specifikt id.

POST Lagrar snowboard i tabell. Kräver name, length samt gender.

PUT Uppdaterar existerande snowboard med angivet ID. Kräver name, length samt gender.

DELETE Raderar en snowboard med angivet ID.

Ett objekt returneras samt skickas som JSON med nedan struktur:

{
"name" : "thunderstick", "length" : "150", "gender" : "0"
}

Webbtjänsten är skapad med ramverket Laravel och innehållet i aktuellt repo fungerar lokalt med hjälp av lokal databas. Den finns också publicerad på publik webbhost, Heroku, och då används deras databasserver. 


Länk till publicerad rest-API på Heroku: [Snowboard API](https://chjo2104moment2heroku.herokuapp.com/api/snowboard)

Kommando för att klona ner repositoryt lokalt till din dator: git clone https://github.com/Webbutvecklings-programmet/moment-2-backend-ramverk-christinejohanson.git
