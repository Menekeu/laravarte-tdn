@extends('layouts.default',['title'=>'Home'])

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="thumbnail">

                    <a href="{{route('events.show',1)}}" style="cursor: pointer">
                        <img src="{{asset('users/j.png')}}" alt="Paris">
                    </a>

                    <div class="row" style="margin-right:0px;margin-left:0px;background: #4B4C56;">
                        <div class="row" style="border-bottom: 1px solid #7d7f84;margin-right: 0px;
                                    margin-left: 0px;padding: 1rem 0rem .5rem;">
                            <img src="{{asset('users/1529647355.png')}}" alt="Paris"
                                 style="margin-right:-20px;" class="col-sm-4 col-xs-12" width="40" height="40">

                            <div class="col-sm-8 col-xs-12  body-thumbnail">
                                <p style="color:#fff">
                                    <strong>Paris</strong>
                                </p>
                                <p style="color: #A6A9B0;font-size: .95rem">
                                    Yes, we built Paris
                                </p>
                            </div>
                        </div>

                        <div style="color:white;text-align:center;padding: 5px;">
                            <sapn class="glyphicon glyphicon-eye-open"></sapn>
                            <span style="margin-right:7px">
                                3333
                            </span>
                            <sapn class="glyphicon glyphicon-eye-open"></sapn>
                            <span style="margin-right:7px">
                                3333
                            </span>
                            <sapn class="glyphicon glyphicon-heart"></sapn>
                            <span style="margin-right:7px">
                                3333
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection