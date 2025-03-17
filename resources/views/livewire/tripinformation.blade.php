<div>
    <div class="main-content-label mg-b-5 text-primary">
        Basic
    </div><br>
    <div class="row row-sm">
        <div class="col-md-5 col-lg-3">
            <label class="form-control-label">Client's Name <span class="tx-danger">*</span></label>
            <select wire:model.lazy="client" class="form-control form-control-sm form-select" id="client">
                <option value="">Select Client</option>
                <option value="Bollore Logistics Philippines Inc">Bollore Logistics Philippines Inc</option>
                <option value="Global Essentials">Global Essentials</option>
            </select>
        </div>
        <div class="col-md-5 col-lg-3 mg-t-20 mg-md-t-0">
            <label class="form-control-label">BU Account <span class="tx-danger">*</span></label>
            <select wire:model.lazy="buAccount" class="form-control form-control-sm form-select" id="buaccount">
                <option value="">Select BU Account</option>
                <option value="Local Distribution">Local Distribution</option>
                <option value="Global Essentials">Global Essentials</option>
            </select>
        </div>
        <div class="col-md-5 col-lg-3 mg-t-20 mg-md-t-0">
            <label class="form-control-label">Consignee <span class="tx-danger">*</span></label>
            <select wire:model.lazy="consignee" class="form-control form-control-sm form-select" id="consignee">
                <option value="">Select Consignee</option>
                <option value="Louis Vuitton">Louis Vuitton</option>
                <option value="Bounty Farms">Bounty Farms</option>
            </select>
        </div>
        <div class="col-md-5 col-lg-3 mg-t-20 mg-md-t-0">
            <label class="form-control-label">Requestor <span class="tx-danger">*</span></label>
            <select wire:model.lazy="requestor" class="form-control form-control-sm form-select" id="consignee">
                <option value="">Select Requestor</option>
                <option value="Ms. Alyssa Jhoida Delas Las">Ms. Alyssa Jhoida Delas Las</option>
                <option value="Ms. Kristina Bolocon">Ms. Kristina Bolocon</option>
            </select>
        </div>
    </div><br>
    <div class="row row-sm">
        <div class="col-md-5 col-lg-3">
            <label class="form-control-label">Pick Up Date <span class="tx-danger">*</span></label>
            <input wire:model.lazy="pickUpDate" type="date" class="form-control form-control-sm fc-datepicker" placeholder="Select Date" id="pickup" required="">
        </div>
        <div class="col-md-5 col-lg-3">
            <label class="form-control-label">Trip Type <span class="tx-danger">*</span></label>
            <select wire:model.lazy="tripType" class="form-control form-control-sm form-select" data-bs-placeholder="Select Trip Type" id="triptype" required="">
                <option value="">Select Trip Type</option>
                <option value="FT">Full Trip</option>
                <option value="ST">Side Trip</option>
                <option value="BL">Back Load</option>
                <option value="TR">Transfer</option>
                <option value="PU">Pull Out</option>
                <option value="DC">Drop Change</option>
                <option value="CL">Co-Load</option>
            </select>
        </div>
        <div class="col-md-5 col-lg-3">
            <label class="form-control-label">Trip Status <span class="tx-danger">*</span></label>
            <select wire:model.lazy="tripStatus" class="form-control form-control-sm form-select" data-bs-placeholder="Select Trip Status" id="tripstatus" required="">
                <option value="">Select Trip Status</option>
                <option value="WA">Waiting</option>
                <option value="RU">Running</option>
                <option value="AP">Approved</option>
                <option value="CO">Completed</option>
                <option value="CA">Cancelled</option>
                <option value="DE">Declined</option>
                <option value="PE">Pending</option>
                <option value="FR">For Reverse</option>
                <option value="BI">Billed</option>
                <option value="NA">No Attachment</option>
            </select>
        </div>
    </div><br><br>
    <div class="main-content-label mg-b-5 text-primary">
        Schedule
    </div><br>
    <div class="row row-sm">
        <div class="col-md-5 col-lg-3">
            <label class="form-control-label">Waybill No. <span class="tx-danger">*</span></label>
            <input wire:model.lazy="waybillNo" class="form-control form-control-sm" id="waybill" name="waybill" placeholder="Waybill No." required="" type="text">
        </div>
        <div class="col-md-5 col-lg-3">
            <label class=" form-control-label">Control No. <span class="tx-danger">*</span></label>
            <input wire:model.lazy="controlNo" class="form-control form-control-sm" id="control" name="control" placeholder="Control No." required="" type="text">
        </div>
        <div class="col-md-5 col-lg-6">
            <label class=" form-control-label">&nbsp;</label>
            <input class="form-control form-control-sm" placeholder="00000, 00000" required="" type="text">
        </div>
    </div><br>
    <div class="row row-sm">
        <div class="col-md-5 col-lg-3">
            <label class="form-control-label">Pick Up Date <span class="tx-danger">*</span></label>
            <input type="date" class="form-control form-control-sm fc-datepicker" placeholder="Select Date" id="pickup2" wire:model.debounce.500ms="pickUpDate" disabled>
        </div>
        <div class="col-md-5 col-lg-3 mg-t-20 mg-md-t-0">
            <label class="form-control-label">Actual Arrival Time </label>
            <input wire:model.lazy="puAAT" type="time" class="form-control form-control-sm" placeholder="Select Time">
        </div>
        <div class="col-md-5 col-lg-3 mg-t-20 mg-md-t-0">
            <label class="form-control-label">Actual Departure Time </label>
            <input wire:model.lazy="puADT" type="time" class="form-control form-control-sm" placeholder="Select Time">
        </div>
    </div><br>
    <div class="row row-sm">
        <div class="col-md-5 col-lg-3">
            <label class="form-control-label">Delivery Date <span class="tx-danger">*</span></label>
            <input wire:model.lazy="delDate" type="date" class="form-control form-control-sm fc-datepicker" placeholder="Select Date" id="pickup2">
        </div>
        <div class="col-md-5 col-lg-3 mg-t-20 mg-md-t-0">
            <label class="form-control-label">Actime Arrival Time </label>
            <input wire:model.lazy="delAAT" type="time" class="form-control form-control-sm" placeholder="Select Time">
        </div>
        <div class="col-md-5 col-lg-3 mg-t-20 mg-md-t-0">
            <label class="form-control-label">Actual Departure Time </label>
            <input wire:model.lazy="delADT" type="time" class="form-control form-control-sm" placeholder="Select Time">
        </div>
    </div><br><br>
    <div class="main-content-label mg-b-5 text-primary">
        Route
    </div><br>
    <div class="row row-sm">
        <div class="col-md-5 col-lg-6">
            <label class="form-control-label">Pickup Point <span class="tx-danger">*</span></label>
            <select wire:model.lazy="origin" wire:click="loadOrigin" class="form-control form-control-sm form-select" id="origin">
                <option value="">Select Origin Site</option>
                <option value="Greenbelt LV Store">Greenbelt LV Store</option>
            </select>
        </div>
        <div class="col-md-5 col-lg-6">
            <label class="form-control-label">&nbsp;</label>
            <input type="text" class="form-control form-control-sm" id="address" placeholder="Address Line" wire:model.debounce.500ms="originAddress" disabled>
        </div>
    </div><br><br>
    <div class="main-content-label mg-b-5 text-primary">
        Delivery Point
    </div><br>
    <div class="row row-sm">
        <div class="col-md-5 col-lg-6">
            <label class="form-control-label">Destination Site <span class="tx-danger">*</span></label>
            <select wire:model.lazy="destination" wire:click="loadDestination" class="form-control form-control-sm form-select" data-bs-placeholder="Select Trip Status" id="destination">
                <option value="">Select Destination</option>
                <option value="Bollore Warehouse Cupang Muntinlupa">Bollore Warehouse Cupang Muntinlupa</option>
                <option value="Solaire LV Store">Solaire LV Store</option>
            </select>
        </div>
        <div class="col-md-5 col-lg-6">
            <label class="form-control-label">&nbsp;</label>
            <input type="text" class="form-control form-control-sm" id="control" placeholder="Address Line" wire:model.debounce.500ms="destiAddress" disabled>
        </div>
    </div><br><br>
    <div class="main-content-label mg-b-5 text-primary">
        Fleet
    </div><br>
    <div class="row row-sm">
        <div class="col-md-5 col-lg-3">
            <label class="form-control-label">Fleet Type </label>
            <select wire:model.lazy="fleet" class="form-control form-control-sm form-select" data-bs-placeholder="Select Fleet Type">
                <option value="">Select Fleet Type</option>
                <option value="4 WHEELER">4 WHEELER</option>
                <option value="FB L300">FB L300</option>
            </select>
        </div>
        <div class="col-md-5 col-lg-3 mg-t-20 mg-md-t-0">
            <label class="form-control-label">Plate No. </label>
            <select wire:model.lazy="plateNo" wire:click="loadDriver" class="form-control form-control-sm form-select" data-bs-placeholder="Select Plate No">
                <option value="">Select Plate No.</option>
                <option value="CAW 4136">CAW 4136</option>
                <option value="CAH 8854">CAH 8854</option>
            </select>
        </div>
        <div class="col-md-5 col-lg-6 mg-t-20 mg-md-t-0">
            <label class="form-control-label">Temperature Requirements </label>
            <select wire:model.lazy="tempRequirements" class="form-control form-control-sm form-select">
                <option value="">Select Requirements</option>
                <option value="Dry Van">Dry Van</option>
                <option value="Reefer Van">Reefer Van</option>
            </select>
        </div>
    </div><br><br>
    <div class="main-content-label mg-b-5 text-primary">
        People
    </div><br>
    <div class="row row-sm">
        <div class="col-md-5 col-lg-3">
            <label class="ckbox"><input type="checkbox"><span>All People</span></label><br>
            <label class="ckbox"><input type="checkbox" checked><span>Fleet Assignment</span></label>
        </div>
    </div><br><br>
    <div class="row row-sm">
        <div class="col-md-5 col-lg-3">
            <label class="form-control-label">Driver's Name</label>
            <select wire:model.lazy="driver" class="form-control form-control-sm form-select">
                <option value="">Select Driver</option>
                <option value="Jose Delafuente">Jose Delafuente</option>
                <option value="Juan DelaCruz">Juan DelaCruz</option>
            </select>
        </div>
        <div class="col-md-5 col-lg-3 mg-t-20 mg-md-t-0">
            <label class="form-control-label">Driver's Contact No. </label>
            <input type="text" class="form-control form-control-sm" id="control" wire:model.defer="driverNo" wire:model.debounce.500ms="driverNo" placeholder="+63">
        </div>
        <div class="col-md-5 col-lg-3">
            <label class="form-control-label">Helper's Name </label>
            <select wire:model.lazy="helper" class="form-control form-control-sm form-select">
                <option value="">Select Helper</option>
                <option value="Juan Santiago">Juan Santiago</option>
                <option value="Juan DelaCruz">Juan DelaCruz</option>
            </select>
        </div>
        <div class="col-md-5 col-lg-3 mg-t-20 mg-md-t-0">
            <label class="form-control-label">Helper's Contact No. </label>
            <input type="text" class="form-control form-control-sm" id="control" wire:model.defer="helperNo" wire:model.debounce.500ms="helperNo" placeholder="+63">
        </div>
    </div><br>
</div>