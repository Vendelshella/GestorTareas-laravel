@if ($message = Session::get('success'))
    <div>
        <p style="color: green">{{ $message }}</p>
    </div>
@endif