@extends('layouts.default')
@section('content')
    <h1>Writing a Post</h1>

    <div class="card">
        <div class="header">
            <h2>Writing a Post</h2>
        </div>
        <div class="body">
            <ol>
                <li>Log into the WordPress Admin</li>
                <li>Click on Posts then Add New.
                    <ul>
                        <li>Also accessible by clicking <a href="https://www.nuviewnutrition.com/wp-admin/post-new.php" target="_blank">here</a>
                    </ul></li>
                <li>Write the post and follow the guidelines <a href="{{url('/nuviewnutrition/dos-and-donts')}}">here</a>.</li>
                <li>Add a featured image.
                    <ul>
                        <li>The featured image must be at least 200px x 200px</li>
                    </ul>
                </li>
                <li>Click the Publish button</li>
            </ol>
        </div>
    </div>

    <div class="card">
        <div class="header">
            <h2>Adding a Class</h2>
        </div>
        <div class="body">
            <ol>
                <li>Follow the steps above.</li>
                <li>Add the Class date in the Event Dates section.
                    <ul>
                        <li>The time is in a 24 hour format.</li>
                        <li>If there is more than one time, click Repeat and add the 2nd date.</li> 
                    </ul></li>
                <li>Change the Category of the post to Class.</li>
            </ol>
        </div>
    </div>

@stop