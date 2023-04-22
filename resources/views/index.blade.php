

@extends('template')

@section('content')
    <div class="container" style="margin-left: 15px;margin-right:15px">
        <div class="row gutters" style="margin-top: 10px;width:1450px">
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12" style="height:534.4px">
                <div class="card h-100">
                    <div class="card-body" style=" overflow-y: scroll;">
                        <link rel="stylesheet" type="text/css"
                            href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
                        <div class="row">
                            <p class="text-primary col-md-6">ឈ្មោះ | ទឹកប្រាក់</p>
                            <p class="text-primary text-right">ចំនួនភ្ញៀវ <strong class="text-danger"> {{ $count }} </strong> នាក់</p>
                        </div>

                        <hr>
                        <div class="container bootstrap snippets bootdey">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="main-box no-header clearfix">
                                        <div class="main-box-body clearfix">
                                            <div class="table-responsive">
                                                <table class="table user-list">
                                                    <thead>
                                                        {{-- <tr>
                                                <th><span>User</span></th>
                                                <th><span>Created</span></th>
                                                <th class="text-center"><span>Status</span></th>
                                                <th><span>Email</span></th>
                                                <th>&nbsp;</th>
                                                </tr> --}}
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($customers as $customer)
                                                            <tr>
                                                                <form action="{{ route('delete', $customer->id) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('delete')
                                                                    @if ($customer->rielCurrency != null)
                                                                        <p>{{ $customer->khName . ' ' . $customer->enName }}
                                                                            | {{ number_format($customer->rielCurrency, 0, '.', ',') . ' រៀល' }}</p>
                                                                        <div class="text-right">
                                                                            <a href="{{ route('edit',$customer->id) }}"><button type="button"
                                                                                class="btn btn-link">កែ</button></a>
                                                                            |
                                                                            <button type="submit"
                                                                                class="btn btn-link">លុប</button>
                                                                        </div>
                                                                    @else
                                                                        <p>{{ $customer->khName . ' ' . $customer->enName }}
                                                                            | {{ number_format($customer->usdCurrency, 0, '.', ',') . ' ដុល្លារ' }}</p>
                                                                        <div class="text-right">
                                                                            <a href="{{ route('edit',$customer->id) }}"><button type="button"
                                                                                class="btn btn-link">កែ</button></a>
                                                                            |
                                                                            <button type="submit"
                                                                                class="btn btn-link">លុប</button>
                                                                        </div>
                                                                    @endif
                                                                </form>
                                                            </tr>
                                                            <hr>
                                                        @endforeach

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                <div class="card h-100" style="width: 100%">
                    <form action="{{ route('add') }}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <h6 class="mb-2 text-primary">ពត៍មានភ្ញៀវ</h6>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="khName">ឈ្មោះជាភាសាខ្មែរ</label>
                                        <input type="text" class="form-control" id="khName" name="khName"
                                            placeholder="Khmer Name">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="enName">ឈ្មោះជាភាសាអង់គ្លេស</label>
                                        <input type="text" class="form-control" id="enName" name="enName"
                                            placeholder="English Name">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="rielCurrency">ចំនួនទឹកប្រាក់​ (ខ្មែរ)</label>
                                        <input type="number" class="form-control" id="rielCurrency" name="rielCurrency"
                                            placeholder="Khmer Currency">
                                    </div>
                                    @error('rielCurrency')
                                        <span>{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="usdCurrency">ចំនួនទឹកប្រាក់​ (ដុល្លារ)</label>
                                        <input type="text" class="form-control" id="usdCurrency" name="usdCurrency"
                                            placeholder="Dollar Currency">
                                    </div>
                                </div>
                            </div>
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <h6 class="mt-3 mb-2 text-primary">អាស័យដ្ឋាន</h6>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label for="address_id">ទីតាំង</label>
                                        <select name="address_id" id="address_id" class="form-control" type="search">
                                            <option selected>សូមជ្រើសរើសអាស័យដ្ឋាន</option>
                                            @foreach ($addresses as $address)
                                                <option value="{{ $address->id }}">{{ $address->name }}</option>
                                            @endforeach
                                        </select>
                                        <span style="font-size: 12px;"
                                            class="mb-3">ប្រសិនបើអាស័យដ្ឋានភ្ញៀវមិនមាននៅក្នុងបញ្ជីរ
                                            សូមថែមអាស័យដ្ឋានថ្មី <a
                                                href="{{ route('newAddress') }}">ចុចត្រង់នេះ</a>
                                        </span>
                                    </div>
                                </div>
                                {{-- <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="form-group">
                                        <datalist id="mylist">
                                            @foreach ($addresses as $address)
                                                <option value="{{ $address->id }}">{{ $address->name }}</option>
                                            @endforeach
                                        </datalist>
                                        <input type="search" list="mylist" class="form-control" placeholder="សូមជ្រើសរើសអាស័យដ្ឋាន">
                                        <span style="font-size: 12px;"
                                            class="mb-3">ប្រសិនបើអាស័យដ្ឋានភ្ញៀវមិនមាននៅក្នុងបញ្ជីរ
                                            សូមថែមអាស័យដ្ឋានថ្មី <a
                                                href="{{ route('newAddress') }}">ចុចត្រង់នេះ</a>
                                        </span>
                                    </div>
                                </div> --}}
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label for="other">ផ្សេងៗ</label>
                                        <textarea class="form-control" id="other" name="other" placeholder="Other"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="text-right">
                                        {{-- <button type="button" id="submit" name="submit" class="btn btn-secondary">Cancel</button> --}}
                                        <button type="submit" id="submit" name="submit"
                                            class="btn btn-primary">រក្សាទុក</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
