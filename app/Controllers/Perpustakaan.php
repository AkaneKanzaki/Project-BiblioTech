<?php
namespace App\Controllers;
use CodeIgniter\Controller;
class Perpustakaan extends Controller
{
    public function index()
    {
        echo view('Layouts/header');
        echo view('Layouts/footer');
    }
}