@extends('layouts.app')

@section('main-content')
<section  class="form-container container w-50 mx-auto">
    <div class="row justify-content-center">
        <h3 class="text-center p-3">Create a new comic</h3>
        {{-- da inserire per validation --}}
        {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif --}}
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Name of the comic book: </label>
                <input type="text" name="title" id="title" class="form-control w-50">
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Image url:</label>
                <input type="text" name="thumb" id="thumb" class="form-control w-50">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description of the comic book:</label>
                <input type="text" name="description" id="description" class="form-control w-50">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price: </label>
                <input type="text" name="price" id="price" class="form-control w-50">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Series: </label>
                <input type="text" name="series" id="series" class="form-control w-50">
            </div>
            <button type="submit" class="btn btn-primary mt-3 mb-4">Add a new comic</button>
        </form>
    </div>

</section>    
@endsection