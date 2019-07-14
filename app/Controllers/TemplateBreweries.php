<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateBreweries extends Controller
{
    /**
     * Return the Breweries
     */
    public function breweries()
    {
        $breweries = [];
        $breweries = wp_remote_retrieve_body(wp_remote_get('https://api.openbrewerydb.org/breweries/?page=1&per_page=50'));
        $breweries = json_decode($breweries);

        if(! is_array($breweries) || empty($breweries)) {
            return false;
        }

        $content = '';

        foreach($breweries as $brewery) {
            $content .= \App\template('partials.breweries', [
                'name' => $brewery->name,
                'website' => $brewery->website_url,
            ]);
        }
        return $content;
    }
}
