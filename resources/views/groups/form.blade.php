

<form class="row g-3" action="{{ $action }}" method="post">
    @csrf
    @method($method)
  <div class="col-auto">
    <!-- <label for="inputPassword2"></label> -->
    <input name="name" type="text" class="form-control" id="inputPassword2" placeholder="Имя группы" value="{{isset($group) ? $group->name : ' '}}">
  </div>
  <div class="col-auto">
    <!-- <label for="inputPassword2"></label> -->
    <input name="leader" type="text" class="form-control" id="inputPassword2" placeholder="Имя старосты" value="{{isset($group) ? $group->leader : ' '}}">
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Воздать группу!1!</button>
  </div>
</form

