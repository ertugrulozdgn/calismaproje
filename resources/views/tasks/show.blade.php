@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><b>{{ $task->baslik }}</b></div>

                    <div class="card-body">
                        {{ $task->icerik }}

                    </div>
                </div>
                <td>
                    <form action="{{ action('TaskController@destroy',[$task->id]) }}" method="post">
                        <a href="{{ action('TaskController@edit', [$task->id]) }}" class="btn btn-primary">Düzenle</a>
                        -
                        <button type="submit" class="btn btn-danger">Sil</button>
                        @method('delete')
                        @csrf
                    </form>
                </td>

            </div>
        </div>
    </div>
@endsection
