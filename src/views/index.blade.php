@extends('lui::layout')

@section('lui::content')

    <div class="container">
        <div class="row">

            <form action="" class="form-group">
                <input type="text" name="type" placeholder="type" class="form-control">
                <input type="text" name="group " placeholder="group" class="form-control">
                <input type="text" name="url" placeholder="url" class="form-control">
                <input type="text" name="middleware" placeholder="middleware" class="form-control">
                <input type="text" name="controller" placeholder="controller" class="form-control">
                <input type="text" name="action" placeholder="action" class="form-control">
                <input type="text" name="as" placeholder="as" class="form-control">

            </form>
            <table>
                @foreach($routes as $route)
                    <td>
                        <pre class="language-php">
                            <code class="language-php">
                            <code>Route::{{ $route->type }}(&#39;{{ $route->as }}&#39;, [
                                &#39;as&#39; => &#39;{{ $route->as }}&#39;,
                                &#39;uses&#39; => &#39;{{ $route->controller }}<span>@</span>{{ $route->action }}&#39;
                            ]);</code>
                            </code>
                        </pre>
                    </td>
                @endforeach
            </table>
        </div>
    </div>
@stop