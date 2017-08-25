@if(count($errors))
  <div class="row">
    <div class="col s12">
      <div class="card transparent">
        <div class="card-content red-text">
          <p>
            @foreach($errors->all() as $error)
            {{ $error }} <br>
            @endforeach
          </p>
        </div> 
      </div>
    </div>
  </div>
@endif
