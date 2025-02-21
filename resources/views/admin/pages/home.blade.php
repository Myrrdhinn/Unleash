@extends('admin.main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Welcome to the Admin site of Unleash!

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('customscripts')
   <script src="{{ mix('js/app.js', '/admin') }}" type="text/javascript"></script>
@endsection
