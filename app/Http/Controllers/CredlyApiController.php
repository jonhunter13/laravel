<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use GuzzleHttp\Client;

class CredlyApiController extends Controller
{
    private $API_KEY = "b9417cd9925025d34650d783548f1c74";
    private $SECRET = "bxpwpf2INVs6ISl2eCiJJ2msUou0wd3w5Sw/qIFcEgI8bMafNxWQ+YUGhKv3yivtjSEv2KcE7Afr1VmRLT3E9F3FhBh++ULsP2axwfMcq3j389+dCbO/NSrpSgcPs+apC4YyZrp51osOAPTsozQslKLidFM2Wothj1sG+hGfpEk=";

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = new Client();
        //request list of users
        $res = $client->request( "GET", "https://api.credly.com/v1.1/members", [
            'headers' => [
                'Accept'        => 'application/json',
                'X-Api-Key'     => $this->API_KEY,
                'X-Api-Secret'  => $this->SECRET
            ]
        ]);
        
        $data = json_decode($res->getBody()->getContents())->data;
        
        return view('welcome', compact('data'));
    }
    
    public function show($id){
        $client = new Client();
        $response = $client->request( "GET", "https://api.credly.com/v1.1/members/$id/badges", [
            'headers' => [
                'Accept'        => 'application/json',
                'X-Api-Key'     => $this->API_KEY,
                'X-Api-Secret'  => $this->SECRET
            ]
        ]);
        $contents = (string) $response->getBody();
        $member = json_decode($contents)->data[0]->member;
        $badges = json_decode($contents)->data;
        
        return view('user', compact('member', 'badges'));
    }
}
