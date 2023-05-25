<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container">
    <div class=row style="margin:20px;">
        <div class="col-12">
            <div class="card">
                <div class="card-headre">
<div class="card"> 
<div class="card">

    <div class="card-header">Edit Book</div>
        <div class="body">
            <form action="{{url('book/'.$book->id)}}" method="post">
            {!! csrf_field()!!}
            @method("Patch")
            <input type="hidden" name="id" id="id" value="{{$book->id}}"/>
            <label>Title</label><br/>
            <input type="text" name="title" id="title" value="{{$book->title}}" class="form-control"><br/>
            <label>pages</label><br/>
            <input type="text" name="pages" id="pages" value="{{$book->pages}}" class="form-control"><br/>
            <label>isbn</label><br/>
            <input type="text" name="isbn" id="isbn" value="{{$book->isbn}}" class="form-control"><br/>
            <label>Author</label><br/>
            <select name="author_id" id="author_id">
            @foreach($book->auth as $item) 
            <option value="{{$item->id}}">{{$item->Name}}</option>
             @endforeach
         </select></br>
            <input type="submit" value="Update" class="btn btn-success"><br/>
</form>
        </div>
</div>
</div>
</div>
</div>
</div>
</div>