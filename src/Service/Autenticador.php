<?php

namespace Alura\Banco\Service;
use Alura\Banco\Modelo\Funcionario\Diretor;

class Autenticador
{
    public function tentalogin(Diretor $diretor,string $senha)
    {
        if ($diretor->podeAutenticar($senha))
        {
            echo "Login com Sucesso!";
        }else{
            echo "Senha Incorreta.";
        }
    }
}