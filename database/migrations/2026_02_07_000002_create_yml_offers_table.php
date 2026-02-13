// database/migrations/2026_02_07_000002_create_yml_offers_table.php
<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create("yml_offers", function (Blueprint $table) {
            $table->id();
            $table->string("external_id")->unique();
            $table->boolean("available")->default(true);
            $table->boolean("disabled")->default(false);
            $table->string("name");
            $table->string("url")->nullable();
            $table->string("vendor")->nullable();
            $table->string("vendor_code")->nullable();
            $table
                ->foreignId("category_id")
                ->nullable()
                ->constrained("yml_categories")
                ->nullOnDelete();
            $table->text("description")->nullable();
            $table->string("dimensions")->nullable();
            $table->decimal("weight", 10, 4)->nullable();
            $table->decimal("price", 10, 2);
            $table->string("currency_id", 10)->default("USD");
            $table->timestamps();

            $table->index("external_id");
            $table->index("category_id");
            $table->index("available");
            $table->index("vendor_code");
        });
    }

    public function down()
    {
        Schema::dropIfExists("yml_offers");
    }
};

