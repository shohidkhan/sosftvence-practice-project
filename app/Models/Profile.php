<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    
    protected $fillable =[

        "user_id","company_name","company_email","company_phone","company_address","cr_documents","al_document","vat_number"
        ];
    
        public function user(){
            return $this->belongsTo(User::class);
        }
    
}
