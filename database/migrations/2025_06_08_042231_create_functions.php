<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateFunctions extends Migration
{
    public function up()
    {
        // Función para calcular total estimado
        DB::unprepared('
            CREATE OR REPLACE FUNCTION calcular_total_estimado(p_id_orden INTEGER)
            RETURNS NUMERIC AS $$
            DECLARE
              total_servicios NUMERIC := 0;
              total_repuestos NUMERIC := 0;
            BEGIN
              SELECT COALESCE(SUM(subtotal), 0) INTO total_servicios
              FROM orden_servicio WHERE id_orden = p_id_orden;

              SELECT COALESCE(SUM(cantidad * precio), 0) INTO total_repuestos
              FROM repuesto_orden ro
              JOIN repuesto r ON ro.id_repuesto = r.id_repuesto
              WHERE id_orden = p_id_orden;

              RETURN total_servicios + total_repuestos;
            END;
            $$ LANGUAGE plpgsql;
        ');

        // Función para total facturado por mes
        DB::unprepared('
            CREATE OR REPLACE FUNCTION total_facturado_mes(anio INTEGER, mes INTEGER)
            RETURNS NUMERIC AS $$
            DECLARE
              total NUMERIC;
            BEGIN
              SELECT COALESCE(SUM(total_facturado), 0) INTO total
              FROM factura
              WHERE EXTRACT(YEAR FROM fecha_emision) = anio
                AND EXTRACT(MONTH FROM fecha_emision) = mes;
              RETURN total;
            END;
            $$ LANGUAGE plpgsql;
        ');
    }

    public function down()
    {
        DB::unprepared('DROP FUNCTION IF EXISTS calcular_total_estimado(INTEGER)');
        DB::unprepared('DROP FUNCTION IF EXISTS total_facturado_mes(INTEGER, INTEGER)');
    }
}