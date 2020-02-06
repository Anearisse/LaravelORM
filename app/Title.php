<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Title extends Model


{

    protected $primary_key = 'emp_no';
    
    protected $fillable = [
        'emp_no', 'title',
    ];

    public function employee() 
     {
          return $this->belongsTo('App\Employee', 'emp_no','emp_no');
     }
     
    }