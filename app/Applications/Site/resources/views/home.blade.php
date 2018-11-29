@extends('site::base')

@section('body')
    <table class="table">
        <tr>
            <th>Nome</th>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{$user->name}}</td>
        </tr>
        @endforeach
    </table>

    {{ $users->links() }}
@endsection