<?php

namespace App\Http\Controllers;

use App\Models\AddressType;
use App\Models\City;
use App\Models\People;
use App\Models\State;
use App\Services\CPF\JuventudeWeb;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function cpf()
    {
        return view('pages.search.cpf');
    }

    public function postCpf(Request $request)
    {
        $cpf = str_replace(['.', '-'], '', $request->get('cpf'));
        $searchCPF = new JuventudeWeb();

        $result = $searchCPF->search($cpf);

        if (!isset($result['error'])) {
            /** @var People $people */
            $people = People::query()->create($result);

            /** @var City $city */
            $city = City::query()->firstOrCreate(['name' => $result['city'], 'state_id' => State::query()->where('uf', $result['uf'])->first()->id]);

            $people->addresses()->create([
                'street_name' => $result['street_name'],
                'address_code' => $result['address_code'],
                'number' => $result['number'],
                'neighborhood' => $result['neighborhood'],
                'address_type_id' => AddressType::query()->where('name', 'Residencial')->first()->id,
                'city_id' => $city->id
            ]);
        }
        return view('pages.search.cpf', compact('result', 'cpf'));
    }
}
