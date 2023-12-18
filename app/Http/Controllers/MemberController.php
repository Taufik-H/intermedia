<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    function index () {
        $members = [
            [
                'name' => 'John Doe',
                'position' => 'KETUA',
                'description' => 'deskripsi',
                'image' => 'https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=900&h=900&q=80'
                
            ],
            [
                'name' => 'John Doe',
                'position' => 'KETUA',
                'description' => 'deskripsi',
                'image' => 'https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=900&h=900&q=80'
                
            ],
            [
                'name' => 'John Doe',
                'position' => 'KETUA',
                'description' => 'deskripsi',
                'image' => 'https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=900&h=900&q=80'
                
            ],
        ];
        return view('app', compact('members'));
    }}
