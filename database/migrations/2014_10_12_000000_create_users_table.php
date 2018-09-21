<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('idnumber');
            $table->string('password')->nullable();
            $table->enum('gender', ['Male', 'Female']);
            $table->string('firstname');
            $table->string('middlename');
            $table->string('lastname');
            $table->text('description')->nullable();
            $table->string('picture')->nullable(); 
            $table->integer('yearLevel')->nullable();
       
            //USERTYPE NI!
            $table->enum('role', ['Student', 'Teacher',
                                  'Alumni', 'Admin',
                                  'Coordinator', 'Chair']);

            //FOR TEACHERS!!
            $table->enum('employmentStatus', ['Employed', 'Unemployeed', 
                                              'Part-Time Job', 'Summer Job', 
                                              'On-the-Job Training'])->nullable(); 

            //FOR ALUMNI NI!
            $table->enum('updateStatus', ['Updated', 'Outdated', 
                                          'Recent'])->nullable();

            $table->string('position')->nullable();
            
            $table->rememberToken();            
            $table->timestamps();   
            $table->softDeletes();
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
}
