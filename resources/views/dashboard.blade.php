@extends('layouts.app')

@section('content')

<!-- Main Content -->
<div class="hk-pg-wrapper">
    <!-- Breadcrumb -->
    <nav class="hk-breadcrumb" aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-light bg-transparent">
            <li class="breadcrumb-item"><a href="#">Tables</a></li>
            <li class="breadcrumb-item active" aria-current="page">Basic Table</li>
        </ol>
    </nav>
    <!-- /Breadcrumb -->

    <!-- Container -->
    <div class="container-fluid">
        <!-- Title -->
        <div class="hk-pg-header">
            <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="archive"></i></span></span>Basic Tables</h4>
        </div>
        <!-- /Title -->

        <!-- Row -->
        <div class="row">
            <div class="col-xl-12">
                <section class="hk-sec-wrapper">
                    <h5 class="hk-sec-title">Regular Table</h5>
                    <p class="mb-40">Add class <code>.table</code> in table tag.</p>
                    <div class="row">
                        <div class="col-sm">
                            <div class="table-wrap">
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Username</th>
                                                <th>Role</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Jens</td>
                                                <td>Brincker</td>
                                                <td>Brincker123</td>
                                                <td><span class="badge badge-danger">admin</span> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Mark</td>
                                                <td>Hay</td>
                                                <td>Hay123</td>
                                                <td><span class="badge badge-info">member</span> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Anthony</td>
                                                <td>Davie</td>
                                                <td>Davie123</td>
                                                <td><span class="badge badge-warning">developer</span> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">4</th>
                                                <td>David</td>
                                                <td>Perry</td>
                                                <td>Perry123</td>
                                                <td><span class="badge badge-success">supporter</span> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">5</th>
                                                <td>Anthony</td>
                                                <td>Davie</td>
                                                <td>Davie123</td>
                                                <td><span class="badge badge-info">member</span> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">6</th>
                                                <td>Alan</td>
                                                <td>Gilchrist</td>
                                                <td>Gilchrist123</td>
                                                <td><span class="badge badge-success">supporter</span> </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="hk-sec-wrapper">
                    <h5 class="hk-sec-title">Table head options</h5>
                    <p class="mb-40">Similar to tables and dark tables, use the modifier classes <code>.thead-light</code> or <code>.thead-dark</code> to make <code>&lt;thead&gt;</code>s appear light or dark gray.</p>
                    <div class="row">
                        <div class="col-sm">
                            <div class="table-wrap mb-5">
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead class="thead-primary">
                                            <tr>
                                                <th>#</th>
                                                <th class="w-30">thead-primary</th>
                                                <th>Last Name</th>
                                                <th>Username</th>
                                                <th>Role</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                            <div class="table-wrap mb-5">
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead class="thead-secondary">
                                            <tr>
                                                <th>#</th>
                                                <th class="w-30">thead-secondary</th>
                                                <th>Last Name</th>
                                                <th>Username</th>
                                                <th>Role</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                            <div class="table-wrap mb-5">
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead class="thead-success">
                                            <tr>
                                                <th>#</th>
                                                <th class="w-30">thead-success</th>
                                                <th>Last Name</th>
                                                <th>Username</th>
                                                <th>Role</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                            <div class="table-wrap mb-5">
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead class="thead-warning">
                                            <tr>
                                                <th>#</th>
                                                <th class="w-30">thead-warning</th>
                                                <th>Last Name</th>
                                                <th>Username</th>
                                                <th>Role</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                            <div class="table-wrap mb-5">
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead class="thead-info">
                                            <tr>
                                                <th>#</th>
                                                <th class="w-30">thead-info</th>
                                                <th>Last Name</th>
                                                <th>Username</th>
                                                <th>Role</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                            <div class="table-wrap mb-5">
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead class="thead-danger">
                                            <tr>
                                                <th>#</th>
                                                <th class="w-30">thead-danger</th>
                                                <th>Last Name</th>
                                                <th>Username</th>
                                                <th>Role</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                            <div class="table-wrap mb-5">
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>#</th>
                                                <th class="w-30">thead-dark</th>
                                                <th>Last Name</th>
                                                <th>Username</th>
                                                <th>Role</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                            <div class="table-wrap mb-5">
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>#</th>
                                                <th class="w-30">thead-light</th>
                                                <th>Last Name</th>
                                                <th>Username</th>
                                                <th>Role</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
                <section class="hk-sec-wrapper">
                    <h5 class="hk-sec-title">Table Hover</h5>
                    <p class="mb-40">Add class <code>.table-hover</code> in table tag.</p>
                    <div class="row">
                        <div class="col-sm">
                            <div class="table-wrap">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Products</th>
                                                <th>Popularity</th>
                                                <th>Sales</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Milk Powder</td>
                                                <td class="peity-gradient"><span class="peity-line" data-width="90" data-peity='{ "fill": ["#7a5449"], "stroke":["#7a5449"]}' data-height="40">1,6,6,9,7,4,8,5,2,1</span> </td>
                                                <td><span class="text-danger"><i class="ion ion-ios-trending-down" aria-hidden="true"></i> 28.76%</span> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Air Conditioner</td>
                                                <td class="peity-gradient"><span class="peity-line" data-width="90" data-peity='{ "fill": ["#7a5449"], "stroke":["#7a5449"]}' data-height="40">7,5,2,4,5,7,9,3,1,2</span> </td>
                                                <td><span class="text-warning"><i class="ion ion-ios-trending-down" aria-hidden="true"></i> 8.55%</span> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>RC Cars</td>
                                                <td class="peity-gradient"><span class="peity-line" data-width="90" data-peity='{ "fill": ["#7a5449"], "stroke":["#7a5449"]}' data-height="40">0,3,6,1,2,4,6,3,2,1</span> </td>
                                                <td><span class="text-success"><i class="ion ion-ios-trending-up" aria-hidden="true"></i> 58.56%</span> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">4</th>
                                                <td>Down Coat</td>
                                                <td class="peity-gradient"><span class="peity-line" data-width="90" data-peity='{ "fill": ["#7a5449"], "stroke":["#7a5449"]}' data-height="40">9,8,5,4,9,4,3,2,1,8</span> </td>
                                                <td><span class="text-info"><i class="ion ion-ios-trending-up" aria-hidden="true"></i> 35.76%</span> </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <svg class="css-peity">
                                        <defs>
                                            <linearGradient id="grad" gradientTransform="rotate(90)">
                                                <stop offset="0" stop-color="#7a5449" />
                                                <stop offset="1" stop-color="rgba(255,255,255,0)" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="hk-sec-wrapper">
                    <h5 class="hk-sec-title">Bordered Table</h5>
                    <p class="mb-40">Add class <code>.table-bordered</code> in table tag for borders on all sides of the table and cells.</p>
                    <div class="row">
                        <div class="col-sm">
                            <div class="table-wrap">
                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered mb-0">
                                        <thead>
                                            <tr>
                                                <th>Task</th>
                                                <th>Progress</th>
                                                <th>Deadline</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Lunar probe project</td>
                                                <td>
                                                    <div class="progress progress-bar-xs mb-0 ">
                                                        <div class="progress-bar progress-bar-danger" style="width: 35%"></div>
                                                    </div>
                                                </td>
                                                <td>May 15, 2015</td>
                                                <td>
                                                    <a href="#" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="icon-pencil"></i> </a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="icon-trash txt-danger"></i> </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Dream successful plan</td>
                                                <td>
                                                    <div class="progress progress-bar-xs mb-0 ">
                                                        <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                                                    </div>
                                                </td>
                                                <td>July 1, 2015</td>
                                                <td>
                                                    <a href="#" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="icon-pencil"></i> </a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="icon-trash txt-danger"></i> </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Office automatization</td>
                                                <td>
                                                    <div class="progress progress-bar-xs mb-0 ">
                                                        <div class="progress-bar progress-bar-success" style="width: 100%"></div>
                                                    </div>
                                                </td>
                                                <td>Apr 12, 2015</td>
                                                <td>
                                                    <a href="#" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="icon-pencil"></i> </a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="icon-trash txt-danger"></i> </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>The sun climbing plan</td>
                                                <td>
                                                    <div class="progress progress-bar-xs mb-0 ">
                                                        <div class="progress-bar progress-bar-primary" style="width: 70%"></div>
                                                    </div>
                                                </td>
                                                <td>Aug 9, 2015</td>
                                                <td>
                                                    <a href="#" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="icon-pencil"></i> </a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="icon-trash txt-danger"></i> </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Open strategy</td>
                                                <td>
                                                    <div class="progress progress-bar-xs mb-0 ">
                                                        <div class="progress-bar progress-bar-primary" style="width: 85%"></div>
                                                    </div>
                                                </td>
                                                <td>Apr 2, 2015</td>
                                                <td>
                                                    <a href="#" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="icon-pencil"></i> </a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="icon-trash txt-danger"></i> </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Tantas earum numeris</td>
                                                <td>
                                                    <div class="progress progress-bar-xs mb-0 ">
                                                        <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                                                    </div>
                                                </td>
                                                <td>July 11, 2015</td>
                                                <td>
                                                    <a href="#" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="icon-pencil"></i> </a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="icon-trash txt-danger"></i> </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="hk-sec-wrapper">
                    <h5 class="hk-sec-title">Striped Table</h5>
                    <p class="mb-40">Add class <code>.table-striped</code> in table tag.</p>
                    <div class="row">
                        <div class="col-sm">
                            <div class="table-wrap">
                                <div class="table-responsive">
                                    <table class="table table-striped mb-0">
                                        <thead>
                                            <tr>
                                                <th>Task</th>
                                                <th>Progress</th>
                                                <th>Deadline</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Lunar probe project</td>
                                                <td>
                                                    <div class="progress progress-bar-xs mb-0 ">
                                                        <div class="progress-bar progress-bar-danger" style="width: 35%"></div>
                                                    </div>
                                                </td>
                                                <td>May 15, 2015</td>
                                                <td>
                                                    <a href="#" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="icon-pencil"></i> </a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="icon-trash txt-danger"></i> </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Dream successful plan</td>
                                                <td>
                                                    <div class="progress progress-bar-xs mb-0 ">
                                                        <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                                                    </div>
                                                </td>
                                                <td>July 1, 2015</td>
                                                <td>
                                                    <a href="#" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="icon-pencil"></i> </a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="icon-trash txt-danger"></i> </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Office automatization</td>
                                                <td>
                                                    <div class="progress progress-bar-xs mb-0 ">
                                                        <div class="progress-bar progress-bar-success" style="width: 100%"></div>
                                                    </div>
                                                </td>
                                                <td>Apr 12, 2015</td>
                                                <td>
                                                    <a href="#" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="icon-pencil"></i> </a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="icon-trash txt-danger"></i> </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>The sun climbing plan</td>
                                                <td>
                                                    <div class="progress progress-bar-xs mb-0 ">
                                                        <div class="progress-bar progress-bar-primary" style="width: 70%"></div>
                                                    </div>
                                                </td>
                                                <td>Aug 9, 2015</td>
                                                <td>
                                                    <a href="#" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="icon-pencil"></i> </a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="icon-trash txt-danger"></i> </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Open strategy</td>
                                                <td>
                                                    <div class="progress progress-bar-xs mb-0 ">
                                                        <div class="progress-bar progress-bar-primary" style="width: 85%"></div>
                                                    </div>
                                                </td>
                                                <td>Apr 2, 2015</td>
                                                <td>
                                                    <a href="#" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="icon-pencil"></i> </a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="icon-trash txt-danger"></i> </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Tantas earum numeris</td>
                                                <td>
                                                    <div class="progress progress-bar-xs mb-0 ">
                                                        <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                                                    </div>
                                                </td>
                                                <td>July 11, 2015</td>
                                                <td>
                                                    <a href="#" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="icon-pencil"></i> </a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="icon-trash txt-danger"></i> </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="hk-sec-wrapper">
                    <h5 class="hk-sec-title">Large table</h5>
                    <p class="mb-40">Add class <code>.table-lg</code> to make tables more compact by cutting cell padding in half.</p>
                    <div class="row">
                        <div class="col-sm">
                            <div class="table-wrap">
                                <div class="table-responsive">
                                    <table class="table table-lg mb-0">
                                        <thead>
                                            <tr>
                                                <th>Task</th>
                                                <th>Deadline</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Lunar probe project</td>
                                                <td>May 15, 2015</td>
                                                <td>
                                                    <a href="#" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="icon-pencil"></i> </a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="icon-trash txt-danger"></i> </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Dream successful plan</td>
                                                <td>July 1, 2015</td>
                                                <td>
                                                    <a href="#" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="icon-pencil"></i> </a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="icon-trash txt-danger"></i> </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Office automatization</td>
                                                <td>Apr 12, 2015</td>
                                                <td>
                                                    <a href="#" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="icon-pencil"></i> </a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="icon-trash txt-danger"></i> </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="hk-sec-wrapper">
                    <h5 class="hk-sec-title">Small table</h5>
                    <p class="mb-40">Add class <code>.table-sm</code> to make tables more compact by cutting cell padding in half.</p>
                    <div class="row">
                        <div class="col-sm">
                            <div class="table-wrap">
                                <div class="table-responsive">
                                    <table class="table table-sm mb-0">
                                        <thead>
                                            <tr>
                                                <th>Task</th>
                                                <th>Deadline</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Lunar probe project</td>
                                                <td>May 15, 2015</td>
                                                <td>
                                                    <a href="#" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="icon-pencil"></i> </a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="icon-trash txt-danger"></i> </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Dream successful plan</td>
                                                <td>July 1, 2015</td>
                                                <td>
                                                    <a href="#" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="icon-pencil"></i> </a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="icon-trash txt-danger"></i> </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Office automatization</td>
                                                <td>Apr 12, 2015</td>
                                                <td>
                                                    <a href="#" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="icon-pencil"></i> </a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="icon-trash txt-danger"></i> </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="hk-sec-wrapper">
                    <h5 class="hk-sec-title">Responsive Table</h5>
                    <p class="mb-40">Create responsive tables by wrapping any table in <code>.table-responsive</code> class.</p>
                    <div class="row">
                        <div class="col-sm">
                            <div class="table-wrap mb-30">
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr>
                                                <th>Invoice</th>
                                                <th>User</th>
                                                <th>Date</th>
                                                <th>Amount</th>
                                                <th>Status</th>
                                                <th>Country</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a href="javascript:void(0)">Order #26589</a></td>
                                                <td>Herman Beck</td>
                                                <td><span class="text-muted"><i class="icon-clock font-13"></i> Oct 16, 2016</span> </td>
                                                <td>$45.00</td>
                                                <td>
                                                    <div class="badge badge-success">Paid</div>
                                                </td>
                                                <td>EN</td>
                                            </tr>
                                            <tr>
                                                <td><a href="javascript:void(0)">Order #58746</a></td>
                                                <td>Mary Adams</td>
                                                <td><span class="text-muted"><i class="icon-clock font-13"></i> Oct 12, 2016</span> </td>
                                                <td>$245.30</td>
                                                <td>
                                                    <div class="badge badge-danger">Pending</div>
                                                </td>
                                                <td>CN</td>
                                            </tr>
                                            <tr>
                                                <td><a href="javascript:void(0)">Order #98458</a></td>
                                                <td>Caleb Richards</td>
                                                <td><span class="text-muted"><i class="icon-clock font-13"></i> May 18, 2016</span> </td>
                                                <td>$38.00</td>
                                                <td>
                                                    <div class="badge badge-info">Shipped</div>
                                                </td>
                                                <td>AU</td>
                                            </tr>
                                            <tr>
                                                <td><a href="javascript:void(0)">Order #32658</a></td>
                                                <td>June Lane</td>
                                                <td><span class="text-muted"><i class="icon-clock font-13"></i> Apr 28, 2016</span> </td>
                                                <td>$77.99</td>
                                                <td>
                                                    <div class="badge badge-success">Paid</div>
                                                </td>
                                                <td>FR</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <h6 class="mb-10">Breakpoint specific</h6>
                            <p class="mb-25">Use <code>table-responsive{-sm|-md|-lg|-xl}</code> as needed to create responsive tables up to a particular breakpoint.</p>
                            <div class="table-wrap">
                                <div class="table-responsive-md">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr>
                                                <th>Invoice</th>
                                                <th>User</th>
                                                <th>Date</th>
                                                <th>Amount</th>
                                                <th>Status</th>
                                                <th>Country</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a href="javascript:void(0)">Order #26589</a></td>
                                                <td>Herman Beck</td>
                                                <td><span class="text-muted"><i class="icon-clock font-13"></i> Oct 16, 2016</span> </td>
                                                <td>$45.00</td>
                                                <td>
                                                    <div class="badge badge-success">Paid</div>
                                                </td>
                                                <td>EN</td>
                                            </tr>
                                            <tr>
                                                <td><a href="javascript:void(0)">Order #58746</a></td>
                                                <td>Mary Adams</td>
                                                <td><span class="text-muted"><i class="icon-clock font-13"></i> Oct 12, 2016</span> </td>
                                                <td>$245.30</td>
                                                <td>
                                                    <div class="badge badge-danger">Pending</div>
                                                </td>
                                                <td>CN</td>
                                            </tr>
                                            <tr>
                                                <td><a href="javascript:void(0)">Order #98458</a></td>
                                                <td>Caleb Richards</td>
                                                <td><span class="text-muted"><i class="icon-clock font-13"></i> May 18, 2016</span> </td>
                                                <td>$38.00</td>
                                                <td>
                                                    <div class="badge badge-info">Shipped</div>
                                                </td>
                                                <td>AU</td>
                                            </tr>
                                            <tr>
                                                <td><a href="javascript:void(0)">Order #32658</a></td>
                                                <td>June Lane</td>
                                                <td><span class="text-muted"><i class="icon-clock font-13"></i> Apr 28, 2016</span> </td>
                                                <td>$77.99</td>
                                                <td>
                                                    <div class="badge badge-success">Paid</div>
                                                </td>
                                                <td>FR</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="hk-sec-wrapper">
                    <h5 class="hk-sec-title">Table flush</h5>
                    <p class="mb-40">Add class <code>.table-flush</code> in table tag.</p>
                    <div class="row">
                        <div class="col-sm">
                            <div class="table-wrap">
                                <div class="table-responsive">
                                    <table class="table table-flush mb-0">
                                        <thead>
                                            <tr>
                                                <th>Task</th>
                                                <th>Progress</th>
                                                <th>Deadline</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Lunar probe project</td>
                                                <td>
                                                    <div class="progress progress-bar-xs mb-0 ">
                                                        <div class="progress-bar progress-bar-danger" style="width: 35%"></div>
                                                    </div>
                                                </td>
                                                <td>May 15, 2015</td>
                                                <td>
                                                    <a href="#" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="icon-pencil"></i> </a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="icon-trash txt-danger"></i> </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Dream successful plan</td>
                                                <td>
                                                    <div class="progress progress-bar-xs mb-0 ">
                                                        <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                                                    </div>
                                                </td>
                                                <td>July 1, 2015</td>
                                                <td>
                                                    <a href="#" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="icon-pencil"></i> </a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="icon-trash txt-danger"></i> </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Office automatization</td>
                                                <td>
                                                    <div class="progress progress-bar-xs mb-0 ">
                                                        <div class="progress-bar progress-bar-success" style="width: 100%"></div>
                                                    </div>
                                                </td>
                                                <td>Apr 12, 2015</td>
                                                <td>
                                                    <a href="#" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="icon-pencil"></i> </a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="icon-trash txt-danger"></i> </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>The sun climbing plan</td>
                                                <td>
                                                    <div class="progress progress-bar-xs mb-0 ">
                                                        <div class="progress-bar progress-bar-primary" style="width: 70%"></div>
                                                    </div>
                                                </td>
                                                <td>Aug 9, 2015</td>
                                                <td>
                                                    <a href="#" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="icon-pencil"></i> </a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="icon-trash txt-danger"></i> </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Open strategy</td>
                                                <td>
                                                    <div class="progress progress-bar-xs mb-0 ">
                                                        <div class="progress-bar progress-bar-primary" style="width: 85%"></div>
                                                    </div>
                                                </td>
                                                <td>Apr 2, 2015</td>
                                                <td>
                                                    <a href="#" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="icon-pencil"></i> </a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="icon-trash txt-danger"></i> </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Tantas earum numeris</td>
                                                <td>
                                                    <div class="progress progress-bar-xs mb-0 ">
                                                        <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                                                    </div>
                                                </td>
                                                <td>July 11, 2015</td>
                                                <td>
                                                    <a href="#" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="icon-pencil"></i> </a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="icon-trash txt-danger"></i> </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="hk-sec-wrapper">
                    <h5 class="hk-sec-title">Contextual Classes</h5>
                    <p class="mb-40">Use classes <code>( .active, .success, .info, .warning, .danger )</code> to color table rows or individual cells.</p>
                    <div class="row">
                        <div class="col-sm">
                            <div class="table-wrap mb-30">
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Column heading</th>
                                                <th>Column heading</th>
                                                <th>Column heading</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="table-active">
                                                <th scope="row">Active</th>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Default</th>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                            </tr>
                                            <tr class="table-primary">
                                                <th scope="row">Primary</th>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                            </tr>
                                            <tr class="table-secondary">
                                                <th scope="row">Secondary</th>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                            </tr>
                                            <tr class="table-success">
                                                <th scope="row">Success</th>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                            </tr>
                                            <tr class="table-danger">
                                                <th scope="row">Danger</th>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                            </tr>
                                            <tr class="table-warning">
                                                <th scope="row">Warning</th>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                            </tr>
                                            <tr class="table-info">
                                                <th scope="row">Info</th>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                            </tr>
                                            <tr class="table-light">
                                                <th scope="row">Light</th>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                            </tr>
                                            <tr class="table-dark">
                                                <th scope="row">Dark</th>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <h6 class="mb-10">Dark table</h6>
                            <p class="mb-25">Regular table background variants are not available with the dark table, however, you may use text or background utilities to achieve similar styles.</p>
                            <div class="table-wrap">
                                <div class="table-responsive">
                                    <table class="table table-dark">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Column heading</th>
                                                <th>Column heading</th>
                                                <th>Column heading</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="bg-primary">
                                                <th scope="row">1</th>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                            </tr>
                                            <tr class="bg-success">
                                                <th scope="row">3</th>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                                <td>Column content</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="hk-sec-wrapper">
                    <h5 class="hk-sec-title">Table Color Variations</h5>
                    <p class="mb-40">Use classes <code>( .active, .success, .info, .warning, .danger )</code> to color table rows or individual cells.</p>
                    <div class="row">
                        <div class="col-sm">
                            <div class="table-wrap mb-20">
                                <div class="table-responsive">
                                    <table class="table table-primary table-bordered mb-0">
                                        <thead class="thead-primary">
                                            <tr>
                                                <th>#</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Username</th>
                                                <th>Role</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Jens</td>
                                                <td>Brincker</td>
                                                <td>Brincker123</td>
                                                <td><span class="badge badge-danger">admin</span> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Mark</td>
                                                <td>Hay</td>
                                                <td>Hay123</td>
                                                <td><span class="badge badge-info">member</span> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Anthony</td>
                                                <td>Davie</td>
                                                <td>Davie123</td>
                                                <td><span class="badge badge-warning">developer</span> </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="table-wrap mb-20">
                                <div class="table-responsive">
                                    <table class="table table-success table-bordered mb-0">
                                        <thead class="thead-success">
                                            <tr>
                                                <th>#</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Username</th>
                                                <th>Role</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Jens</td>
                                                <td>Brincker</td>
                                                <td>Brincker123</td>
                                                <td><span class="badge badge-danger">admin</span> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Mark</td>
                                                <td>Hay</td>
                                                <td>Hay123</td>
                                                <td><span class="badge badge-info">member</span> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Anthony</td>
                                                <td>Davie</td>
                                                <td>Davie123</td>
                                                <td><span class="badge badge-warning">developer</span> </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="table-wrap mb-20">
                                <div class="table-responsive">
                                    <table class="table table-info table-bordered mb-0">
                                        <thead class="thead-info">
                                            <tr>
                                                <th>#</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Username</th>
                                                <th>Role</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Jens</td>
                                                <td>Brincker</td>
                                                <td>Brincker123</td>
                                                <td><span class="badge badge-danger">admin</span> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Mark</td>
                                                <td>Hay</td>
                                                <td>Hay123</td>
                                                <td><span class="badge badge-info">member</span> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Anthony</td>
                                                <td>Davie</td>
                                                <td>Davie123</td>
                                                <td><span class="badge badge-warning">developer</span> </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="table-wrap mb-20">
                                <div class="table-responsive">
                                    <table class="table table-warning table-bordered mb-0">
                                        <thead class="thead-warning">
                                            <tr>
                                                <th>#</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Username</th>
                                                <th>Role</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Jens</td>
                                                <td>Brincker</td>
                                                <td>Brincker123</td>
                                                <td><span class="badge badge-danger">admin</span> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Mark</td>
                                                <td>Hay</td>
                                                <td>Hay123</td>
                                                <td><span class="badge badge-info">member</span> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Anthony</td>
                                                <td>Davie</td>
                                                <td>Davie123</td>
                                                <td><span class="badge badge-warning">developer</span> </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="table-wrap mb-20">
                                <div class="table-responsive">
                                    <table class="table table-danger table-bordered mb-0">
                                        <thead class="thead-danger">
                                            <tr>
                                                <th>#</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Username</th>
                                                <th>Role</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Jens</td>
                                                <td>Brincker</td>
                                                <td>Brincker123</td>
                                                <td><span class="badge badge-danger">admin</span> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Mark</td>
                                                <td>Hay</td>
                                                <td>Hay123</td>
                                                <td><span class="badge badge-info">member</span> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Anthony</td>
                                                <td>Davie</td>
                                                <td>Davie123</td>
                                                <td><span class="badge badge-warning">developer</span> </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="table-wrap mb-20">
                                <div class="table-responsive">
                                    <table class="table table-light table-bordered mb-0">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>#</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Username</th>
                                                <th>Role</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Jens</td>
                                                <td>Brincker</td>
                                                <td>Brincker123</td>
                                                <td><span class="badge badge-danger">admin</span> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Mark</td>
                                                <td>Hay</td>
                                                <td>Hay123</td>
                                                <td><span class="badge badge-info">member</span> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Anthony</td>
                                                <td>Davie</td>
                                                <td>Davie123</td>
                                                <td><span class="badge badge-warning">developer</span> </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="table-wrap mb-20">
                                <div class="table-responsive">
                                    <table class="table table-dark table-bordered mb-0">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>#</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Username</th>
                                                <th>Role</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Jens</td>
                                                <td>Brincker</td>
                                                <td>Brincker123</td>
                                                <td><span class="badge badge-danger">admin</span> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Mark</td>
                                                <td>Hay</td>
                                                <td>Hay123</td>
                                                <td><span class="badge badge-info">member</span> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Anthony</td>
                                                <td>Davie</td>
                                                <td>Davie123</td>
                                                <td><span class="badge badge-warning">developer</span> </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="table-wrap mb-20">
                                <div class="table-responsive">
                                    <table class="table table-active table-bordered mb-0">
                                        <thead class="thead-active">
                                            <tr>
                                                <th>#</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Username</th>
                                                <th>Role</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Jens</td>
                                                <td>Brincker</td>
                                                <td>Brincker123</td>
                                                <td><span class="badge badge-danger">admin</span> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Mark</td>
                                                <td>Hay</td>
                                                <td>Hay123</td>
                                                <td><span class="badge badge-info">member</span> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Anthony</td>
                                                <td>Davie</td>
                                                <td>Davie123</td>
                                                <td><span class="badge badge-warning">developer</span> </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="table-wrap">
                                <div class="table-responsive">
                                    <table class="table table-secondary table-bordered mb-0">
                                        <thead class="thead-secondary">
                                            <tr>
                                                <th>#</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Username</th>
                                                <th>Role</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Jens</td>
                                                <td>Brincker</td>
                                                <td>Brincker123</td>
                                                <td><span class="badge badge-danger">admin</span> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Mark</td>
                                                <td>Hay</td>
                                                <td>Hay123</td>
                                                <td><span class="badge badge-info">member</span> </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Anthony</td>
                                                <td>Davie</td>
                                                <td>Davie123</td>
                                                <td><span class="badge badge-warning">developer</span> </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- /Row -->

    </div>
    <!-- /Container -->

    

</div>
<!-- /Main Content -->

@endsection