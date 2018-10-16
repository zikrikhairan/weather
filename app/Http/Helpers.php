<?php
namespace App\Http;
use Config;
use DB;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\RequestException;
use Psr\Http\Message\MessageInterface;
use Carbon\Carbon;
// use


class Helpers{

	public static function metaweather($method="GET", $location)
	{
		$domain = 'https://www.metaweather.com/api/';
		$headers = array('Accept-Encoding' => 'GZIP','Content-Type'=>'application/json');
		$client = new \GuzzleHttp\Client(['base_uri' => $domain,'headers'=> ['headers.option' => $headers],'decode_content' => false]);
		// dd($domain);
		try{
			switch ($method) {
				default:
				case 'GET':
					$response = $client->request('GET',$location);
				break;
				case 'POST':
					$response = $client->request('POST',$location, ['json' => $params]);
				break;
			}
			$statusCode = $response->getStatusCode();
			if($statusCode == 200){
				return json_decode($response->getBody()->getContents(), true);
			}
			else{
				return false;
			}
		}catch (RequestException $e)
		{
			if ($e->hasResponse()) {
				return Psr7\str($e->getResponse());
			}
			return false;
		}
	}
}