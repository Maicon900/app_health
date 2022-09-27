@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body text-center">
                          <div class="mt-3 mb-4">
                            <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png"
                              class="rounded-circle img-fluid" style="width: 100px;" />
                          </div>
                          <h4 class="mb-2">{{Auth::user()->name}}</h4>
                          <div class="d-flex justify-content-between text-center mt-5 mb-2">
                            <div>
                              <p class="mb-2 h5">{{$calories}}</p>
                              <p class="text-muted mb-0">Calorias Hoje</p>
                            </div>
                            <div class="px-3">
                              <p class="mb-2 h5">{{Auth::user()->level}}</p>
                              <p class="text-muted mb-0">Nível</p>
                            </div>
                            <div>
                              <p class="mb-2 h5">{{Auth::user()->xp}}</p>
                              <p class="text-muted mb-0">Experiência</p>
                            </div>
                          </div>
                          <div class="progress">
                            <div
                              class="progress-bar progress-bar-striped progress-bar-animated"
                              role="progressbar"
                              aria-valuenow="75"
                              aria-valuemin="0"
                              aria-valuemax="100"
                              style="width: 1%;"
                            ></div>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form method="post" class="card"">
                @csrf
                <div class="card-header">{{ __('Insira a sua alimentação de hoje:') }}</div>
                <div class="input-group my-1">
                    <input type="text" class="form-control mx-1 {{$errors->has('nome') ? 'is-invalid' : ''}}" placeholder="{{ $errors->has('nome') ? $errors->first('nome') : 'Nome' }}" name="nome" aria-label="Username" aria-describedby="basic-addon1">

                  </div>
                  <div class="input-group mb-1">
                    <input name="porcao" type="number" class="form-control mx-1" id="basic-url" aria-describedby="basic-addon3" placeholder="Porção">
                    <input name="valor_energetico" type="number" class="form-control mx-1 {{$errors->has('valor_energetico') ? 'is-invalid' : ''}}" aria-label="Amount (to the nearest dollar)" placeholder="{{ $errors->has('valor_energetico') ? $errors->first('valor_energetico') : 'Valor energético' }}">
                    
                    <input name="carboidratos" type="number" class="form-control mx-1" placeholder="Carboidratos" aria-label="Username">
                </div>
                <div class="input-group mb-1">
                      <input name="proteinas" type="number" class="form-control mx-1" placeholder="Proteínas" aria-label="Username">
                      <input name="gorduras_totais" type="number" class="form-control mx-1" placeholder="Gorduras totais" aria-label="Username">
                      <input name="fibras_alimentares" type="number" class="form-control mx-1" placeholder="Fibras" aria-label="Username">
                  </div>
                <div class="input-group mb-1">
                      <input name="gorduras_trans" type="number" class="form-control mx-1" placeholder="Gorduras saturadas" aria-label="Username">
                      <input name="sodio" type="number" class="form-control mx-1" placeholder="Sódio" aria-label="Username">
                      <button class="btn btn-primary mx-1" type="submit">Adicionar</button>
                  </div>
                </form>
                <div>
                </div>
                <table class="table mt-3">
                    <thead class='table-dark'>
                      <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Porção</th>
                        <th scope="col">Valor E.</th>
                        <th scope="col">Carboidratos</th>
                        <th scope="col">Proteínas</th>
                        <th scope="col">Gorduras T.</th>
                        <th scope="col">Gorduras S.</th>
                        <th scope="col">Fibras</th>
                        <th scope="col">Sódio</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($food as $foods)
                    <tr>
                        <th scope="row">{{$foods->nome}}</th>
                        <td>{{$foods->porcao}}</td>
                        <td>{{$foods->valor_energetico}}</td>
                        <td>{{$foods->carboidratos}}</td>
                        <td>{{$foods->proteinas}}</td>
                        <td>{{$foods->gorduras_totais}}</td>
                        <td>{{$foods->gorduras_trans}}</td>
                        <td>{{$foods->fibras_alimentares}}</td>
                        <td>{{$foods->sodio}}</td>
                    </tr>
                    @endforeach 
                    {{-- {{$food}} --}}
                    </tbody>
                  </table>
        </div>
    </div>
</div>
<script>
    if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
@endsection
