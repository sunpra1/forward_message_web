@extends('layouts.app')

@section('content')

        <div class="row">
                <div class="col-sm-12 col-md-12">
                        <div class="my-3">
                                <div class="jumbotron">
                                        <p class="lead"><span class="text-primary lead mr-2">Last Updated</span> June 23, 2024</p>
                                        <div class="d-flex flex-row align-items-center">
                                                <img src="{{ URL('images/notification_forward_icon.png') }}" style="height: 84px; width: 84px;" alt="" class="img-thumbnail rounded-circle p-0 m-0">
                                                <h1 class="ml-3">Notification Forward</h1>
                                        </div>
                                        <p class="lead">Forward Notification i.e. Notification Forwarding App</p>
                                        <hr class="my-4">
                                        <blockquote class="blockquote">
                                        <p class="mt-2">This application operates by forwarding/transferring notifications received on the device through logged in Gmail account or a provided SMTP server details. To achieve this, the app reads incoming notifications, read phone state, and call logs on user device. For the purpose of forwarding these incoming notifications and missed calls via email, app provides the users with option to configure the mailing details. Moreover, the app provides users with control over the content and timing of forwarding through its settings.
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
