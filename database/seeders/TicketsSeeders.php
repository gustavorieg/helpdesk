<?php

namespace Database\Seeders;

use App\Models\Ticket;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TicketsSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ticket::create([
            'titulo' => 'Liberação Datasul',
            'descricao' => 'Preciso que seja liberada a tela de visualização de pedidos para analises',
            'prioridade' => 'Muito Alta',
            'departamento' => 'Comercial',
        ]);
    }
}
