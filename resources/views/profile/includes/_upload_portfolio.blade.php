<div class="row">
    <div class="col-md-12">

        {{Form::label('portfolio_title', 'Upload Portfolio',['class'=>'control-label'])}}

        <p>Allowed files are Video, Audio, Images, pdf, word, excel, powerpoint</p>
        {!!
        Form::open(['id'=>'dropzone_file','action'=>'PortfolioController@upload_portfolio','method'=>'POST','class'=>'dropzone',
        'enctype'=>'multipart/form-data'])
        !!}
        {!! Form::close() !!}
    </div>

</div>

<br />




{!!
Form::open(['action'=>'PortfolioController@add_portfolio','method'=>'POST',
'enctype'=>'multipart/form-data'])
!!}
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            {{Form::label('portfolio_title', 'Portfolio Title/Name (optional)',['class'=>'control-label'])}}
            {{Form::text('portfolio_title',null,['class'=>'form-control',
            'placeholder'=>'Enter the Title of your portfolio'])}}
            @error('portfolio_title')
            <span class="error_submission" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            {{Form::label('portfolio_url', 'Portfolio URL/Link (optional)',['class'=>'control-label'])}}
            {{Form::text('portfolio_url',null,['class'=>'form-control',
            'placeholder'=>'Enter the Link to portfolio'])}}
            @error('portfolio_url')
            <span class="error_submission" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            {{Form::label('portfolio_description', 'Portfolio Description (Optional)',['class'=>'control-label'])}}
            {{Form::textarea('portfolio_description',null,['class'=>'form-control',
            'placeholder'=>'Describe your portfolio','style'=>'height:80px'])}}
            @error('portfolio_description')
            <span class="error_submission" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">

        <input type="hidden" name="portfolio_file" id="portfolio_file" class="portfolio_file">
        <button type="submit" class="btn btn-block bg-gradient-secondary">
            <b>UPLOAD PORTFOLIO</b></button>
    </div>
</div>
{!! Form::close() !!}