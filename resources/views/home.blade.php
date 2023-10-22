@extends('layouts.app')

@section('content')

        <div class="row">
                <div class="col-sm-12 col-md-6">
                        <div class="jumbotron m-5">
                                <p class="lead"><span class="text-primary lead mr-2">Last Updated</span> 2023.10.17</p>
                                <div class="d-flex flex-row align-items-center">
                                        <img src="{{ URL('images/forward_message_icon.webp') }}" style="height: 84px; width: 84px;" alt="" class="img-thumbnail rounded-circle p-0 m-0">
                                        <h1 class="display-4 ml-3">Forward Message</h1>
                                </div>
                                <p class="lead">Forward Message i.e. SMS and Notification Forwarding App</p>
                        
                                <hr class="my-4">
                                <blockquote class="blockquote">
                                <p>This application functions by forwarding messages and/or notifications received on your device through either your Gmail account or a provided SMTP server. You have the flexibility to configure these mailing details, specifying what content to forward and the timing for forwarding through the settings.
                                </p>
                                <div class="d-flex flex-row-reverse">
                                        <a class="btn btn-link mr-2" href="{{URL('privacy-policy/forward-message')}}">View privacy policy <i class="fas fa-angle-right"></i></a>
                                </div>
                        </div>
                </div>
        </div>

        
@endsection
