<?php
//**************************************************
//public function employess() mravlobitshia ---> amis kargi axsna maqvs EMployees modelshi
//**************************************************
namespace App;

use Illuminate\Database\Eloquent\Model;
// use App\Employee;

class Location extends Model
{
    protected $fillable = [

      'name',
      'street',
      'city',
      'state'

    ];

    public function Employees() {
      return $this -> hasMany(Employee::class);
    }

}
