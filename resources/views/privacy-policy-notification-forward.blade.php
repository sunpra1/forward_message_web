@extends('layouts.app')

@section('content')
        <div class="container">
                <div class="row">
                        <div class="col-sm-12">
                                <div class="jumbotron mt-5">
                                        <div class="d-flex flex-row align-items-center">
                                                <img src="{{ URL('images/notification_forward_icon.png') }}" style="height: 84px; width: 84px;" alt="" class="img-thumbnail rounded-circle p-0 m-0">
                                                <h1 class="ml-3">Notification Forward</h1>
                                        </div>
                                        <p class="lead mt-3">About:</p>
                                        <p class="mt-2">This application operates by forwarding/transferring notifications received on the device through logged in Gmail account or a provided SMTP server details. To achieve this, the app reads incoming notifications on user device. For the purpose of forwarding these incoming notifications via email, app provides the users with option to configure the mailing details. Moreover, the app provides users with control over the content and timing of forwarding through its settings.
                                        </p>
                                        <hr class="my-4">
                                        <p class="lead">Privacy Policy for Notification Forward i.e. Notification Forwarding App</p>
                                        <p class="lead">Last Updated: June 23, 2024</p>
                                        <blockquote class="blockquote">
                                                <p>This Privacy Policy outlines how Notification Forward collects, uses, and protects information gathered from users of our Notification Forwarding App (Notification Forward). By using the App, you agree to the practices described in this Privacy Policy.
                                                </p>
                                        </blockquote>
                                        </div>
                                </div>
                        </div>
                        <div class="col-sm-12 mt-4">
                                <h5 class="mt-0 mb-1">1. Privacy Policy for Accessing Gmail Send Mail Scope Using Google OAuth2.</h5>
                                <div class="mt-3">
                                        <div class="list-group">
                                                <p class="list-group-item list-group-item-action bg-secondary text-light my-0">
                                                This policy outlines how our application accesses, uses, stores, and shares Google user data when granted access to the Google Send Mail scope Using Google OAuth2.
                                                </p>
                                                <div class="list-group-item list-group-item-action">
                                                        <p class="breadcrumb">Information App Access:</p>
                                                        <div class="mx-3">
                                                            <p class="mx-3">When you use this app, it request access to your Gmail account to send emails on your behalf. This access is limited to the Gmail Send Mail Scope, which allows app to:</p>
                                                            <ul>
                                                                <li>
                                                                    <p class="text-info mx-4">Compose and send emails from your Gmail account.</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                </div>
                                                <div class="list-group-item list-group-item-action">
                                                        <p class="breadcrumb">How App Use Your Information:</p>
                                                        <div class="mx-3">
                                                            <p class="mx-3">App use the information accessed through the Gmail Send Mail Scope solely for the purpose of sending emails as per your instructions. Specifically, app:</p>
                                                            <ul>
                                                                <li>
                                                                    <p class="text-info mx-4">Send emails of notification details that your device receives through this application.</p>
                                                                </li>
                                                                <li>
                                                                   <p class="text-info mx-4">Use your Gmail account's "send" functionality to ensure the emails appear as sent from your Gmail account.</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                </div>
                                                <div class="list-group-item list-group-item-action">
                                                        <p class="breadcrumb">Data Storage and Security:</p>
                                                        <div class="mx-3">
                                                            <p class="mx-3">App takes your privacy seriously and employ appropriate security measures to protect your information. App:</p>
                                                            <ul>
                                                                <li>
                                                                    <p class="text-info mx-4">Do not store your emails or any other content from your Gmail account on our servers.</p>
                                                                </li>
                                                                <li>
                                                                   <p class="text-info mx-4">Use secure protocols to transmit data and ensure that your information is protected during transmission.</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                </div>
                                                <div class="list-group-item list-group-item-action">
                                                        <p class="breadcrumb"> Data Sharing:</p>
                                                        <div class="mx-3">
                                                            <p class="mx-3">App do not share your Google user data with third parties except:</p>
                                                            <ul>
                                                                <li>
                                                                    <p class="text-info mx-4">As necessary to comply with applicable laws, regulations, or legal processes.</p>
                                                                </li>
                                                                <li>
                                                                   <p class="text-info mx-4">To protect the rights, property, or safety of our users or the public.</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                        <div class="col-sm-12 mt-4">
                                <h5 class="mt-0 mb-1">2. Information App Collects</h5>
                                <div class="mt-3">
                                        <div class="list-group">
                                                <p class="list-group-item list-group-item-action bg-secondary text-light my-0">
                                                2.1 : Information You Provide
                                                </p>
                                                <div class="list-group-item list-group-item-action">
                                                        <p>App may collect and store the following information that you provide us when you use the App:</p>
                                                </div>
                                                <div class="list-group-item list-group-item-action">
                                                        <p class="breadcrumb">Email Address:</p>
                                                        <p class="mx-3">To set up notification forwarding, you will be required to enter an email address to which you want to forward notifications. These details will be saved locally in your device. If you choose to uninstall the app or clear cache from app, these collected information will be lost permanently.</p>
                                                </div>
                                                <div class="list-group-item list-group-item-action">
                                                        <p class="breadcrumb">Permission:</p>
                                                        <p class="mx-3">The App may request access to these permissions, and/or device features necessary for forwarding notifications.
                                                                <br><span class="text-info">App respects your privacy and is committed for safeguarding your data. App does not share this information with third parties, and it is used solely to enhance your app experience.</span>
                                                        </p>
                                                        <div class="mx-3">
                                                                <div class="w-100 card">
                                                                        <p class="breadcrumb"><span class="text-danger">Query All Packages</span></p>
                                                                        <div class="card-body">
                                                                                <p class="card-title">Is Mandatory : <span class="text-success">NO</span></p>
                                                                                <p class="card-text">Using this permission user can select their preferred application whose notification they want to transfer to mail. The app will solely use the
                                                                                        <span class="text-info"> App Package Name, App Name, and App Icon Image</span> from this permission to assist users in selecting their desired application for this purpose and will not be used inappropriately.</p>
                                                                        </div>
                                                                </div>

                                                                 <div class="w-100 card mt-3">
                                                                        <p class="breadcrumb"><span class="text-danger">Read Notification</span></p>
                                                                        <div class="card-body">
                                                                                <p class="card-title">Is Mandatory : <span class="text-success">NO</span></p>
                                                                                <p class="card-text">If permission is granted app will start capturing incoming notifications in the device. Based on this permission incoming notifications details from the preferred applications can be forwarded.</p>
                                                                        </div>
                                                                </div>

                                                                <div class="w-100 card mt-3">
                                                                        <p class="breadcrumb"><span class="text-danger">Post Notification</span></p>
                                                                        <div class="card-body">
                                                                                <p class="card-title">Is Mandatory : <span class="text-success">NO</span></p>
                                                                                <p class="card-text">If permission is granted app will notify users with information on messaging status and work location geofence status.</p>
                                                                        </div>
                                                                </div>

                                                                <div class="w-100 card mt-3">
                                                                        <p class="breadcrumb"><span class="text-danger">Location</span></p>
                                                                        <div class="card-body">
                                                                                <p class="card-title">Is Mandatory : <span class="text-success">NO</span></p>
                                                                                <p class="card-text">If permission is granted app can only redirect you provide access to background location as well. Access to current location will provide the user with convenience to locate themselves in the google map as well.</p>
                                                                        </div>
                                                                </div>

                                                                 <div class="w-100 card mt-3">
                                                                        <p class="breadcrumb"><span class="text-danger">Background Location</span></p>
                                                                        <div class="card-body">
                                                                                <p class="card-title">Is Mandatory : <span class="text-success">NO</span></p>
                                                                                <p class="card-text">If permission is granted user can enable the messaging location. Notification will only be forwarded if the user device in within the radius of 150 Meters from this location. App makes use of Google’s geofence api to track whether user has reached or exited from this location.</p>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                                <p class="list-group-item list-group-item-action bg-secondary text-light my-0">
                                                2.2 : Automatically Collected Information
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
                               <h5 class="mt-0 mb-1">3. How I Use Your Information</h5>
                                <div class="col-sm-12 mt-3">
                                        <div class="list-group">
                                                <p class="list-group-item list-group-item-action bg-secondary text-light my-0">
                                                Information collected may be used for the following purposes:
                                                </p>
                                                <div class="list-group-item list-group-item-action">
                                                        <p class="breadcrumb">Notification Forwarding:</p>
                                                        <p class="mx-3">App use the email address you provide to forward notifications from your device.</p>
                                                </div>
                                                <div class="list-group-item list-group-item-action">
                                                        <p class="breadcrumb">Improvement and Analysis:</p>
                                                        <p class="mx-3">App may use your information to enhance the App's functionality, diagnose issues, and analyze usage patterns.</p>
                                                </div>
                                        </div>
                                </div>
                        </div>
                         <div class="col-sm-12 mt-4">
                               <h5 class="mt-0 mb-1">4. Data Security</h5>
                                <div class="col-sm-12 mt-3">
                                        <div class="list-group">
                                                <p class="list-group-item list-group-item-action bg-secondary text-light my-0">
                                                        App don’t collect or transmit any user information. Details inputted by user regarding group, message filter, and work details will be saved locally in your device. If you choose to uninstall the app or clear cache from app, these collected information will be lost permanently. I employ reasonable measures to safeguard the information you provide against unauthorized access, disclosure, alteration, or destruction. Nevertheless, no method of transmission over the internet while forwarding your notification or electronic storage is 100% secure, and I cannot guarantee the absolute security of your data.
                                                </p>
                                        </div>
                                </div>
                        </div>
                        <div class="col-sm-12 mt-4">
                               <h5 class="mt-0 mb-1">5. Sharing Your Information</h5>
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
                                <h5 class="mt-0 mb-1">6. Your Choices</h5>
                                <div class="col-sm-12 mt-3">
                                        <div class="list-group">
                                                <p class="list-group-item list-group-item-action bg-secondary text-light my-0">
                                                        You can manage your data by updating your device settings, app settings and permissions. Clearing the app cache will permanently delete the collected data and can be updated from app settings. You may also contact me at dev.sunpra@gmail.com to inquire about the data that app has collected and how they can be deleted.
                                                </p>
                                        </div>
                                </div>
                        </div>
                        <div class="col-sm-12 mt-4">
                                <h5 class="mt-0 mb-1">7. Changes to this Privacy Policy</h5>
                                <div class="col-sm-12 mt-3">
                                        <div class="list-group">
                                                <p class="list-group-item list-group-item-action bg-secondary text-light my-0">
                                                        I may update this Privacy Policy to reflect changes in our practices or for other operational, legal, or regulatory reasons. I will notify you of any changes by posting the new Privacy Policy on this page.
                                                </p>
                                        </div>
                                </div>
                        </div>
                        <div class="col-sm-12 mt-4">
                                <h5 class="mt-0 mb-1">8. Contact Us</h5>
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