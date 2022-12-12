<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class BusinessController extends Controller
{
    public function index(){
        //Pega todos os registros:
        $businesses = Business::paginate(10);

        //Pega o registro de um determinado id:
        //$business = Business::find(1);
        //pega todas as ocorrências de uma determinada condicão:
        //$businessWhere = Business::where('name','Rutherford-McLaughlin')->get();
        //pega a primeira corrência de uma determinada condicão:
        //$businessWhereFirst = Business::where('name','Rutherford-McLaughlin')->first();
        //debug para inspecionar os registros na view:
        //dd($business,$businessWhere,$businessWhereFirst,$businesses);

        //dd($businesses ->toArray());
        return view('business',compact('businesses'));

        /*$businessAdd= Business::create([
            'name'  => 'Jhon  Snow',
            'email' => 'jhon@snow.com',
            'adress' => 'Rua  A quadra B'
        ]);*/

        #dd($businesses);

        #Aula 17 - Eloquent(update):
       /* $business = Business::find(4);
        $business -> name = "Alexandro";
        $business -> email = "alexandro@laravel9.com";
        $business -> adress = "Rua B quadra C";
        //$business -> save();*/

        #Usando eloquent fill:

        $input = [
            'name' => 'John',
            'email' => 'abcd@efgh.com' 
        ];
 
        /*$business -> fill($input);
        $business -> save();
        #dd($business);*/

        #Aula 18 - Eloquent(delete):

        /*$business = Business::find(4);
        //$business -> delete();
        dd($business );
        # debug to array method:
        dd($business ->toArray());*/

       # return view('business');
    }

    public function store(Request $request){
        $input = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'adress' => 'string',
            'logo'  => 'file'
        ]);

        #recebe o arquivo:
        $file = $input['logo'];
        #salva o arquivo e recebe o path:
        $path = $file ->store('logos','public');
        #armazena o path da logo no input:
        $input['logo'] = $path;

        //dd($path);
        $business = Business::create($input);
        //dd($business);
        return Redirect::route('businesses.index');
    }
}
