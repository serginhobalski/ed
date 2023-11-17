<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Prof;
use App\Models\Servico;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Sergio',
            'surname' => 'Admin Geral',
            'username' => 'sof',
            'email' => 'contato@estimulardigital.com',
            'group' => 'admin',
            'password' => Hash::make('P@ssw0rd123'),
        ]);
        $prof = Prof::create([
            'user_id' => $admin->id,
            'profissao' => 'Neuropsicopedagogo',
            'bio' => 'Pedagogo, especialista em Neuropsicopedagogia Clínica com mestrado em Análise do Comportamento.',
        ]);
        $servicos = [
            [
                'prof_id' => $prof->id,
                'servico' => 'Avaliação de Psicopedagógica',
                'valor' => 450,
            ],
            [
                'prof_id' => $prof->id,
                'servico' => 'Atendimento TDAH',
                'valor' => 60,
            ],
            [
                'prof_id' => $prof->id,
                'servico' => 'Atendimento TEA',
                'valor' => 60,
            ],
            [
                'prof_id' => $prof->id,
                'servico' => 'Atendimento Psicopedagógico',
                'valor' => 60,
            ],
        ];
        foreach ($servicos as $servico){
            Servico::create($servico);
        }

        User::factory(100)->create();
    }
}
