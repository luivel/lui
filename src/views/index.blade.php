@extends('lui::layout')

@section('lui::content')

    <div class="container">
        <div class="row">

            <div class="nav navbar">
                <a href="#" data-toggle="modal"
                    data-target="#addRoutesModal" data-backdrop="static">add Routes</a>
            </div>

            <div class="col-md-12">
                <table class="table table-condensed">
                    @foreach($routes as $route)
                        <tr>
                            <td>
                        <pre class="language-php">
                            <code class="language-php">
                            <code>Route::{{ $route->method_type }}(&#39;{{ $route->as }}&#39;, [
                                &#39;as&#39; => &#39;{{ $route->as }}&#39;,
                                &#39;uses&#39; => &#39;{{ $route->controller }}<span>@</span>{{ $route->action }}&#39;
                            ]);</code>
                            </code>
                        </pre>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@stop

@include("lui::includes.add_routes_form")