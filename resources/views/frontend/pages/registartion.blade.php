<?php
/**
 * @Author: Md Nazmus Shakib
 * @Date:   2021-10-20 14:03:05
 * @Last Modified by:   Md Nazmus Shakib
 * @Last Modified time: 2021-10-22 15:44:47
 */
?>
@extends('frontend.layouts.master')

@section('content')
<div class="su-inner-banner-area new-reg-bg">
    <div class="container">
        <div class="row text-center">
            <div class="col-12 col-sm-6 col-lg-5 col-xl-4 m-auto">
                <h3>Vaccine Registration</h3>
            </div>
            <div class="col-12 col-sm-6 col-lg-5 col-xl-4 m-auto pt-4 pt-sm-0">
                <div class="su-inner-banner-img"><img alt="image" class="img-fluid"
                        src="{{ asset('img/banner/new-user.png') }}">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-10">
            <div class="pt-5">
                <form action="/action_page.php">
                    <div class="form-group">
                        <label for="nid">Email address:</label>
                        <input type="text" class="form-control" name="nid" placeholder="Enter NID Number" id="nid">
                    </div>
                    <div class="form-group">
                        <label for="birthdate">Password:</label>
                        <input type="date" class="form-control" placeholder="Enter birthdate" name="birthdate" id="birthdate">
                    </div>
                    <div class="form-group">
                        <label for="phone_number">Phone Number</label>
                        <input type="text" class="form-control" placeholder="Enter phone_number" name="phone_number" id="phone_number">
                    </div>
                    <div class="form-group">
                        <label for="center_name">Center Name</label>
                            <select class="form-control" name="center_name" id="center_name">
                                <option value="">Select</option>
                            @foreach ($names as $center)
                                <option value="{{ $center->id }}">{{ $center->vaccineCenter->center_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
