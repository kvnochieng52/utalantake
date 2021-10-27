<div class="row">


    {!!
    Form::open(['id'=>'dropzone_file','action'=>'PortfolioController@upload_portfolio','method'=>'POST','class'=>'dropzone',
    'enctype'=>'multipart/form-data'])
    !!}


    {!! Form::close() !!}


</div>