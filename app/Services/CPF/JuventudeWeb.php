<?php

namespace App\Services\CPF;

use App\Services\ISearchable;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class JuventudeWeb implements ISearchable
{
    public function search(string $query): array
    {
        $client = new Client(['base_uri' => "http://www.juventudeweb.mte.gov.br"]);
        try {
            $response = $client->request('POST', "/pnpepesquisas.asp", [
                'headers' => [
                    'Content-Type' => 'application/x-www-form-urlencoded',
                    'Cookie' => 'ASPSESSIONIDSCCRRTSA=NGOIJMMDEIMAPDACNIEDFBID; FGTServer=2A56DE837DA99704910F47A454B42D1A8CCF150E0874FDE491A399A5EF5657BC0CF03A1EEB1C685B4C118A83F971F6198A78',
                ],
                'body' => "acao=consultar%20cpf&cpf={$query}"
            ]);
            $xmlString = $response->getBody()->getContents();
            $xml = simplexml_load_string($xmlString);
            $arrayResponse = json_decode(json_encode($xml),true);
            if (!sizeof($arrayResponse))  return ['error' => 'Dados não encontrados!'];
            return [
                'name' => $arrayResponse['PESSOAFISICA']['@attributes']['NOPESSOAFISICA'],
                'document' => $arrayResponse['PESSOAFISICA']['@attributes']['NRCPF'],
                'birthday' => $arrayResponse['PESSOAFISICA']['@attributes']['DTNASCIMENTO'],
                'street_name' => $arrayResponse['PESSOAFISICA']['@attributes']['NOLOGRADOURO'],
                'number' => $arrayResponse['PESSOAFISICA']['@attributes']['NRLOGRADOURO'],
                'complement' => $arrayResponse['PESSOAFISICA']['@attributes']['DSCOMPLEMENTO'],
                'neighborhood' => $arrayResponse['PESSOAFISICA']['@attributes']['NOBAIRRO'],
                'address_code' => $arrayResponse['PESSOAFISICA']['@attributes']['NRCEP'],
                'city' => $arrayResponse['PESSOAFISICA']['@attributes']['NOMUNICIPIO'],
                'uf' => $arrayResponse['PESSOAFISICA']['@attributes']['SGUF'],
                'mother_name' => $arrayResponse['PESSOAFISICA']['@attributes']['NOMAE']
            ];
        } catch (GuzzleException $e) {
            return ['error' => $e->getMessage()];
        }
    }
}
