<nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="/">{{config('app.name', 'Patient')}}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/services">Services</a>
            </li>
            <li class="nav-item">
                    <a class="nav-link" href="/posts">Patient</a>
            </li>
          
            
          </ul>
          <ul class="navbar navbar-nav navbar-right">
              <li><a href="/posts/create">Add New Patient</a></li>
          </ul>
        </div>
      </nav>