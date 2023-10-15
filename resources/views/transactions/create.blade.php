@extends('welcome')

@section('title', 'Add New Article')

@section('content')
    <div class="mt-4 p-5 bg-black text-white rounded">
        <h1>Add New Article</h1>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger mt-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row my-5">
        <div class="col-12 px-5">
            <form action="{{ route('transactions.store') }}" method="POST">
                @csrf
                <div class="mb-3 col-md-12 col-sm-12">
                    <label for="title" class="form-label">Amount</label>
                    <input type="number" class="form-control" id="amount" name="amount" value="{{ old('amount') }}">
                </div>
                <div class="mb-3 col-md-12 col-sm-12">
                    <label for="type" class="form-label">Type</label><br>
                    <select name="type" id="type" class="form-select form-select-lg mb-3">
                        <option value="Income">Income</option>
                        <option value="Expense">Expense</option>
                    </select>
                </div>
                <div class="mb-3 col-md-12 col-sm-12">
                    <label for="category" class="form-label">Category</label><br>
                    <select name="category" id="category" class="form-select form-select-lg mb-3">
                        <option value="Uncategorized">Uncategorized</option>
                        {{-- <option value="Sci-fi">Science Fiction</option>
                        <option value="Novel">Novel</option>
                        <option value="History">History</option>
                        <option value="Biography">Biography</option>
                        <option value="Romance">Romance</option>
                        <option value="Education">Education</option>
                        <option value="Culinary">Culinary</option>
                        <option value="Comic">Comic</option> --}}
                    </select>
                </div>
                <div class="mb-3 col-md-12 col-sm-12">
                    <label for="title" class="form-label">Notes</label>
                    <input type="text" class="form-control" id="notes" name="notes" value="{{ old('notes') }}">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Save</button>
            </form>
        </div>
    </div>
@endsection
