<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container">
    <div class=row style="margin:20px;">
        <div class="col-12">
            <div class="card">
                <div class="card-headre">
<div class="card">
    <div class="card-header">Edit Author</div>
        <div class="body">
            <form action="{{url('auth/'.$auth->id)}}" method="post">
        {!! csrf_field()!!}
            @method("Patch")
            <input type="hidden" name="id" id="id" value="{{$auth->id}}"/>
            <label>Name</label><br/>
            <input type="text" name="Name" id="Name" value="{{$auth->Name}}" class="form-control"><br/>
            <label>Surname</label><br/>
            <input type="text" name="Surname" id="Surname" value="{{$auth->Surname}}" class="form-control"><br/>
            <input type="submit" value="Update" class="btn btn-success"><br/>
</form>
        </div>
</div>
</div>
</div>
</div>
</div>
</div>