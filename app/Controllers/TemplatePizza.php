<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplatePizza extends Controller
{
    /**
     * Return the Pizzas
     */
    public function pizzas()
    {
        // Initialize the return variable
        $content = '';

        // Get the pizzas
        $pizzas = get_field('pizzas');
        if(is_array($pizzas)) {
            foreach($pizzas as $item) {
                $content .= \App\template('partials.pizzas', [
                    'name'        => $item['pizza_name'],
                    'image'       => $item['pizza_image'],
                    'vegetarian'  => $item['pizza_vegetarian']
                ]);
            }
        }
        return $content;
    }
}
