<?php

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Schema::create('job_tag', function (Blueprint $table) {
        //     $table->id();
        //     $table->foreignIdFor(Job::class, 'job_listing_id')->constrained()->cascadeOnDelete();
        //     $table->foreignIdFor(Tag::class)->constrained()->cascadeOnDelete();
        //     $table->timestamps();
        // });
        // Schema::create('tags', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('name');
        //     $table->timestamps();
        // });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tags');
        Schema::dropIfExists('job_tag');
    }
};
