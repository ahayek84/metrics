@extends('layouts.site')
@section('content')
    <div class="container" style="text-align: center; align-content: center;">
        <div class="row">
        <div class="col-md-2" style="text-align: center; align-content: center;">
    <!-- Sidebar -->
        <nav id="sidebar">
                <form action="/" method="POST" style="padding-top: 55px;" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group row">
                        <div class="col-sm-1">
                            <select name="fromdate" style="height: 50px; width: 150px">
                                <option value="01-01-2019" {{ ($data['fromdate'] == '01-01-2019')? "selected" : "" }} >01-01-2019</option>
                                <option value="01-02-2019" {{ ($data['fromdate'] == '01-02-2019')? "selected" : "" }}>01-02-2019</option>
                                <option value="01-03-2019" {{ ($data['fromdate'] == '01-03-2019')? "selected" : "" }}>01-03-2019</option>
                                <option value="01-04-2019" {{ ($data['fromdate'] == '01-04-2019')? "selected" : "" }}>01-04-2019</option>
                            </select>
                        </div>
                    </div>
                    <!--div class="form-group row">
                        <div class="col-sm-1">
                                <select name="todate" style="height: 50px; width: 150px">
                                    <option value="01-01-2019" {{ ($data['todate'] == '01-01-2019')? "selected" : "" }}>01-01-2019</option>
                                    <option value="01-02-2019" {{ ($data['todate'] == '01-02-2019')? "selected" : "" }}>01-02-2019</option>
                                    <option value="01-03-2019" {{ ($data['todate'] == '01-03-2019')? "selected" : "" }}>01-03-2019</option>
                                    <option value="01-04-2019"{{ ($data['todate'] == '01-04-2019')? "selected" : "" }}>01-04-2019</option>
                                </select>
                        </div>
                    </div-->
                    <div class="form-group row">
                        <div class="col-sm-1">
                            <button type="submit" class="btn btn-primary">Refresh</button>
                        </div>
                    </div>
                </form>
        </nav>
        </div>

    <!-- Page Content -->
    <div class="col-md-10" style="text-align: center; align-content: center;">
        <div class="row">
            <div class="col-md-12">
               <h3> Decision Panel </h3>
            </div>
        </div>
        <div class="row" style="margin-top: 10px">
            @foreach ($data['metrics'] as $metric)
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{$metric->metric_name}}</h5>
                            <div class="card-body">{{$metric->metric_value}}</div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="row">
            <div class="col-md-4">
                @php
                    $my_viz = 1;
                     echo "<script>\n";
                     echo 'my_viz = ' . json_encode($my_viz, JSON_PRETTY_PRINT) . ';';
                     echo "\n</script>";
                @endphp
                @include('charts.bar')
            </div>
            <div class="col-md-4">
                @php
                    $my_viz = 2;
                     echo "<script>\n";
                     echo 'my_viz = ' . json_encode($my_viz, JSON_PRETTY_PRINT) . ';';
                     echo "\n</script>";
                @endphp
                @include('charts.bar')
            </div>
            <div class="col-md-4">
                @php
                    $my_viz = 3;
                     echo "<script>\n";
                     echo 'my_viz = ' . json_encode($my_viz, JSON_PRETTY_PRINT) . ';';
                     echo "\n</script>";
                @endphp
                @include('charts.bar')
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" >
                @php
                    $my_viz = 1;
                     echo "<script>\n";
                     echo 'var my_viz2 = ' . json_encode($my_viz, JSON_PRETTY_PRINT) . ';';
                     echo "\n</script>";
                @endphp
                @include('charts.line')
            </div>
        </div>
    <div class="row" align="center" style="padding-left: inherit; padding-right: inherit">
        <div class="table-responsive col-md-6">
            <table align="center" class="table table-striped" width="250px">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="table-responsive col-md-6">
            <table align="center" class="table table-striped">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>
    </div>
    </div>
@endsection
