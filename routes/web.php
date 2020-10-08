<?php

use Illuminate\Support\Facades\Route;
use App\Ospiti;


//l'ordine delle ROUTE é MOLTO IMPORTANTE SOPRATUTTO SE URL INIZIA CON LO STESSO NOME, per esemiop /EMP/create e /EMP/{id}.. bisogna capire bene


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/welcome', function () {
  $ospiti = Ospiti::all();
  return view('welcome', compact('ospiti'));
});
Route::get('/provaa', 'provaController@index') -> name('prova-index');
Route::get('/ospiti', 'OspitiController@index') -> name('ospiti-index');

// inizio parte frontend della lezione 88
Route::get('/', 'EmployeeController@index') -> name('emp.index');
Route::get('/emp/create', 'EmployeeController@create') -> name('emp.create'); // qui ce un problema, SE IO METTESSI IL EMP/SHOW ROUTE SOPRA DI QUESTO ROUTE IL BROWSER NON VEDE IL VIEW-CREATE. NON SO IL MOTIVO ESATTO MA ORDINE DELLE ROUTE è MOLTO IMPORTANTE
Route::post('/emp/store', 'EmployeeController@store') -> name('emp.store');
Route::get('/emp/update/{id}', 'EmployeeController@edit') -> name('emp.edit');
Route::get('/emp/destroy/{id}', 'EmployeeController@destroy') -> name('emp.destroy');
Route::get('/emp/{id}', 'EmployeeController@show') -> name('emp.show');





// //****************
// // VAR_DUMP DEL FAKER
// //****************
// Route::get('/faker', function () {
//   $faker = Faker\Factory::create(); // create a French faker
//   for ($i = 0; $i < 2; $i++) {
//     echo $faker-> name, "\n";
//     echo '<br>';
//   }
//   dd($faker);
//   // PER VEDERE COSA C'é DENTRO FAKER
//
// $ospiti = Ospiti::all();
//   return view('welcome', compact('ospiti'));
// });




// SCHEMA MIGRATION



// // Inizio schema
// //--------------------------------------------------------------------------
// //--------------------------------------------------------------------------
// // ROUTE come riceve e manda i dati al view?
// 1. il Route prende $input dal utente ($input sono: 'url' e 'qualche dato ((SE è LINK QUESTO DATO SARA {ID-PER ESEMPIO} NEL CASO DI FORM SARA REQUEST)) -> per esempio request[dal form], id, ecc')// con click sul link o submit sul FORM
// 2. lancia la funzione controller corrisondente
// 3. controller prende $input e lancia il metodo corrispondente
// 4. controller ritorna il view_gia_pronto(se prevsto) al route per mandare al client per mostrare sullo schermo
// 5. route manda output al client



// //--------------------------------------------------------------------------
// //--------------------------------------------------------------------------
// ROUTE come prende i dati dal model e mostra al view
// $input_URL = 'inputSullaPagina';// questo input passiamo al CONTROLLER , non per FORZA DENTRO JS, ma l'input puo arrivare direttamente al route, senza passare $.ajax, giusto????
//
// function javascriptM() {
//
//   //--------------------------------------------------------------------------
//   -- le tabelle si possono creare con migration --
//   migrations
//   factory
//   seeds
//
//     $_DB = [// LE TABELLE si può creare tramite migration?
//       'configurazioni' => [
//         '1' => '1',
//         '2' => '2'
//       ],
//       'altro'[
//         '3' => '3',
//         '4' => '4'
//       ]
//     ];
//
// //--------------------------------------------------------------------------
// //QUA INIZIA ROUTES
// function webphpM($input_URL, index() -- metodo del CONTROLLER){
//   if ($input_URL === '/' && metodoController === 'index'){
//     //-------------------------------------------------------------------------
//     //QUA INIZIA CONTROLLER
//
//     function ConfigController() {
//       //se ci serve una tabella importiamo un model
//         App\ConfigMODEL -> cioè importiamo le varibili del MODEL
//         public function index() {
//           $config = ConfigMODEL(); //Config::all(); tabella
//           >>>>la QUERY<<<
//           del DB si fa in CONTROLLER, sulla base di MODEL, cioe tabella che abbiamo 'scaricato' con MODEL
//
//           return json_Send_HTML_and_Variables_to_browser(send:'HTML from VIEWS(BLADE)' -> da capire bene
//           ,send:"$config");//variables
//         } // meglio dire che mando una funzione di function HTML($config -> argomento della funzione){}
//
//         return index();// controller ritrona INDEX
//     }
//
//     //QUA INIZIA MODEL
//     function ConfigMODEL(){ //MAKE:MODEL ->Prende la tabella dal DataBase
//
//       $table = 'configurazioni'; -> da capire bene// tabella preso ("scaricata") dal database quando facciamo commando MAKE:MODEL
//
//
//       function getTablefromDB($table = 'ConfigMODEL' -> per DEFAULT prende il nome del MODEL sopra abbiamo cambiato il nome con 'configurazioni') {// per default $table ha il valore del modello creato da noi
//         foreach ($_DB as $tables => $dataTable) { --- non scarica proprio MA CREA CONNESSIONE CON UNA TABELLA e rende proto a SCARICARE in qualsiasi momento quando alla route arriva la richiesta, // ma si puo immaginare anche cosi, che scarica db
//           if($tables === $table){
//             return $dataTable; // il MODEL ritorna questo
//           }
//         }
//       }
//
//       getTablefromDB($table);
//       //************************************************************************
//       $fillable = [// è al contrario SERVE PER MANDARE INFORMAZIONI AL DB
//         "title",
//         "description"
//       ]; -> da capire bene
//     }
//     //--------------------------------------------------------------------------
//
//   }
//   return ConfigController();
//   }
//
// //--------------------------------------------------------------------------
// webphp('/');//immagina che in js al click si è agganciato una stringa così che andra come input dopo
//
// }
