<h2>Listagem de usuários:</h2>

@foreach ($users as $user)
    {{$user ->name}} <br>
@endforeach