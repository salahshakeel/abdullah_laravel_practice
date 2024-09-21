<html>
    <head>
        <title>Edit</title>
    </head>

    <body>
        <h1>Edit</h1>

        @if(Session::has('success'))
            <p style="color: green;">{{ Session::get('success') }}</p>
        @endif


            <form action="{{ route('employees.update', $employee->id) }}" method="post">
                @csrf
                @method('PUT')
            <div>
            <label >Name</label>
            <input type="text"  placeholder="Enter name" name="name" value="{{$employee->name}}">
            @error ('name') <p style="color: red;">{{ $message }}</p> @enderror
        </div>
        <div >
            <label >Email</label>
            <input type="email"  placeholder="Enter email" name="email" value="{{$employee->email}}">
            @error ('email') <p style="color: red;">{{ $message }}</p> @enderror
        </div>
        <div >
            <label >Phone</label>
            <input type="text"  placeholder="Enter phone" name="phone" value="{{$employee->phone}}">
            @error ('phone') <p style="color: red;">{{ $message }}</p> @enderror
        </div>
        <div >
            <label >Address</label>
            <textarea type="text" name="address">{{$employee->address}}</textarea>
            @error ('address') <p style="color: red;">{{ $message }}</p> @enderror
        </div>
    
        <button type="submit">Update</button>
        </form>
    </body>

</html>