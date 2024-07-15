<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ProjectController extends Controller
{
    public function index(){
        return view('users.index');
    }
    public function create(){
        return view('users.create');
    }
    public function store(request $request){
        return $request->all();
    }
    public function show(string $id){
        $data['id']= $id;
        return view('user.show', $data);
    }
    public function edit(string $id){
        $data['id']= $id;
        return view('user.edit', $data);
    }
    public function update(request $request){
       return $request-all();
    }
    public function delete(string $id){
        return 'delete data with th id of' . $id;
    }
}
