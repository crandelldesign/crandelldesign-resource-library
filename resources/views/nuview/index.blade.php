@extends('layouts.default')
@section('content')
    <h1>Nuview Nutrition</h1>

    <div class="card">
        <div class="header">
            <h2>Style Guide</h2>
        </div>
        <div class="body">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Color Palette</h1>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="color-swatch swatch1">
                                Crimson<br>
                                #ed1c24
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="color-swatch swatch2">
                                Carnation<br>
                                #f36368
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="color-swatch swatch3">
                                Shiraz<br>
                                #af0e14
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="color-swatch swatch4">
                                Malachite<br>
                                #0bb957
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="color-swatch swatch5">
                                Spring Geen<br>
                                #1ff27b
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="color-swatch swatch6">
                                Salem<br>
                                #077135
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h1>Buttons</h1>

                    <button class="btn btn-lg btn-crimson margin-bottom-10">This is a large button</button>&nbsp;

                    <div class="visible-xs-block margin-bottom-10"></div>

                    <button class="btn btn-salem">This is another smaller button</button>

                    <hr class="visible-xs-block">

                </div>
                <div class="col-sm-6">
                    <h1>Typography</h1>

                    <h1>Heading 1</h1>
                    <p class="details">Font: Poppins Semibold / Shiraz #592d2f</p>

                    <hr>

                    <h2>Heading 2</h2>
                    <p class="details">Font: Poppins Semibold / Salem #2a4e3a</p>

                    <hr>

                    <h3>Heading 3</h3>
                    <p class="details">Font: Poppins Medium / Dark Burgundy #252525</p>

                    <hr>

                    <p>Body Text</p>
                    <p>Lorem ipsum dolor sit amet, quis quam, fusce duis. Montes vestibulum esse, tristique dui lorem. Wisi cubilia. Nonummy justo, eros aliquet elit, nulla sollicitudin ut. Iaculis sit lacus, nisi orci nunc, pede convallis vestibulum.</p>
                    <p>Sed tellus. Posuere est quis, lacus sit nec. Ultricies vehicula arcu, nunc nonummy id. Vivamus odio neque, faucibus duis. Non diam amet, elit nec semper.</p>

                    <p><a href="#">This is a link</a> - <a href="#" class="hover">This is a hover link</a></p>

                    <p class="details">Font: Poppins 300 #252525</p>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <h1>Logo Downloads</h1>
                    <p><a class="btn btn-default" href="{{url('/')}}/img/nuviewnutrition/logos/nuview-nutrition-logo-jpg.jpg" download="Nuview Nutrition Logo">.JPG</a><br>
                        <small>Used for web use or in programs such as Microsoft Word. Has a white background.</small></p>
                    <p><a class="btn btn-default" href="{{url('/')}}/img/nuviewnutrition/logos/nuview-nutrition-logo-png.png" download="Nuview Nutrition Logo">.PNG</a><br>
                        <small>Used for web use or in programs such as Microsoft Word. Has a transparent background.</small></p>
                    <p><a class="btn btn-default" href="{{url('/')}}/img/nuviewnutrition/logos/nuview-nutrition-logo-eps.eps" download="Nuview Nutrition Logo">.EPS</a><br>
                        <small>Used for printing on large items such as posters. Has a transparent background.</small></p>
                    <p><a class="btn btn-default" href="{{url('/')}}/img/nuviewnutrition/logos/nuview-nutrition-logo-ai.ai" download="Nuview Nutrition Logo">.AI</a><br>
                        <small>Used for printing on large items such as posters. Has a transparent background.</small></p>
                    <p><a class="btn btn-default" href="{{url('/')}}/img/nuviewnutrition/logos/nuview-nutrition-logo-svg.svg" download="Nuview Nutrition Logo">.SVG</a><br>
                        <small>Used for printing on large items such as posters. Has a transparent background.</small></p>
                    <p><a class="btn btn-default" href="{{url('/')}}/img/nuviewnutrition/logos/nuview-nutrition-logo-pdf.pdf" download="Nuview Nutrition Logo">.PDF</a><br>
                        <small>Used for printing on large items such as posters. Has a transparent background.</small></p>
                </div>
            </div>
        </div>
    </div>

@stop
