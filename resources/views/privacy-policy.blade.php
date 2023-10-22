@extends('layouts.app')

@section('content')
        <div class="container">
                <div class="row">
                        <div class="col-sm-12">
                                <div class="jumbotron mt-5">
                                        <div class="d-flex flex-row align-items-center">
                                                <img src="{{ URL('images/forward_message_icon.webp') }}" style="height: 84px; width: 84px;" alt="" class="img-thumbnail rounded-circle p-0 m-0">
                                                <h1 class="display-4 ml-3">Forward Message</h1>
                                        </div>
                                        <p class="lead">Privacy Policy for Forward Message i.e. SMS and Notification Forwarding App</p>
                                        <p class="lead">Last Updated: 2023.10.17</p>
                                        <hr class="my-4">
                                        <blockquote class="blockquote">
                                                <p>This Privacy Policy outlines how Forward Message collects, uses, and protects information gathered from users of our SMS and Notification Forwarding App (Forward Message). By using the App, you agree to the practices described in this Privacy Policy.
                                                </p>
                                        </div>
                                </div>
                        </div>
                        <div class="col-sm-12">
                                <ul class="list-unstyled mx-2">
                                        <li class="media">
                                                <div class="media-body">
                                                        <h5 class="mt-0 mb-1">1. Information App Collects</h5>
                                                        <div class="col-sm-12 mt-3">
                                                                <div class="list-group">
                                                                        <p class="list-group-item list-group-item-action bg-secondary text-light my-0">
                                                                        1.1 : Information You Provide
                                                                        </p>
                                                                        <div class="list-group-item list-group-item-action">
                                                                                <p>App may collect and store the following information that you provide us when you use the App:</p>
                                                                        </div>
                                                                        <div class="list-group-item list-group-item-action">
                                                                                <p class="breadcrumb">Email Address or Phone Number:</p>
                                                                                <p class="mx-3">To set up SMS and notification forwarding, you will be required to enter an email address or phone number to which you want to forward SMS messages and notifications. These details will be saved locally in your device. If you choose to uninstall the app or clear cache from app, these collected information will be lost permanently.</p>
                                                                        </div>
                                                                        <div class="list-group-item list-group-item-action">
                                                                                <p class="breadcrumb">Permission:</p>
                                                                                <p class="mx-3">The App may request access to these permissions, and/or device features necessary for forwarding SMS messages and notifications.</p>
                                                                                <div class="mx-3">
                                                                                        <table class="table table-hover table-bordered table.responsive">
                                                                                                <thead class="bg-secondary text-light">
                                                                                                        <tr>
                                                                                                                <th scope="col">Permission</th>
                                                                                                                <th scope="col">Mandatory</th>
                                                                                                                <th scope="col">Description</th>
                                                                                                        </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                        <tr>
                                                                                                                <th scope="row">Post Notification</th>
                                                                                                                <td>No</td>
                                                                                                                <td>If permission is granted app will push a notification stating received message has been forwarded successfully.</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                                <th scope="row">Receive SMS</th>
                                                                                                                <td>No</td>
                                                                                                                <td>If permission is granted app will start receiving incoming SMS. These received SMS will be forwarded and rejected based on forward information available in settings, which can be added and updated as desired by user.</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                                <th scope="row">Read Contacts</th>
                                                                                                                <td>No</td>
                                                                                                                <td>If permission is granted app will have access to the device contacts. Access to the contact will provide convenience during creation of group to add group members directly from available contacts on device. These group can be utilized to only handle the message received from and only forward incoming message or notification to these groups.</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                                <th scope="row">Read Phone State & Read Phone Numbers</th>
                                                                                                                <td>No</td>
                                                                                                                <td>If permission is granted app can access the available inserted SIM’s in the device. From available SIM’s user can select their preferred SIM that will be used to forward the incoming message or notification.</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                                <th scope="row">Send SMS</th>
                                                                                                                <td>No</td>
                                                                                                                <td>If permission is granted incoming messages or notifications can only be forwarded to another phone number. Still you can choose to forward these incoming messages or notifications to email contact.</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                                <th scope="row">Location</th>
                                                                                                                <td>No</td>
                                                                                                                <td>If permission is granted app can only redirect you provide access to background location as well. Access to current location will provide the user with convenience to locate themselves in the google map as well.</td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                                <th scope="row">Background Location</th>
                                                                                                                <td>No</td>
                                                                                                                <td>If permission is granted user can enable the messaging location. Messages and notification will only be forwarded if the user device in within the radius of 150 Meters from this location. App makes use of Google’s geofence api to track whether user has reached or exited from this location.</td>
                                                                                                        </tr>
                                                                                                </tbody>
                                                                                        </table>
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
                                        </li>
                                </ul>
                        </div>
                        <div class="col-sm-12">
                                <ul class="list-unstyled mx-2">
                                        <li class="media">
                                                <div class="media-body">
                                                        <h5 class="mt-0 mb-1">2. How I Use Your Information</h5>
                                                        <div class="col-sm-12 mt-3">
                                                                <div class="list-group">
                                                                        <p class="list-group-item list-group-item-action bg-secondary text-light my-0">
                                                                        Information collected may be used for the following purposes:
                                                                        </p>
                                                                        <div class="list-group-item list-group-item-action">
                                                                                <p class="breadcrumb">SMS and Notification Forwarding:</p>
                                                                                <p class="mx-3">App use the email address or phone number you provide to forward SMS messages and notifications from your device.</p>
                                                                        </div>
                                                                        <div class="list-group-item list-group-item-action">
                                                                                <p class="breadcrumb">Improvement and Analysis:</p>
                                                                                <p class="mx-3">App may use your information to enhance the App's functionality, diagnose issues, and analyze usage patterns.</p>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                        </li>
                                </ul>
                        </div>
                         <div class="col-sm-12">
                                <ul class="list-unstyled mx-2">
                                        <li class="media">
                                                <div class="media-body">
                                                        <h5 class="mt-0 mb-1">3. Data Security</h5>
                                                        <div class="col-sm-12 mt-3">
                                                                <div class="list-group">
                                                                        <p class="list-group-item list-group-item-action bg-secondary text-light my-0">
                                                                                App don’t collect or transmit any user information. Details inputted by user regarding group, message filter, work details, and preferred messaging sim will be saved locally in your device. If you choose to uninstall the app or clear cache from app, these collected information will be lost permanently. I employ reasonable measures to safeguard the information you provide against unauthorized access, disclosure, alteration, or destruction. Nevertheless, no method of transmission over the internet while forwarding your message/notification or electronic storage is 100% secure, and I cannot guarantee the absolute security of your data.
                                                                        </p>
                                                                </div>
                                                        </div>
                                                </div>
                                        </li>
                                </ul>
                        </div>
                        <div class="col-sm-12">
                                <ul class="list-unstyled mx-2">
                                        <li class="media">
                                                <div class="media-body">
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
                                        </li>
                                </ul>
                        </div>
                        <div class="col-sm-12">
                                <ul class="list-unstyled mx-2">
                                        <li class="media">
                                                <div class="media-body">
                                                        <h5 class="mt-0 mb-1">5. Your Choices</h5>
                                                        <div class="col-sm-12 mt-3">
                                                                <div class="list-group">
                                                                        <p class="list-group-item list-group-item-action bg-secondary text-light my-0">
                                                                                You can manage your data by updating your device settings, app settings and permissions. Clearing the app cache will permanently delete the collected data and can be updated from app settings. You may also contact me at dev.sunpra@gmail.com to inquire about the data that app has collected and how they can be deleted.
                                                                        </p>
                                                                </div>
                                                        </div>
                                                </div>
                                        </li>
                                </ul>
                        </div>
                        <div class="col-sm-12">
                                <ul class="list-unstyled mx-2">
                                        <li class="media">
                                                <div class="media-body">
                                                        <h5 class="mt-0 mb-1">6. Changes to this Privacy Policy</h5>
                                                        <div class="col-sm-12 mt-3">
                                                                <div class="list-group">
                                                                        <p class="list-group-item list-group-item-action bg-secondary text-light my-0">
                                                                                I may update this Privacy Policy to reflect changes in our practices or for other operational, legal, or regulatory reasons. I will notify you of any changes by posting the new Privacy Policy on this page.
                                                                        </p>
                                                                </div>
                                                        </div>
                                                </div>
                                        </li>
                                </ul>
                        </div>
                        <div class="col-sm-12">
                                <ul class="list-unstyled mx-2">
                                        <li class="media">
                                                <div class="media-body">
                                                        <h5 class="mt-0 mb-1">7. Contact Us</h5>
                                                        <div class="col-sm-12 mt-3">
                                                                <div class="list-group">
                                                                        <p class="list-group-item list-group-item-action bg-secondary text-light my-0">
                                                                                If you have any questions or concerns about this Privacy Policy or our data practices, please contact me at dev.sunpra@gmail.com.
                                                                        </p>
                                                                </div>
                                                        </div>
                                                </div>
                                        </li>
                                </ul>
                        </div>
                </div>
        </div>
@endsection