@extends('template')

@section('header')
    <link rel="stylesheet" href="https://colorlib.com/etc/tb/Table_Responsive_v1/css/main.css">
    <style>
        .searchbar{
            margin-bottom: auto;
            margin-top: auto;
            height: 60px;
            background-color: #353b48;
            border-radius: 30px;
            padding: 10px;
        }

        .search_input{
            color: white;
            border: 0;
            outline: 0;
            background: none;
            width: 0;
            caret-color:transparent;
            line-height: 40px;
            transition: width 0.4s linear;
        }

        .searchbar:hover > .search_input{
            padding: 0 10px;
            width: 450px;
            caret-color:red;
            transition: width 0.4s linear;
        }

        .searchbar:hover > .search_icon{
            background: white;
            color: #e74c3c;
        }

        .search_icon{
            height: 40px;
            width: 40px;
            float: right;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            color:white;
            text-decoration:none;
        }
    </style>
@endsection

@section('content')
    <form action="">
        <input type="text" name="search" id="search" class="form-control" placeholder="Search Customer" />
    </form>
    <div class="container-table100" style="z-index: 1;">
{{--        <div class="searchbar">--}}
{{--            <input class="search_input" type="text" name="" placeholder="Search...">--}}
{{--            <a href="#" class="search_icon"><i class="fas fa-search"></i></a>--}}
{{--        </div>--}}
        <div class="wrap-table100">
            <p style="color: aliceblue;margin-left: 10px">ប្រាក់​សរុប (រៀល) : <strong style="color: rgb(255, 172, 172)">{{ number_format($amountRiel, 0, '.', ',') }} រៀល</strong></p>
            <p style="color: aliceblue;margin-left: 10px">ប្រាក់​សរុប (ដុល្លារ) : <strong style="color: rgb(255, 172, 172)">{{ number_format($amountUsd, 0, '.', ',') }} ដុល្លារ</strong></p>
            <p style="color: aliceblue;margin-left: 10px">ចំនួនភ្ញៀវ : <strong style="color: rgb(255, 172, 172)">{{ $count }} នាក់</strong></p>

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
                    <tbody>
                        @foreach ($customers as $customer)
                            <tr>
                                <td class="column1">{{ $customer->khName }}</td>
                                <td class="column2">{{ $customer->enName }}</td>
                                <td class="column3">{{ $customer->address->name }}</td>
                                <td class="column4">{{ $customer->rielCurrency }} រៀល</td>
                                <td class="column5">{{ $customer->usdCurrency }} ដុល្លារ</td>
                                <td class="column6">{{ $customer->other }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
