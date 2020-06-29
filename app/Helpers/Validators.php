<?php
namespace App\Helpers;
  
use Illuminate\Support\Facades\DB;
  
class Validators {
    
    
    public static function EmailValidator($email) {
        return (false !== filter_var($email, FILTER_VALIDATE_EMAIL));
    }
}
