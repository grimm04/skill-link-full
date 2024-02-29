@extends('layouts.app')

@section('content')
    <section class="content-header">
    </section>
    <div class="content">
        <div class="row" style="padding: 20px">
            <form action="{{ route ('sendEmail') }}" method="get" name="addcouponFrm" id="addcouponFrm" enctype="multipart/form-data" onSubmit="javascript: return validate_addcustomer();">
                {{ csrf_field() }}
                <table class="table table-mail">
                    <tr class="header-mail">
                        <td width="150px"> From </td>
                        <td width="50px"> : </td>
                        <td> no-reply@skill-link.net </td>
                    </tr>
                    <tr>
                        <td> To </td>
                        <td> : </td>
                        <td> <input type="text" name="to" class="form-mail"> </td>
                    </tr>
                    <tr>
                        <td> Subject </td>
                        <td> : </td>
                        <td> <input type="text" name="subject" class="form-mail"> </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <input type="submit" class="btn btn-default"  value="SEND"  />
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
@endsection
