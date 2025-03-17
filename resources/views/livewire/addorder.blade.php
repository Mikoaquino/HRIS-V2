<div>
    <div class="main-content-label mg-b-5 text-primary">
        Order Summary
    </div><br>
    <div class="row row-sm">
        <div class="col-md-5 col-lg-2">
            <button wire:click.prevent="add" class="btn btn-primary btn-block form-control-sm" type="button">Add Product Row</button>
        </div>
        <div class="col-md-5 col-lg-10">
        </div>
    </div><br>
    <div class="table-responsive">
        <table class="table table-bordered table-hover mb-0 text-md-nowrap" id="responsive-datatable">
            <thead>
                <tr>
                    <th>NO.</th>
                    <th>PRODUCT DESCRIPTION</th>
                    <th>QUANTITY</th>
                    <th>DECLARED VALUE</th>
                    <th>PRODUCT COST</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tripOrders as $index => $order)
                <tr>
                    <td scope="row">
                        <center><span class="badge badge-num">
                                <label>{{$index+1}}</label>
                            </span></center>
                    </td>
                    <td><input name="tripOrders[{{ $index }}][desc]" type=" text" class="form-control form-control-sm" placeholder="Product Description" wire:model="tripOrders.{{$index}}.desc"></td>
                    <td><input name="tripOrders[{{ $index }}][quantity]" type="number" class="form-control form-control-sm" placeholder="0.00" wire:model="tripOrders.{{$index}}.quantity"></td>
                    <td><input name="tripOrders[{{ $index }}][value]" type="text" class="form-control form-control-sm" placeholder="kg/lbs/boxes" wire:model="tripOrders.{{$index}}.value"></td>
                    <td><input name="tripOrders[{{ $index }}][price]" type="number" class="form-control form-control-sm" placeholder="0.00" wire:model="tripOrders.{{$index}}.price"></td>
                    <td>
                        <center><button wire:click.prevent="removeOrder({{ $index }})" type="button" class="btn btn-icon badge-link btn-sm me-1"><i class="bi bi-trash"></i></button></center>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div><br><br>
    <div class="main-content-label mg-b-5 text-primary">
        Sales Breakdown
    </div><br>
    <div class="row row-sm">
        <div class="col-md-5 col-lg-3">
            <label class="form-control-label">Order Subtotal </label>
            <input type="number" class="form-control form-control-sm" id="subtotal" placeholder="0.00" disabled>
        </div>
        <div class="col-md-5 col-lg-3 mg-t-20 mg-md-t-0">
            <label class="form-control-label">Additional Order Fees </label>
            <input type="number" class="form-control form-control-sm" id="fees" placeholder="0.00">
        </div>
        <div class="col-md-5 col-lg-6 mg-t-20 mg-md-t-0">
            <label class="form-control-label">Remarks </label>
            <input type="text" class="form-control form-control-sm" placeholder="Remarks">
        </div>
    </div><br>
    <div class="row row-sm">
        <div class="col-md-5 col-lg-3">
            <label class="form-control-label">Truck Cost </label>
            <input type="number" class="form-control form-control-sm" id="tcost" placeholder="0.00" disabled>
        </div>
        <div class="col-md-5 col-lg-3 mg-t-20 mg-md-t-0">
            <label class="form-control-label">Additional Trucking Fees </label>
            <input type="number" class="form-control form-control-sm" id="tfees" placeholder="0.00">
        </div>
        <div class="col-md-5 col-lg-6 mg-t-20 mg-md-t-0">
            <label class="form-control-label">Remarks </label>
            <input type="text" class="form-control form-control-sm" placeholder="Remarks">
        </div>
    </div><br><br>
    <div class="main-content-label mg-b-5 text-primary">
        Total Sales
    </div><br>
    <div class="row row-sm">
        <div class="col-md-5 col-lg-3">
            <label class="form-control-label">Sales Total </label>
            <input type="number" class="form-control form-control-sm" id="si" placeholder="0.00" disabled>
        </div>
        <div class="col-md-5 col-lg-9">
        </div>
    </div><br>
</div>