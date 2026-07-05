<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        if (!Schema::hasColumn('chats', 'blocked_by')) {
            Schema::table('chats', function (Blueprint $table) {
                $table->unsignedBigInteger('blocked_by')->nullable()->after('is_blocked');
            });
        }
    }

    public function down()
    {
        if (Schema::hasColumn('chats', 'blocked_by')) {
            Schema::table('chats', function (Blueprint $table) {
                $table->dropColumn('blocked_by');
            });
        }
    }
};
