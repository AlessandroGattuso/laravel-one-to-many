@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 my-5">
                <h4>Aggiungi un nuovo progetto</h4>
            </div>
            <div class="col-12">
                <form action="{{ route('admin.projects.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <div class="control-label">
                            Titolo
                        </div>
                        <input type="text" class="form-control" placeholder="titolo" name="title" id="title">
                        @error('title')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <div class="control-label">
                            Tipo
                        </div>
                        <select class="form-control" name="type_id" id="type_id">
                            <option value="">Seleziona tipo progetto</option>
                            @foreach ($types as $type)
                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                            @endforeach
                        </select>
                        @error('type_id')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group my-3">
                        <div class="control-label">
                            Descrizione
                        </div>
                        <textarea class="form-control" placeholder="descrizione progetto" name="description" id="description"></textarea>
                        @error('description')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Crea</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
