<?php

namespace App\Controllers;

class HomeController extends BaseController

{
    // public function __construct()
    //{   
    //    $db      = \Config\Database::connect();
    //    $builder = $db->table('sepatu');
    //}

    public function index()
    {
        // $data = [
        //    'item' => $query = $this->builder->get()
        //];
        $data = [
            'item' =>
            [
                [
                    'nama' => 'Iphone 7|64GB',
                    'harga' => 'Rp.1.850.000',
                    'img' => '1.jpg'
                ],
                [
                    'nama' => 'Iphone 8|64GB',
                    'harga' => 'Rp.3.150.000',
                    'img' => '2.jpg'
                ],
                [
                    'nama' => 'Iphone X|64GB',
                    'harga' => 'Rp.7.150.000',
                    'img' => '3.jpg'
                ],
                [
                    'nama' => 'Iphone Xr|64GB',
                    'harga' => 'Rp.4.349.000',
                    'img' => '4.jpg'
                ],
                [
                    'nama' => 'Iphone 11|64GB',
                    'harga' => 'Rp.9.390.000',
                    'img' => '5.jpg'
                ],
                [
                    'nama' => 'Iphone 11promax|64GB',
                    'harga' => 'Rp.11.700.000',
                    'img' => '6.jpg'
                ],
                [
                    'nama' => 'Iphone 12|64GB',
                    'harga' => 'Rp.10.990.000',
                    'img' => '7.jpg'
                ],
                [
                    'nama' => 'Iphone 12 Promax|516GB',
                    'harga' => 'Rp22.799.000.',
                    'img' => '8.jpg'
                ],


            ],

        ];

        return view('home', $data);
    }
    public function about()
    {
        return view('about');
    }
}
