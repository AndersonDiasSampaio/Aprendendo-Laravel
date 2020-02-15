@foreach($users as $user)
<p> O nome do usuário é: {{$user->name}} e seu email é {{$user->email}}</p>
@endforeach

