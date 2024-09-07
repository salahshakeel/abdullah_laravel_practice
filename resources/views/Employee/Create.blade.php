<html>
    <head>
        <title>Create</title>
    </head>

    <body>
        <h1>Create</h1>

        @if(Session::has('success'))
            <p style="color: green;">{{ Session::get('success') }}</p>
        @endif


            <form action="{{ route('employees.store') }}" method="post">
                @csrf
            <div>
            <label >Name</label>
            <input type="text"  placeholder="Enter name" name="name">
            @error ('name') <p style="color: red;">{{ $message }}</p> @enderror
        </div>
        <div >
            <label >Email</label>
            <input type="email"  placeholder="Enter email" name="email">
            @error ('email') <p style="color: red;">{{ $message }}</p> @enderror
        </div>
        <div >
            <label >Phone</label>
            <input type="text"  placeholder="Enter phone" name="phone">
            @error ('phone') <p style="color: red;">{{ $message }}</p> @enderror
        </div>
        <div >
            <label >Address</label>
            <textarea type="text" name="address"></textarea>
            @error ('address') <p style="color: red;">{{ $message }}</p> @enderror
        </div>
    
        <button type="submit">Submit</button>
        </form>
    </body>

</html>