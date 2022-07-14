<x-header/>



<div class="container">

    <h1 class="mt-3 text-center">Todos-List-Laravel</h1>
    <form action="/todoedit" method="post">
        @csrf
       
        <input type="hidden" name="id" id="id" value="{{$todo["id"]}}">
        <div class="my-3">
            <label for="title" class="form-label">Enter Title</label>
            <input id="title" type="text" value="{{ $todo["title"]}}" name="title" class="form-control">
            <span style="color:red;">
                @error('title')
                    {{ $message }}
                @enderror
            </span>
        </div>
        <div class="mb-3">
            <label for="des" class="form-label">Enter Description</label>
            <textarea id="des" class="form-control" name="des" rows="3">{{$todo['des']}}</textarea>
            <span style="color:red;">
                @error('des')
                    {{ $message }}
                @enderror
            </span>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>


<x-footer/>
