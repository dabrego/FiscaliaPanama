<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateReporteprovinciaView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
           DB::statement("CREATE VIEW reporteprovincia AS (
        SELECT A.provinciafk, A.distritofk ,A.corregimientofk, A.status, count(A.status) as cantidad, B.case_type
                            from filerecords A
                            inner join casetype B
                            on A.casetype_id = B.id
                            group by  A.provinciafk, A.distritofk ,A.corregimientofk,A.status, B.case_type
                            order by  A.provinciafk, A.distritofk ,A.corregimientofk,A.status, B.case_type
                        )");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reporteprovincia');
    }
}
