<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([

          LocationSeeder::class,
          EmployeeSeeder::class,
          TaskSeeder::class

        ]);
    }
}

// // SCHEMA MIGRATION / SEEDING
//
// 1. Si fa migration (quindi si crea una tabella dentro database)--> IMPORTANTE:: il default value si decide dentro migration nel momento della creazione della tablla (colonne). *** é diverso dal caso quando mandiamo con il form le informazioni da inserire perche in quel caso il valore del default si definisce dentro il MODEL, si creano due array, 1 per fillable dove diamo i valori alle colonne che devono essere esattamente uguali ai 'name' del form e $attributes dove passiamo i valori di default di ciascuna chiave che vogliamo.
// 2. Se crea un Model ( quindi si crea un collegamento con la tabella del DB creato con Migration(){o qualsiasi altra tabella gia esistente, importante che il nome della tabella e il nome del model corrispondono})
// 3.**** adesso inizia il Seeder;
// 4. Si crea factory; dentro factory si VALORIZZANO i campi; solo una riga della tabella; si puo fare con faker ma non necessariamente con faker
// 5. si crea seeder, che concettualmente è un ciclo, che chiama il factory tante volte quanto diciamo noi.
// 6. databaseseeder lancia questi seeader( che sono i cicli); ordine di cicli puo avere importanza
//
// //SCHEMA ogond rogorc web.php-s sqema gavakete imis msgavsi
//
// databaseSeeder(){
//
// //INIZIA SEEDER
// function SEEDER(Ospiti::class (igivea rac-> 'App\Ospiti'), $MAX){
//   for($i=0; $i>= $MAX; $i++){
//
//     function FACTORY(Ospiti::class (igivea rac -> 'App\Ospiti')){
//       return [ --> valorizza factory o Seeder, perche se factory ritorna un array forse non è luo a valorizare le tabelle// FACTORY ritorna un array con le chiavi che sono nominati esattamente come le colonne di tabella
//         'firstname' => $faker-> firstName()
//         'lastname' => $faker-> lastName()
//       ];
//       FACTORY(Ospiti::class) -> create(inserisce i dati [come nel caso di metodo STORE()]); -> TRAMITE CHE COSA INSERISCE I DATI IL CREATE? tramite model(Ospiti::class)// cioe il metodo create inserisce i dati nel database
//
//     }
//   }
//
// }
//

// }
