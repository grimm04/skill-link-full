<table class="table table-responsive" id="packages-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>Description</th>
        <th>Sort</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($packages as $package)
        <tr>
            <td>{!! $package->name !!}</td>
            <td>{!! $package->description !!}</td>
            <td>{!! $package->sort !!}</td>
            <td>
                {!! Form::open(['route' => ['packages.destroy', $package->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('packages.show', [$package->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('packages.edit', [$package->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>