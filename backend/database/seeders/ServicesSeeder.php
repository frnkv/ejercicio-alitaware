<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\DatabaseManager;
use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
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
        $serviceTable = (new Service())->getTable();
        $this->databaseManager->table($serviceTable)->insert([
            [
                'id' => 1,
                'name' => 'Telefonía S.A',
                'description' => 'Servicio de telefonía'
            ],
            [
                'id' => 2,
                'name' => 'Cable S.A',
                'description' => 'Servicio de cable'
            ],
            [
                'id' => 3,
                'name' => 'Internet S.A',
                'description' => 'Servicio de internet'
            ],
        ]);
    }
}
