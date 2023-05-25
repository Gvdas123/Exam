<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container">
    <div class=row style="margin:20px;">
        <div class="col-12">
            <div class="card">
                <div class="card-headre">
                <a href="{{url('/auth/create')}}" class="btn btn-success btn-sm" title="Add new owner">Add New Author</a>
</div>
<div class="card-body">
    <br/>
    <br/>

    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                
                    <th>Name</th>
                    <th>Surname</th>
                    <th>Options</th>
</tr></thead>

@foreach($auth as $item)
<tbody>
<tr>
        <td>{{$item->Name}}</td>
        <td>{{$item->Surname}}</td>
<td>
<a href="{{url('/auth/'.$item->id. '/edit')}}" title="Edit Owners" class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</botton></a>
<form method="post" action="{{ url('/auth'.'/'.$item->id)}}" accept-charset="UTF-8" style="display:inline">
{{method_field('DELETE')}}
{{csrf_field()}}
<button type="submit" class="btn btn-danger btn-sm" title="Delete Owner" onclick="return confirm('Confirm Delete?')"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Delete</botton>
</form>
</td>
</tr>
</tbody>
@endforeach
</table>
</div>
</div>
</div>
</div>
</div>
</div>
<style>
    .fh{
        float: right;
    }
    </style>