<div class="table-responsive">
    <table class="table table-responsive" id="employees-table">
        <thead>
            <tr>
                <th>Fname</th>
                <th>Lname</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Birth</th>
                <th>Photo</th>
                <th>Emergency Contact 1</th>
                <th>Emergency Contact 2</th>
                <th>Certifiction Number</th>
                <th>Province</th>
                <th>Gender</th>
                <th>Trade</th>
                <th>Child Trade</th>
                <th>Maritial St</th>
                <th>Certification Orig</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($employees as $employee)
            <tr>
                <td>{!! $employee->fname !!}</td>
                <td>{!! $employee->lname !!}</td>
                <td>{!! $employee->email !!}</td>
                <td>{!! $employee->phone !!}</td>
                <td>{!! $employee->address !!}</td>
                <td>{!! $employee->birth !!}</td>
                <td>{!! $employee->photo !!}</td>
                <td>{!! $employee->emergency_contact_1 !!}</td>
                <td>{!! $employee->emergency_contact_2 !!}</td>
                <td>{!! $employee->certifiction_number !!}</td>
                <td>{!! $employee->provinceid !!}</td>
                <td>{!! $employee->genderid !!}</td>
                <td>{!! $employee->tradeid !!}</td>
                <td>{!! $employee->child_tradeid !!}</td>
                <td>{!! $employee->maritialid !!}</td>
                <td>{!! $employee->certifictionoriginid !!}</td>
                <td>
                    {!! Form::open(['route' => ['employees.destroy', $employee->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('employees.show', [$employee->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('employees.edit', [$employee->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>