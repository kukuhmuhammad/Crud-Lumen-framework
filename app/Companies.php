<?php 

namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Companies extends Model
{
    
     protected $fillable = ['company_name', 'category', 'addres','phone_number','email','Description'];
    
}