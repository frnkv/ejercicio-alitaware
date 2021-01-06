<?php

namespace Database\Seeders;

use App\Models\TeamAmount;
use Illuminate\Database\DatabaseManager;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class TeamsAmountsSeeder extends Seeder
{
    private DatabaseManager $databaseManager;

    /**
     * @param DatabaseManager $databaseManager
     */
    public function __construct(
        DatabaseManager $databaseManager
    ) {
        $this->databaseManager = $databaseManager;
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teamsAmountsTable = (new TeamAmount())->getTable();
        $this->databaseManager->table($teamsAmountsTable)->insert([
            [
                'id' => TeamAmount::LT_10,
                'amount' => 50,
                'description' => 'Equipo con menos de 10 usuarios',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => TeamAmount::GTE_10_AND_LT_100,
                'amount' => 45,
                'description' => 'Equipo con más de 10 usuarios y menos de 100',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => TeamAmount::GTE_100_AND_LT_1000,
                'amount' => 40,
                'description' => 'Equipo con más de 100 usuarios y menos de 1000',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => TeamAmount::GTE_1000,
                'amount' => 35,
                'description' => 'Equipo con más de 100 usuarios',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
