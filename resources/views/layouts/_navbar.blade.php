<nav class="navbar navbar-primary navbar-absolute">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#living-wage-navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('') }}">LWG</a>
        </div>

        <div class="collapse navbar-collapse" id="living-wage-navigation">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ url('') }}">Главная</a></li>
                <li><a href="{{ url('about') }}">О проекте</a></li>
                <li><a href="{{ url('team') }}">Команда</a></li>
            </ul>
        </div>
    </div>
</nav>