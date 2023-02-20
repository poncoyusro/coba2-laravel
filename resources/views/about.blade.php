@extends('layouts.main')

@section('container')
<h1>Halaman About</h1>
<h3>{{ $name }}</h3>
<p><?php echo $email; ?></p>
<img src="img/<?php echo $image; ?>" alt="<?php echo $name; ?>" height="200" width=200"">
@endsection
    
