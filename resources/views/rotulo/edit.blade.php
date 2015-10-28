@extends('layout.layout')
@section('head')
<style>
        .lista-card-square.mdl-card {
          height: 100%;
        }
        .lista-card-square > .mdl-card__title {
          color: #fff;
          height: 175px;
          background:
            url('http://icons.iconarchive.com/icons/pixelkit/gentle-edges/128/Tags-Flat-icon.png') bottom right 15% no-repeat #46B6AC;
        }
        .mdl-card
        {
            width:500px;
        }
        .mdl-textfield--floating-label{
            width:500px;
        }
        .erros{
            color:red;
        }
        </style>
@endsection
@section('content')
<div class="mdl-grid">
    <div class="mdl-cell mdl-cell--4-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
    <div class="mdl-cell mdl-cell--8-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
        <div class="lista-card-square mdl-card mdl-shadow--2dp">
            <div class="mdl-card__title mdl-card--expand">
                <h2 class="mdl-card__title-text">Edição de Rotulo</h2>
            </div>
            <div class="mdl-card__supporting-text">
                {!! Form::open(['url'=> "rotulo/$rotulo->id/edit", 'method'=> 'put', 'id'=> 'form']) !!}
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" required="required" type="text" id="name" name="name" value="{{$rotulo->name}}" />
                        <label class="mdl-textfield__label" for="name">Nome:</label>
                    </div>
                     
                     <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" required="required" type="color" id="cor" name="cor" value="{{$rotulo->cor}}" />
                        <label class="mdl-textfield__label" for="cor">Cor:</label>
                    </div>
                     
                    <div class="mdl-textfield mdl-js-textfield  mdl-textfield--floating-label">
                        <textarea class="mdl-textfield__input" type="text" rows= "5" cols="70" required="required"  id="descri" name="descri" >{{$rotulo->descri}}</textarea>
                        <label class="mdl-textfield__label" for="descri" >Descrição</label>
                    </div>
                      
                {!! Form::close() !!}
            </div>
            <div class="mdl-card__actions mdl-card--border" >
                <div id='btnSalvar'>
                   <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" id='salvar'>
                        Salvar
                    </a> 
                    
                </div>
            </div>
            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $erro)
                        <li>{{$erro }}</li>
                    @endforeach
                </ul>
            @endif
           
        </div>
    </div>
</div>
@endsection
@section('script')

<script type="text/javascript">

    document.getElementById("salvar").addEventListener("click",function(){
         document.getElementById("form").submit();
    });
   
</script>
@endsection