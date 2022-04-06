<?php

namespace App\Http\Controllers;

use App\User;
use DateTimeImmutable;
use DateTimeZone;
use Illuminate\Http\Request;
use Prokerala\Api\Astrology\Location;
use Prokerala\Api\Astrology\Service\Chart;
use Prokerala\Common\Api\Exception\AuthenticationException;
use Prokerala\Common\Api\Exception\Exception;
use Prokerala\Common\Api\Exception\QuotaExceededException;
use Prokerala\Common\Api\Exception\RateLimitExceededException;
use Prokerala\Common\Api\Exception\ValidationException;
use GuzzleHttp\Client as PsrHttpClient;
use Illuminate\Support\Facades\Auth;
use Nyholm\Psr7\Factory\Psr17Factory;
use Prokerala\Common\Api\Authentication\Oauth2;
use Prokerala\Common\Api\Client;

class ChartController extends Controller
{
    public function viewform()
    {
        $user = Auth::user();
        $time_now = new DateTimeImmutable();
        $time = $time_now->format('c');
        $timezone = 'Asia/Kolkata';
        $tz = new DateTimeZone($timezone);
        $datetime = new DateTimeImmutable($time, $tz);
        
        return view('chartform')->with('datetime', $datetime);
    }

    public function userchart()
    {
        $user = Auth::user();
       $chart = $user->birthchart;
        return view('class.chart')->with('chart', $chart);
    }

    public function submitform(Request $request)
    {

        $chart_type = 'rasi';
        $ayanamsa = 1;
        $chart_style = 'south-indian';
        $timezone = $request->timezone;
        $coordinates = $request->coordinates;
        $arCoordinates = explode(',', $coordinates);
        $latitude = $arCoordinates[0] ?? '';
        $longitude = $arCoordinates[1] ?? '';



        $tz = new DateTimeZone($timezone);
        $datetime = new DateTimeImmutable($request->datetime, $tz);
        $client = $this->getclient();
        $location = new Location($latitude, $longitude, 0, $tz);

        $result = [];
        $errors = [];


        try {
            $method = new Chart($client);
            $method->setAyanamsa($ayanamsa);
            $result = $method->process($location, $datetime, $chart_type, $chart_style);
            $user = User::find(Auth::user()->id);
            $user->update([
                'birthchart'=> $result
            ]);
            
        } catch (ValidationException $e) {
            $errors = $e->getValidationErrors();
        } catch (QuotaExceededException $e) {
            $errors['message'] = 'ERROR: You have exceeded your quota allocation for the day';
        } catch (RateLimitExceededException $e) {
            $errors['message'] = 'ERROR: Rate limit exceeded. Throttle your requests.';
        } catch (AuthenticationException $e) {
            $errors = ['message' => $e->getMessage()];
        } catch (Exception $e) {
            $errors = ['message' => "API Request Failed with error {$e->getMessage()}"];
        }
        return view('chart')->with('result',$result);
    }

    public static function getclient()
    {
        $psr17Factory = new Psr17Factory();
        $httpClient = new PsrHttpClient();

        $clientId = '8a571244-2489-4819-970c-7329ca455b0e';
        $clientSecret = 'n8gIcS9UraBsXOrWfpOdzCChzNzvyqmESPxqPatU';



        $authClient = new Oauth2($clientId, $clientSecret, $httpClient, $psr17Factory, $psr17Factory);

        return new Client($authClient, $httpClient, $psr17Factory);
    }
}
