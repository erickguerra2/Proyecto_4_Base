namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrdenReparacion extends Model
{
    protected $table = 'orden_reparacion';
    protected $primaryKey = 'id_orden';
    public $timestamps = false;

    protected $fillable = [
        'id_vehiculo',
        'estado',
        'total_estimado',
    ];
}
