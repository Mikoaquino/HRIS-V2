<div class="card p-4">
    <div class="card-header pb-3">
        <h3 class="card-title mb-2">EMPLOYEE STATISTICS</h3>
    </div>
    <div class="card-body p-0 customers mt-1">
        <div class="row g-0">
            <div class="col-6 p-2">
                <div class="bg-light p-3 text-center rounded">
                    <h2 class="mb-1 fw-bold">{{ $totalEmployment }}</h2>
                    <p class="mb-0 text-muted">Total Employment</p>
                </div>
            </div>
            <div class="col-6 p-2">
                <div class="bg-light p-3 text-center rounded">
                    <h2 class="mb-1 fw-bold">{{ $newHires }}</h2>
                    <p class="mb-0 text-muted">New Hires</p>
                </div>
            </div>
            <div class="col-6 p-2">
                <div class="bg-light p-3 text-center rounded">
                    <h2 class="mb-1 fw-bold">{{ $departures }}</h2>
                    <p class="mb-0 text-muted">Departures</p>
                </div>
            </div>
            <div class="col-6 p-2">
                <div class="bg-light p-3 text-center rounded">
                    <h2 class="mb-1 fw-bold">{{ $onProbation }}</h2>
                    <p class="mb-0 text-muted">On Probationary</p>
                </div>
            </div>
        </div>
    </div>
</div>
