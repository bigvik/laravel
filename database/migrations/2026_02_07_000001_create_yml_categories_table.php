// database/migrations/2026_02_07_000001_create_yml_categories_table.php
<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create("yml_categories", function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("external_id")->unique();
            $table->unsignedBigInteger("parent_id")->nullable();
            $table->string("name");
            $table->timestamps();

            $table->index("external_id");
            $table->index("parent_id");
        });
    }

    public function down()
    {
        Schema::dropIfExists("yml_categories");
    }
};

