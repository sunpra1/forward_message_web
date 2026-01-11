@extends('layouts.app')

@section('content')

        <div class="row">
                <div class="col-sm-12 col-md-12">
                        <div class="my-3">
                                <div class="jumbotron">
                                        <p class="lead"><span class="text-primary lead mr-2">Last Updated</span> January 11, 2026</p>
                                        <div class="d-flex flex-row align-items-center">
                                                <img src="{{ URL('images/notification_forward_icon.png') }}" style="height: 84px; width: 84px;" alt="" class="img-thumbnail rounded-circle p-0 m-0">
                                                <h1 class="ml-3">Notification Forward</h1>
                                        </div>
                                        <p class="lead">Forward Notification i.e. Notification Forwarding App</p>
                                        <hr class="my-4">
                                        <blockquote class="blockquote">
                                        <p class="mt-2">Notification Forward lets you automate your smartphone by forwarding notifications. If you have two phones, such as a work phone and a personal phone, you can easily sync your personal phone notifications to your work email address, and vice versa. It can perform these tasks based on configured contexts such as mailing details, filters, time, and location. To achieve this, the app reads incoming notifications on user device. To forward notification details to email App makes use of Gmail's "Send Mail" Scope.
                                        </p>
                                        </blockquote>
                                        <div class="d-flex flex-row-reverse">
                                                <a class="btn btn-link mr-2" href="{{URL('notification-forward/privacy-policy')}}">View privacy policy <i class="fas fa-angle-right"></i></a>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
        
@endsection
