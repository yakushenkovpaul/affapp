<div class="table-responsive bgAdd fixed-solution" data-pattern="priority-columns">
    <table id="ordersTable" class="table table-small-font table-bordered table-striped" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th id="ordersTable-col-0">Kauf ID</th>
            <th data-priority="" id="ordersTable-col-1">Online Shop</th>
            <th data-priority="2" id="ordersTable-col-2">Cashback</th>
            <th data-priority="6" id="ordersTable-col-3">Kaufdatum</th>
            <th data-priority="3" id="ordersTable-col-5">Status</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <th data-org-colspan="1" data-columns="ordersTable-col-0">Order ID</th>
            <th data-org-colspan="1" data-columns="ordersTable-col-1">Customer</th>
            <th data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">Amount</th>
            <th data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">Date Added</th>
            <th data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-4">Date Modified</th>
            <th data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5">Status</th>
            <th data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-6">Action</th>
        </tr>
        </tfoot>
        <tbody>
        @foreach($listing_sales as $sale)
            <tr>
                <td data-org-colspan="1" data-columns="ordersTable-col-0">{{ $sale->id }}</td>
                <td data-org-colspan="1" data-columns="ordersTable-col-1">
                    <a target="_blank" href="{!! url('/merchant/' . $sale->merchant->id . '/' . Format::slug($sale->merchant->dir)) !!}" title="{{ $sale->merchant->name }}">{{ $sale->merchant->name }}</a></td>
                <td data-org-colspan="1" data-priority="2" data-columns="ordersTable-col-2">${{ $sale->value }}</td>
                <td data-org-colspan="1" data-priority="6" data-columns="ordersTable-col-3">{{ $sale->updated_at->format('d/m/Y') }}</td>
                @if ($sale->status == 1)
                    <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5">
                        <span class="label label-success">approved</span>
                    </td>
                @else
                    <td data-org-colspan="1" data-priority="3" data-columns="ordersTable-col-5">
                        <span class="label label-warning">pending</span>
                    </td>
                @endif
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<div class="col-md-12 text-center">
    {!! $listing_sales; !!}
</div>