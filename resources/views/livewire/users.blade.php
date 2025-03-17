<div class="single-page">

    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="left-content">
            <span class="main-content-title mg-b-0 mg-b-lg-1">USERS</span>
        </div>
        <div class="justify-content-center mt-2">
            <ol class="breadcrumb">
                <li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Pages</a></li>
                <li class="breadcrumb-item active" aria-current="page">Users</li>
            </ol>
        </div>
    </div>
    <!-- /breadcrumb -->


    <div class="col-xl-12">
        <div class="card">
            <div class="card-header pb-0">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title mg-b-0">User List</h4>
                </div>
            </div>
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
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $user)
                            <tr>
                                <th scope="row">{{ $user->id }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
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
                <div style="float:right;">{{ $users->links() }}</div>
            </div>
        </div>
    </div>
</div>