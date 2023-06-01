@if (count($error) > 0)
<div class="alert alert-danger">
    <ul>
        @foreach ($error->all() as error)
            <li>{!! $error !!}</li>
        endforeach
    </ul>
</div>
@endif