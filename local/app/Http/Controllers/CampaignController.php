<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class CampaignController extends Controller
{
    protected $campaign;
    protected $accounts;
    
    public function __construct()
    {
        $this->campaign = new CampaignControllerClass();
        $this->accounts = new AccountControllerClass();
    }

  public function campaign()
  { 
      $vista = View::make('campaign');
      return $vista;  
  } 

  public function startHere()
  { 
      $vista = View::make('campaign-start-here');
      return $vista;  
  } 

  public function rewards()
  { 
      $vista = View::make('campaign-rewards');
      return $vista;  
  } 

  public function index()
  {
      $response = $this->campaign->index();
      $data = $response->getData(true); // Obtener datos del JSON

      if ($response->getStatusCode() !== 200) {
          return redirect()->back()->withErrors($data['message'] ?? []);
      } 

      $accountsVerified = $this->accounts->indexVerified();
      $verified = $accountsVerified->getData(true); // Obtener datos del JSON
      
      if ($accountsVerified->getStatusCode() == 404) {
          return redirect('verifyAccount')->withErrors($verified['message'] ?? []);
      }  

      if ($accountsVerified->getStatusCode() != 200) {
          return redirect()->back()->withErrors($verified['message'] ?? []);
      }

      $vista = View::make('campaigns')->with('campaigns', $data['data'] ?? []);
      return $vista;  
  }


    public function show($id)
    {
      $response = $this->campaign->index($id);
      $data = $response->getData(true); // Obtener datos del JSON 

      if ($response->getStatusCode() !== 200) {
          session()->flash('errors', $data['message'] ?? []);
      } 

      $vista = View::make('campaign')->with([
          'campaign' => $data['data'] ?? []
      ]);
      return $vista;
    }
}


