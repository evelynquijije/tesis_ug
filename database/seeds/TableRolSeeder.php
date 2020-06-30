<?php

use Illuminate\Database\Seeder;

class TableRolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('rol')->truncate();
        $rols=[ 
        	'administrador',
        	'docente',
        	'estudiante'
        ];
        foreach ($rols as $value) {
        	DB::table('rol')->insert([
        		'nombre'=>$value
        	]
        	);
        } // @endforeach
    }
}
