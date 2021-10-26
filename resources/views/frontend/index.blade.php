<?php
/**
 * @Author: Md Nazmus Shakib
 * @Date:   2021-10-20 09:48:30
 * @Last Modified by:   Md Nazmus Shakib
 * @Last Modified time: 2021-10-22 02:11:36
 */
?>
@extends('frontend.layouts.master')

@section('content')
<div class="jumbotron jumbotron-fluid banner-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="reg-card">
                            <img src="{{ asset('img/banner/new-user.png') }}" class='img-fluid reg-user'>
                            <h4 class="text-left ml-3"> <strong>VACCINE REGISTRATION</strong></h4>
                        </div>
                        <h4 class="mb-3 text-center">During registration you need</h4>
                        <div class="reg-information ">

                            <div class="nid">
                                <i class="fa fa-address-card" aria-hidden="true"></i>
                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                <p>NID</p>
                            </div>
                            <div class="phone">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                <p>Phone</p>
                            </div>
                            <div class="info">
                                <i class="fa fa-info-circle" aria-hidden="true">Info</i>
                                <p>Info</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card w-70">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fa fa-check-circle-o" aria-hidden="true"></i> CHECK STATUS
                        </h5>
                    </div>
                </div>

                <div class="card w-70">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fa fa-address-card-o" aria-hidden="true"></i> VACCINE CRAD
                        </h5>
                    </div>
                </div>
                <div class="card w-70">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fa fa-certificate" aria-hidden="true"></i> CERTIFICATE</h5>
                    </div>
                </div>
                <div class="card w-70">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fa fa-certificate" aria-hidden="true"></i> CERTIFICATE</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
