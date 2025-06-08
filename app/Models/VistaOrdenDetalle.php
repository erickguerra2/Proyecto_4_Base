namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VistaOrdenDetalle extends Model
{
    protected $table = 'vista_ordenes_detalle';
    public $timestamps = false;
    protected $primaryKey = 'id_orden';
}
