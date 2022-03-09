<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('CREATE trigger `adat_trigger`
            before insert on `data` for each row
            begin
            DECLARE latest FLOAT DEFAULT NULL;
            SET latest = (SELECT data from `Data` WHERE sensorID = new.sensorID ORDER BY created_at DESC LIMIT 1);
            IF latest IS NOT NULL THEN
                set new.data = (new.data - latest);
            END IF;
            end;
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER `adat_trigger`');
    }
}
