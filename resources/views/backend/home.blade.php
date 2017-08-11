@extends('layouts.admin')

@section('content')
    <article class="content dashboard-page">
        <section class="section">
            <div class="row sameheight-container">
                <div class="col col-xs-12 col-sm-12 col-md-12 col-xl-12 stats-col">
                    <div class="card sameheight-item stats" data-exclude="xs">
                        <div class="card-block">
                            <div class="title-block">
                                <h4 class="title"> Stats </h4>
                                <p class="title-description"> Website metrics for <a
                                            href="http://modularteam.github.io/modularity-free-admin-dashboard-theme-html/">
                                        your awesome project
                                    </a></p>
                            </div>
                            <div class="row row-sm stats-container">
                                <div class="col-xs-12 col-sm-6 stat-col">
                                    <div class="stat-icon"><i class="fa fa-rocket"></i></div>
                                    <div class="stat">
                                        <div class="value"> 5407</div>
                                        <div class="name"> Active items</div>
                                    </div>
                                    <progress class="progress stat-progress" value="75" max="100">
                                        <div class="progress">
                                            <span class="progress-bar" style="width: 75%;"></span>
                                        </div>
                                    </progress>
                                </div>
                                <div class="col-xs-12 col-sm-6 stat-col">
                                    <div class="stat-icon"><i class="fa fa-shopping-cart"></i></div>
                                    <div class="stat">
                                        <div class="value"> 78464</div>
                                        <div class="name"> Items sold</div>
                                    </div>
                                    <progress class="progress stat-progress" value="25" max="100">
                                        <div class="progress">
                                            <span class="progress-bar" style="width: 25%;"></span>
                                        </div>
                                    </progress>
                                </div>
                                <div class="col-xs-12 col-sm-6  stat-col">
                                    <div class="stat-icon"><i class="fa fa-line-chart"></i></div>
                                    <div class="stat">
                                        <div class="value"> $80.560</div>
                                        <div class="name"> Monthly income</div>
                                    </div>
                                    <progress class="progress stat-progress" value="60" max="100">
                                        <div class="progress">
                                            <span class="progress-bar" style="width: 60%;"></span>
                                        </div>
                                    </progress>
                                </div>
                                <div class="col-xs-12 col-sm-6  stat-col">
                                    <div class="stat-icon"><i class="fa fa-users"></i></div>
                                    <div class="stat">
                                        <div class="value"> 359</div>
                                        <div class="name"> Total users</div>
                                    </div>
                                    <progress class="progress stat-progress" value="34" max="100">
                                        <div class="progress">
                                            <span class="progress-bar" style="width: 34%;"></span>
                                        </div>
                                    </progress>
                                </div>
                                <div class="col-xs-12 col-sm-6  stat-col">
                                    <div class="stat-icon"><i class="fa fa-list-alt"></i></div>
                                    <div class="stat">
                                        <div class="value"> 59</div>
                                        <div class="name"> Tickets closed</div>
                                    </div>
                                    <progress class="progress stat-progress" value="49" max="100">
                                        <div class="progress">
                                            <span class="progress-bar" style="width: 49%;"></span>
                                        </div>
                                    </progress>
                                </div>
                                <div class="col-xs-12 col-sm-6 stat-col">
                                    <div class="stat-icon"><i class="fa fa-dollar"></i></div>
                                    <div class="stat">
                                        <div class="value"> $780.064</div>
                                        <div class="name"> Total income</div>
                                    </div>
                                    <progress class="progress stat-progress" value="15" max="100">
                                        <div class="progress">
                                            <span class="progress-bar" style="width: 15%;"></span>
                                        </div>
                                    </progress>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Dashboard</div>

                        <div class="panel-body">
                            You are logged in!
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </article>
@endsection
