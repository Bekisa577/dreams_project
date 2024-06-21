<?php

namespace App\Console\Controller;

use App\Http\Controllers\Controller;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Exception;

class DatabaseTestConnection extends Controller
{
   
    public function test()
    {
        try{
        DB::connection()->getPdo();
        $this->info('Database connection is working');
        }catch (Exception $e) {
            $this->error('Could not connect to the database. Error!' .$e->getMessage());
        }

        return 0;
    }
}
