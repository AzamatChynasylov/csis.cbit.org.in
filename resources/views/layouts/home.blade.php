@extends( 'layouts.master' )

@section ( 'page-content' )
    <div class="page">
        <div class="page-main">
            <div class="page-header">
                <h1 class="page-title ">Dashboard</h1>
            </div>

            <div class="page-content">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">Assigned Courses</h4>
                            </div>

                            <div class="panel-body marks-table">
                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0 th-bb-n">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Course Name</th>
                                            <th>Course Code</th>
                                            {{--<td><b>Year &amp; Section</b></td>--}}
                                        </tr>
                                        </thead>
                                        <tbody id="lab-mark-types">
                                        @foreach( $subjects as $num => $subject )
                                            <tr>
                                                <td class="width-50">{{ $num }}</td>
                                                <td>{{ $subject['name'] }}</td>
                                                <td>{{ $subject['code'] }}</td>
{{--                                                <td>{{ $subject['year_sec'] }}</td>--}}
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div><!-- .table-responsive -->
                            </div>
                        </div><!--.panel-->
                    </div>
                    <div class="col-lg-4">
                        <div id="dashboard-calendar"></div>
                    </div>
                </div>
            </div>
            </div>
    </div>
@endsection