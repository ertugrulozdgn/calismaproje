@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Tasks</div>

                    <div class="card-body">

                        <table class="table">
                            <tr>
                                <th>Baslık</th>
                                <th>Eylem</th>
                            </tr>
                            @foreach($tasks as $task)

                                    <tr>
                                        <td><a href="{{ action('TaskController@show',[$task->id]) }}" >{{ $task->baslik }}</a></td>
                                        <td>
                                            <form action="{{ action('TaskController@destroy',[$task->id]) }}" method="post">
                                            <a href="{{ action('TaskController@edit', [$task->id]) }}" class="btn btn-primary">Düzenle</a>
                                                |
                                                <button type="submit" class="btn btn-danger">Sil</button>
                                                @method('delete')
                                                @csrf
                                            </form>
                                        </td>
                                    </tr>

                            @endforeach
                        </table>
                    </div>
                </div>
                    <a href="{{ action('TaskController@create') }}" class="btn btn-success">Yeni Ekle</a>
            </div>
        </div>
    </div>

@endsection
