@extends('layouts.app') @section('content')

<h1><a href="{{URL::to('/')}}/admin"> Requests by Customer</a></h1>

<h1><a href="{{URL::to('/')}}/services_list"> Requests by Service Type</a></h1>

<h1><a href="{{URL::to('/')}}/service_request/create"> New Request Form</a></h1>

<h1><a href="{{URL::to('/')}}/list"> Individual Customer Requests</a></h1>
@endsection