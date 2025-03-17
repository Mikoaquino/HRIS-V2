<div class="single-page">
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="left-content">
            <span class="main-content-title mg-b-0 mg-b-lg-1">Audit Logs</span>
        </div>
        <div class="justify-content-center mt-2">
            <ol class="breadcrumb">
                <li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Pages</a></li>
                <li class="breadcrumb-item active" aria-current="page">Audit Logs</li>
            </ol>
        </div>
    </div>
    <!-- /breadcrumb -->

    <!-- row -->
    <div class="container">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="row row-xs align-items-center mg-b-20">
                        <div class="col-md-8">
                            <div class="loading" wire:loading>
                                <div class="spinner-border spinner-border-sm" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <label class="main-content-label mg-b-0">Search</label>
                        </div>
                        <div class="col-md-3 mg-t-5 mg-md-t-0">
                            <input wire:model="search" class="form-control" placeholder="Enter any keyword" type="text">
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover mb-0 text-md-nowrap" wire:loading.remove>
                            <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Logs</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($audit as $logs)
                                <tr>
                                    <th scope="row">{{ $logs->user }}</th>
                                    <td>{{ $logs->logs }}</td>
                                    <td>{{ $logs->created_at }}</td>
                                </tr>
                                @empty
                                <tr>
                                    <th>No result</th>
                                    <td>No result</td>
                                    <td>No result</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div><br>
                    <div style="float:right;">{{ $audit->links() }}</div>
                </div>
            </div>
        </div>
        <ul class="notification">
            @foreach ($audit as $logs)
            <li>
                <div class="notification-time">
                    <span class="date">{{ $logs->day }}</span>
                    <span class="time">{{ $logs->time }}</span>
                </div>
                <div class="notification-icon">
                    <a href="javascript:void(0);"></a>
                </div>
                <div class="notification-body">
                    <div class="media mt-0">
                        <div class="main-img-user avatar-md online me-3 shadow">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M12,19.2C9.5,19.2 7.29,17.92 6,16C6.03,14 10,12.9 12,12.9C14,12.9 17.97,14 18,16C16.71,17.92 14.5,19.2 12,19.2M12,5A3,3 0 0,1 15,8A3,3 0 0,1 12,11A3,3 0 0,1 9,8A3,3 0 0,1 12,5M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12C22,6.47 17.5,2 12,2Z" />
                            </svg>
                        </div>
                        <div class="media-body">
                            <div class="d-flex align-items-center">
                                <div class="mt-0">
                                    <h5 class="mb-1 tx-15 font-weight-semibold text-dark">{{ $logs->user }}</h5>
                                    <p class="mb-0 tx-13 mb-0 text-muted">{{ $logs->logs }}</p>
                                </div>
                                <div class="ms-auto">
                                    <span class="float-end badge notification-badge">
                                        <span class="tx-11 font-weight-semibold">{{ $logs->created_at }}</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach
        </ul><br><br>
    </div>
    <!-- row closed -->
</div>