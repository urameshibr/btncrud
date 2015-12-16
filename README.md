# BtnCrud
#### (Laravel 5.1)

Este pacote tem a finalidade de criar facilmente um botão de crud usando um helper.

Por padrão, os nomes do botões utilizados são:
* Ver, Novo, Editar, Excluir, Salvar, Salvar (submit)

Objetivo: Padronizar os botões do sistema/aplicação, fazendo com que a manutenção da view seja mais rápida.

#### Instalação

Para instalar é preciso adicionar aocomposer.json do projetoas seguintes informações:
```
"require": {
        "lucasrodrigues/btncrud":"dev-master",
}

"repositories":[
        {
            "type": "vcs",
            "url": "https://github.com/LucasRodriguesBR/btncrud"
        }
]
```
E seguir com o comando `composer dump` e `composer install`.

Ao instalar, é preciso configurar o Provider do pacote no arquivo *config/app.php* do seu projeto. 
Adicione a seguinte linha ao array de Providers:
```
'providers' => [
        \LucasRodrigues\BtnCrud\Providers\BtnCrudServiceProvider::class,
],
```
Importante ressaltar que o pacote irá gerar um HTML usando classes do Twitter Bootstrap 3 e Font-Awesome, sendo esses 2 os requisitos.

#### Como funciona?
O helper utiliza, inicialmente, 3 parâmetros:

1. Ação do botão

2. Rota (nomeada)

3. ID do objeto (somente para "ver", "editar" e "excluir")

`{!! btncrud(`**$acao**`,`**$rota**`,`**$id**`) !!}`

**Notas:**

- Ainda não é possivel passar URL, apenas rotas.

- O terceiro parâmetro, $id, se refere á **collection/array que vem do controller**.

#### Como usar?
Na view, para chamar um botão é preciso usar o blade `{!!  !!}`. 

Para criar um botão de **cadastro** (por exemplo, de clientes):

`{!! btncrud('novo', 'cliente.create') !!}`

Para criar um botão de **edição** (por exemplo, de clientes):

`{!! btncrud('editar', 'cliente.edit', $cliente->id) !!}`

Para criar um botão de **exclusão** (por exemplo, de clientes):

`{!! btncrud('excluir', 'cliente.destroy', $cliente->id) !!}`

Para criar um botão de **mostrar** (por exemplo, de clientes):

`{!! btncrud('ver', 'cliente.show', $cliente->id) !!}`

Para criar um botão de **salvar** (por exemplo, de clientes):

`{!! btncrud('salvar', 'cliente.store') !!}`

Para criar um botão *submit* (por exemplo, de clientes), adicione o seguinte código:

`{!! btncrud('submit',null) !!}`
