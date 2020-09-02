@extends('layouts.app')

@section('content')
<div class="container">
    <div class='row'>
    <div class='col-9 pt-5'>
    <div class='d-flex justify-content-between align-items-baseline'>
        <a type='button' class='btn btn-primary' role='button' style='margin-bottom:10px;width:200px' href='/p/create'>Create Invetory</a>
    </div>
    </div>
    </div>
    <div class="row">
        <table class='table'>
            <thead class='thead-dark'>
            <tr>
                <th scope='col'>Date</th>
                <th scope='col'>Serial Number</th>
                <th scope='col'>Description</th>
                <th scope='col'>Quantity</th>
                <th scope='col'>Unit Cost</th>
            </tr>
            </thead>
            <tbody>
                @foreach($user->posts as $post)
            <tr>
                    <td>{{$post->created_at}}</td>
                    <td>{{$post->serial_number}}</td>
                    <td>{{$post->caption}}</td>
                    <td>{{$post->quantity}}</td>
                    <td>Ksh.{{$post->cost}}</td>
                    
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
