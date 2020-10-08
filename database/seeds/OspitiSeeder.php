<?php

use Illuminate\Database\Seeder;
use App\Ospiti;
class OspitiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Ospiti::class, 10) -> create();// create server per INSERIRE I DATI NEL DATABASE
    }

    // public function run()
    // {
          //******* un modo altertnativo per mettere OSPITI::CLASS *******
    //     factory(App\Ospiti::class, 10) -> create();// create server per INSERIRE I DATI NEL DATABASE
    // }
}
