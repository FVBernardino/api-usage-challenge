<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\JsonResponse;

class UnsplashClientController extends Controller
{
    private $url = 'https://api.unsplash.com/';
    private $response;

    /**
     * @param array $params
     * @return \Illuminate\Http\JsonResponse
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function allPhotos(array $params = []): JsonResponse
    {
        $this->execute('photos', $params);

        return response()->json($this->response);
    }

    /**
     * @param string $id
     * @param array $params
     * @return JsonResponse
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function photo(string $id, array $params = []): JsonResponse
    {
        $this->byId($id, $params);

        return response()->json($this->response);
    }

    /**
     * @param string $id
     * @param array $params
     * @return JsonResponse
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function resizePhotoById(string $id, array $params = []): JsonResponse
    {
        $this->byId($id, $params);

        $urlRaw = $this->response['urls']['raw'];

        $this->response['urls']['regular'] = $urlRaw . "&w=640&h=480&fit=crop";
        $this->response['urls']['small'] = $urlRaw . "&w=384&h=288&fit=crop";
        $this->response['urls']['thumb'] = $urlRaw . "&w=320&h=240&fit=crop";

        return response()->json($this->response);
    }

    /**
     * @param string $id
     * @param array $params
     * @return $this
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    private function byId(string $id, array $params = [])
    {
        $this->execute('photos/' . $id, $params);
        return $this;
    }

    /**
     * @param $url
     * @param $params
     * @return array
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    private function execute($url, $params)
    {
        try {
            $client = new Client([
                'base_uri' => $this->url,
            ]);

            $response = $client->request('GET', $url, [
                'headers' => [
                    'Accept-Version' => 'v1',
                    'Authorization' => 'Client-ID 10f98567145a460296d16767f84f26c6d6e43a215474e21aa7a91066da8aa5fc'
                ],
                'query' => $params
            ]);

            $body = $response->getBody();
            $this->response = json_decode($body->getContents(), true);

        } catch (\Exception $e) {
            return $this->response = [
                'message' => 'Não foi possível carregar as informações no momento. Tente novamente mais tarde!'
            ];
        }

    }
}
