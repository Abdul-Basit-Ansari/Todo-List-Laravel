<x-header />
<div class="container">

    <h1 class="mt-3 text-center">Todos-List-Laravel</h1>
    <form action="/" method="post">
        @csrf
        <div class="my-3">
            <label for="title" class="form-label">Enter Title</label>
            <input id="title" type="text" name="title" class="form-control">
            <span style="color:red;">
                @error('title')
                    {{ $message }}
                @enderror
            </span>
        </div>
        <div class="mb-3">
            <label for="des" class="form-label">Enter Description</label>
            <textarea id="des" class="form-control" name="des" rows="3"></textarea>
            <span style="color:red;">
                @error('des')
                    {{ $message }}
                @enderror
            </span>
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
</div>








<table class="table table-striped table-inverse table-responsive container my-4">
    <thead class="thead-inverse">
        <tr>
            <th>Sno</th>
            <th>Title</th>
            <th>Description</th>
            <th>Time</th>
            <th>Oprations</th>
        </tr>
    </thead>
    <tbody>
        @php
            $len = count($todos);
            $i = 0;
        @endphp
        @foreach ($todos as $todo)
            @if ($i <= $len)
                @php
                    $i += 1;
                    $date = $todo['time'];
                @endphp
            @endif

            <tr>

                <td scope="row">{{ $i }}</td>
                <td style="display:none;">{{ $todo['id'] }}</td>
                <td>{{ $todo['title'] }}</td>
                <td>{{ $todo['des'] }}</td>
                <td>{{ date('h:i a -  d/M/Y', strtotime($date)) }}</td>
                <td>
                    <a class="btn btn-primary mx-1" href={{ 'edit/' . $todo['id'] }}>Edit</a>
                
                <a class="btn btn-danger mx-1" href={{ 'delete/' . $todo['id'] }}>Delete</a>
                </td>
            </tr>
        @endforeach

    </tbody>
</table>


<x-footer />
