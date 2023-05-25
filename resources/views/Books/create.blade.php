<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container">
        <div class=row style="margin:20px;">
        <div class="col-12">
            <div class="card">
                <div class="card-headre">
<div class="card" style="margin:20px;">
<div class="card-header">Add new book</div>
<div class="card-body">
    <form action="{{url('book')}}" method="post" enctype="multiform/form-data">
        {!! csrf_field()!!}
        <label>Title</label></br>
        <input type="text" name="title" id="title" class="form-control"></br>
        <label>pages</label></br>
        <input type="text" name="pages" id="pages" class="form-control"></br>
        <label>isbn</label></br>
        <input type="text" name="isbn" id="isbn" class="form-control"></br>
        <label>short decription</label></br>
        <input type="text" name="short_decription" id="short_decription" class="form-control"></br>
        <label>Author</label></br>
        <select name="author_id" id="author_id">
        @foreach($book as $item)
  <option value="{{$item->id}}">{{$item->Name}}</option>
  @endforeach
</select></br>
<input type="submit" value="Save" class="btn btn-primary btn-sm"></br>
</form>
</div>
</div>
</div>
</div>
</div>
</div>