<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $ticket->id !!}</p>
</div>

<!-- Userid Field -->
<div class="form-group">
    {!! Form::label('userid', 'Userid:') !!}
    <p>{!! $ticket->userid !!}</p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{!! $ticket->title !!}</p>
</div>

<!-- Institution Field -->
<div class="form-group">
    {!! Form::label('institution', 'Institution:') !!}
    <p>{!! $ticket->institution !!}</p>
</div>

<!-- Location Field -->
<div class="form-group">
    {!! Form::label('location', 'Location:') !!}
    <p>{!! $ticket->location !!}</p>
</div>

<!-- Ticket Number Field -->
<div class="form-group">
    {!! Form::label('ticket_number', 'Ticket Number:') !!}
    <p>{!! $ticket->ticket_number !!}</p>
</div>

<!-- Expiry Date Field -->
<div class="form-group">
    {!! Form::label('expiry_date', 'Expiry Date:') !!}
    <p>{!! $ticket->expiry_date !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $ticket->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $ticket->updated_at !!}</p>
</div>

