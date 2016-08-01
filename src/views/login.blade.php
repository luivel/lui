<form action="{{ route('lui-login') }}" method="POST">
    {{ csrf_field() }}
    <input type="text" name="username"/>
    <input type="password" name="password"/>
    <input type="submit" value="Login"/>
</form>