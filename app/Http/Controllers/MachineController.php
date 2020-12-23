<?php

namespace App\Http\Controllers;

use App\Models\Maquina;
use Illuminate\Http\Request;

class MachineController extends Controller
{
    public static function pingarEndereço(string $endereco)
    {
        $resposta = false;

        $cmd = shell_exec("ping -c 1 -w 1 $endereco");
        // $cmd = shell_exec("ping /n 1 $endereco");

        /*
        * Saída do comando ping quando a máquina existe:
        * 1 packets transmitted, 0 received, 100% packet loss, time 0ms
        *
        * Saída quando não existe:
        * ping: PMG34INFLB20331.pucminas.net: Nome ou serviço desconhecido
        */

        $dati_mount = explode(",", $cmd); // split por vírgula ,

        //echo print_r($dati_mount);

        $out = null;

        if (sizeof($dati_mount) > 1){ // Caso haja mais de uma string no split, a máquina existe

            $resposta = true;

            /*
            if (preg_match("/1/", $dati_mount[1], $out))
            {

                $cmd = shell_exec("query user /server:$endereco");

                $dados = explode(",", $cmd); // split por vírgula ,

            // print_r($cmd);

                $out = null;

                if (sizeof($dados) > 0){ // Caso haja mais de uma string no split, a máquina existe

                // echo "Esta verificando se tem alguem conectado";

                    if (preg_match("/Ativo/i", $dados[0], $out))
                    {
                        $resposta = false;
                        //echo "TEM ALGUEM LOGADO";
                    }
                    else {
                        $resposta = true;
                    // echo "TEM ALGUEM LOGADO MAS DESATIVO";
                    }
                }
                else{
                    $resposta = true;
                    //echo "NÃO TEM NINGUEM LOGADO";
                    echo "Disponível";
                }
            }*/

        }
        else{
            $resposta = null;
            //echo "Nao pingou";
        }

        return $resposta;
    }

    public static function listarMaquinas(){
        $maquinas = Maquina::$maquinas;

        return view('maquinas')
            ->with(compact('maquinas'));
    }

    public static function pingarTodasAsMaquinas()
    {           
        $maquinas = Maquina::$maquinas;

        foreach ($maquinas as &$maquina)
        {
            $endereço = $maquina["ip"];
            // cria um par no arranjo onde a chave é o id da máquina e o dado é a própria máquina.
            $maquina["disponivel"] = static::pingarEndereço($endereço);
        }

        return $maquinas;
    }

}
