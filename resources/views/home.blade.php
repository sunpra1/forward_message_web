@extends('layouts.app')

@section('content')

        <div class="row">
                <div class="col-sm-12 col-md-6">
                        <div class="my-3">
                                <div class="jumbotron">
                                        <p class="lead"><span class="text-primary lead mr-2">Last Updated</span> 2023.11.01</p>
                                        <div class="d-flex flex-row align-items-center">
                                                <img src="{{ URL('images/notification_forward_icon.png') }}" style="height: 84px; width: 84px;" alt="" class="img-thumbnail rounded-circle p-0 m-0">
                                                <h1 class="ml-3">Notification Forward</h1>
                                        </div>
                                        <p class="lead">Notification Forward i.e. Notification Forwarding App</p>
                                
                                        <hr class="my-4">
                                        <blockquote class="blockquote">
                                        <p>This application operates by forwarding notifications received on the device through either logged in Gmail account or a provided SMTP server details. To achieve this, the app reads incoming notifications on user device. This application provides its users the flexibility to configure the mailing details, using which application forwards incoming notification to mail. Moreover, the app provides you with control over the content and timing for forwarding through its settings.
                                        </p>
                                        <div class="d-flex flex-row-reverse">
                                                <a class="btn btn-link mr-2" href="{{URL('privacy-policy/notification-forward')}}">View privacy policy <i class="fas fa-angle-right"></i></a>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
        
@endsection
