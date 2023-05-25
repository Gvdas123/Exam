<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container">
    <div class=row style="margin:20px;">
        <div class="col-12">
            <div class="card">
                <div class="card-headre">

</div>
<div class="card-body">
    <br/>
    <br/>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                
                    <th>Title</th>
                    <th>pages</th>
                    <th>isbn</th>
                    <th>short decription</th>
                    <th>Options</th>
</tr></thead>

@foreach($book as $item)

<tbody>
<tr>
        <td>{{$item->title}}</td>
        <td>{{$item->pages}}</td>
        <td>{{$item->isbn}}</td>
        <td>{{$item->short_decription}}</td>
<td>
<a href="{{url('/book/'.$item->id. '/edit')}}" title="Edit Owners" class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</botton></a>
<form method="post" action="{{ url('/book'.'/'.$item->id)}}" accept-charset="UTF-8" style="display:inline">
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