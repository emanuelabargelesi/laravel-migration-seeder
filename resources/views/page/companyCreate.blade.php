<a href="{{ route('company.index') }}">BACK</a>
  <div class="edit">
    <form method="post" action="{{ route('company.store') }}">
      @csrf
      @method('POST')
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" value="">
      </div>
      <div class="form-group">
        <label for="phone">Phone</label>
        <input type="text" name="phone" value="">
      </div>
      <div class="form-group">
        <label for="mail">Mail</label>
        <input type="text" name="mail" value="">
      </div>
      <div class="form-group">
        <label for="website">Website</label>
        <input type="text" name="website" value="">
      </div>
      <button type="submit">Save</button>
    </form>
  </div>