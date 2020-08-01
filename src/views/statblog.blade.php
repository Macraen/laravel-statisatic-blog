
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Панель управления</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Favicons -->
    <meta name="theme-color" content="#563d7c">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    {{--    <link href="/css/dashboard.css" rel="stylesheet">--}}
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/css/alertify.min.css">
</head>
<body>
<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">MACRAEN BLOG</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a class="nav-link" href="logout">Выйти</a>
        </li>
    </ul>
</nav>

<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="sidebar-sticky pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="{!! route('admin') !!}">
                            <span data-feather="home"></span>
                            Главная <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{!! route('articles') !!}">
                            <span data-feather="file"></span>
                            Статьи
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{!! route('peoples') !!}">
                            <span data-feather="users"></span>
                            Пользователи
                        </a>
                    </li>
                </ul>

            </div>
        </nav>

        {{--    @dd($a)--}}
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>
            <br>
            <h2>Статистика за 7 дней</h2>
            <canvas id="myChart1"></canvas>
            <br>
            <h2>Общая статистика</h2>
            <form method="get" enctype="multipart/form-data">
                <div class="d-flex flex-row">
                    <p>Отобрать с: <select name="from" class="browser-default">
                            @if($from != null)
                                <option selected="" value="{{$from->id}}">{{$from->date}}</option>
                            @endif
                            @foreach($statistic_stat as $stats)
                                <option value="{{$stats->id}}">{{$stats->date}}</option>
                            @endforeach
                        </select></p>
                    <p style="position: relative; left: 20px;">Отобрать по: <select name="to" class="browser-default">
                            @if($to != null)
                                <option selected="" value="{{$to->id}}">{{$to->date}}</option>
                            @endif
                            @foreach($statistic_stat as $stats)
                                <option value="{{$stats->id}}">{{$stats->date}}</option>
                            @endforeach
                        </select></p>
                    <button type="submit" class="btn btn-success btn-sm" style="cursor: pointer; position: relative; left: 45px; height: 30px; bottom: 5px;">Отобрать</button>
                </div>
            </form>


            <div class="table-responsive">
                <table class="table table-striped table-sm" id="customer_data">
                    <thead>
                    <tr>
                        <th>Дата</th>
                        <th>Просмотры</th>
                        <th>Коментарии</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($statistic as $stat)
                        <tr>
                            <td>{{$stat->date}}</td>
                            <td>{{$stat->view}}</td>
                            <td>{{$stat->comment}}</td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"><\/script>')</script><script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>--}}
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
{{--<script src="/js/dashboard.js"></script></body>--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/alertify.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>

<script type="text/javascript">

    var day1 = '<?php echo $statistic_stat[0]['date'];?>';
    var day2 = '<?php echo $statistic_stat[1]['date'];?>';
    var day3 = '<?php echo $statistic_stat[2]['date'];?>';
    var day4 = '<?php echo $statistic_stat[3]['date'];?>';
    var day5 = '<?php echo $statistic_stat[4]['date'];?>';
    var day6 = '<?php echo $statistic_stat[5]['date'];?>';
    var day7 = '<?php echo $statistic_stat[6]['date'];?>';


    var ctx = document.getElementById('myChart1').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'line',

        data: {
            labels: [day1, day2, day3, day4, day5, day6, day7],
            datasets: [{
                label: 'Просмотры',
                backgroundColor: 'rgb(43,162,223)',
                borderColor: 'rgb(0,123,255)',
                data: [<?php echo $statistic_stat[0]['view'];?>, <?php echo $statistic_stat[1]['view'];?>, <?php echo $statistic_stat[2]['view'];?>, <?php echo $statistic_stat[3]['view'];?>, <?php echo $statistic_stat[4]['view'];?>, <?php echo $statistic_stat[5]['view'];?>, <?php echo $statistic_stat[6]['view'];?>]
            }]
        },

        options: {}
    });

</script>

</html>

