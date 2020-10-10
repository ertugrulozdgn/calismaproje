@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Tasks</div>

                    <div class="card-body">
                        <form action="{{ action('TaskController@store')  }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="baslik" >Başlık</label>
                                <input  type="text" name="baslik" class="form-control">
                            </div>
                            <div>
                                <label for="icerik">İçerik</label>
                                <textarea name="icerik" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <div>
                                <button class="btn btn-success" type="submit">Kaydet</button>
                            </div>

                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
