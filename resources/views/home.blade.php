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

                        @if(session('message-success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('message-success') }}
                            </div>
                        @endif

                            <table class="table table-striped mb-5">


                                @foreach($allUsers as $user)
                                    <tr>
                                        <td> {{$user['name']}} </td>
                                        <td> {{$user['email']}} </td>
                                        <td class="col-md-1"> <a href="{{route('edit-user',['id'=>$user['id']])}}" class="btn btn-success"> Edit </a></td>
                                        <td class="col-md-1"> <form method="post" action="{{route('delete-user',['id'=>$user['id']])}}" >
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" type="submit">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach


                            </table>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
