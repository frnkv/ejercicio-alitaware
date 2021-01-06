<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\DatabaseManager;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
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
        $usersTable = (new User())->getTable();
        $this->databaseManager->table($usersTable)->insert([
            [
                'id' => 1,
                'username' => 'fvillegas',
                'email' => 'villegasfranco1098@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('password'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'name' => 'Franco',
                'surname' => 'Villegas',
                'latitude' => -32.9521898,
                'longitude' => -60.76668,
            ],
            [
                'id' => 2,
                'username' => 'johndoe',
                'email' => 'john@doe.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('password'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'name' => 'John',
                'surname' => 'Doe',
                'latitude' => -38.951194,
                'longitude' => -68.058656,
            ],
            [
                'id' => 3,
                'username' => 'janedoe',
                'email' => 'jane@doe.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('password'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'name' => 'Jane',
                'surname' => 'Doe',
                'latitude' => -38.951194,
                'longitude' => -68.058656,
            ],
            [
                'id' => 4,
                'username' => 'nn',
                'email' => 'natalia@natalia.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('password'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'name' => 'Natalia',
                'surname' => 'Natalia',
                'latitude' => -38.951194,
                'longitude' => -68.058656,
            ],
            [
                'id' => 5,
                'username' => 'jp',
                'email' => 'juan@perez.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('password'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'name' => 'Juan',
                'surname' => 'Perez',
                'latitude' => -38.951194,
                'longitude' => -68.058656,
            ],
        ]);
    }
}
