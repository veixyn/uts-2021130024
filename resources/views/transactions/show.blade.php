@extends('welcome')

@section('title', $transaction->notes)

@section('content')
    <article class="blog-post my-4">
        <h1 class="display-5 fw-bold">{{ $transaction->amount }}</h1>
        <p class="blog-post-meta">{{ $transaction->type }}</p>
        <p>{{ $transaction->category }}</p>
        <p>{{ $transaction->notes }}</p>
        <p>{{ $transaction->created_at }}</p>
    </article>
@endsection
