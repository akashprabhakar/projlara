<div class="container">
            <div id="splitlayout" class="splitlayout">
                <div class="intro">
                    <div class="side side-left">
                        <div class="intro-content">
                            <div class="profile"><span class="glyphicon glyphicon-hourglass"></div>
                            <h1><span>Track Lara</span><span></span></h1>
                            <p class="para-text">Track Lara is a tracker ,which helps the developer to track their work day-by-day and help them store and also retrieve the work done by them. </p>
                            
                        </div>
                        <div class="overlay"></div>
                    </div>
                    <div class="side side-right">
                        <div class="intro-content1 effect-8">
                            @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
