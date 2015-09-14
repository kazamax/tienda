@if (count($errors) > 0)
    <div style="border-radius:6px;border: 1px solid #000000;"class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif