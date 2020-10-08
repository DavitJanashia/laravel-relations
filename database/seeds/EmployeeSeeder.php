<?php

use App\Employee;
use App\Location;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //AQ VIYENEB MAKE-S CREATE-IS MAGIVRAD RADGAN CREATISGAN GANSXVAVEBIT MAKE AR IMAXSOVREBS PIRDAPIR DATABASESHI (AM SHEMTXVEVASHI IMISTVIS MCHIRDEBA ROM MAQVS ERTI FOREIGN KEY ROMELIC AR SHEMIDZLIA FACTORYT SHEVAVSO RADGAN SXVA CXRILIS IDIZEA DAMOKIDEBULI)
        factory(Employee::class, 100)
         -> make()// questa restitusce una COLLEZIONE cioe un array avvanzato a cui si possono aplicare diversi metodi ->> per esempio each (che è ciclo metodo si puo dire)
         -> each(function($emp){
           $loc = Location::inRandomOrder() -> first(); //**** CON QUESTA RIGA DI CODICE RESTITUIAMO UNA RIGA CASUALE DELLA TABELLA LOCATION ... inRandomOrder() equivalente al all() ma restituisce tutti i dati in ordine randomico. invece first serve per restituire il primo tra loro
           $emp -> location() -> associate($loc); // qua stiamo dicendo prendi un ID della location e metti nel Location_id della tabella Employee.... si puo fare perche abbiamo creato i relazioni tra i MODEL
           $emp -> save();// questo inserisce i dati nel DB
        });

        // am shemtxvevashi $emp -> location() ambobs me xelshi maqvs 'location_id' rac aris KEY (rogorc arrayis key), xolo -> associate($loc) ambobs locationis id-s mivabam shens KEYS rogorc ghirebulebas

        //MNISHNVELOVANI: MAKE() ROCA DASRULDEBA SANAM EACH-I DAIWYEBA UKVE DASRULEBULI CXRILI GVAQVS MAGRAM DATABASESHI ARAA JER GADASULI. AMIS SHEMDEG IQYEBA CIKLI AM MAKE()-IT SHEQMNIL ARRAIZE DA FOREACHIS VARIANTSHI YOVELI EMPLOYEESTVIS $EMP IS MNISHVNELOBA GVQENEBA YVEL CIKLZE
    }
}
