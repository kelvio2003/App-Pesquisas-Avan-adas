<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuariosController extends Controller
{
    public function index(){

return view('welcome');
    }

    public function cadastrar(){

        return view('cadastrar');


            }

            public function usuarios(){

$pesquisar= request('pesquisar');

if($pesquisar){
    $dataInicio = request('dataInicio');
    $dataFim = request('dataFim');
    
    $usuarios = Usuario::where('nome', 'like', '%' . $pesquisar . '%')
                      ->whereBetween('data_emissao', [$dataInicio, $dataFim])
                      ->get();
    return view('usuarios',['usuarios'=>$usuarios,'pesquisar'=>$pesquisar])->with('sucesso','Bunscando por:'.$pesquisar);

  
}else{

    $usuarios= Usuario::all();

    return view('usuarios',['usuarios'=>$usuarios]);
}

                         
        
                    }

                    
            public function cadastrados(Request $request){


                        $usuarios= new Usuario;

                        $usuarios->nome=$request->nome;
                        $usuarios->residencia=$request->residencia;
                        $usuarios->provincia=$request->provincia;
                        $usuarios->identidade=$request->identidade;
                        $usuarios->data_emissao=$request->data_emissao;
                        $usuarios->data_nascimento=$request->data_nascimento;
                        $usuarios->data_validade=$request->data_validade;
                        $usuarios->sexo=$request->sexo;
                        $usuarios->nome_mae=$request->nome_mae;
                        $usuarios->nome_pai=$request->nome_pai;
                        $usuarios->altura=$request->altura;
                        $usuarios->estado_civil=$request->estado_civil;
                        $usuarios->naturalidade=$request->naturalidade;

                        $usuarios->save();

                        return redirect('/')->with('sms','Novo Cidadão adicionado com sucesso');
                    }





public function deletar($id){


    $usuarios= Usuario::findOrFail($id)->delete();

    return view('welcome')->with('Deleta',' Cidadão Deletado com sucesso');;

}



}
