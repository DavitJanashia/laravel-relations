<?php

use App\Task;
use App\Employee;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Task::class,200)
          -> create() // questa restitusce una COLLEZIONE cioe un array avvanzato a cui si possono aplicare diversi metodi ->> per esempio each (che è ciclo metodo si puo dire)
          -> each(function($tas) {

            $emps = Employee::inRandomOrder()// $emps restituirà un array degli employees e length del array sarà compresa tra 5 e 10 in modo casuale
                -> take(rand(5, 10))
                -> get();// restituisce query??
            $tas -> employees() -> attach($emps);// many to many-s shemtxvevashi associate-is magivrad viyenebt attach-s

          });
    }
}
