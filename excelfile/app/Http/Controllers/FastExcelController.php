<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Rap2hpoutre\FastExcel\FastExcel; // The FastExcel class

class FastExcelController extends Controller
{
    public function index(){
        /* Using DB
        // Load users
        $users = User::all();
        
        // Export all users
        (new FastExcel($users))->export('file.xlsx');
        */

        // Export a Model or a Collection:
        $list = collect([
            ['id' => 1, 'name' => 'Alesandro Diogo'],
            ['id' => 2, 'name' => 'Alcides Diogo'],
            ['id' => 3, 'name' => 'Berner Diogo']
        ]);

        (new FastExcel($list))->export('file.xlsx'); 
        
       // return (new FastExcel($list))->download('file.xlsx'); Download (from a controller method):

                                /* Import */
        //$collection = (new FastExcel)->configureCsv(';', '#', 'gbk')->import('file.xlsx');

        //Import and insert to database:

    /*$users = (new FastExcel)->import('file.xlsx', function ($line) {
    return User::create([
        'name' => $line['Name'],
        'email' => $line['Email']
    ]);
    });*/

    }
}
