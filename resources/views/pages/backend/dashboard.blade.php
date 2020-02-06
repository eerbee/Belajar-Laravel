@extends('layouts.backend.hal_dashboard')

@section('content')

    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="overview-wrap">
                            <h2 class="title-1">dashboard overview</h2>
                        </div>
                    </div>
                </div>
                <div class="row m-t-25">
                    <div class="col-lg-6">
                        <div class="au-card recent-report">
                            <div class="au-card-inner">
                                <h3 class="title-2">recent reports</h3>
                                <div class="chart-info">
                                    <div class="chart-info__left">
                                        <div class="chart-note">
                                            <span class="dot dot--blue"></span>
                                            <span>products</span>
                                        </div>
                                        <div class="chart-note mr-0">
                                            <span class="dot dot--green"></span>
                                            <span>services</span>
                                        </div>
                                    </div>
                                    <div class="chart-info__right">
                                        <div class="chart-statis">
                                            <span class="index incre">
                                                <i class="zmdi zmdi-long-arrow-up"></i>25%</span>
                                            <span class="label">products</span>
                                        </div>
                                        <div class="chart-statis mr-0">
                                            <span class="index decre">
                                                <i class="zmdi zmdi-long-arrow-down"></i>10%</span>
                                            <span class="label">services</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-report__chart">
                                    <canvas id="recent-rep-chart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="au-card chart-percent-card">
                            <div class="au-card-inner">
                                <h3 class="title-2 tm-b-5">char by %</h3>
                                <div class="row no-gutters">
                                    <div class="col-xl-6">
                                        <div class="chart-note-wrap">
                                            <div class="chart-note mr-0 d-block">
                                                <span class="dot dot--blue"></span>
                                                <span>products</span>
                                            </div>
                                            <div class="chart-note mr-0 d-block">
                                                <span class="dot dot--red"></span>
                                                <span>services</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="percent-chart">
                                            <canvas id="percent-chart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop