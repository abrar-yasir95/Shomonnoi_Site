@extends('admin.master')

@section('title')
    Organization Edit | ShomonnoiBD
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Organization Editing</h4>
                    <form action="/admin/organization-edit/{{$organization->id}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="name" class="col-form-label">Organization Name:</label>
                                <input type="text" class="form-control" id="name"  autocomplete="off" name="name" value="{{old('name') ?? $organization->name}}">
                                @error('name') <p style="color: red">{{$message}}</p> @enderror
                            </div>
                            <div class="form-group">
                                <label for="area" class="col-form-label">Covered Area:</label>
                                <input type="text" class="form-control" id="area" autocomplete="off" name="area"  value="{{old('area') ?? $organization->area}}">
                                @error('area') <p style="color: red">{{$message}}</p> @enderror
                            </div>
                            <div class="form-group">
                                <label for="upazila" class="col-form-label">Upazila:</label>
                                <input type="text" class="form-control" id="upazila" autocomplete="off" name="upazila" value="{{old('upazila') ?? $organization->upazila}}">
                                @error('upazila') <p style="color: red">{{$message}}</p> @enderror
                            </div>
                            <div class="form-group">

                                <label for="division_id" class="col-form-label">Division:</label>
                                <select name="division_id" id="division_id" class="form-control" name="division_id">
{{--                                    <option value="1" {{$organization->division_id==1?'selected': ''}}>Rajshahi</option>--}}
{{--                                    <option value="2" {{$organization->division_id==2?'selected': ''}}>Rangpur</option>--}}
{{--                                    <option value="3" {{$organization->division_id==3?'selected': ''}}>Barishal</option>--}}
{{--                                    <option value="4" {{$organization->division_id==4?'selected': ''}}>Dhaka</option>--}}
                                    @forelse($divisions as $division)
                                        <option value="{{$division->id}}" {{$organization->division_id==$division->id?'selected': ''}}>{{$division->name}}</option>
                                    @empty
                                    @endforelse
                                </select>
                                @error('division_id') <p style="color: red">{{$message}}</p> @enderror
                            </div>
                            <div class="form-group">
                                <label for="activity" class="col-form-label">Activity:</label>
{{--                                <select name="activity" id="activity" class="form-control" name="activity">--}}
{{--                                    <option value="All" {{$organization->activity=='All'?'selected': ''}}>All</option>--}}
{{--                                    <option value="Emergency Medicine"--}}
{{--                                        {{$organization->activity=='Emergency Medicine'?'selected': ''}}>Emergency Medicine</option>--}}
{{--                                    <option value="Emergency Food"--}}
{{--                                        {{$organization->activity=='Emergency Food'?'selected': ''}}>Emergency Food</option>--}}
{{--                                    <option value="Emergency Ambulance"--}}
{{--                                        {{$organization->activity=='Emergency Ambulance'?'selected': ''}}>Emergency Ambulance</option>--}}
{{--                                    <option value="Emergency Grave Excavation"--}}
{{--                                        {{$organization->activity=='Emergency Grave Excavation'?'selected': ''}}>Emergency Grave Excavation</option>--}}
{{--                                    <option value="Emergency Medicine and Food"--}}
{{--                                        {{$organization->activity=='Emergency Medicine and Food'?'selected': ''}}>Emergency Medicine and Food</option>--}}
{{--                                    <option value="Emergency Medicine and Grave Excavation"--}}
{{--                                        {{$organization->activity=='Emergency Medicine and Grave Excavation'?'selected': ''}}>Emergency Medicine and Grave--}}
{{--                                        Excavation--}}
{{--                                    </option>--}}
{{--                                    <option value="Emergency Food and Grave Excavation" {{$organization->activity=='Emergency Food and Grave Excavation'?'selected': ''}}>Emergency Food and Grave--}}
{{--                                        Excavation--}}
{{--                                    </option>--}}

{{--                                </select>--}}
                                <input type="text" id="activity" class="form-control"  autocomplete="off" name="activity" value="{{old('activity') ?? $organization->activity}}">

                                @error('activity') <p style="color: red">{{$message}}</p> @enderror

                            </div>
                            <div class="form-group">
                                <label for="phone_number" class="col-form-label">Phone Number (+88):</label>
                                <input type="text" id="phone_number" class="form-control"  autocomplete="off" name="phone_number" value="{{old('phone_number') ?? $organization->phone_number}}">
                                @error('phone_number') <p style="color: red">{{$message}}</p> @enderror

                            </div>
                            <div class="form-group">
                                <label for="registered" class="col-form-label">Registered?</label>
                                <select name="registered" id="registered" class="form-control" name="registered">
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                    <option value="N/A" selected>Not Available</option>
                                </select>
                                @error('registered') <p style="color: red">{{$message}}</p> @enderror
                            </div>
                            <div class="form-group">
                                <label for="needed_fund" class="col-form-label">Target Fund:</label>
                                <input type="text" class="form-control" id="needed_fund" autocomplete="off" name="needed_fund" value="{{old('needed_fund') ?? $organization->needed_fund}}">
                                @error('needed_fund') <p style="color: red">{{$message}}</p> @enderror
                            </div>
                            <div class="form-group">
                                <label for="credited_fund" class="col-form-label">Credited Fund:</label>
                                <input type="text" class="form-control" id="credited_fund"  autocomplete="off" name="credited_fund" value="{{old('credited_fund') ?? $organization->credited_fund}}">
                                @error('credited_fund') <p style="color: red">{{$message}}</p> @enderror

                            </div>
                            <div class="form-group">
                                <label for="email" class="col-form-label">Email:</label>
                                <input type="text" class="form-control" id="email"  autocomplete="off" name="email" value="{{old('email') ?? $organization->email}}">
                                @error('email') <p style="color: red">{{$message}}</p> @enderror
                            </div>
                            <div class="form-group">
                                <label for="website" class="col-form-label">Website:</label>
                                <input type="text" class="form-control" id="website"  autocomplete="off" name="website" value="{{old('website') ?? $organization->website}}">
                                @error('website') <p style="color: red">{{$message}}</p> @enderror
                            </div>
                            <div class="form-group">
                                <label for="fb_link" class="col-form-label">FB Link:</label>
                                <input type="text" class="form-control" id="fb_link"  autocomplete="off" name="fb_link" value="{{old('fb_link') ?? $organization->fb_link}}">
                                @error('fb_link') <p style="color: red">{{$message}}</p> @enderror
                            </div>
                            <div class="form-group">
                                <label for="bkash" class="col-form-label">Bkash:</label>
                                <input type="text" class="form-control" id="bkash"  autocomplete="off" name="bkash" value="{{is_null($payment->bkash)?'':$payment->bkash}}">
                                @error('bkash') <p style="color: red">{{$message}}</p> @enderror
                            </div>
                            <div class="form-group">
                                <label for="rocket" class="col-form-label">Rocket:</label>
                                <input type="text" class="form-control" id="rocket"  autocomplete="off" name="rocket" value="{{is_null($payment->rocket)?'':$payment->rocket}}">
                                @error('rocket') <p style="color: red">{{$message}}</p> @enderror
                            </div>
                            <div class="form-group">
                                <label for="nagad" class="col-form-label">Nagad:</label>
                                <input type="text" class="form-control" id="nagad"  autocomplete="off" name="nagad" value="{{is_null($payment->nagad)?'':$payment->nagad}}">
                                @error('nagad') <p style="color: red">{{$message}}</p> @enderror
                            </div>
                            <div class="form-group">
                                <label for="online_gateway" class="col-form-label">Online Gateway:</label>
                                <input type="text" class="form-control" id="online_gateway"  autocomplete="off" name="online_gateway" value="{{is_null($payment->online_gateway)?'':$payment->online_gateway}}">
                                @error('online_gateway') <p style="color: red">{{$message}}</p> @enderror
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="/admin/organization-edit" class="btn btn-secondary" data-dismiss="modal">Back</a>
                            <button type="submit" class="btn btn-primary" data-dismiss="modal">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection


@section('scripts')
@endsection
