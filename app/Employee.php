<?php
//**************************************************
// erti employee mxolod ert adgilas sheidzleba mushaobdes(locationshi anu) amitom iqneba ONE TO MANY (INVERSE)--> ASE SHEMIDZLIA LARAVELSHIC VNAXO DOKUMENTACIA--->
// FUNQCIA UNDA IYOS  AUCILEBLAD MXOLOBITSHI RADGAN TITO EMPLOYEESTVIS MXOLOD DA MXOLOD ERTI LOCATION ARSEBOBS ANU IQNEBA PUBLIC FUNCTION LOCATION(){} --> DA ARA LOCATIONS(){}
//**************************************************
namespace App;

use Illuminate\Database\Eloquent\Model;
// use App\Location; // perche funziona anche senza use del ELOQUENT DI LOCATION?????

class Employee extends Model
{
    protected $fillable = [
      'firstname',
      'lastname',
      'date_of_birth',
      'private_code',
      'location_id'
    ];

    public function location() {// rispetto a come si chiama questo metodo laravel assume che employee avra per esempio location_id perche il metodo si chiama location
      return $this -> belongsTo(Location::class);
    }

    public function tasks() {
      return $this -> belongsToMany(Task::class);
    }
}
