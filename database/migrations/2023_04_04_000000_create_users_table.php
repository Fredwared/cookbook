<?php

use App\Constants\UserConstants;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string("firstname");
            $table->string("lastname");
            $table->string("surname")->nullable();
            $table->string("gender")->nullable();
            $table->date("birthdate")->nullable();
            $table->foreignId("country_id")->constrained();
            $table->foreignId("city_id")->nullable()->constrained();
            $table->string("primary_number");
            $table->string("number");
            $table->string("optional_number")->nullable();
            $table->string("email");
            $table->string("preferred_contact_method")->default(UserConstants::PRIMARY_CONTACT);
            $table->string("password");
            $table->timestamp('verified_at');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
