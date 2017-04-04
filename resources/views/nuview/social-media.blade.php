@extends('layouts.default')
@section('content')
    <h1>Sharing on Social Media</h1>

    <div class="card">
        <div class="header">
            <h2>What is Buffer?</h2>
        </div>
        <div class="body">
            <p>Buffer is a powerful app that allows a user to post to all social media accounts at once and schedule them at any time.</p>
        </div>
    </div>

    <div class="card">
        <div class="header">
            <h2>Posting to Social Media from WordPress</h2>
        </div>
        <div class="body">
            <ul>
                <li>Ensure you are logged into <a href="https://buffer.com/" target="_blank">Buffer</a> and all accounts are linked properly.</li>
                <li>From the WordPress admin, click the Buffer button to share a post.<br>
                    <img src="{{url('/img/nuviewnutrition/buffer-button-wordpress.png')}}" class="img-responsive" alt="Buffer Button"></li>
                <li>In the popup, fill out everything as needed and choose which accounts to share the post to.</li>
                <li>Click Add to Queue. Or click the arrow next to it to Share Next, Share Now, or Schedule Post.</li>
            </ul>
            <p>Note: You can also share things to social media from within <a href="https://buffer.com/" target="_blank">Buffer's website</a>.</p>
        </div>
    </div>

    <div class="card">
        <div class="header">
            <h2>Social Media Do's and Don'ts</h2>
        </div>
        <div class="body">
            <ul>
                <li>Do, if possible, always link back to the Nuview Nutrition website.</li>
                <li>Don't link from one social media page to another.</li>
                <li>Do always use an image in a social media post. (Required for Instagram)</li>
            </ul>
        </div>
    </div>

@stop
