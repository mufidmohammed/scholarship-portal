<x-main-layout>
    <div class="container-fluid content-top-gap">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Admin</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
        </nav>

        <div class="statistics">
            <div class="row">
                <div class="col-xl-12 pr-xl-2">
                    <div class="row">
                        <div class="col-sm-4 pr-sm-2 statistics-grid">
                            <div class="card card_border border-primary-top p-4">
                                <i class="lnr lnr-users"> </i>
                                <h3 class="text-primary number">{{ $users }}</h3>
                                <p class="stat-text">Total Users</p>
                            </div>
                        </div>
                        <div class="col-sm-4 pr-sm-2 statistics-grid">
                            <div class="card card_border border-primary-top p-4">
                                <i class="lnr lnr-users"> </i>
                                <h3 class="text-primary number">{{ $reviewers }}</h3>
                                <p class="stat-text">Reviewers</p>
                            </div>
                        </div>
                        <div class="col-sm-4 pr-sm-2 statistics-grid">
                            <div class="card card_border border-primary-top p-4">
                                <i class="lnr lnr-tag"> </i>
                                <h3 class="text-secondary number">{{ $applicants }}</h3>
                                <p class="stat-text">Applicants</p>
                            </div>
                        </div>
                        <div class="col-sm-4 pr-sm-2 statistics-grid">
                            <div class="card card_border border-primary-top p-4">
                                <i class="lnr lnr-eye"> </i>
                                <h3 class="text-secondary number">{{ $pending }}</h3>
                                <p class="stat-text">Pending Applicants</p>
                            </div>
                        </div>
                        <div class="col-sm-4 pr-sm-2 statistics-grid">
                            <div class="card card_border border-primary-top p-4">
                                <i class="lnr lnr-file-add"> </i>
                                <h3 class="text-primary number">{{ $granted }}</h3>
                                <p class="stat-text">Granted</p>
                            </div>
                        </div>
                        <div class="col-sm-4 pr-sm-2 statistics-grid">
                            <div class="card card_border border-primary-top p-4">
                                <i class="lnr lnr-trash"> </i>
                                <h3 class="text-primary number">{{ $dismissed }}</h3>
                                <p class="stat-text">Dismissed</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-main-layout>
