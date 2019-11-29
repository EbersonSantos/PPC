@extends('layouts.app')

@section('titulo', 'Home')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">PROCESSOS</div>

                <div class="card-body">


                    <div class="card-deck d-flex justify-content-center">
                      <div class="conteudo-central d-flex justify-content-center">

                        <a href="#" style="text-decoration:none; color: inherit;">
                          <div class="card cartao text-center " style="border-radius: 30px">
                            <div class="card-body d-flex justify-content-center">
                              <h2 style="padding-top:15px">DISPONÍVEL PARA AJUSTES</h2>
                            </div>
                          </div>
                        </a>

                        <a href="#" style="text-decoration:none; color: inherit;">
                          <div class="card cartao text-center " style="border-radius: 30px">
                            <div class="card-body d-flex justify-content-center">
                              <h2 style="padding-top:15px">DISPONÍVEL PARA IMPRESSÃO</h2>
                            </div>
                          </div>
                        </a>
                      </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
