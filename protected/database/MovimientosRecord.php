<?phpclass MovimientosRecord extends TActiveRecord {    const TABLE='movimientos';    public $codigo_movimiento;    public $fecha;    public $nombre_archivo;    public $fecha_archivo;        public static function finder($className=__CLASS__) {        return parent::finder($className);    }}?>