<h1>This is simple form for adding something</h1>

<a href="{{ url('/') }}">Back to home</a><br><br><br>



@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<br><br>

<form method="POST" action="{{ route('stu.store') }}">
    @csrf
    <input type="text" name="Name" placeholder="Enter Your Name"><br>
    <input type="text" name="Phone" placeholder="Enter Your Phone"><br>
    <button type="submit">Submit</button>
</form>
