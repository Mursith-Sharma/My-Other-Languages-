php artisan make:model Post
இந்த கட்டளை செயல்படும்போது, app/Models/Post.php என்ற file உருவாகும்.
DB-இல் உள்ள table-ஐ பிரதிநிதிக்கிறது.


php artisan make:migration create_post_table --create=post
இதன் அர்த்தம்:
✅ ஒரு புதிய migration file உருவாக்கும், அதில் post என்ற table-ஐ உருவாக்கும் instruction இருக்கும்.
php artisan make:migration → Laravel-இன் artisan command மூலம் migration file உருவாக்க.
create_post_table → migration file Name
--create=post → இது சொல்லுகிறது: இந்த migration file ஒரு புதிய table (post) உருவாக்கும்.

now migrations folder il create_post_table enum migration file irukkum athil neengal table create panna.
open that code ------->>  

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('post', function (Blueprint $table) {
            $table->id();
            $table ->string('title');
            $table ->text('content');
            $table ->string('img_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post');
    }
};


after 
php artisan migrate
finally your database il post table il intha data irukkum. ithai naam database ilum gui moolam create pannalam 
✅ எனவே Laravel Development-இல் பரிந்துரைக்கப்படும் வழி:
Migrations மூலம் table structure define பண்ணுங்கள்
Code-ஆக track பண்ண முடியும்
Team-இல் share பண்ண முடியும்
Rollback/Refresh automation உள்ளது


