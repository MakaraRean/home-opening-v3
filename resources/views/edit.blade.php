@extends('template')

@section('content')
    <div style="margin-left: 200px;margin-right:200px;margin-top:25px">
        <div class="card h-100" style="width: 100%">
            <form action="{{ route('update',$customer->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <h6 class="mb-2 text-primary">ពត៍មានភ្ញៀវ</h6>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="khName">ឈ្មោះជាភាសាខ្មែរ</label>
                                <input type="text" class="form-control" id="khName" name="khName" placeholder="Khmer Name" value="{{ $customer->khName }}">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="enName">ឈ្មោះជាភាសាអង់គ្លេស</label>
                                <input type="text" class="form-control" id="enName" name="enName" placeholder="English Name" value="{{ $customer->enName }}">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="rielCurrency">ចំនួនទឹកប្រាក់​ (ខ្មែរ)</label>
                                <input type="number" class="form-control" id="rielCurrency" name="rielCurrency" placeholder="Khmer Currency" value="{{ $customer->rielCurrency }}">
                            </div>
                            @error('rielCurrency')
                                <span>{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="usdCurrency">ចំនួនទឹកប្រាក់​ (ដុល្លារ)</label>
                                <input type="text" class="form-control" id="usdCurrency" name="usdCurrency" placeholder="Dollar Currency" value="{{ $customer->usdCurrency }}">
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
                                <select name="address_id" id="address_id" class="form-control">
                                    <option value="volvo">សូមជ្រើសរើសអាស័យដ្ឋាន</option>
                                    @foreach ($addresses as $address)
                                        @if ($customer->address_id == $address->id)
                                            <option selected value="{{ $address->id }}">{{ $address->name }}</option>
                                        @else
                                            <option value="{{ $address->id }}">{{ $address->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                <span style="font-size: 12px;" class="mb-3">ប្រសិនបើអាស័យដ្ឋានភ្ញៀវមិនមាននៅក្នុងបញ្ជីរ សូមថែមអាស័យដ្ឋានថ្មី <a href="{{ route('newAddress') }}">ចុចត្រង់នេះ</a></span>
                            </div>
                        </div>
                        {{-- <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <datalist id="mylist">
                                    @foreach ($addresses as $address)
                                        <option value="{{ $address->name }}">
                                    @endforeach
                                </datalist>
                                <input type="search" list="mylist" class="form-control">
                            </div>
                        </div> --}}
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <label for="other">ផ្សេងៗ</label>
                                <textarea class="form-control" id="other" name="other" placeholder="Other">{{ $customer->other }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="text-right">
                                {{-- <button type="button" id="submit" name="submit" class="btn btn-secondary">Cancel</button> --}}
                                <button type="submit" id="submit" name="submit" class="btn btn-primary">រក្សាទុកការកែប្រែទិន្នន័យ</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection