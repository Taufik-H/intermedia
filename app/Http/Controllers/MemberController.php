<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    function index () {
        $members = [
            [
                'name' => 'Henief Hidayatulloh',
                'position' => 'Ketua',
                'description' => 'deskripsi',
                'image' =>'/images/hanif.jpg'
                
            ],
            [
                'name' => 'Akmal ',
                'position' => 'Wakil Ketua',
                'description' => 'deskripsi',
                'image' => '/images/akmal.jpg'
                
            ],
            [
                'name' => 'Zuhriyatul Lubna',
                'position' => 'Sekertaris 1',
                'description' => 'deskripsi',
                'image' => '/images/lulu.jpg'
                
            ],
            [
                'name' => 'Rema Sekar Nuraini',
                'position' => 'Sekertaris 2',
                'description' => 'deskripsi',
                'image' => '/images/rema.jpg'
                
            ],
            [
                'name' => 'Ayu Lestari',
                'position' => 'Bendahara 1',
                'description' => 'deskripsi',
                'image' => '/images/ayu.png'
                
            ],
            [
                'name' => 'Nur Asysyifa Febrianti',
                'position' => 'Bendahara 2',
                'description' => 'deskripsi',
                'image' => '/images/sifa.jpg'
                
            ],
            [
                'name' => 'Agus Abdul Manan',
                'position' => 'Koordinator keilmuan',
                'description' => 'deskripsi',
                'image' => '/images/manan.JPG'
            ],
            [
                'name' => 'Taufik Hidayatulloh',
                'position' => 'Koordinator Programing',
                'description' => 'deskripsi',
                'image' => '/images/taufik.jpeg'
                
            ],
            [
                'name' => 'Rafik Akbar Sandi Asmara ',
                'position' => 'Koordinator Multimedia',
                'description' => 'deskripsi',
                'image' => '/images/rafik.jpg'
                
            ],
            [
                'name' => 'Rizki Nugroho ',
                'position' => 'Koordinator Networking Support',
                'description' => 'deskripsi',
                'image' => '/images/sinug.jpg'
                
            ],
            [
                'name' => 'Aksana Zachry Satria ',
                'position' => 'Koordinator Kaderisasi',
                'description' => 'deskripsi',
                'image' => '/images/aksana.JPG'
                
            ],
            [
                'name' => 'Widya Tri Purnomo ',
                'position' => 'Koordinator Content creator',
                'description' => 'deskripsi',
                'image' => '/images/widya.jpg'
                
            ],
            [
                'name' => 'Hanif Rizaqi ',
                'position' => 'Koordinator humas',
                'description' => 'deskripsi',
                'image' => '/images/hanifr.jpg'
                
            ],
        ];
        return view('app', compact('members'));
    }}
