@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-4 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h5>Total Blog</h5>
                        <div class="row">
                            <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                <div class="d-flex d-sm-block d-md-flex align-items-center">
                                    <h2 class="mb-0">$32123</h2>
                                </div>
                            </div>
                            <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                <i class="icon-lg mdi mdi-codepen text-primary ms-auto"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h5>Sales</h5>
                        <div class="row">
                            <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                <div class="d-flex d-sm-block d-md-flex align-items-center">
                                    <h2 class="mb-0">$45850</h2>
                                    <p class="text-success ms-2 mb-0 font-weight-medium">+8.3%</p>
                                </div>
                                <h6 class="text-muted font-weight-normal"> 9.61% Since last month</h6>
                            </div>
                            <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                <i class="icon-lg mdi mdi-wallet-travel text-danger ms-auto"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h5>Total page visit</h5>
                        <div class="row">
                            <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                <div class="d-flex d-sm-block d-md-flex align-items-center">
                                    <h2 class="mb-0">$2039</h2>
                                </div>
                            </div>
                            <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                <i class="icon-lg mdi mdi-monitor text-success ms-auto"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Transaction History</h4>
                        <canvas id="transaction-history" class="transaction-chart"></canvas>
                        <div
                            class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                            <div class="text-md-center text-xl-left">
                                <h6 class="mb-1">Transfer to Paypal</h6>
                                <p class="text-muted mb-0">07 Jan 2019, 09:12AM</p>
                            </div>
                            <div
                                class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                                <h6 class="font-weight-bold mb-0">$236</h6>
                            </div>
                        </div>
                        <div
                            class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                            <div class="text-md-center text-xl-left">
                                <h6 class="mb-1">Tranfer to Stripe</h6>
                                <p class="text-muted mb-0">07 Jan 2019, 09:12AM</p>
                            </div>
                            <div
                                class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                                <h6 class="font-weight-bold mb-0">$593</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Recently Added Posts</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th> Client Name </th>
                                        <th> Order No </th>
                                        <th> Product Cost </th>
                                        <th> Project </th>
                                        <th> Payment Mode </th>
                                        <th> Start Date </th>
                                        <th> Payment Status </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <img src="assets/images/faces/face1.jpg" alt="image" />
                                            <span class="ps-2">Henry Klein</span>
                                        </td>
                                        <td> 02312 </td>
                                        <td> $14,500 </td>
                                        <td> Dashboard </td>
                                        <td> Credit card </td>
                                        <td> 04 Dec 2019 </td>
                                        <td>
                                            <div class="badge badge-outline-success">Approved</div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
