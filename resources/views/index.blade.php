@extends('layouts.layout')

@section('content')
    <section>
        <div>
            <form method="post" action="{{url('uploadPDF')}}" enctype="multipart/form-data">
                {{ csrf_field() }} {{ method_field('POST') }}
                <div class="form-group">
                    <label for="file" class="col-md-3 control-label">File</label>

                    <div class="col-md-6">
                        <input type="file" name="pdf"
                               class="form-control">
                        @if ($errors->has('pdf'))
                            <span class="help-block">
	                                {{ $errors->first('pdf') }}
                            </span>
                        @endif
                    </div>

                </div>
                <button>Upload PDF</button>
            </form>
        </div>
        @if(session('success'))
            <div>
                {{ session('success') }}
            </div>
        @endif
        <div>
            @foreach ($users as $user)
                <h2>{{$user->name}}</h2>
                @foreach ($user->companies as $company)
                    <h4>{{$company->name . " - " . $company->pivot->associated_date}}</h4>
                @endforeach
            @endforeach
        </div>
    </section>
@endsection