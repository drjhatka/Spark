@extends('layouts.frontend')

@section('title')
    View Cusomer Info
@endsection

@section('content')
    <div class="col m12">
            <div class="card-panel green white-text center-align lighten-1">
                Customer Information
            </div>

            <div class="row">
                <div class="col m12 center-align">
                        <a href="{{ route('customers.index') }}">
                             <i class="fa fa-backward fa-2x" aria-hidden="true"> Back</i>
                        </a>
                </div>
            </div>
            <div class="row" style="font-weight:bold;">
                <div class="col m12">
                    <div class="row card-panel">
                        <div class="col m2">Name:</div>
                        <div class="col m10">{{ $customer->name }}</div>
                    </div>
                    <div class="row card-panel">
                            <div class="col m2">Father Name:</div>
                            <div class="col m4">{{ $customer->father_name }}</div>

                    </div>
                    <div class="row card-panel">
                            <div class="col m2">Mother Name:</div>
                            <div class="col m4">{{ $customer->mother_name }}</div>
                            <div class="col m2">Spouse Name:</div>
                            <div class="col m4">{{ $customer->spouse_name }}</div>
                    </div>

                    <div class="row card-panel">
                            <div class="col m2">Present Address:</div>
                            <div class="col m10">{{ $customer->present_address }}</div>
                    </div>
                    <div class="row card-panel">
                            <div class="col m2">Permanent Address:</div>
                            <div class="col m10">{{ $customer->perm_address }}</div>
                    </div>
                    <div class="row card-panel">
                            <div class="col m2">Mobile No:</div>
                            <div class="col m2">{{ $customer->mobile_1 }}</div>
                            <div class="col m2">Mobile No:</div>
                            <div class="col m2">{{ $customer->mobile_2 }}</div>
                            <div class="col m2">Mobile No:</div>
                            <div class="col m2">{{ $customer->mobile_3 }}</div>
                    </div>
                    <div class="row card-panel">
                            <div class="col m2">ID Card Type:</div>
                            <div class="col m3">{{ $customer->id_type }}</div>
                            <div class="col m2">ID Card No:</div>
                            <div class="col m5">{{ $customer->id_no }}</div>
                    </div>

                    <div class="row card-panel">
                            <div class="col m2">Contact Person:</div>
                            <div class="col m10">{{ $customer->contact_name_1 }}</div>

                    </div>
                    <div class="row card-panel">
                            <div class="col m2">Contact Person Address</div>
                            <div class="col m10">{{ $customer->contact_address_1 }}</div>
                            <div class="col m2">Contact Person Mobile</div>
                            <div class="col m5">{{ $customer->contact_mobile_1 }}</div>
                    </div>
                    <div class="row card-panel">
                            <div class="col m2">Contact Person:</div>
                            <div class="col m10">{{ $customer->contact_name_2 }}</div>
                            <div class="col m2">Contact Person Address</div>
                            <div class="col m10">{{ $customer->contact_address_2 }}</div>
                            <div class="col m2">Contact Person Mobile</div>
                            <div class="col m5">{{ $customer->contact_mobile_2 }}</div>
                    </div>

                </div>
            </div>

    </div>
@endsection
