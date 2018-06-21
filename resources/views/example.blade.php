@extends('layouts.layout')

@section('content')
<h1>Hello From The Example Plugin</h1>
<p>
You've done it! Now start building something amazing!
</p>
@endsection

@section('js')
<script src="{{ mix('js/index.js', 'plugin-processmaker-example') }}"></script>
@endsection