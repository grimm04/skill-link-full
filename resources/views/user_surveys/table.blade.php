<table class="table table-responsive" id="userSurveys-table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Company</th>
            <th>Company Size</th>
            <th>Email</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($userSurveys as $userSurvey)
        <tr>
            <td>{!! $userSurvey->name !!}</td>
            <td>{!! $userSurvey->company !!}</td>
            <td>{!! $userSurvey->company_size !!}</td>
            <td>{!! $userSurvey->email !!}</td>
            <td>
                {!! Form::open(['route' => ['userSurveys.destroy', $userSurvey->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('userSurveys.show', [$userSurvey->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <!--<a href="{!! route('userSurveys.edit', [$userSurvey->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}-->
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>