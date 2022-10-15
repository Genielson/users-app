@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                            <table class="table table-striped mb-5">


                                    <tr>
                                        <td> Teste 1 </td>
                                        <td class="col-md-1"> <a href="#" class="btn btn-success"> Editar </a></td>
                                        <td class="col-md-1"> <form method="post" action="#" >
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" type="submit">
                                                    Deletar
                                                </button>
                                            </form>
                                        </td>
                                    </tr>

                                <tr>
                                    <td> Teste 1 </td>
                                    <td class="col-md-1"> <a href="{{route('edit-user')}}" class="btn btn-success"> Editar </a></td>
                                    <td class="col-md-1"> <form method="post" action="#" >
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit">
                                                Deletar
                                            </button>
                                        </form>
                                    </td>
                                </tr>

                                <tr>
                                    <td> Teste 1 </td>
                                    <td class="col-md-1"> <a href="#" class="btn btn-success"> Editar </a></td>
                                    <td class="col-md-1"> <form method="post" action="#" >
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit">
                                                Deletar
                                            </button>
                                        </form>
                                    </td>
                                </tr>


                            </table>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
