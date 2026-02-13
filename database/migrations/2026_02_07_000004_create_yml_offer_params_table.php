// database/migrations/2026_02_07_000004_create_yml_offer_params_table.php
<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create("yml_offer_params", function (Blueprint $table) {
            $table->id();
            $table
                ->foreignId("offer_id")
                ->constrained("yml_offers")
                ->cascadeOnDelete();
            $table->string("name");
            $table->text("value");
            $table->timestamps();

            $table->index("offer_id");
            $table->index("name");
        });
    }

    public function down()
    {
        Schema::dropIfExists("yml_offer_params");
    }
};

