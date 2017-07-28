<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportejuecesView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         DB::statement("CREATE VIEW reportejueces AS (
                          SELECT C.name, count(A.status) as cantidad, A.status
                           from filerecords A
                           inner join pivot B
                           on A.id = B.filerecord_id
                           inner join users C
                           on C.id = B.user_id 
                           where B.user_id= C.id
                           group by   A.status, C.name
                            order by   A.status, C.name
                        )");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reportejueces');
    }
}
