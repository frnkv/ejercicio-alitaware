<?php


namespace App\Services;

use App\Models\Payment;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Http;

class UsersService
{
    /**
     * @param array $filters
     * @return Collection
     */
    public function getAll(array $filters): Collection
    {
        $query = User::query();

        if (array_key_exists('fullname', $filters) && $filters['fullname'] != null) {
            $query
                ->where('name', 'like', '%' . $filters['fullname'] . '%')
                ->orWhere('surname', 'like', '%' . $filters['fullname'] . '%');
        }

        return $query->get();
    }

    /**
     * @param User $usuario
     * @return mixed
     */
    public function getDireccion(User $usuario)
    {
        $response = Http::get('https://apis.datos.gob.ar/georef/api/ubicacion', [
            'lat' => $usuario->getAttributeValue('latitude'),
            'lon' => $usuario->getAttributeValue('longitude'),
        ]);

        return json_decode($response->body(), true);
    }
}
