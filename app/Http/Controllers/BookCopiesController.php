<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BookCopiesController extends Controller
{
    public function create(Request $request)
    {
        $data = $request->json()->all();
        $sql = "insert into book_copies (book_id, book_code)
                  values(?,?)";
        $parameters = 
        [$data['book_id'],
         $data['book_code']];
        $response = DB::select($sql, $parameters);
        return $response;
    }

    public function update(Request $request)
    {

        $data = $request->json()->all();
        $sql = "update book_copies set 
        book_id = ?,
        book_code=?
        where 
        id =?";
                
        $parameters = 
        [$data['book_id'],
         $data['book_code'],
         $data['id']];
        $response = DB::select($sql, $parameters);
        return $response;
    }

    public function delete(Request $request)
    {
        $data = $request->json()->all();
        $sql = "delete from book_copies where id = ?";
                
        $parameters = [$data['id']];
        $response = DB::select($sql, $parameters);
        return $response;
    }

    public function getAll(Request $request)
    {
        $data = $request->json()->all();
        $sql = "select * from book_copies";
        $response = DB::select($sql);
        return $response;

    }
    
}