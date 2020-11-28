@extends('admin.master')

@section('title')
    Organizations | ShomonnoiBD
@endsection

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Organization</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/admin/organization-edit" method="POST">
                @csrf
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
{{--                                <option value="1">Rajshahi</option>--}}
{{--                                <option value="2">Rangpur</option>--}}
{{--                                <option value="3">Barishal</option>--}}
{{--                                <option value="4">Dhaka</option>--}}
                                @forelse($divisions as $division)
                                    <option value="{{$division->id}}" {{$organization->division_id==$division->id?'selected': ''}}>{{$division->name}}</option>
                                    @empty
                                @endforelse
                            </select>
                            @error('division_id') <p style="color: red">{{$message}}</p> @enderror

                        </div>
                        <div class="form-group">
                            <label for="activity" class="col-form-label">Activity:</label>
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
                            <input type="text" class="form-control" id="bkash"  autocomplete="off" name="bkash" value="{{old('bkash') ?? $payment->bkash}}" >
                            @error('bkash') <p style="color: red">{{$message}}</p> @enderror
                        </div>
                        <div class="form-group">
                            <label for="rocket" class="col-form-label">Rocket:</label>
                            <input type="text" class="form-control" id="rocket"  autocomplete="off" name="rocket" value="{{old('rocket') ?? $payment->rocket}}">
                            @error('rocket') <p style="color: red">{{$message}}</p> @enderror
                        </div>
                        <div class="form-group">
                            <label for="nagad" class="col-form-label">Nagad:</label>
                            <input type="text" class="form-control" id="nagad"  autocomplete="off" name="nagad" value="{{old('nagad') ?? $payment->nagad}}">
                            @error('nagad') <p style="color: red">{{$message}}</p> @enderror
                        </div>
                        <div class="form-group">
                            <label for="online_gateway" class="col-form-label">Online Gateway:</label>
                            <input type="text" class="form-control" id="online_gateway"  autocomplete="off" name="online_gateway" value="{{old('online_gateway') ?? $payment->online_gateway}}">
                            @error('online_gateway') <p style="color: red">{{$message}}</p> @enderror
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card" style="overflow-y: auto; max-height: 500px;">
                <div class="card-header">
                    <h4 class="card-title"> Organizations List
                        <button type="button" class="btn btn-primary float-right" data-toggle="modal"
                                data-target="#exampleModal">ADD
                        </button>
                    </h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table justify-content-center">
                            <thead class="text-center text-primary" style="font-size: 12px">
                            <th>EDIT</th>
                            <th>DELETE</th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Area</th>
                            <th>Upazila</th>
                            <th>Division</th>
                            <th>Activity</th>
                            <th>Phone</th>
{{--                            <th>Registered?</th>--}}
{{--                            <th>Target Fund</th>--}}
{{--                            <th>Credited Fund</th>--}}
                            <th>Email</th>
                            <th>Website</th>
                            <th>FB Link</th>
                            <th>Bkash</th>
                            <th>Rocket</th>
                            <th>Nagad</th>
                            <th>Online Gateway</th>
                            </thead>
                            <tbody>
                            @forelse($organizations as $organization)
                                <tr class="align-baseline" style="font-size: 12px">
                                    <td>
                                        <a href="/admin/organization-edit/{{$organization->id}}"
                                           class="btn btn-success">EDIT</a>
                                    </td>
                                    <td>
                                        <form action="/admin/organization-delete/{{$organization->id}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="id">
                                            <br>
                                            <button type="submit" class="btn btn-danger">DELETE</button>
                                        </form>
                                    </td>
                                    <td>{{$organization->id}}</td>
                                    <td>{{$organization->name}}</td>
                                    <td>{{$organization->area}}</td>
                                    <td>{{$organization->upazila}}</td>
                                    <td>
                                        {{$divisions->find($organization->division_id)->name}}
                                    </td>
                                    <td>{{$organization->activity}}</td>
                                    <td>{{$organization->phone_number}}</td>
{{--                                    <td>{{$organization->registered}}</td>--}}
{{--                                    <td>{{$organization->needed_fund}}</td>--}}
{{--                                    <td>{{$organization->credited_fund}}</td>--}}
                                    <td>{{$organization->email}}</td>
                                    <td>{{$organization->website}}</td>
                                    <td>{{$organization->fb_link}}</td>
                                    <td>{{$payments->where('organization_id', $organization->id)->first()->bkash}}</td>
                                    <td>{{$payments->where('organization_id', $organization->id)->first()->rocket}}</td>
                                    <td>{{$payments->where('organization_id', $organization->id)->first()->nagad}}</td>
                                    <td>{{$payments->where('organization_id', $organization->id)->first()->online_gateway}}</td>
                                </tr>
                            @empty

                            @endforelse

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection

