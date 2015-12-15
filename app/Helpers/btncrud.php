<?php


function btncrud($acao,$rota,$id = null){

    $path = "btncrud::partials.btn.$acao";
    $dados = [
        'acao' => strtolower($acao),
        'rota' => strtolower($rota),
        'id'   => $id
    ];

    return view($path, $dados)->render();
}











/*function btncrud($acao,$rota, $id = null){

    $btnNovo    = __DIR__ . '\btn\novo.blade.php';
    $btnEditar  = __DIR__ . '\btn\editar.blade.php';
    $btnSalvar  = __DIR__ . '\btn\salvar.blade.php';
    $btnExcluir = __DIR__ . '\btn\excluir.blade.php';
    $btnVer     = __DIR__ . '\btn\ver.blade.php';
    $btnSubmit  = __DIR__ . '\btn\submit.blade.php';

    $dados = [
        'acao' => strtolower($acao),
        'rota' => strtolower($rota),
        'id'   => $id
    ];

    if(isset($dados)){
        if($dados['acao'] == 'novo')

            return view()->file($btnNovo, $dados);

        if($dados['acao'] == 'editar')

            return view()->file($btnEditar, $dados);

        if($dados['acao'] == 'salvar')

            return view()->file($btnSalvar, $dados);

        if($dados['acao'] == 'excluir')

            return view()->file($btnExcluir, $dados);

        if($dados['acao'] == 'ver')

            return view()->file($btnVer, $dados);

        if($dados['acao'] == 'submit')
            return view()->file($btnSubmit, $dados);

    }
}*/