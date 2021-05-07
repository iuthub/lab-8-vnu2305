@extends('layouts.master')

@section('content')
        @if($id==1)
        <h1 class="quote">Learning Laravel</h1>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus autem blanditiis deserunt dignissimos dolorum ducimus hic, illo ipsum iusto magni perferendis praesentium, provident quaerat, rem repellendus reprehenderit ullam ut voluptate.
    </p>
        @endif
        @if($id==2)
        <h1 class="quote">The next Steps</h1>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate debitis delectus dicta ducimus earum error facere hic ipsum, iure labore magni molestias nam obcaecati quo ratione sed sit, unde voluptas.
    </p>
        @endif
        @if($id==3)
        <h1 class="quote">Laravel 5.3</h1>
         <p>
           Lorem ipsum dolor sit amet, consectetur adipisicing elit. A commodi doloribus, eius fugiat, itaque minima minus natus nemo numquam odit qui quo repudiandae sunt velit veritatis? Alias doloremque ipsa sapiente!
        </p>
        @endif
@endsection
