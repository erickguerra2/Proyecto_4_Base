<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateTriggers extends Migration
{
    public function up()
    {
        // Trigger para disminuir stock
        DB::unprepared('
            CREATE OR REPLACE FUNCTION restar_stock_repuesto()
            RETURNS TRIGGER AS $$
            BEGIN
              UPDATE repuesto
              SET stock = stock - NEW.cantidad
              WHERE id_repuesto = NEW.id_repuesto;
              RETURN NEW;
            END;
            $$ LANGUAGE plpgsql;

            CREATE TRIGGER trg_restar_stock
            AFTER INSERT ON repuesto_orden
            FOR EACH ROW
            EXECUTE FUNCTION restar_stock_repuesto();
        ');

        // Trigger para bitácora
        DB::unprepared('
            CREATE OR REPLACE FUNCTION registrar_cambio_orden()
            RETURNS TRIGGER AS $$
            BEGIN
              INSERT INTO bitacora_cambio(tabla_afectada, id_registro, accion)
              VALUES (\'orden_reparacion\', NEW.id_orden, TG_OP);
              RETURN NEW;
            END;
            $$ LANGUAGE plpgsql;

            CREATE TRIGGER trg_bitacora_orden
            AFTER UPDATE ON orden_reparacion
            FOR EACH ROW
            EXECUTE FUNCTION registrar_cambio_orden();
        ');

        // Trigger para validar factura
        DB::unprepared('
            CREATE OR REPLACE FUNCTION validar_factura_finalizada()
            RETURNS TRIGGER AS $$
            DECLARE
              estado_actual TEXT;
            BEGIN
              SELECT estado INTO estado_actual FROM orden_reparacion WHERE id_orden = NEW.id_orden;
              IF estado_actual <> \'Finalizada\' THEN
                RAISE EXCEPTION \'No se puede facturar una orden que no esté finalizada\';
              END IF;
              RETURN NEW;
            END;
            $$ LANGUAGE plpgsql;

            CREATE TRIGGER trg_factura_estado
            BEFORE INSERT ON factura
            FOR EACH ROW
            EXECUTE FUNCTION validar_factura_finalizada();
        ');
    }

    public function down()
    {
        DB::unprepared('DROP TRIGGER IF EXISTS trg_restar_stock ON repuesto_orden');
        DB::unprepared('DROP FUNCTION IF EXISTS restar_stock_repuesto()');
        
        DB::unprepared('DROP TRIGGER IF EXISTS trg_bitacora_orden ON orden_reparacion');
        DB::unprepared('DROP FUNCTION IF EXISTS registrar_cambio_orden()');
        
        DB::unprepared('DROP TRIGGER IF EXISTS trg_factura_estado ON factura');
        DB::unprepared('DROP FUNCTION IF EXISTS validar_factura_finalizada()');
    }
}