@extends('template')


@section('header')
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://colorlib.com/etc/tb/Table_Responsive_v1/css/main.css">
    <style>
        .search-table{
            padding: 10%;
            margin-top: -6%;
        }
        .search-box{
            background: #c1c1c1;
            border: 1px solid #ababab;
            padding: 3%;
        }
        .search-box input:focus{
            box-shadow:none;
            border:2px solid #eeeeee;
        }
        .search-list{
            background: #fff;
            border: 1px solid #ababab;
            border-top: none;
        }
        .search-list h3{
            background: #eee;
            padding: 3%;
            margin-bottom: 0%;
        }
    </style>
@endsection

@section('content')
    <div class="container search-table">
        <div class="search-box">
            <div class="row">
                <div class="col-md-3">
                    <h5>ស្វែងរកភ្ញៀវ</h5>
                </div>
                <div class="col-md-9">
                    <input type="text" id="myInput" onkeyup="search()" class="form-control" placeholder="សរសេរឈ្មោះភ្ញៀវនៅទីនេះដើម្បីស្វែងរក">
                    <script>
                        $(document).ready(function () {
                            $("#myInput").on("keyup", function () {
                                var value = $(this).val().toLowerCase();
                                $("#myTable tr").filter(function () {
                                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                                });
                            });
                        });
                        function search(){
                            const value = $('#myInput').val();
                            $.ajax({
                                url: '/api/search',
                                type: 'POST',
                                data: {search: value},
                                dataType: 'json',
                                success: function (data) {
                                    console.log(data);
                                    $('#myTable').empty();
                                    // Add data to row table
                                    for (let i = 0; i < data.length; i++) {
                                        $.ajax({
                                            url: '/api/address/'+data[i].address_id,
                                            type: 'GET',
                                            success: function (address) {
                                                console.log(address);

                                                $('#myTable').append('<tr><td>'+data[i].khName+'</td><td>'+data[i].enName+
                                                    '</td><td>'+address.name+'</td><td>'+data[i].rielCurrency+' រៀល'+'</td><td>'
                                                    +data[i].usdCurrency+' ដុល្លា'+'</td><td>'+data[i].other+'</td></tr>');
                                            }
                                        });

                                    }
                                }
                            });
                        }
                    </script>
                </div>
            </div>
        </div>
{{--        <div class="search-list">--}}
{{--            <h3>303 Records Found</h3>--}}
{{--            <table class="table">--}}
{{--                <thead>--}}
{{--                <tr>--}}
{{--                    <th class="column1">ឈ្មោះខ្មែរ</th>--}}
{{--                    <th class="column2">ឈ្មោះអង់គ្លេស</th>--}}
{{--                    <th class="column3">អាស័យដ្ឋាន</th>--}}
{{--                    <th class="column4">ប្រាក់​រៀល</th>--}}
{{--                    <th class="column5">ប្រាក់​ដុល្លារ</th>--}}
{{--                    <th class="column6">ផ្សេងៗ</th>--}}
{{--                </tr>--}}
{{--                </thead>--}}
{{--                <tbody id="myTable">--}}

{{--                </tbody>--}}
{{--            </table>--}}

{{--        </div>--}}
        <div class="table100">
            <table>
                <thead>
                <tr class="table100-head">
                    <th class="column1">ឈ្មោះខ្មែរ</th>
                    <th class="column2">ឈ្មោះអង់គ្លេស</th>
                    <th class="column3">អាស័យដ្ឋាន</th>
                    <th class="column4">ប្រាក់​រៀល</th>
                    <th class="column5">ប្រាក់​ដុល្លារ</th>
                    <th class="column6">ផ្សេងៗ</th>
                </tr>
                </thead>
                <tbody id="myTable">

                </tbody>
            </table>
        </div>
    </div>
@endsection
