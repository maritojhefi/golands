@extends('master')
@section('content')
    <div class="row">
        <div class="col-lg-6">
            <div class="card card-border-info">
                <div class="card-body">
                    <h4>
                        <strong>
                            User Statistics
                        </strong>
                    </h4>
                    <div class="col-12">

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Country</th>
                                        <th>Population</th>
                                        <th>Yearly Change</th>
                                        <th>Net Change</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>China</td>
                                        <td>1,415,045,928</td>
                                        <td>0.39 %</td>
                                        <td>5,528,531</td>
                                    </tr>
                                    <tr>
                                        <td>India</td>
                                        <td>1,354,051,854</td>
                                        <td>1.11 %</td>
                                        <td>14,871,727</td>
                                    </tr>
                                    <tr>
                                        <td>U.S.</td>
                                        <td>326,766,748</td>
                                        <td>0.71 %</td>
                                        <td>2,307,285</td>
                                    </tr>
                                    <tr>
                                        <td>Indonesia</td>
                                        <td>266,794,980</td>
                                        <td>1.06 %</td>
                                        <td>2,803,601</td>
                                    </tr>
                                    <tr>
                                        <td>Brazil</td>
                                        <td>210,867,954</td>
                                        <td>0.75 %</td>
                                        <td>1,579,676</td>
                                    </tr>
                                    <tr>
                                        <td>Pakistan</td>
                                        <td>200,813,818</td>
                                        <td>1.93 %</td>
                                        <td>3,797,863</td>
                                    </tr>
                                    <tr>
                                        <td>Nigeria</td>
                                        <td>195,875,237</td>
                                        <td>2.61 %</td>
                                        <td>4,988,926</td>
                                    </tr>
                                    <tr>
                                        <td>Bangladesh</td>
                                        <td>166,368,149</td>
                                        <td>1.03 %</td>
                                        <td>1,698,398</td>
                                    </tr>
                                    <tr>
                                        <td>Russia</td>
                                        <td>143,964,709</td>
                                        <td>-0.02 %</td>
                                        <td>-25,045</td>
                                    </tr>
                                    <tr>
                                        <td>Mexico</td>
                                        <td>130,759,074</td>
                                        <td>1.24 %</td>
                                        <td>1,595,798</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>


                        
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card card-border-info" >
                <div class="card-body">
                    <h4>
                        <strong>
                            Landings Statistics
                        </strong>
                    </h4>
                </div>
            </div>
        </div>
    </div>
@endsection
