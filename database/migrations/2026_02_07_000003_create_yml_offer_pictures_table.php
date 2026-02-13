// database/migrations/2026_02_07_000003_create_yml_offer_pictures_table.php
<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create("yml_offer_pictures", function (Blueprint $table) {
            $table->id();
            $table
                ->foreignId("offer_id")
                ->constrained("yml_offers")
                ->cascadeOnDelete();
            $table->string("url");
            $table->unsignedTinyInteger("sort_order")->default(0);
            $table->timestamps();

            $table->index("offer_id");
        });
    }

    public function down()
    {
        Schema::dropIfExists("yml_offer_pictures");
    }
};

