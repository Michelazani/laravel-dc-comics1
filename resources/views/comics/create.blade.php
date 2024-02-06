@extends('layouts.app')

@section('main-content')
<section  class="form-container container">
    <div class="row justify-content-center">
        <h3>Create a new comic</h3>
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Name of the comic book: </label>
                <input type="text" name="title" id="title" class="form-control">
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Image url:</label>
                <input type="text" name="thumb" id="thumb" class="form-control">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description of the comic book:</label>
                <input type="text" name="description" id="description" class="form-control">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price: </label>
                <input type="text" name="price" id="price" class="form-control">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Series: </label>
                <input type="text" name="series" id="series" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Add a new comic</button>
        </form>
    </div>

</section>    
@endsection