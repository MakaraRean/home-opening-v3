<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        body{margin-top:20px;}              
        .modal-footer {   border-top: 0px; }

    </style>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>

</head>
<body>
    <!--login modal-->
    <div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h1 class="text-center">ថែមអាស័យដ្ឋានភ្ញៀវ</h1>
            </div>
            <div class="modal-body">
                <form class="form col-md-12 center-block" action="{{ route('saveNewAddress') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" placeholder="អាស័យដ្ឋានភ្ញៀវ" name="addressName">
                        @error('addressName')
                            <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>
                    <div class="form-group">
                        <textarea type="text" class="form-control input-lg" placeholder="ព័ណនា" name="desc"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">ថែមទៅបញ្ជីរអាស័យដ្ឋាន</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="col-md-1accordion2">
                <button class="btn" data-dismiss="modal" aria-hidden="true"><a href="{{ route('home') }}">ចាកចេញ</a> </button>
                </div>	
            </div>
        </div>
        </div>
    </div>
</body>
</html>