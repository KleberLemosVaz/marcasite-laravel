<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class ProposalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('proposals')->insert([
                'client_id'                     => 1,           
                'user_id'                       => 1,
                'servico'                       => 'Serviço A',
                'valor_total'                   => 200.00,
                'sinal'                         => 50.00,
                'quantidade_de_parcelas'        => 3,
                'valor_das_parcelas'            => 50.00,
                'data_de_inicio_de_pagamento'   => Carbon::create('2020','10','28'),
                'data_das_parcelas'             => Carbon::create('2020','12','28'),
                'status'                        => 'em aberto',
                'created_at'                    => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
        \DB::table('proposals')->insert([
                'client_id'                     => 2,           
                'user_id'                       => 1,
                'servico'                       => 'Serviço B',
                'valor_total'                   => 300.00,
                'sinal'                         => 50.00,
                'quantidade_de_parcelas'        => 5,
                'valor_das_parcelas'            => 50.00,
                'data_de_inicio_de_pagamento'   => Carbon::create('2020','10','28'),
                'data_das_parcelas'             => Carbon::create('2020','12','28'),
                'status'                        => 'em aberto',
                'created_at'                    => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
        \DB::table('proposals')->insert([
                'client_id'                     => 3,           
                'user_id'                       => 1,
                'servico'                       => 'Serviço C',
                'valor_total'                   => 500.00,
                'sinal'                         => 50.00,
                'quantidade_de_parcelas'        => 9,
                'valor_das_parcelas'            => 50.00,
                'data_de_inicio_de_pagamento'   => Carbon::create('2020','10','28'),
                'data_das_parcelas'             => Carbon::create('2020','12','28'),
                'status'                        => 'em aberto',
                'created_at'                    => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
            \DB::table('proposals')->insert([
                'client_id'                     => 4,           
                'user_id'                       => 1,
                'servico'                       => 'Serviço D',
                'valor_total'                   => 500.00,
                'sinal'                         => 50.00,
                'quantidade_de_parcelas'        => 9,
                'valor_das_parcelas'            => 50.00,
                'data_de_inicio_de_pagamento'   => Carbon::create('2020','10','28'),
                'data_das_parcelas'             => Carbon::create('2020','12','28'),
                'status'                        => 'em aberto',
                'created_at'                    => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
            
    }
}
