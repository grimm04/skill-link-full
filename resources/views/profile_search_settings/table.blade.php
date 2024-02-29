<table class="table table-responsive" id="profileSearchSettings-table">
    <thead>
        <tr>
            <th>Userid</th>
        <th>Interst</th>
        <th>Location</th>
        <th>Company</th>
        <th>Industries</th>
        <th>School</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($profileSearchSettings as $profileSearchSetting)
        <tr>
            <td>{!! $profileSearchSetting->userid !!}</td>
            <td>{!! $profileSearchSetting->interst !!}</td>
            <td>{!! $profileSearchSetting->location !!}</td>
            <td>{!! $profileSearchSetting->company !!}</td>
            <td>{!! $profileSearchSetting->industries !!}</td>
            <td>{!! $profileSearchSetting->school !!}</td>
            <td>
                {!! Form::open(['route' => ['profileSearchSettings.destroy', $profileSearchSetting->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('profileSearchSettings.show', [$profileSearchSetting->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('profileSearchSettings.edit', [$profileSearchSetting->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>