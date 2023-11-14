<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Apliadjob;


class job extends Model
{
    use HasFactory;

    protected $table = 'jobs';

    protected $fillable = [
        'firstname',
        'lastname',
        'mobileno',
        'Mobile_otp',
        'mobilewhats_check',
        'whatsappNo',
        'newsletter',
        'terms_condition',
        'email',
        'expyear',
        'overexyear',
        'tradename',
        'industrytype',
        'source',
        'passportno',
        'resume',
    ];
    
    
}
?>