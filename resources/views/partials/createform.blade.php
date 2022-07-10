{!! Form::open() !!}
   <div class="form-group mb-2">
        {!! Form::label('title', 'Title', ['class' => 'fs-5']) !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
   </div>
   <div class="form-group mb-2">
    {!! Form::label('body', 'Content', ['class' => 'fs-5']) !!}
        {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
   </div>
   <div class="form-group mb-2">

        {!! Form::file('image', ['class' => 'form-control']) !!}
   </div>
   <div class="form-group mb-2">
    <div class="d-flex justify-content-end">
        {!! Form::submit('Submit', ['class' => 'btn btn-primary btn-md']) !!}
    </div>
   </div>
{!! Form::close() !!}
