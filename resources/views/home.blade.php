@extends('layouts.app')

@section('content')

        <div class="row">
                <div class="col-sm-12 col-md-6">
                        <div class="my-3">
                                <div class="jumbotron">
                                        <p class="lead"><span class="text-primary lead mr-2">Last Updated</span> 2024.04.01</p>
                                        <div class="d-flex flex-row align-items-center">
                                                <img src="{{ URL('images/notification_forward_icon.png') }}" style="height: 84px; width: 84px;" alt="" class="img-thumbnail rounded-circle p-0 m-0">
                                                <h1 class="ml-3">Notification Forward</h1>
                                        </div>
                                        <p class="lead">Forward Notification i.e. SMS and/or Notification Forwarding App</p>
                                
                                        <hr class="my-4">
                                        <blockquote class="blockquote">
                                        <p>This application operates by forwarding/transferring messages and notifications received on the device through either SMS or logged in Gmail account or a provided SMTP server details. To achieve this, the app reads incoming SMS  and notifications on user device. If you opt to forward/transfer these incoming messages to other phone numbers, please be aware that your carrier may impose charges based on their usage policy for sending SMS to these phone numbers. Further, if you choose to forward/transfer these incoming messages and notifications via email, you have the flexibility to configure the email details. Moreover, the app provides you with control over the content and timing for forward/transfer through its settings.
                                        </p>
                                        <div class="d-flex flex-row-reverse">
                                                <a class="btn btn-link mr-2" href="{{URL('privacy-policy/notification-forward')}}">View privacy policy <i class="fas fa-angle-right"></i></a>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
        
@endsection
