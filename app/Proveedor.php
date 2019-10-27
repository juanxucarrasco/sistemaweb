<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Proveedor extends Model
{
    //especificamos porque si no hace referencia a provedors
    protected $table = 'proveedores';
    protected $fillable = [
        'id', 'contacto', 'telefono_contacto'
    ];
 
    public $timestamps = false;
 
    public function persona()
    {
        return $this->belongsTo('App\Persona');
    }
 
 
}