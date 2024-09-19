@extends('layouts.app')

@section('content')
        <div class="container">
                <div class="row">
                        <div class="col-sm-12">
                                <div class="jumbotron mt-5">
                                        <div class="d-flex flex-row align-items-center">
                                                <img src="{{ URL('images/mouse_and_keyboard_icon.png') }}" style="height: 84px; width: 84px;" alt="" class="img-thumbnail rounded-circle p-0 m-0">
                                                <h1 class="ml-3">Mouse & Keyboard</h1>
                                        </div>
                                        <p class="lead mt-3">About:</p>
                                        <p class="mt-2">
                                                Transform your device into a virtual Bluetooth keyboard and mouse – no extra bloatware!
                                                Turn your Android device into a remote keyboard and mouse for your smartphone, tablet, computer, or Android TV.
                                        </p>
                                        <hr class="my-4">
                                        <p class="lead">Privacy Policy for Mouse & Keyboard</p>
                                        <p class="lead">Last Updated: Sep 01, 2024</p>
                                        <blockquote class="blockquote">
                                                <p>This Privacy Policy outlines how Mouse & Keyboard collects, uses, and protects information gathered from users. By using the App, you agree to the practices described in this Privacy Policy.
                                                </p>
                                        </blockquote>
                                        </div>
                                </div>
                        </div>
                        <div class="col-sm-12 mt-4">
                                <h5 class="mt-0 mb-1">1. Information App Collects</h5>
                                <div class="mt-3">
                                        <div class="list-group">
                                                <p class="list-group-item list-group-item-action bg-secondary text-light my-0">
                                                1.1 : Permission
                                                </p>
                                                <div class="list-group-item list-group-item-action">
                                                        <p>The app may request access to these permissions and device features necessary for controlling your device's Bluetooth.
                                                                <br><span class="text-info">App respects your privacy and is committed for safeguarding your data. App does not share this information with third parties, and it is used solely to enhance your app experience.</span>
                                                        </p>
                                                </div>
                                               
                                                <div class="list-group-item list-group-item-action">
                                                        <div class="mx-3">
                                                                <div class="w-100 card">
                                                                        <p class="breadcrumb"><span class="text-danger">Bluetooth, Bluetooth Advertise, Bluetooth Connect, and Bluetooth Scan</span></p>
                                                                        <div class="card-body">
                                                                                <p class="card-title">Is Mandatory : <span class="text-success">YES</span></p>
                                                                                <p class="card-text">
                                                                                        With these permissions, the app can connect to a remote host device and transmit user inputs, such as mouse movements and keyboard commands, to the host.
                                                                                </p>
                                                                        </div>
                                                                </div>
                                                                <div class="w-100 card mt-3">
                                                                        <p class="breadcrumb"><span class="text-danger">Location</span></p>
                                                                        <div class="card-body">
                                                                                <p class="card-title">Is Mandatory : <span class="text-success">YES</span></p>
                                                                                <p class="card-text">
                                                                                        This location permission is used by the Bluetooth hardware to detect and identify nearby devices.
                                                                                </p>
                                                                        </div>
                                                                </div>
                                                                <div class="w-100 card mt-3">
                                                                        <p class="breadcrumb"><span class="text-danger">Wake Loack</span></p>
                                                                        <div class="card-body">
                                                                                <p class="card-title">Is Mandatory : <span class="text-success">NO</span></p>
                                                                                <p class="card-text">If permission is granted, the app will be able to acquire a scroll lock to prevent the screen from turning off.</p>
                                                                        </div>
                                                                </div>

                                                                <div class="w-100 card mt-3">
                                                                        <p class="breadcrumb"><span class="text-danger">Vibrate</span></p>
                                                                        <div class="card-body">
                                                                                <p class="card-title">Is Mandatory : <span class="text-success">NO</span></p>
                                                                                <p class="card-text">If permission is granted, the app will provide haptic feedback during interactions.</p>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                                <p class="list-group-item list-group-item-action bg-secondary text-light my-0">
                                                1.2 : Automatically Collected Information
                                                </p>
                                                <div class="list-group-item list-group-item-action">
                                                        <p>App may also collect certain information automatically when you use it, which may include:</p>
                                                </div>
                                                <div class="list-group-item list-group-item-action">
                                                        <p class="breadcrumb">Device Information:</p>
                                                        <p class="mx-3">App may collect information about the type of device you use to access the App, such as your device's model, and operating system using firebase crash analytics. This is useful to track any errors in the app and fix them.</p>
                                                </div>
                                                <div class="list-group-item list-group-item-action">
                                                        <p class="breadcrumb">Log Information:</p>
                                                        <p class="mx-3">When you use the App, App may collect log information, including the time and date of crash and crash reports. This is also useful to track any errors in the app and fix them.</p>
                                                </div>
                                        </div>
                                </div>
                        </div>
                         <div class="col-sm-12 mt-4">
                               <h5 class="mt-0 mb-1">3. Data Security</h5>
                                <div class="col-sm-12 mt-3">
                                        <div class="list-group">
                                                <p class="list-group-item list-group-item-action bg-secondary text-light my-0">
                                                        App don’t collect or transmit any user information. Your preference and setting will be saved locally in your device. If you choose to uninstall the app or clear cache from app, these collected information will be lost permanently. I employ reasonable measures to safeguard the information you provide against unauthorized access, disclosure, alteration, or destruction.
                                                </p>
                                        </div>
                                </div>
                        </div>
                        <div class="col-sm-12 mt-4">
                               <h5 class="mt-0 mb-1">4. Sharing Your Information</h5>
                                <div class="col-sm-12 mt-3">
                                        <div class="list-group">
                                                <p class="list-group-item list-group-item-action bg-secondary text-light my-0">
                                                        Even If asked by third parties I am not capable of sharing any information that I know of as app don’t collect any. Even if I am capable of sharing any information, I don’t share your information except as follows:
                                                </p>
                                                <div class="list-group-item list-group-item-action">
                                                        <p class="breadcrumb">With Your Consent:</p>
                                                        <p class="mx-3">I may share your information with third parties if you explicitly grant us permission to do so.</p>
                                                </div>
                                                <div class="list-group-item list-group-item-action">
                                                        <p class="breadcrumb">For Legal Reasons:</p>
                                                        <p class="mx-3">I may share your information in response to a legal obligation, court order, or government request.</p>
                                                </div>
                                                <div class="list-group-item list-group-item-action">
                                                        <p class="breadcrumb">To Protect Our Rights:</p>
                                                        <p class="mx-3">I may share your information if I believe that doing so is necessary to protect our rights or the safety of our users.</p>
                                                </div>
                                        </div>
                                </div>
                        </div>
                        <div class="col-sm-12 mt-4">
                                <h5 class="mt-0 mb-1">5. Your Choices</h5>
                                <div class="col-sm-12 mt-3">
                                        <div class="list-group">
                                                <p class="list-group-item list-group-item-action bg-secondary text-light my-0">
                                                        You can manage your data by updating your device settings, app settings and permissions. Clearing the app cache will permanently delete the collected data and can be updated from app settings. You may also contact me at dev.sunpra@gmail.com to inquire about the data that app has collected and how they can be deleted.
                                                </p>
                                        </div>
                                </div>
                        </div>
                        <div class="col-sm-12 mt-4">
                                <h5 class="mt-0 mb-1">6. Changes to this Privacy Policy</h5>
                                <div class="col-sm-12 mt-3">
                                        <div class="list-group">
                                                <p class="list-group-item list-group-item-action bg-secondary text-light my-0">
                                                        I may update this Privacy Policy to reflect changes in our practices or for other operational, legal, or regulatory reasons. I will notify you of any changes by posting the new Privacy Policy on this page.
                                                </p>
                                        </div>
                                </div>
                        </div>
                        <div class="col-sm-12 mt-4">
                                <h5 class="mt-0 mb-1">7. Contact Us</h5>
                                <div class="col-sm-12 mt-3">
                                        <div class="list-group">
                                                <p class="list-group-item list-group-item-action bg-secondary text-light my-0">
                                                        If you have any questions or concerns about this Privacy Policy or our data practices, please contact me at dev.sunpra@gmail.com.
                                                </p>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
@endsection