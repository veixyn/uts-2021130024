@extends('welcome')

@section('title', $transaction->notes)

@section('content')
    <article class="blog-post my-4">
        <p>Transaction amount:</p>
        <h1 class="display-5 fw-bold">Rp. {{ number_format($transaction->amount) }}</h1>
        <hr class="my-4">
        <p class="blog-post-meta">Type: <b>{{ $transaction->type }}</b></p>
        <p>Category: <b>{{ $transaction->category }}</b></p>
        <p>Notes:<br>{{ $transaction->notes }}</p>
        <br>
        <p>Transaction made on:<br><b>{{ $transaction->created_at }}</b></p>
    </article>
@endsection
