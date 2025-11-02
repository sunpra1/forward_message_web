@extends('layouts.app')

@section('content')

        <div class="row">
                <div class="col-sm-12 col-md-6">
                        <div class="my-3">
                                <div class="jumbotron">
                                        <p class="lead"><span class="text-primary lead mr-2">Last Updated</span> Aug 01, 2024</p>
                                        <div class="d-flex flex-row align-items-center">
                                                <img src="{{ URL('images/notification_forward_icon.png') }}" style="height: 84px; width: 84px;" alt="" class="img-thumbnail rounded-circle p-0 m-0">
                                                <h1 class="ml-3">Notification Forward</h1>
                                        </div>
                                        <p class="lead">Forward Notification i.e. Device Notification and Missed Call Details Forwarding App</p>
                                        <hr class="my-4">
                                        <blockquote class="blockquote">
                                         <p class="mt-2">Notification Forward lets you automate your smartphone by forwarding notifications or missed call alerts to your preferred email. 
                                        If you have two phones, such as a work phone and a personal phone, you can easily sync your personal phone notifications and missed calls to your work email address, and vice versa. 
                                        It can perform these tasks based on configured contexts such as mailing details, filters, time, and location. To achieve this, the app reads incoming notifications, read phone state, call logs, and contacts on user device.
                                        </p>
                                        </blockquote>
                                        <div class="d-flex flex-row-reverse">
                                                <a class="btn btn-link mr-2" href="{{URL('privacy-policy/notification-forward')}}">View privacy policy <i class="fas fa-angle-right"></i></a>
                                        </div>
                                </div>
                        </div>
                </div>
                <div class="col-sm-12 col-md-6">
                        <div class="my-3">
                                <div class="jumbotron">
                                        <p class="lead"><span class="text-primary lead mr-2">Last Updated</span> July 31, 2024</p>
                                        <div class="d-flex flex-row align-items-center">
                                                <img src="{{ URL('images/mouse_and_keyboard_icon.png') }}" style="height: 84px; width: 84px;" alt="" class="img-thumbnail rounded-circle p-0 m-0">
                                                <h1 class="ml-3">Mouse & Keyboard</h1>
                                        </div>
                                        <p class="lead">
                                                Bluetooth Mouse and keyboard right in your hand for seamless remote control.
                                        </p>
                                        <hr class="my-4">
                                        <blockquote class="blockquote">
                                        <p class="mt-2">
                                                Transform your device into a virtual Bluetooth keyboard and mouse – no extra bloatware!
                                                Turn your Android device into a remote keyboard and mouse for your smartphone, tablet, computer, or Android TV.
                                        </p>
                                        </blockquote>
                                        <div class="d-flex flex-row-reverse">
                                                <a class="btn btn-link mr-2" href="{{URL('privacy-policy/mouse-and-keyboard')}}">View privacy policy <i class="fas fa-angle-right"></i></a>
                                        </div>
                                </div>
                        </div>
                </div>
                <div class="col-sm-12 col-md-6">
                        <div class="my-3">
                                <div class="jumbotron">
                                        <p class="lead"><span class="text-primary lead mr-2">Last Updated</span> November 01, 2025</p>
                                        <div class="d-flex flex-row align-items-center">
                                                <img src="{{ URL('images/api_client_icon.png') }}" style="height: 84px; width: 84px;" alt="" class="img-thumbnail rounded-circle p-0 m-0">
                                                <h1 class="ml-3">API Client</h1>
                                        </div>
                                        <p class="lead">
                                                An easy-to-use API Client app for testing REST APIs.
                                        </p>
                                        <hr class="my-4">
                                        <blockquote class="blockquote">
                                        <p class="mt-2">
                                                An easy-to-use API Client app for testing REST APIs. Quickly build and send HTTP requests with custom parameters. 
                                                View detailed responses including status codes and body.Ideal for debugging, learning, and experimenting with APIs.
                                        </p>
                                        </blockquote>
                                        <div class="d-flex flex-row-reverse">
                                                <a class="btn btn-link mr-2" href="{{URL('privacy-policy/api-client')}}">View privacy policy <i class="fas fa-angle-right"></i></a>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
        
@endsection
