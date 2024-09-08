<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class CopyTestData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'copy:test-data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Copiar datos necesarios para pruebas';

    /**
     * Execute the console command.
     */
    public function handle()
    {
       $files = DB::connection('mysql')->table('departamentos')->get();
        DB::connection('mysql_testing')->table('departamentos')->insert($files->toArray());

        $files = DB::connection('mysql')->table('provincias')->get();
        DB::connection('mysql_testing')->table('provincias')->insert($files->toArray());

        $files = DB::connection('mysql')->table('distritos')->get();
        DB::connection('mysql_testing')->table('distritos')->insert($files->toArray());

        $this->info('Datos copiados exitosamente.');
    }
}