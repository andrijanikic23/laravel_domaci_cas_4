
@extends("layout")

@section("page_title")
    Homepage
@endsection

@section("page_content")

    @if($current_hour >= 0 && $current_hour <= 12)
        <p>Good morning!<p>
    @else
        <p>Good afternoon!</p>
    @endif

    @foreach($products as $product)
       <p>{{ $product->name }}</p> 
    @endforeach


    <p>Current hour is {{ $current_hour }}</p>
    <p>Current time is {{ $current_time }}</p>
@endsection



