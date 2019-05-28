@extends('layouts.frontend')

@section('title')
    View Customer
@endsection
@section('content')
    @php
        $customers = CustomerIndividual::paginate(3);
    @endphp

    <div class="row">
        <div class="card-panel green white-text center-align lighten-1">Customer Information</div>
        <div class="col m12">
            @if(count($customers)>0)
            <table class="responsive-table">
                <th  style="text-align:center;">Customer ID</th>
                <th>Name</th>
                <th>Created At</th>
                <th>Status</th>
                <th></th>
                <th ></th>
                @foreach ($customers as $customer)
                        <tr class="card-panel red-text lighten-4" style=" font-weight: bold; border-bottom:2px solid grey;">
                            <td style="text-align:center;">{{ $customer->id }}</td>
                            <td>{{ $customer->name }}</td>
                            <td>{{ $customer->created_at }}</td>
                            <td>{{ $customer->status }}</td>
                            <td>
                                <a href="{{ route('customers.show',$customer->id) }}">
                                        <span class="new badge" data-badge-caption="View"></span>
                                </a>
                            </td>
                            <td>
                                    <a href="{{ route('customers.edit',$customer->id) }}">
                                            <span class="new badge" data-badge-caption="Edit"></span>
                                    </a>
                                </td>
                            <td>
                                <a href="">
                                    <span class="new badge" data-badge-caption="Deposits"></span>
                                </a>
                            </td>
                            <td>
                                <a href="">
                                    <span class="new badge" data-badge-caption="Loans"></span>
                                </a>
                            </td>
                        </tr>

                    @endforeach
             </table>
            @endif
        </div>
    </div>

    {{ $customers->render() }}
@endsection
